<?php
/**
 * Created by PhpStorm.
 * User: shimingzhe
 * Date: 18-10-4
 * Time: 下午6:51
 */

namespace App\Http\Controllers;


class TaskController extends Controller
{
    public function index()
    {
        return view('admin.task.index');
    }
}