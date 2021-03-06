<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    //设置数据库表名
    protected $table = 'rule';

    //数值主键非自增
    public $incrementing = false;

    //设置主键类型为字符串类型
    protected $keyType = 'string';

    //设置白名单
    protected $fillable = ['id', 'name', 'route', 'menu_id', 'status', 'sort', 'updated_at', 'created_date'];

    //获取菜单信息
    public function menu()
    {
        return $this->belongsTo('\App\Models\Menu');
    }
}
