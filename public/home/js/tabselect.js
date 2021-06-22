function scrollDoor(){
}
scrollDoor.prototype = {
	sd : function(menus,divs,openClass,closeClass){
		var _this = this;
		if(menus.length != divs.length)
		{
			alert("菜单层数量和内容层数量不一样!");
			return false;
		}				
		for(var i = 0 ; i < menus.length ; i++)
		{	
			_this.$(menus[i]).value = i;				
			_this.$(menus[i]).onmouseover = function(){
					
				for(var j = 0 ; j < menus.length ; j++)
				{						
					_this.$(menus[j]).className = closeClass;
					_this.$(divs[j]).style.display = "none";
				}
				_this.$(menus[this.value]).className = openClass;	
				_this.$(divs[this.value]).style.display = "block";				
			}
		}
		},
	$ : function(oid){
		if(typeof(oid) == "string")
		return document.getElementById(oid);
		return oid;
	}
}
//经济管理--左一
$(document).ready(function(){
	var SDmodel = new scrollDoor();
	SDmodel.sd(["jjglla_sub1","jjglla_sub2"],["jjglla_c1","jjglla_c2"],"jjglla_hota","jjglla_hotb");
})
//经济管理--左二
$(document).ready(function(){
	var SDmodel = new scrollDoor();
	SDmodel.sd(["jjgllb_sub1","jjgllb_sub2"],["jjgllb_c1","jjgllb_c2"],"jjglla_hota","jjglla_hotb");
})
//经济管理--中一
$(document).ready(function(){
	var SDmodel = new scrollDoor();
	SDmodel.sd(["jjgllc_sub1","jjgllc_sub2"],["jjgllc_c1","jjgllc_c2"],"jjglla_hota","jjglla_hotb");
})
//经济管理--中二
$(document).ready(function(){
	var SDmodel = new scrollDoor();
	SDmodel.sd(["jjglld_sub1","jjglld_sub2"],["jjglld_c1","jjglld_c2"],"jjglla_hota","jjglla_hotb");
})
//经济管理--右一
$(document).ready(function(){
	var SDmodel = new scrollDoor();
	SDmodel.sd(["jjglle_sub1","jjglle_sub2"],["jjglle_c1","jjglle_c2"],"jjglla_hota","jjglla_hotb");
})



//人文社科类--左一
$(document).ready(function(){
	var SDmodel = new scrollDoor();
	SDmodel.sd(["jjgllf_sub1","jjgllf_sub2"],["jjgllf_c1","jjgllf_c2"],"jjglla_hota","jjglla_hotb");
})
//人文社科类--中一
$(document).ready(function(){
	var SDmodel = new scrollDoor();
	SDmodel.sd(["jjgllg_sub1","jjgllg_sub2"],["jjgllg_c1","jjgllg_c2"],"jjglla_hota","jjglla_hotb");
})
//人文社科类--右一
$(document).ready(function(){
	var SDmodel = new scrollDoor();
	SDmodel.sd(["jjgllh_sub1","jjgllh_sub2","jjgllh_sub3"],["jjgllh_c1","jjgllh_c2","jjgllh_c3"],"jjglla_hota","jjglla_hotb");
})




//理科--左一
$(document).ready(function(){
	var SDmodel = new scrollDoor();
	SDmodel.sd(["jjglli_sub1","jjglli_sub2"],["jjglli_c1","jjglli_c2"],"jjglla_hota","jjglla_hotb");
})
//理科--左二
$(document).ready(function(){
	var SDmodel = new scrollDoor();
	SDmodel.sd(["jjgllj_sub1"],["jjgllj_c1"],"jjglla_hota","jjglla_hotb");
})
//理科--中一
$(document).ready(function(){
	var SDmodel = new scrollDoor();
	SDmodel.sd(["jjgllk_sub1","jjgllk_sub2"],["jjgllk_c1","jjgllk_c2"],"jjglla_hota","jjglla_hotb");
})
//理科--中二
$(document).ready(function(){
	var SDmodel = new scrollDoor();
	SDmodel.sd(["jjglll_sub1"],["jjglll_c1"],"jjglla_hota","jjglla_hotb");
})

//理科--右一
$(document).ready(function(){
	var SDmodel = new scrollDoor();
	SDmodel.sd(["jjgllm_sub1","jjgllm_sub2","jjgllm_sub3"],["jjgllm_c1","jjgllm_c2","jjgllm_c3"],"jjglla_hota","jjglla_hotb");
})


//西药学--左一
$(document).ready(function(){
	var SDmodel = new scrollDoor();
	SDmodel.sd(["jjglln_sub1","jjglln_sub2"],["jjglln_c1","jjglln_c2"],"jjglla_hota","jjglla_hotb");
})
//西药学--中一
$(document).ready(function(){
	var SDmodel = new scrollDoor();
	SDmodel.sd(["jjgllo_sub1","jjgllo_sub2"],["jjgllo_c1","jjgllo_c2"],"jjglla_hota","jjglla_hotb");
})
//西药学--右一
$(document).ready(function(){
	var SDmodel = new scrollDoor();
	SDmodel.sd(["jjgllp_sub1","jjgllp_sub2"],["jjgllp_c1","jjgllp_c2"],"jjglla_hota","jjglla_hotb");
})




//教育类--左一
$(document).ready(function(){
	var SDmodel = new scrollDoor();
	SDmodel.sd(["jjgllq_sub1"],["jjgllq_c1"],"jjglla_hota","jjglla_hotb");
})
//教育类--左二
$(document).ready(function(){
	var SDmodel = new scrollDoor();
	SDmodel.sd(["jjgllr_sub1"],["jjgllr_c1"],"jjglla_hota","jjglla_hotb");
})
//教育类--中一
$(document).ready(function(){
	var SDmodel = new scrollDoor();
	SDmodel.sd(["jjglls_sub1","jjglls_sub2","jjglls_sub3"],["jjglls_c1","jjglls_c2","jjglls_c3"],"jjglla_hota","jjglla_hotb");
})
//教育类--中二
$(document).ready(function(){
	var SDmodel = new scrollDoor();
	SDmodel.sd(["jjgllt_sub1","jjgllt_sub2"],["jjgllt_c1","jjgllt_c2"],"jjglla_hota","jjglla_hotb");
})

//教育类--右一
$(document).ready(function(){
	var SDmodel = new scrollDoor();
	SDmodel.sd(["jjgllu_sub1","jjgllu_sub2"],["jjgllu_c1","jjgllu_c2"],"jjglla_hota","jjglla_hotb");
})

//vip期刊
$(document).ready(function(){
	var SDmodel = new scrollDoor();
	SDmodel.sd(["vip_sub1","vip_sub2","vip_sub3"],["vip_c1","vip_c2","vip_c3"],"vip_hota","vip_hotb");
})

//合作期刊
$(document).ready(function(){
	var SDmodel = new scrollDoor();
	SDmodel.sd(["hezuo_sub1","hezuo_sub2","hezuo_sub3"],["hezuo_c1","hezuo_c2","hezuo_c3"],"hezuo_hota","hezuo_hotb");
})