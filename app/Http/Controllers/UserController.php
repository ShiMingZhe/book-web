<?php
/**
 * Created by PhpStorm.
 * User: shimingzhe
 * Date: 18-10-4
 * Time: 下午4:10
 */

namespace App\Http\Controllers;


use App\Models\Role;
use App\Models\Users;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $user = Session::get('user');
        $roleId = $user->first()->role_id;
        if ($roleId == '1') {
            $users = Users::where('role_id', '!=' ,$roleId)->get();
            if (!$users->isEmpty()) {
                $roles = Role::all();
                foreach ($users as $key => $admin) {
                    $users[$key]->role_name = $roles->get($admin->role_id-1)->name;
                }

                return view('admin.user.index', ['data' => $users]);
            }
        }

        return view('admin.user.permission');
    }

    public function changeRole()
    {
        $input = Input::except('_token');
        $out = Users::where('id',$input['userId'])->update(['role_id' => $input['optionsRadios']]);
        if ($out) {
            return redirect('/user/admin/index');
        }
    }
}