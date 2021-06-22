@extends('layouts.admin')
@section('title','模型管理')
@section('main')
  <div class="nav">
    <ol class="breadcrumb" style="background: #f1f1f1;">
      <li><span style="color:orange;margin-right: 10px;" class="glyphicon glyphicon-home"></span><a href="{{url('admin')}}">首页</a></li>
      <li><a href="{{url('admin/models/index')}}">模型管理</a></li>
    </ol>
  </div>
  <div class="oper">
    <a href="{{url('admin/models/add')}}"><button type="button" class="btn btn-danger dropdown-toggle" id="addRowbtn"><span class="glyphicon  glyphicon-plus" aria-hidden="true"></span>添加模型</button></a>
  </div>
  <div class="tableList">
    <table class="table table-bordered table-striped table-hover">
      <colgroup>
        <col class="col-xs-1">
        <col class="col-xs-1">
        <col class="col-xs-7">
        <col class="col-xs-3">
      </colgroup>
      <thead>
        <tr class="active">
          <th>名称</th>
          <th>表名</th>
          <th>图片</th>
          <th>操作</th>
        </tr>
      </thead>
      
    </table>
  </div>
  <div class="listPage">
    {{$cols->appends($_GET)->links()}}
  </div>
@endsection