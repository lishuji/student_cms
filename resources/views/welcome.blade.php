@extends('common.layout')

@section('css')
<link rel="stylesheet" href="{{asset('lib/font-awesome-4.7.0/css/font-awesome.min.css')}}" media="all">
{{-- 用于显示github上的star数--}}
<script async defer src="https://buttons.github.io/buttons.js"></script>
<style>
    .icon {
        margin-right: 10px;
        color: #1aa094;
    }

    .icon-tip {
        color: #ff5722 !important;
    }

    .layuimini-qiuck-module a i {
        display: inline-block;
        width: 100%;
        height: 60px;
        line-height: 60px;
        text-align: center;
        border-radius: 2px;
        font-size: 30px;
        background-color: #F8F8F8;
        color: #333;
        transition: all .3s;
        -webkit-transition: all .3s;
    }

    .layuimini-qiuck-module a cite {
        position: relative;
        top: 2px;
        display: block;
        color: #666;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        font-size: 14px;
    }

    .panel {
        background-color: #fff;
        border: 1px solid transparent;
        border-radius: 3px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, .05)
    }

    .panel-body {
        padding: 10px
    }

    .main_btn > p {
        height: 40px;
    }

    .layuimini-notice:hover {
        background: #f6f6f6;
    }

    .layuimini-notice {
        padding: 7px 16px;
        clear: both;
        font-size: 12px !important;
        cursor: pointer;
        position: relative;
        transition: background 0.2s ease-in-out;
    }

    .layuimini-notice-title, .layuimini-notice-label {
        padding-right: 70px !important;
        text-overflow: ellipsis !important;
        overflow: hidden !important;
        white-space: nowrap !important;
    }

    .layuimini-notice-title {
        line-height: 28px;
        font-size: 14px;
    }


    .layui-top-box {
        padding: 40px 20px 20px 20px;
        color: #fff
    }

    .panel {
        margin-bottom: 17px;
        background-color: #fff;
        border: 1px solid transparent;
        border-radius: 3px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, .05)
    }

    .panel-body {
        padding: 15px;
        cursor: pointer;
    }

    .main_btn > p {
        height: 40px;
    }

    .layui-table td {
        padding: 10px 0;
        width: 1%;
        font-size: 12px;
        text-align: center;
    }
</style>
@stop

@section('content')
<div class="layuimini-main layui-top-box">
    <div class="layui-row layui-col-space10">

        <div class="layui-col-md3">
            <div class="col-xs-6 col-md-3">
                <div class="panel layui-bg-cyan" style="background-color:#f35917 !important;">
                    <div class="panel-body" layuimini-content-href="{{route('user.index')}}" data-title="学生列表">
                        <div class="panel-content" style="margin: 16px 10px;">
                            <h1 class="no-margins">
                                <i class="fa fa-graduation-cap"></i>
                                学生列表
                            </h1>
                            <div class="stat-percent font-bold text-gray"><small>当前学生总数</small> {{ $userCount }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="layui-col-md3">
            <div class="col-xs-6 col-md-3">
                <div class="panel layui-bg-blue">
                    <div class="panel-body" layuimini-content-href="{{route('score.index')}}" data-title="成绩查询">
                        <div class="panel-content" style="margin: 25px 10px;">
                            <h1 class="no-margins">
                                <i class="fa fa-search"></i>
                                成绩查询
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @can('isAdmin')
        <div class="layui-col-md3">
            <div class="col-xs-6 col-md-3">
                <div class="panel layui-bg-green">
                    <div class="panel-body" layuimini-content-href="{{route('analyze.index')}}"
                         data-title="总体分析">
                        <div class="panel-content" style="margin: 25px 10px;">
                            <h1 class="no-margins">
                                <i class="fa fa-pie-chart"></i>
                                总体分析
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endcan
        <div class="layui-col-md3">
            <div class="col-xs-6 col-md-3">
                <div class="panel layui-bg-orange">
                    <div class="panel-body" layuimini-content-href="{{route('analyze.gerenfx')}}" data-title="个人分析">
                        <div class="panel-content" style="margin: 25px 10px;">
                            <h1 class="no-margins">
                                <i class="fa fa-line-chart"></i>
                                个人分析
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('js')
<script !src="">
    layui.use(['table', 'miniTab'], function () {
        var miniTab = layui.miniTab;
        miniTab.listen();
    });
</script>
@stop
