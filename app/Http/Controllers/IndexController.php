<?php
/**
 * Created by PhpStorm.
 * User: shimingzhe
 * Date: 18-9-19
 * Time: 下午9:40
 */

namespace App\Http\Controllers;


class IndexController extends Controller
{
    public function index()
    {
        return view('index/index');
    }
}