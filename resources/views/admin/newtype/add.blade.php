
@extends('admin.layouts.master');
@section('title','新闻类型管理')
@section('banner-title','新闻类型管理')
@section('banner-tips','新闻类型添加')

@section('header')
    @parent
@endsection

@section('left-menu')
     @parent
@endsection


@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h2><i class="fa fa-indent red"></i><strong>添加新闻类型</strong></h2>
    </div>
    <div class="col-lg-12">
       @if (count($errors) > 0)
        <div class="alert alert-danger">
          <strong>提示!</strong> 您的操作失败<br><br>
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
    </div>
    <form action="{{ url('newstype/doadd')}}" method="post" enctype="multipart/form-data" class="form-horizontal ">
        <div class="panel-body">
            <div class="form-group">
                <label class="col-md-3 control-label" for="text-input">类型名称</label>
                <div class="col-md-9">
                    <input type="text" id="name" name="name" class="form-control" placeholder="请输入新闻标题......">
                    <!-- <span class="help-block">This is a help text</span> -->
                </div>
            </div>
            
            <!-- <div class="form-group">
                <label class="col-md-3 control-label">排序</label>
                <div class="col-md-9">
                    <input type="number" id="ordernum" name="ordernum" class="form-control" value="1">
                </div>
            </div> -->
        </div>
        <div class="panel-footer">
            <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-dot-circle-o"></i> 提交</button>
            <!-- <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> 重置</button> -->
        </div> 
    </form> 
   
</div>
@endsection
