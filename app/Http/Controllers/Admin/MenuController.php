<?php
/**
 * + ====================================================================
 * | @author             | Choel
 * + --------------------------------------------------------------------
 * | @e-mail             | choel_wu@foxmail.com
 * + --------------------------------------------------------------------
 * | @copyright          | Choel
 * + --------------------------------------------------------------------
 * | @version            | v-1.0.0
 * + --------------------------------------------------------------------
 * | @information        | 菜单管理
 * + --------------------------------------------------------------------
 * | @create-date        | 2018-07-18
 * + --------------------------------------------------------------------
 * |          | @date    |
 * +  @update + ---------------------------------------------------------
 * |          | @content |
 * + ====================================================================
 */

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Models\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MenuController extends CommonController
{
    /**
     * 菜单列表显示
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $title = ['title' => '菜单管理', 'sub_title' => '菜单列表'];
        $menu_arr = Menu::select('id', 'name', 'level', 'parent_id', 'status', 'sort', 'url', 'icon')->orderBy('sort', 'asc')->get();
        $list = getMenu($menu_arr, 0, 1);
        return view('admin.menu.index', ['menu_list' => $this->setMenu($request), 'list' => $list, 'title' => $title]);
    }

    /**
     * 添加菜单
     * @param Request $request
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add(Request $request)
    {
        $is_ajax = $request->ajax();
        if ($is_ajax) {
            $is_post = $request->isMethod("post");
            if ($is_post) {
                $data = $request->all();
                '0' == $data['parent_id'] ? $data['level'] = '1' : $data['level'] = '2';
                if ($data['level'] <= '2') {
                    $data['id'] = setModelId("Menu");
                    unset($data['_token']);
                    try {
                        $rel = Menu::create($data);
                        if (!empty($rel)) {
                            return $this->returnMessage('success', '菜单添加成功！');
                        }
                    } catch (\Exception $e) {
                        Log::info($e->getMessage());
                    }
                }
            }
            return $this->returnMessage('error', '菜单添加失败！');
        } else {
            $title = ['title' => '菜单管理', 'sub_title' => '添加菜单'];
            $parent_menu_arr = Menu::select('id', 'name', 'level', 'parent_id', 'status', 'sort', 'url', 'icon')->get()->toArray();
            $parent_menu_list = getMenu($parent_menu_arr, 0, 1);
            return view('admin.menu.add', ['menu_list' => $this->setMenu($request), 'parent_menu_list' => $parent_menu_list, 'title' => $title]);
        }
    }

    /**
     * 修改菜单
     * @param Request $request
     * @param string $id
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Request $request, $id = '')
    {
        $is_ajax = $request->ajax();
        if ($is_ajax) {
            $is_post = $request->isMethod("post");
            if ($is_post) {
                $data = $request->all();
                '0' == $data['parent_id'] ? $data['level'] = '1' : $data['level'] = '2';
                $id = $data['id'];
                $menu = Menu::find($id);
                $exist = Menu::where('parent_id', $id)->exists();
                if (!$exist || ($exist && $menu->status == $data['status'])) {
                    unset($data['_token']);
                    unset($data['id']);
                    try {
                        $rel = $menu->update($data);
                        if ($rel) {
                            return $this->returnMessage('success', '菜单修改成功！');
                        }
                    } catch (\Exception $e) {
                        Log::info($e->getMessage());
                    }
                }
            }
            return $this->returnMessage('error', '菜单修改失败！');
        } else {
            $title = ['title' => '菜单管理', 'sub_title' => '修改菜单'];
            $parent_menu_arr = Menu::select('id', 'name', 'level', 'parent_id', 'status', 'sort', 'url', 'icon')->get()->toArray();
            $parent_menu_list = getMenu($parent_menu_arr, 0, 1);
            $menu = Menu::select('id', 'name', 'parent_id', 'sort', 'url', 'sort', 'status', 'icon')->find($id);
            return view('admin.menu.edit', ['menu_list' => $this->setMenu($request), 'parent_menu_list' => $parent_menu_list, 'menu' => $menu, 'title' => $title]);
        }
    }

    /**
     * 删除菜单
     * @param Request $request
     * @return array
     */
    public function delete(Request $request)
    {
        $is_ajax = $request->ajax();
        if ($is_ajax) {
            $id = $request->id;
            $exist = Menu::where('parent_id', $id)->exists();
            if (!$exist) {
                $menu = Menu::find($id);
                $rule = Rule::where('menu_id', $id)->first();
                $ext_rel = true;
                try {
                    $rel = $menu->delete();
                    if (!empty($rule)) {
                        $ext_rel = $rule->delete();
                    }
                    if ($rel && $ext_rel) {
                        return $this->returnMessage('success', '菜单删除成功！');
                    }
                } catch (\Exception $e) {
                    Log::info($e->getMessage());
                }
            }
        }
        return $this->returnMessage('error', '菜单删除失败！');
    }

    /**
     * 修改菜单状态
     * @param Request $request
     * @return string
     */
    public function updateStatus(Request $request)
    {
        $is_ajax = $request->ajax();
        if ($is_ajax) {
            $id = $request->id;
            $exist = Menu::where('parent_id', $id)->exists();
            if (!$exist) {
                $menu = Menu::find($id);
                try {
                    $menu->status == '1' ? $menu->status = '0' : $menu->status = '1';
                    $rel = $menu->save();
                    if ($rel) {
                        return $this->returnMessage('success', '菜单状态修改成功！');
                    }
                } catch (\Exception $e) {
                    Log::info($e->getMessage());
                }
            }
        }
        return $this->returnMessage('error', '菜单状态修改失败！');
    }

    /**
     * 获取菜单级别
     * @param Request $request
     * @return string
     */
    public function getMenuLevel(Request $request)
    {
        $is_ajax = $request->ajax();
        if ($is_ajax) {
            $menu_id = $request->menu_id;
            $level = Menu::where('id', $menu_id)->value('level');
            empty($level) ? $level = '0' : true;
            return $level;
        }
    }
}