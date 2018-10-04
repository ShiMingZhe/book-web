@include('admin.header')
<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">编辑诗词</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form role="form" action="{{@url("/listen/update")}}" method="post">
            {{csrf_field()}}
            <!-- text input -->
            <input type="hidden" class="form-control" name="id" value="{{$data->id}}">

            <div class="form-group">
                <label>标题</label>
                <input type="text" class="form-control" name="title" value="{{$data->title}}">
            </div>

            <div class="form-group">
                <label>作者</label>
                <input type="text" class="form-control" name="author" value="{{$data->author}}">
            </div>

            <div class="form-group">
                <label>内容</label>
                <textarea id="editor1" name="content" rows="10" cols="80" >{{$data->content}}</textarea>
            </div>

            <div class="form-group">
                <label>MP3地址</label>
                <input type="text" class="form-control" name="mp3_url" value="{{$data->mp3_url}}">
            </div>

            <button type="submit" class="btn btn-default">提交</button>
        </form>
    </div>
    <!-- /.box-body -->
</div>

<!-- /.box -->
<!-- jQuery 3 -->
<script src="{{@asset("admin-lte/bower_components/jquery/dist/jquery.min.js")}}"></script>
<script src="{{@asset("/admin-lte/bower_components/ckeditor/ckeditor.js")}}"></script>
<script>
    $(function () {
        CKEDITOR.replace('editor1')
    })
</script>
@include('admin.footer')