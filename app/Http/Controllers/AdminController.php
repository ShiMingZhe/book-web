<?php

namespace App\Http\Controllers;


use App\Models\Poetries;
use App\Models\Task;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //查看
    public function listen()
    {
        $poetries = Poetries::all();

        return view('admin/listen', ['poetries' => $poetries]);
    }

    //增加
    public function listenAdd()
    {
        $input = Input::except('_token');
        if (!empty($input)) {
            $res = Poetries::create($input);
            if ($res) {
                $task = Task::create([
                    'name' => $input['title'],
                    'type' => '1',
                    'is_pass' => '0',
                    'operator' => Session::get('user')->first()->name,
                    'task_id' => $input['id'],
                ]);
                if ($task) {
                    return redirect("/listen");
                }

                return view('admin/listenAdd');
            }
        }

        return view('admin/listenAdd');
    }

    //编辑
    public function editor($poetryId)
    {
        $data = Poetries::find($poetryId);

        return view('admin.listenEditor',['data' => $data]);
    }

    //更新
    public function update()
    {
        $input = Input::except('_token');
        if (!empty($input)) {
            $res = Poetries::where('id',$input['id'])->update($input);
            if ($res) {
                return redirect('/listen');
            }

            return view('admin.listenEditor',['data' => $input]);
        }
    }

    public function index()
    {
        return view('admin/index');
    }
}