@extends('admin.common.layout')
@section('title')
    {{ $title['title'] }}
@endsection
@section('head_files')
    <!-- Toastr style -->
    <link href="{{ asset(config('view.admin_static_path') . '/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
    <!-- Gritter -->
    <link href="{{ asset(config('view.admin_static_path') . '/js/plugins/gritter/jquery.gritter.css') }}"
          rel="stylesheet">
    <link href="{{ asset(config('view.admin_static_path') . '/css/plugins/dropzone/basic.css') }}" rel="stylesheet">
    <link href="{{ asset(config('view.admin_static_path') . '/css/plugins/dropzone/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset(config('view.admin_static_path') . '/css/plugins/jasny/jasny-bootstrap.min.css') }}"
          rel="stylesheet">
@endsection
@section('inputModal')
    <form class="form-horizontal" id="add-poster-form">
        @csrf
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label class="col-sm-3 control-label">海报标题：</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="title" placeholder="请输入海报标题">
            </div>
            <span class="text-danger">*</span>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label class="col-sm-3 control-label">链接地址：</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="url" placeholder="请输入链接地址">
            </div>
            <span class="text-danger">*</span>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label class="col-sm-3 control-label">内容简要：</label>
            <div class="col-sm-8">
                                <textarea class="form-control" name="summary" rows="5"
                                          style="resize: vertical;"></textarea>
            </div>
            <span class="text-danger">*</span>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label class="col-sm-3 control-label">海报图片：</label>
            <div class="col-sm-8">
                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                    <div class="form-control" data-trigger="fileinput"><i
                                class="glyphicon glyphicon-file fileinput-exists"></i> <span
                                class="fileinput-filename"></span>
                    </div>
                    <span class="input-group-addon btn btn-default btn-file">
                                        <span class="fileinput-new">选择文件</span>
                                        <span class="fileinput-exists">更改</span>
                                        <input type="file" name="img">
                                    </span>
                    <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                       data-dismiss="fileinput">删除</a>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>{{ $title['title'] }}</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('admin/role/index') }}">{{ $title['title'] }}</a>
                </li>
                <li class="active">
                    <strong>{{ $title['sub_title'] }}</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>{{ $title['sub_title'] }}</h5>
                        <div class="ibox-tools">
                            <span class="btn btn-xs btn-primary" id="poster-add">
                                <i class="fa fa-plus"></i>
                                添加
                            </span>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table shoping-cart-table">
                                <tbody>
                                @foreach($list as $poster)
                                    <tr>
                                        <td width="200">
                                            <img src="{{ asset($poster['img']) }}" alt=""
                                                 width="200">
                                        </td>
                                        <td class="desc">
                                            <h3>
                                                <a href="{{ $poster->url }}" class="text-navy"
                                                   target="_blank">{{ $poster->title }}</a>
                                            </h3>
                                            <p class="small">{{ $poster->summary }}</p>
                                            <div class="m-t-sm">
                                                <a class="text-info edit-poster" data-id="{{ $poster->id }}"><i
                                                            class="fa fa-edit"></i> 修改</a>
                                                |
                                                <a class="text-danger delete-poster" data-id="{{ $poster->id }}"><i
                                                            class="fa fa-trash"></i> 删除</a>
                                                |
                                                @if($poster->status == '1')
                                                    <a class="text-muted update-status-poster"
                                                       data-id="{{ $poster->id }}"><i class="fa fa-eye-slash"></i>
                                                        禁用</a>
                                                @else
                                                    <a class="text-success update-status-poster"
                                                       data-id="{{ $poster->id }}"><i class="fa fa-eye"></i> 启用</a>
                                                @endif
                                                |
                                                @if($poster->is_top == '0')
                                                    <a class="text-warning stick-poster"
                                                       data-id="{{ $poster->id }}"><i class="fa fa-level-up"></i> 置顶</a>
                                                @else
                                                    <a class="text-muted stick-poster"
                                                       data-id="{{ $poster->id }}"><i class="fa fa-level-down"></i> 取消置顶</a>
                                                @endif

                                            </div>
                                        </td>
                                        <td></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="hr-line-dashed"></div>
                            <div class="pull-right">
                                {{ $list->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('foot_files')
    <!-- Jasny -->
    <script src="{{ asset(config('view.admin_static_path') . '/js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>
    <!-- DROPZONE -->
    <script src="{{ asset(config('view.admin_static_path') . '/js/plugins/dropzone/dropzone.js') }}"></script>
    <script>
        $(document).ready(function () {
            $("#poster-add").click(function () {
                inputModal("animated bounceInDown", "default", "添加海报");
            });
            $('#submit-btn').click(function () {
                let form_data = new FormData($("#add-poster-form")[0]);
                $("#inputModal").modal("hide");
                $.ajaxSetup({
                    cache: false,
                    processData: false,
                    contentType: false,
                });
                ajaxFromServer("{{ url('admin/poster/add') }}", form_data, function (data) {
                    if (data['status'] == '1') {
                        showMessageModal("animated flipInX", "sm", "success", "海报添加成功！", 2000, function() {
                            setTimeout(function() {
                                location.reload();
                            }, 100);
                        });
                    } else if (data['status'] == '0') {
                        showMessageModal("animated flipInX", "sm", "error", "海报添加失败！", 2000, function() {
                            setTimeout(function() {
                                location.reload();
                            }, 100);
                        });
                    }
                }, function () {
                    showMessageModal("animated flipInX", "sm", "error", "系统异常！", 2000);
                });
            });
            $(".delete-poster").click(function () {
                let id = $(this).data("id");
                let token = "{{ csrf_token() }}";
                let url = "{{ url('admin/poster/delete') }}";
                let type = "2";
                let refresh = {
                    type: "1",
                    timeout: 2000,
                    url: "{{ url('admin/poster/index') }}",
                };
                let confirmData = {
                    type: "warning",
                    title: "你确定要删除海报吗？",
                    message: ""
                };
                let ajaxData = {
                    url: url,
                    data: {id: id, _token: token}
                };
                showAjaxMessage(type, confirmData, ajaxData, refresh);
            });
            $(".stick-poster").click(function () {
                let id = $(this).data("id");
                let token = "{{ csrf_token() }}";
                let url = "{{ url('admin/poster/stick') }}";
                let type = "2";
                let refresh = {
                    type: "1",
                    timeout: 2000,
                    url: "{{ url('admin/poster/index') }}",
                };
                let confirmData = {
                    type: "warning",
                    title: "你确定要置顶海报吗？",
                    message: ""
                };
                let ajaxData = {
                    url: url,
                    data: {id: id, _token: token}
                };
                showAjaxMessage(type, confirmData, ajaxData, refresh);
            });
            $(".update-status-poster").click(function () {
                let id = $(this).data("id");
                let token = "{{ csrf_token() }}";
                let url = "{{ url('admin/poster/updateStatus') }}";
                let type = "2";
                let refresh = {
                    type: "1",
                    timeout: 2000,
                    url: "{{ url('admin/poster/index') }}",
                };
                let confirmData = {
                    type: "warning",
                    title: "你确定要更改海报状态吗？",
                    message: ""
                };
                let ajaxData = {
                    url: url,
                    data: {id: id, _token: token}
                };
                showAjaxMessage(type, confirmData, ajaxData, refresh);
            });
        });
    </script>
@endsection