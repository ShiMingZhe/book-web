<?php
/**
 * Created by PhpStorm.
 * User: shimingzhe
 * Date: 18-10-2
 * Time: 下午1:31
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //指定表名
    protected $table = 'mk_users';

    //指定主键
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['name', 'sex', 'email', 'password', 'phone', 'headimgurl', 'nickname', 'is_admin'];
}