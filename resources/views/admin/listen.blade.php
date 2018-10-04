@include('admin.header')
<div class="box">
    <div class="box-header">
        <a href="/listenAdd">
            <button type="button" class="btn btn-default ">新增诗词</button>
        </a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <td>id</td>
                <td>标题</td>
                <td>作者</td>
                <td>内容</td>
                <td>MP3地址</td>
                <td>操作</td>
            </tr>
            </thead>
            <tbody>

            @foreach($poetries as $poetry)
                <tr>
                    <td>{{$poetry->id}}</td>
                    <td>{{$poetry->title}}</td>
                    <td>{{$poetry->author}}</td>
                    <td><pre>{{$poetry->content}}</pre></td>
                    <td>{{$poetry->mp3_url}}</td>
                    <td>
                        <a href="{{@url("/listen/editor/$poetry->id")}}">
                            <button type="button" class="btn btn-block btn-primary">编辑</button>
                        </a>
                        <button type="button" class="btn btn-block btn-danger">删除</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
@include('admin.footer')