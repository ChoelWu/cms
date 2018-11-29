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
 * | @information        | 网站基本信息
 * + --------------------------------------------------------------------
 * | @create-date        | 2018-09-01
 * + --------------------------------------------------------------------
 * |          | @date    |
 * +  @update + ---------------------------------------------------------
 * |          | @content |
 * + ====================================================================
 */

namespace App\Http\Controllers\Admin;

use App\Models\Article;

class SystemController extends CommonController
{
    public function index(Request $request)
    {
        $title = ['title' => '文章管理', 'sub_title' => '文章列表'];
        $list = Article::get();
        return view('admin.user.index', ['menu_list' => $this->setMenu($request), 'list' => $list, 'title' => $title]);
    }
}