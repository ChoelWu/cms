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
    <!-- Validator -->
    <link rel="stylesheet" href="{{ asset(config('view.admin_static_path') . '/css/bootstrapValidator.css') }}"/>
    <link href="{{ asset(config('view.admin_static_path') . '/css/plugins/switchery/switchery.css') }}"
          rel="stylesheet">
@endsection
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>{{ $title['title'] }}</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('admin/rule/index') }}">{{ $title['title'] }}</a>
                </li>
                <li class="active">
                    <strong>{{ $title['sub_title'] }}</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2"></div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>{{ $title['sub_title'] }}</h5>
                        <div class="ibox-tools">
                            <span class="btn btn-xs btn-warning" id="clear">
                                <i class="fa fa-eraser"></i>
                                清空
                        </span>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form class="form-horizontal" id="edit-rule-form">
                            @csrf
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">规则名称：</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="name" value="{{ $rule->name }}"
                                           placeholder="请输入规则名">
                                </div>
                                <span class="text-danger">*</span>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">路由规则：</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="route" value="{{ $rule->route }}"
                                           placeholder="请输入规则名">
                                </div>
                                <span class="text-danger">*</span>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">所属菜单：</label>
                                <div class="col-sm-4">
                                    <select class="form-control m-b" name="menu_id">
                                        <option disabled="disabled">- - - - - - - - - - - - - - - - - - - - - - - - - -
                                            - - - - - - - - - - - - - - - -
                                        </option>
                                        <option value="0" @if('0' == $rule->menu_id)selected="selected"@endif >选择菜单
                                        </option>
                                        <option disabled="disabled">- - - - - - - - - - - - - - - - - - - - - - - - - -
                                            - - - - - - - - - - - - - - - -
                                        </option>
                                        @foreach($menu_list as $item)
                                            <option value="{{ $item['id'] }}"
                                                    @if($item['id'] == $rule->menu_id)selected="selected"@endif>{{ $item['name'] }}</option>
                                            @foreach($item['children'] as $v)
                                                <option value="{{ $v['id'] }}"
                                                        @if($v['id'] == $rule->menu_id)selected="selected"@endif>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;| -
                                                    - {{ $v['name'] }}</option>
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">路由序号：</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="sort" placeholder="请输入规则序号" value="{{ $rule->sort }}" />
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">规则状态：</label>
                                <div class="col-sm-5">
                                    <input type="checkbox" class="js-switch" checked/>
                                </div>
                                <input type="hidden" name="status"/>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <div class="btn btn-white" id="edit-rule-cancel">取消</div>
                                    <div class="btn btn-primary" id="edit-rule-submit">保存</div>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="{{ $rule->id }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('foot_files')
    <script src="{{ asset(config('view.admin_static_path') . '/js/bootstrapValidator.js') }}"></script>
    <!-- Switchery -->
    <script src="{{ asset(config('view.admin_static_path') . '/js/plugins/switchery/switchery.js') }}"></script>
    <script>
        $(document).ready(function () {
            let elem = document.querySelector('.js-switch');
            let switchery = new Switchery(elem, {color: '#1AB394'});
            let pre_status = "{{ $rule->status }}";
            setSwitch(pre_status, switchery);
            $('#edit-rule-form').bootstrapValidator({
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: '规则名称不能为空！'
                            },
                            stringLength: {
                                min: 1,
                                max: 20,
                                message: '规则名称在20个字符以内！'
                            }
                        }
                    },
                    route: {
                        validators: {
                            notEmpty: {
                                message: '路由规则不能为空！'
                            },
                            stringLength: {
                                min: 1,
                                max: 40,
                                message: '路由规则在20个字符以内！'
                            }
                        }
                    },
                    sort: {
                        validators: {
                            stringLength: {
                                min: 4,
                                max: 4,
                                message: '规则序号在4个数字以内！'
                            },
                            regexp: {
                                regexp: /^[0-9]+$/,
                                message: '请输入数字作为规则序号！'
                            }
                        }
                    }
                }
            });
            $("#edit-rule-submit").click(function () {
                setSwitchInInput(elem, "status");
                $('#edit-rule-form').bootstrapValidator('validate');
                let flag = $('#edit-rule-form').data('bootstrapValidator').isValid();
                if (flag) {
                    let data = $("#edit-rule-form").serialize();
                    let type = "1";
                    let refresh = {
                        type: "1",
                        timeout: 2000,
                        url: "{{ url('admin/rule/index') }}",
                    };
                    let confirmData = {
                        effect: "animated bounceInDown",
                        size: "sm",
                        action: "submit",
                        message: "你确定要提交修改吗？"
                    };
                    let ajaxData = {
                        url: "{{ url('admin/rule/edit') }}",
                        data: data
                    };
                    showAjaxMessage(type, confirmData, ajaxData, refresh);
                }
            });
            $("#clear").click(function () {
                $('#edit-rule-form').find("input[type=text]").val("");
                $('#edit-rule-form').find("input[name=status][type=radio]:first").prop("checked", true);
                $('#edit-rule-form').data('bootstrapValidator').resetForm(true);
            });
        });
    </script>
@endsection