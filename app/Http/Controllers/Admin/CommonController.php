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
 * | @information        | 基本类
 * + --------------------------------------------------------------------
 * | @create-date        | 2018-07-10
 * + --------------------------------------------------------------------
 * |          | @date    |
 * +  @update + ---------------------------------------------------------
 * |          | @content |
 * + ====================================================================
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class CommonController extends Controller
{
    protected $menu_list;

    public function returnMessage($action, $message)
    {
        if ($action == 'success') {
            $result = [
                "status" => "1",
                "message" => $message
            ];
        } else if ($action == 'error') {
            $result = [
                "status" => "0",
                "message" => $message
            ];
        } else {
            $result = [
                "status" => "2",
                "message" => $message
            ];
        }
        return json_encode($result);
    }
}