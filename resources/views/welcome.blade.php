<!DOCTYPE html>
  <html>
    <head>
	<meta charset="utf-8">
		  <!--使浏览器知道这是为M版优化的-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="shortcut icon" href="http://cmosshenzhen.oss-cn-shenzhen.aliyuncs.com/LOGO/key.png" type="image/x-icon">
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="https://cmosshenzhen.oss-cn-shenzhen.aliyuncs.com/JSPCSS/materialize.min.css"  media="screen,projection"/>
		<script src="https://cmosshenzhen.oss-cn-shenzhen.aliyuncs.com/JSPJSS/jquery-ui-1.10.4.min.js"></script>
		
		<link href="http://cmosshenzhen.oss-cn-shenzhen.aliyuncs.com/JSPCSS/material-components-web.min.css" rel="stylesheet">
		<script src="http://cmosshenzhen.oss-cn-shenzhen.aliyuncs.com/JSPCSS/material-components-web.min.js"></script>
<!--		与原来的MD插件冲突，视情况可能移除-->

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">

		</script>
		
		<style>
			body{
				background:#eee;
				height: 100%;
				width: 100%;
        font-family: Roboto Mono;
        font-style: normal;
        font-weight: 500;

			}
		  html{
			  height:100%;
			}
            .zhuangjinleft{
                display: inline; 
                 float: left;
            }
             .zhuangjinright{
                display: inline; 
                 float: right; 
            }
            .top{
                background: #eee
            }
            .block {
                width: 100px;
                height: 80px;
                margin: 15px;
                padding: 1.5rem;
                border: 1px solid #8470FF;
                display: inline-block; 
                /* div的默认的display为block，块级元素，这也是导致div默认竖向排列的原因 */
            }
            
     

            

            
			
		</style>
		<title>首页-校小评</title>
    </head>

    <body>
		
		
		
	 <div class="row">
		 
    <div id="header">
        
        
          <div class="valign-wrapper" style="background: #448aff; height: 64px;">
            <div class=" container">
            <h5 class="valign white-text">校小评-新兴的学校评分系统
              <i class="material-icons right">account_circle</i> 
              <i class="material-icons right">search</i>
            </h5>
          </div>
          </div>
        </div>
         
  
         
<!--         ====================================================================================================================header-->
          <!--			  轮播图组件，记得JQ初始化-->
<!--         <div style="padding-top:15px;">-->
			  <div class="slider card">
			   <ul class="slides valign-wrapper" >
				   <li>
					   <img src="http://cmosshenzhen.oss-cn-shenzhen.aliyuncs.com/PHPIC/s1.jpg" > <!-- random image -->
					   <div class="caption center-align">
					   </div>
				   </li>
      
				   <li>
					   <img src="http://cmosshenzhen.oss-cn-shenzhen.aliyuncs.com/PHPIC/s2.jpg"> <!-- random image -->
					   <div class="caption left-align">
					   </div>
				   </li>
      
				   <li  class="">
					   <img src="http://cmosshenzhen.oss-cn-shenzhen.aliyuncs.com/PHPIC/s3.jpg"> <!-- random image -->
					   <div class="caption right-align">
					   </div>
				   </li>
      
				   <li class="">
					   <img src="http://cmosshenzhen.oss-cn-shenzhen.aliyuncs.com/PHPIC/s4.jpg"> <!-- random image -->
					   <div class="caption center-align">
					   </div>
				   </li>
				   
			   </ul>
			  </div>
            
<!--			  轮播图组件，记得JQ初始化-->
         
<!--         ====================================================================================================================shutter-->
         
        <div class="row" style="background: url('http://cmosshenzhen.oss-cn-shenzhen.aliyuncs.com/PHPIC/zjl.png');height: 40px;width: 100%;">
         
         </div>
		 
<!--
        <div class="row container" style="background: url('zjl.png');height: 40px;width: 100%;">
         
         </div>
-->

<!--		 ========================================================================================== main-->
         <div class="row container" style="padding:0px; margin-top: 26px;"> 
<!--             margin是上右下左-->
         <div>
           <h5 class="center-align">这个应该居中对齐</h5>
          </div>
<!--		 ========================================================================================== MAIN title顶蓝线-->    
<div class="" style="background: #448aff;height: 3px;width: 100%; margin-bottom: 24px;"></div>
<!--		 ==========================================================================================  MAIN title顶蓝线-->
           <div class="main col s6">

               <div class="col s3 white-text block " style="background-color: #448aff;">
                <br> 
                <h5>院校库
                  <i class="material-icons right">account_circle</i> 
                </h5>
                <br><br>
              </div>

              <div class="col s3 white-text block" style="background-color: #448aff;">
                <br> 
                <h5>院校库
                  <i class="material-icons right">account_circle</i> 
                </h5>
                <br><br>
              </div>

              <div class="col s3 white-text block" style="background-color: #448aff;">
                <br> 
                <h5>院校库
                  <i class="material-icons right">account_circle</i> 
                </h5>
                <br><br>
              </div>

              <div class="col s3 white-text block" style="background-color: #448aff;">
                <br> 
                <h5>院校库
                  <i class="material-icons right">account_circle</i> 
                </h5>
                <br><br>
              </div>

            
               

             </div>
            
         </div>
         
<!--		 ========================================================================================== 学校名字滚动盒子顶蓝线-->    
         <div class="row container" style="background: #448aff;height: 3px;width: 100%; margin-bottom: 24px;">
         </div>
<!--		 ========================================================================================== 学校名字滚动盒子-->
         <div class="row container">
         
             <div class="col s12" style="background: #f9f9f9; height: 240px; margin-bottom: 24px;" > </div>
             
         </div>
<!--		 ========================================================================================== 政策信息文件面板顶蓝线-->    
         <div class="row container" style="background: #448aff;height: 3px;width: 100%; margin-bottom: 0px;">
         </div>
<!--		 ========================================================================================== 政策信息文件面板-->
         <div class="row container">
         
             <div class="col s12" style="background: #f9f9f9; height: 1080px;" > </div>
             
         </div>
<!--		 ========================================================================================== 底部短壮锦-->
        <div class="row container" style="background: url('\images\1.jpg');height: 40px;width: 100%;"></div>
<!--		 ========================================================================================== 页脚-->
             </div>
      </div>
		
		<footer class="page-footer col s12 light-blue darken-1" style="margin-top:100px;">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">校小评 - 致力于学校宣传</h5>
                <p class="grey-text text-lighten-4">帮助每个学生选到合适的学校，是我们的初衷</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">友情链接</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="http://skxmft.fun" target="_blank">GXEEA-广西招生考试院</a></li> 
                    <li><a class="grey-text text-lighten-3" href="http://skxmft.fun" target="_blank">广西壮族自治区教育厅</a></li> 
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2021 Copyright 南宁市万物科技发展有限公司 ◀  <i>未经许可 禁止复制、镜像</i>
            <a class="grey-text text-lighten-4 right" href="#!">桂ICP备 2020008666号</a>
            </div>
          </div>
     </footer>     
<!--		 ========================================================================================== 页脚结束-->
		
      <!--Import jQuery before materialize.js-->
     <script src="https://cmosshenzhen.oss-cn-shenzhen.aliyuncs.com/JSPJSS/jquery-1.9.0.min.js"></script>
      <script type="text/javascript" src="https://cmosshenzhen.oss-cn-shenzhen.aliyuncs.com/JSPJSS/materialize.min.js"></script>
		<script type="text/javascript">
		 $(document).ready(function(){
      $('.slider').slider({full_width: true});
      $('.slider').slider({interval: 5000});
      $('.slider').slider({height: 600});
             
             
    });
		</script>
    </body>
  </html>