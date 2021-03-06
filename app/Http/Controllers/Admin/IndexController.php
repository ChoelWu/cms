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
 * | @information        | 首頁
 * + --------------------------------------------------------------------
 * | @create-date        | 2018-07-17
 * + --------------------------------------------------------------------
 * |          | @date    |
 * +  @update + ---------------------------------------------------------
 * |          | @content |
 * + ====================================================================
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class IndexController extends CommonController
{
    public function index(Request $request)
    {
        return view('admin.index.index', ['menu_list' => $this->setMenu($request)]);
    }

    public function test() {
        return json_encode(['message' => "成功", 'status' => '200']);
    }
}