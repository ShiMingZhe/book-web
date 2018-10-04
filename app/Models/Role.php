<?php
/**
 * Created by PhpStorm.
 * User: shimingzhe
 * Date: 18-10-4
 * Time: 下午4:25
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //指定表名
    protected $table = 'mk_role';

    //指定主键
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['name'];
}