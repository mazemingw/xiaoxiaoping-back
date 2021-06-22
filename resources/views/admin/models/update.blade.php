@extends('layouts.admin')
@section('title',"修改模型")
@section('main')
	<div class="nav">
    <ol class="breadcrumb" style="background: #f1f1f1;">
      <li><span style="color:orange;margin-right: 10px;" class="glyphicon glyphicon-home"></span><a href="{{url('admin')}}">首页</a></li>
      <li><a href="{{url('admin/models/index')}}">模块</a></li>
      <li class="active">修改</li>
    </ol>
  	</div>
  	<div class="alert alert-success alert-dismissable hide">
            <button type="button" class="close" onclick="$('.alert').addClass('hide')">
                &times;
            </button>
            <b></b>
    </div>
	<form class="form-horizontal" id="form1">
	  <div class="col-sm-11">
	  	<div class="form-group">
		    <label for="inputEmail3" class="col-sm-1 control-label">模型名：</label>
		    <div class="col-sm-6">
		      <input type="text" readonly="readonly" value="{{$models->namer}}" name="namer" class="form-control" id="inputEmail3" placeholder="模型名(中文)">
		      <input type="hidden" name="modelsid" value="{{$models->id}}">
		    </div>
		    <span class="col-sm-5 help-block">请填写模型名</span>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-1 control-label">表名：</label>
		    <div class="col-sm-6">
		      <input type="text" readonly="readonly" value="{{$models->tablename}}" class="form-control" id="inputPassword3" name="tablename" placeholder="表名(英文)">
		    </div>
		    <span class="col-sm-5 help-block">update请填写英文不能有空格</span>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-1 control-label">图片：</label>
		    <div class="col-sm-6">
		      <input type="radio" name="isimages" @if($models->isimages==1)checked='checked'@endif value="1"/>&nbsp;有&nbsp;<input @if($models->isimages==0)checked='checked'@endif type="radio"  name="isimages" value="0"/>&nbsp;无
		    </div>
		    <span class="col-sm-5 help-block"></span>
		  </div>
	  </div>
	  <div class="col-sm-1">
	  	<button onclick="saveModels();" type="button" style="margin:30px 15px 0 0;" class="btn btn-danger dropdown-toggle" id="addRowbtn">
			<span class="glyphicon  glyphicon-plus" aria-hidden="true"></span>保存
		</button>
		{{csrf_field()}}
	  </div>
	  
	  <div class="model_detail">
	    <!-- 测试开始 -->	
	 	<div>
	    	<table class="table table-striped table-hover" id="reportTable">
	    		<tr>
	    			<th class="col-sm-1">编号</th>
	    			<th>字段名</th>
	    			<th>中文名称</th>
	    			<th>类型</th>
	    			<th>长度</th>
	    			<th>默认值</th>
	    			<th>约束</th>
	    			<th>操作</th>
	    		</tr>
	    		@foreach($modelDetailCols as $k=>$v)
	    		@if($v->fieldname == 'status')
	    		<tr id="index_{{$k}}" class="indexCols">
	    			<td style="text-align: center;">{{$k}}</td>
	    			<td><input  readonly="readonly" style="background: #f0f0f0;" type='text' name="fieldname[]" value="{{$v->fieldname}}">
					<input type="hidden" name="oldfieldname[]" value="{{$v->fieldname}}">
	    			</td>
	    			<td><input type='text' name="cname[]" value="{{$v->cname}}"></td>
	    			<td><select name='type[]'>
	    				<option @if($v->type=='varchar')selected='selected'@endif value="varchar">varchar</option>
	    				<option @if($v->type=='char')selected='selected'@endif value="char">char</option>
	    				<option @if($v->type=='text')selected='selected'@endif value="text">text</option>
	    				<option @if($v->type=='int')selected='selected'@endif value="int">int</option>
	    				<option @if($v->type=='tinyint')selected='selected'@endif value="tinyint">tinyint</option>
	    				<option @if($v->type=='float')selected='selected'@endif value="float">float</option>
	    				<option @if($v->type=='datetime')selected='selected'@endif value="datetime">datetime</option>
	    			</select></td>
	    			<td><input type='text' size="6" name="length[]" value='{{$v->length}}'></td>
	    			<td><input type='text' size="3" name="defaultvalue[]" value="{{$v->defaultvalue}}"></td>
	    			<td>
	    				<input type="text" name="kvalue[]" value="{{$v->kvalue}}">&nbsp;
						<input type="checkbox" name="constraint[0][]" @if(strpos($v->constraints,'isshowonlist')!==false)checked="checked"@endif value="isshowonlist">管理列表显示&nbsp;
						<input type="hidden" value="{{$v->id}}" name="modeldetailid[]"
	    			</td>
	    			<td>
	    			   &nbsp;
			        </td>
	    		</tr>
	    		@else
	    		<tr id="index_{{$k}}" class="indexCols">
	    			<td style="text-align: center;">{{$k}}</td>
	    			<td><input type='text' name="fieldname[]" value="{{$v->fieldname}}">
					<input type="hidden" name="oldfieldname[]" value="{{$v->fieldname}}">
	    			</td>
	    			<td><input type='text' name="cname[]" value="{{$v->cname}}"></td>
	    			<td><select name='type[]'>
	    				<option @if($v->type=='varchar')selected='selected'@endif value="varchar">varchar</option>
	    				<option @if($v->type=='char')selected='selected'@endif value="char">char</option>
	    				<option @if($v->type=='text')selected='selected'@endif value="text">text</option>
	    				<option @if($v->type=='int')selected='selected'@endif value="int">int</option>
	    				<option @if($v->type=='tinyint')selected='selected'@endif value="tinyint">tinyint</option>
	    				<option @if($v->type=='float')selected='selected'@endif value="float">float</option>
	    				<option @if($v->type=='datetime')selected='selected'@endif value="datetime">datetime</option>
	    			</select></td>
	    			<td><input type='text' size="6" value="{{$v->length}}" name="length[]"></td>
	    			<td><input type='text' size="3" value="{{$v->defaultvalue}}" name="defaultvalue[]"></td>
	    			<td>
	    				
	    				<input type="checkbox" @if(strpos($v->constraints,'unsigned')!==false)checked="checked"@endif name="constraint[{{$k}}][]" value="unsigned">unsigned&nbsp;
						<input type="checkbox" @if(strpos($v->constraints,'unique')!==false)checked="checked"@endif name="constraint[{{$k}}][]" value="unique">unique&nbsp;
						<input type="checkbox" @if(strpos($v->constraints,'required')!==false)checked="checked"@endif name="constraint[{{$k}}][]" value="required">required&nbsp;
						<input type="checkbox" @if(strpos($v->constraints,'search')!==false)checked="checked"@endif name="constraint[{{$k}}][]" value="search">search&nbsp;
						<input type="checkbox" @if(strpos($v->constraints,'isshowonlist')!==false)checked="checked"@endif name="constraint[{{$k}}][]"  value="isshowonlist">管理列表显示&nbsp;
						<input type="hidden" name="modeldetailid[]" value="{{$v->id}}">
	    			</td>
	    			<td>
	    			   <button onclick="delOldCols({{$k}},{{$v->id}})" type="button" style="padding:3px 5px;" class="btn btn-danger dropdown-toggle" id="addRowbtn">
			              <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>删除
			           </button>
			        </td>
	    		</tr>
				@endif
				@endforeach
	    		<tr>
	    			<td colspan="7"></td>
	    			<td>
	    			   
	    			   <button onclick="addCols();" type="button" style="padding:3px 5px;" class="btn btn-success dropdown-toggle">
			              <span class="glyphicon  glyphicon-plus" aria-hidden="true"></span>增加
			           </button>
			        </td>
	    		</tr>

	    		
	    	</table>
	 	</div>
	  	<!-- 测试结束 -->
	  </div>
	</form>

<script type="text/javascript">
function saveModels(){
	$.ajax({
		url:"{{url('admin/models/doedit')}}",
		data:$("#form1").serialize(),
		type:'post',
		dataType:'json',
		success:function(re){
			if(re.result=='success'){
				//$(".alert").removeClass('hide');
				//$(".alert b").html(re.message);
				alert(re.message);
				location.reload(true);
			}else{
				$(".alert").removeClass('hide');
				$(".alert b").html(re.message);
			}
		}
	})
}
var colIndexNum={{count($modelDetailCols->toArray())-1}};
function addCols(){
	var content ="<tr class=\"indexCols\" id=\"index_"+(colIndexNum+1)+"\">\
	    			<td style=\"text-align: center;\">"+(colIndexNum+1)+"</td>\
	    			<td><input type='text' name=\"fieldname["+(colIndexNum+1)+"]\"></td>\
	    			<td><input type='text' name=\"cname["+(colIndexNum+1)+"]\"></td>\
	    			<td><select name='type["+(colIndexNum+1)+"]'>\
	    				<option value=\"varchar\">varchar</option>\
	    				<option value=\"char\">char</option>\
	    				<option value=\"text\">text</option>\
	    				<option value=\"int\">int</option>\
	    				<option value=\"tinyint\">tinyint</option>\
	    				<option value=\"float\">float</option>\
	    				<option value=\"datetime\">datetime</option>\
	    			</select></td>\
	    			<td><input type='text' size=\"6\" name=\"length["+(colIndexNum+1)+"]\"></td>\
	    			<td><input type='text' size=\"3\" name=\"defaultvalue["+(colIndexNum+1)+"]\"></td>\
	    			<td>\
	    				<input type=\"checkbox\" name=\"constraint["+(colIndexNum+1)+"][]\" value=\"unsigned\">unsigned&nbsp;\
						<input type=\"checkbox\" name=\"constraint["+(colIndexNum+1)+"][]\" value=\"unique\">unique&nbsp;\
						<input type=\"checkbox\" name=\"constraint["+(colIndexNum+1)+"][]\" value=\"required\">required&nbsp;\
						<input type=\"checkbox\" name=\"constraint["+(colIndexNum+1)+"][]\" value=\"search\">search&nbsp;\
						<input type=\"checkbox\" name=\"constraint["+(colIndexNum+1)+"][]\" checked=\"checked\" value=\"isshowonlist\">管理列表显示&nbsp;\
	    			</td>\
	    			<td>\
	    			   <button onclick=\"delCols("+(colIndexNum+1)+")\" type=\"button\" style=\"padding:3px 5px;\" class=\"btn btn-danger dropdown-toggle\" id=\"addRowbtn\">\
			              <span class=\"glyphicon glyphicon-minus\" aria-hidden=\"true\"></span>删除\
			           </button>\
			        </td>\
	    		</tr>";
	$(".indexCols:last").after(content);
	colIndexNum++;
}
function delCols(id){
	$("#index_"+id).remove();
}
function delOldCols(id,rowId){
	$("#operateButton").show();
	$("#button0").html('取消');
	//显示模态框
	$('#myModal').modal({show: true});
	//operateButton
	$("#operateButton").click(function(){
		//启动ajax，传递被删除字段对应的id
		$.ajax({
			url:"{{url('admin/models/detaildel')}}/"+rowId,
			data:'id='+rowId,
			dataType:'json',
			success:function(re){
				if(re.result == 'success'){
					$("#operateButton").hide();
					$("#button0").html('确定');
					$("#index_"+id).remove();
					$("#myModalBody").html(re.message);
				}else{
					$("#myModalBody").html(re.message);
				}
			}
		})

	})
}
</script> 
@endsection                