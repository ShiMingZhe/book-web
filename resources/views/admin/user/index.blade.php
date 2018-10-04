@include('admin.header')
<div class="box">
    <div class="box-header">
        <h3>管理员管理</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <td>id</td>
                <td>姓名</td>
                <td>性别</td>
                <td>邮箱</td>
                <td>密码</td>
                <td>手机</td>
                <td>头像</td>
                <td>昵称</td>
                <td>角色</td>
                <td>操作</td>
            </tr>
            </thead>
            <tbody>

            @foreach($data as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->sex}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->headimgurl}}</td>
                    <td>{{$user->nickname}}</td>
                    <td>{{$user->role_name}}</td>
                    <td>
                        <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">
                            更改角色
                        </button>
                        <button type="button" class="btn btn-block btn-danger">删除</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">更改角色</h4>
                </div>
                <!-- radio -->
                <form role="form" class="form-group" action="{{@url("/user/admin/changeRole")}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="userId" value="{{$user->id}}">
                    <div class="modal-body">
                        @if($user->role_id == '2')
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="2" disabled>
                                    管理员
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="3">
                                    普通管理员
                                </label>
                            </div>
                        @elseif($user->role_id == '3')
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="2">
                                    管理员
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="3" disabled>
                                    普通管理员
                                </label>
                            </div>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">关闭</button>
                        <button type="submit" class="btn btn-primary">确定</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>
<!-- /.box -->
@include('admin.footer')