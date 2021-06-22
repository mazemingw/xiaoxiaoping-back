@extends('layouts.admin')
@section('title',"添加模型")
@section('main')
	<div class="nav">
    <ol class="breadcrumb" style="background: #f1f1f1;">
      <li><span style="color:orange;margin-right: 10px;" class="glyphicon glyphicon-home"></span><a href="#">首页</a></li>
      <li><a href="#">模块</a></li>
      <li class="active">添加</li>
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
		      <input type="text" name="namer" class="form-control" id="inputEmail3" placeholder="模型名(中文)">
		    </div>
		    <span class="col-sm-5 help-block">请填写模型名</span>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-1 control-label">表名：</label>
		    <div class="col-sm-6">
		      <input type="text" class="form-control" id="inputPassword3" name="tablename" placeholder="表名(英文)">
		    </div>
		    <span class="col-sm-5 help-block">add请填写英文不能有空格</span>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-1 control-label">图片：</label>
		    <div class="col-sm-6">
		      <input type="radio" name="isimages" value="1"/>&nbsp;有&nbsp;<input checked='checked' type="radio"  name="isimages" value="0"/>&nbsp;无
		    </div>
		    <span class="col-sm-5 help-block"></span>
		  </div>
	  </div>

	  <div class="col-sm-1"> 
	     <!-- onclick="saveModels();" 事件监听函数已加入-->
	  	<button onclick="saveModels();"  type="button" style="margin:30px 15px 0 0;" class="btn btn-danger dropdown-toggle" id="addRowbtn">
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
	    		<tr id="index_0" class="indexCols">
	    			<td style="text-align: center;">0</td>
	    			<td><input type='text' name="fieldname[]" value="status"></td>
	    			<td><input type='text' name="cname[]" value="状态"></td>
	    			<td><select name='type[]'>
	    				<option value="varchar">varchar</option>
	    				<option value="char">char</option>
	    				<option value="text">text</option>
	    				<option value="int">int</option>
	    				<option value="tinyint" selected='selected'>tinyint</option>
	    				<option value="float">float</option>
	    				<option value="datetime">datetime</option>
	    			</select></td>
	    			<td><input type='text' size="6" name="length[]" value=''></td>
	    			<td><input type='text' size="3" name="defaultvalue[]" value=''></td>
	    			<td>
	    				<input type="text" name="kvalue[]" value="1-推荐@2-热销@3-置顶">&nbsp;
						<input type="checkbox" name="constraint[0][]" checked="checked" value="isshowonlist">管理列表显示&nbsp;
	    			</td>
	    			<td>
	    			   &nbsp;
			        </td>
	    		</tr>
	    		<tr id="index_1" class="indexCols">
	    			<td style="text-align: center;">1</td>
	    			<td><input type='text' name="fieldname[]"></td>
	    			<td><input type='text' name="cname[]"></td>
	    			<td><select name='type[]'>
	    				<option value="varchar">varchar</option>
	    				<option value="char">char</option>
	    				<option value="text">text</option>
	    				<option value="int">int</option>
	    				<option value="tinyint">tinyint</option>
	    				<option value="float">float</option>
	    				<option value="datetime">datetime</option>
	    			</select></td>
	    			<td><input type='text' size="6" name="length[]"></td>
	    			<td><input type='text' size="3" name="defaultvalue[]"></td>
	    			<td>
	    				<input type="checkbox" name="constraint[1][]" value="unsigned">unsigned&nbsp;
						<input type="checkbox" name="constraint[1][]" value="unique">unique&nbsp;
						<input type="checkbox" name="constraint[1][]" value="required">required&nbsp;
						<input type="checkbox" name="constraint[1][]" value="search">search&nbsp;
						<input type="checkbox" name="constraint[1][]" checked="checked" value="isshowonlist">管理列表显示&nbsp;
	    			</td>
	    			<td>
	    			   <button onclick="delCols(1)" type="button" style="padding:3px 5px;" class="btn btn-danger dropdown-toggle" id="addRowbtn">
			              <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>删除
			           </button>
			        </td>
	    		</tr>
				
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

// ===============事件监听STR==================
function saveModels(){
	$.ajax({
		url:"{{url('admin/models/save')}}",
		data:$("#form1").serialize(),
		type:'post',
		dataType:'json',
		success:function(re){
			if(re.result=='success'){
				$(".alert").removeClass('hide');
				$(".alert b").html(re.message);
				setTimeout(function(){
					location.reload(true);
				},3000)
			}else{
				$(".alert").removeClass('hide');
				$(".alert b").html(re.message);
			}
		}
	})
}
// ===============事件监听End==================

var colIndexNum=1;
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
</script> 
@endsection                