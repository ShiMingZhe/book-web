<?php
/**
 * Created by PhpStorm.
 * User: shimingzhe
 * Date: 18-10-4
 * Time: 下午7:27
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //指定表名
    protected $table = 'mk_task';

    //指定主键
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['name', 'type', 'is_pass', 'operator', 'task_id'];
}