<?php if (!defined('THINK_PATH')) exit();?><!-- 将Pure添加到项目 -->
<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">

<style type="text/css">
  .prompt{
    color:red;
  }
  .birthday{
    position: relative;
    top:26px;
  }
  #divbutton{
    margin-top: 30px;
  }
font{
  font-size: 14px;
font-family: "微软雅黑";
}
.relativetop8{
  position: relative;top: -8px;
}
.relativetop18{
  position: relative;top: -18px;
}
#relativetop25{
  position: relative;top: -25px;
}
li{
  list-style-type: none;
  border: 1px;
}
</style>
<div id="top"></div>
<!-- 首页 -->
<!DOCTYPE html>
<!--首页-->
    <html>
    <head>
        <title>康吉诺(北京)科技有限公司</title>
        <meta name="keywords" content="设备零故障管理平台,设备零故障,零故障,设备管理系统,设备诊断,设备综合诊断,康吉诺(北京)科技有限公司,康吉诺" />
        <meta name="description" content="康吉诺（北京）科技有限公司是一家大型的技术服务中心,专注于设备综合诊断,设备管理系统,机械设备状态监测的实现,目前已经和国内大型企业建立了良好的合作关系,并且在各大试点进行推广应用">

<!-- 头部 -->

<?php  function _sp_helloworld(){ echo "hello ThinkCMF!"; } function _sp_helloworld2(){ echo "hello ThinkCMF2!"; } function _sp_helloworld3(){ echo "hello ThinkCMF3!"; } ?>
    <?php $portal_index_lastnews="1,2"; $portal_hot_articles="1,2"; $portal_last_post="1,2"; $tmpl=sp_get_theme_path(); $default_home_slides=array( array( "slide_name"=>"康吉诺(北京)科技有限公司", "slide_pic"=>$tmpl."Public/assets/images/demo/1.jpg", "slide_url"=>"", ), array( "slide_name"=>"康吉诺(北京)科技有限公司", "slide_pic"=>$tmpl."Public/assets/images/demo/2.jpg", "slide_url"=>"", ), array( "slide_name"=>"康吉诺(北京)科技有限公司", "slide_pic"=>$tmpl."Public/assets/images/demo/3.jpg", "slide_url"=>"", ), ); ?>

    <meta name="author" content="潍坊千行信息科技有限公司">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
    <link rel="icon" href="/kjl/themes/simplebootx/Public/assets/images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/kjl/themes/simplebootx/Public/assets/images/favicon.ico" type="image/x-icon">
    <link href="/kjl/themes/simplebootx/Public/assets/simpleboot/themes/simplebootx/theme.min.css" rel="stylesheet">
    <link href="/kjl/themes/simplebootx/Public/assets/simpleboot/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/kjl/themes/simplebootx/Public/assets/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
    <!--[if IE 7]>
    <link rel="stylesheet" href="/kjl/themes/simplebootx/Public/assets/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
    <![endif]-->
    <link href="/kjl/themes/simplebootx/Public/assets/css/style.css" rel="stylesheet">
    <style>
        /*html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(1);}*/
        #backtotop{position: fixed;bottom: 50px;right:20px;display: none;cursor: pointer;font-size: 50px;z-index: 9999;}
        #backtotop:hover{color:#333}
        #main-menu-user li.user{display: none}
    </style>


<!-- 以下修改 -->
        <link href="/kjl/themes/simplebootx/Public/assets/css/slippry/slippry.css" rel="stylesheet">
        <style>
            .caption-wraper{position: absolute;left:50%;bottom:2em;}
            .caption-wraper .caption{
            position: relative;left:-50%;
            background-color: rgba(0, 0, 0, 0.54);
            padding: 0.4em 1em;
            color:#fff;
            -webkit-border-radius: 1.2em;
            -moz-border-radius: 1.2em;
            -ms-border-radius: 1.2em;
            -o-border-radius: 1.2em;
            border-radius: 1.2em;
            }
            @media (max-width: 767px){
                .sy-box{margin: 12px -20px 0 -20px;}
                .caption-wraper{left:0;bottom: 0.4em;}
                .caption-wraper .caption{
                left: 0;
                padding: 0.2em 0.4em;
                font-size: 0.92em;
                -webkit-border-radius: 0;
                -moz-border-radius: 0;
                -ms-border-radius: 0;
                -o-border-radius: 0;
                border-radius: 0;}
            }
        </style>

<!--引入bootstrap库，默认包含  -->
      <link href="/kjl/themes/simplebootx/Public/assets/simpleboot/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="/kjl/themes/simplebootx/Public/assets/simpleboot/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
      <link href="/kjl/themes/simplebootx/Public/assets/simpleboot/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
<!--引入bootstrap库，默认包含  -->
<script type="text/javascript" src="/kjl/themes/simplebootx/Public/assets/simpleboot/bootstrap/js/bootstrap.min.js"></script>


<?php if(is_array($touchdata)): foreach($touchdata as $key=>$vo): ?><input type="hidden" value="<?php echo ($vo["qq"]); ?>" id="qq">
<input type="hidden" value="<?php echo ($vo["phone"]); ?>" id="phone"><?php endforeach; endif; ?>
<style type="text/css">
    #lookmore{
    background-color:#337Ab7;
    color: #fcfcfa;
}
.hotnew{
    border-bottom: 2px solid #337ab7 !important;
}

</style>

<!-- QQ -->
<link rel="stylesheet" href="/kjl/themes/simplebootx/Public/QQ/css/lrtk.css">

<script type="text/javascript" src="/kjl/themes/simplebootx/Public/QQ/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/kjl/themes/simplebootx/Public/QQ/js/lrtk.js"></script>
    </head>





<body class="body-white">

    <style>
  .big{
    height:274px;
   width:100%;
  }
.fontcolor{
  font-size: 16px !important;
  color: black !important;
  font-family:'Microsoft YaHei','Hiragino Sans GB',Helvetica,Arial,'Lucida Grande',sans-serif;
}
#bcaret{
border-top-color: black;
border-bottom-color: black;
}
</style>



<!-- 标题栏 -->
<?php echo hook('body_start');?>
<div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
     <div class="container">
       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a>
       <!-- 侧边栏logo -->
       <a class="brand" href="/kjl/"><img src="/kjl/themes/simplebootx/Public/assets/images/logo.png"/></a>

            <!-- 前台导航 -->
 <div class="container">

                    <ul id="main-menu" class="nav">
                        <li class="li-class">
                        <a href="<?php echo U('Portal/Index/index');?>" class="fontcolor">首页</a>
                        </li>
                        <li class="li-class">
                        <a href="<?php echo U('Portal/About/index');?>" class="fontcolor">关于我们</a>
                        </li>
                        <li class="dropdown li-class">
                        <a href="http://localhost/one/Product"  class="dropdown-toggle fontcolor" data-toggle="dropdown">产品中心 <b class="caret" id="bcaret"></b></a>
                                <ul class="dropdown-menu" style="padding: 0;margin: 0;border: 0;">
                                <li class="li-class">
                                <a href="<?php echo U('Portal/list/index',array('id'=>11));?>" class="fontcolor">硬件</a>
                                </li>
                                <li class="li-class">
                                <a href="<?php echo U('Portal/list/index',array('id'=>10));?>" class="fontcolor">软件</a>
                                </li>
                                </ul>
                          </li>
                        <li class="li-class">
                        <a href="<?php echo U('Portal/list/index?id=1');?>" class="fontcolor">解决方案</a></li>
                        <li class="li-class">
                        <a href="<?php echo U('Portal/list/index',array('id'=>4));?>" class="fontcolor">成功案例</a>
                        </li>
                        <li class="li-class">
                        <a href="<?php echo U('Portal/Join/index');?>" class="fontcolor">加入我们</a>
                        </li>
                        <li class="li-class">
                        <a href="<?php echo U('Portal/Contact/index');?>" class="fontcolor">联系我们</a>
                        </li>
                    </ul>
   </div>
   <!-- 前台导航 -->


   </div>
 </div>
</div>

    <script type="text/javascript">
//全局变量
var GV = {
    ROOT: "/kjl/",
    WEB_ROOT: "/kjl/",
    JS_ROOT: "public/js/"
};
</script>
   <!-- Placed at the end of the document so the pages load faster -->
   <script src="/kjl/public/js/jquery.js"></script>
   <script src="/kjl/public/js/wind.js"></script>
   <script src="/kjl/themes/simplebootx/Public/assets/simpleboot/bootstrap/js/bootstrap.min.js"></script>
   <script src="/kjl/public/js/frontend.js"></script>
<script>
$(function(){
	$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
	
	$("#main-menu li.dropdown").hover(function(){
		$(this).addClass("open");
	},function(){
		$(this).removeClass("open");
	});
	
	$.post("<?php echo U('user/index/is_login');?>",{},function(data){
		if(data.status==1){
			if(data.user.avatar){
				$("#main-menu-user .headicon").attr("src",data.user.avatar.indexOf("http")==0?data.user.avatar:"<?php echo sp_get_image_url('[AVATAR]','!avatar');?>".replace('[AVATAR]',data.user.avatar));
			}
			
			$("#main-menu-user .user-nicename").text(data.user.user_nicename!=""?data.user.user_nicename:data.user.user_login);
			$("#main-menu-user li.login").show();
			
		}
		if(data.status==0){
			$("#main-menu-user li.offline").show();
		}
		
		/* $.post("<?php echo U('user/notification/getLastNotifications');?>",{},function(data){
			$(".nav .notifactions .count").text(data.list.length);
		}); */
		
	});	
	;(function($){
		$.fn.totop=function(opt){
			var scrolling=false;
			return this.each(function(){
				var $this=$(this);
				$(window).scroll(function(){
					if(!scrolling){
						var sd=$(window).scrollTop();
						if(sd>100){
							$this.fadeIn();
						}else{
							$this.fadeOut();
						}
					}
				});
				
				$this.click(function(){
					scrolling=true;
					$('html, body').animate({
						scrollTop : 0
					}, 500,function(){
						scrolling=false;
						$this.fadeOut();
					});
				});
			});
		};
	})(jQuery); 
	
	$("#backtotop").totop();
	
	
});
</script>


    <script src="/kjl/themes/simplebootx/Public/assets/js/slippry.min.js"></script>
    <script src="/kjl/themes/simplebootx/Public/assets/js/jquery.validate.min.js"></script>
<img src="/kjl/public/images/bag5.jpg" class="big">


    <ul class="nav nav-list">

         <li class="divider"></li>

    </ul>
      <link href="/kjl/themes/simplebootx/Public/join/css/apply.css" rel="stylesheet">
      <link href="/kjl/themes/simplebootx/Public/join/css/form.css" rel="stylesheet">
      <link href="/kjl/themes/simplebootx/Public/join/css/span.css" rel="stylesheet">
      <link href="/kjl/themes/simplebootx/Public/join/css/divli.css" rel="stylesheet">


<div id="main">
<div class="alert alert-success"><b><font>您要申请的职位:</b> <?php echo ($name); ?></font></div>
<p class="lead"><h4><b><font>个人基本信息</font></b></h4></p>
    <ul class="nav nav-list">
         <li class="divider"></li>
    </ul>
<form role="form" id="applyForm"  method="post"  action="<?php echo U('Portal/Join/preservation');?>" enctype="multipart/form-data">
<input type="hidden" name="joinid" value="<?php echo ($joinid); ?>">
<input type="hidden" name="position" value="<?php echo ($name); ?>">

<div id="divmain">

    <div id="divleft">

          <li>
                                <span><font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;姓名:</font></span><span id="span1">
                              <font class="xinfont">*</font></span>
                               <input  type="text" class="baseinput" id="name" name="name"><font id="nameprompt" class="prompt"></font>
          </li>
          <li>
                              <span><font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;性别:</font></span><span id="span2">
                              <font class="xinfont">*</font></span>
                              <select id="sex" name="sex" class="selectheight" >
                                  <option selected="selected">请选择:</option>
                                  <option value="1">男</option>
                                  <option value="0">女</option>
                              </select>
                              <font id="sexprompt" class="prompt"></font>
          </li>
          <li>
                            <span><font>出生日期:</font></span><span id="span3">
                            <font class="xinfont">*</font></span>
                            <span id="spanselect">
                              <select id="sel_year" name="year"></select>年 <!-- style="position:absolute;top:-22px;left:0px"90 150 -->
                              <select id="sel_month" name="month"></select>月
                              <select id="sel_day" name="day"></select>日
                          </span>
                            <font id="sel_yearprompt" class="prompt birthday"></font>
                            <font id="sel_monthprompt" class="prompt  birthday"></font>
                            <font id="sel_dayprompt" class="prompt  birthday"></font>
          </li>
          <li>
                            <span><font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;年龄:</font></span><span id="span3">
                            <font class="xinfont">&nbsp;</font></span>
                            <input  type="text" class="baseinput" id="age" name="age" style="position: relative;left: 2px;">
                            <font id="ageprompt" class="prompt"></font>
          </li>
           <li>
                          <span><font>通讯地址:</font></span><span id="span4">
                          <font class="emptyfont">&nbsp;</font></span>
                          <input  type="text" class="baseinput" id="message" name="message">
                          <font id="messageprompt" class="prompt"></font>
          </li>
           <li>
                          <span><font>联系电话:</font></span><span id="span5">
                        <font class="emptyfont">&nbsp;</font></span>
                        <input  type="text" class="baseinput"  id="phone" name="phone">
                        <font id="phoneprompt" class="prompt"></font>
          </li>
           <li>
                      <span><font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;手机:</font></span><span id="span6">
                    <font class="xinfont">*</font></span>
                    <input  type="text" class="baseinput"  id="cellphone" name="cellphone">
                  <font id="cellphoneprompt" class="prompt"></font>
          </li>

    </div>
    <div id="divright">
          <li>
                    <span><font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QQ:</font></span><span id="span7">
                  <font class="emptyfont">&nbsp;</font></span>
                    <input  type="text" class="baseinput" id="QQ" name="QQ">
                    <font id="QQprompt" class="prompt"></font>
          </li>
          <li>
                      <span><font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;邮箱:</font></span><span id="span8">
                      <font class="xinfont">*</font></span></span>
                       <input type="email" class="form-control"  id="email" name="mailbox">
                       <font id="emailprompt" class="prompt"></font>
          </li>
          <li>
                          <span><font>&nbsp;&nbsp;&nbsp;婚姻状况:</font></span><span id="span9">
                        <font class="emptyfont">&nbsp;</font></span>
                <select  class="selectheight" id="marriage" name="marriage">
                   <option selected="selected">请选择:</option>
                    <option value="0">未婚:</option>
                    <option value="1">已婚:</option>
                    <option value="2">其他:</option>
                </select>
                <font id="marriageprompt" class="prompt"></font>
          </li>
          <li>
                          <span><font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;身高:</font></span><span id="span10">
                <font class="emptyfont">&nbsp;</font></span>
                <input  type="text" class="baseinput" id="height" name="height">
                <span style="margin-right: 5px;">cm</span>
                <font id="heightprompt" class="prompt"></font>
          </li>
           <li>
                    <span><font>户口所在地:</font></span><span id="span11">
                  <font class="emptyfont">&nbsp;</font></span>
                  <input  type="text" class="baseinput" id="penetration" name="penetration">
                  <font id="penetrationprompt" class="prompt"></font>
          </li>
           <li>
                  <span><font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;籍贯:</font></span><span id="span12">
                <font class="emptyfont">&nbsp;</font></span>
              <td class="importtd relativetop18">
                <input  type="text" class="baseinput" id="present" name="present">
                <font id="presentprompt" class="prompt"></font>
          </li>
           <li>
                  <span><font>&nbsp;&nbsp;&nbsp;&nbsp;个人照片:</font></span><span id="span14">
                  <font class="emptyfont">&nbsp;</font></span>
                  <input type="file" id="picture" name="picture" style="position: relative;top: -25px;left:90px;">
                  <font id="pictureprompt" class="prompt"></font>
                  <font style="position:relative;top:-20px;left:90px;">请选择您的照片</font>
          </li>
    </div>
</div>



  <p class="lead"><h6><b><font>教育背景</b></h6></p>
    <ul class="nav nav-list">
         <li class="divider"></li>
    </ul>
<!-- ////////////////////////////////////////////////////////////////// -->
<div id="divbaseleft">

          <li>
              <span><font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;学历:</font></span><span id="span15">
              <font class="xinfont">*</font></span></span>
              <select  class="selectheight" id="education" name="education">
                 <option selected="selected">请选择:</option>
                  <option value="0">中专及以上</option>
                  <option value="1">高中</option>
                  <option value="2">专科</option>
                  <option value="3">本科</option>
                  <option value="4">硕士</option>
                  <option value="5">博士及以上</option>
              </select>
              <font id="educationprompt" class="prompt"></font>
          </li>
          <li>
                <span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;专业:</span></span><span id="span16">
                <font class="xinfont">*</font></span></span>
                <input  type="text" class="baseinput" id="professional" name="professional">
                <font id="professionalprompt" class="prompt"></font>
          </li>
          <li>
                <span><font>毕业院校:</font></span><span id="span17">
                <font class="emptyfont">&nbsp;</font></span></span>
                <input  type="text" class="baseinput" id="school" name="school">
                 <font id="schoolprompt" class="prompt"></font>
          </li>

</div>
<!-- //////////////////////////////////////////////////////////////////// -->


   <p class="lead"><h6><b><font>工作经历</b></h6></p>
    <ul class="nav nav-list">
         <li class="divider"></li>
    </ul>

<!-- ////////////////////////////////////////////////////////////////// -->
<div id="divotherleft">

          <li>
              <span><font>工作年限:</font></span><span id="span18">
              <font class="xinfont">*</font></span>
              <select  class="selectheight" id="workingyear" name="workingyear">
                   <option selected="selected">请选择:</option>
                  <option value="0">应届毕业生</option>
                  <option value="1">在校大学生</option>
                  <option value="2" >1年以上</option>
                  <option value="3">2年以上</option>
                  <option value="4">3年以上</option>
                  <option value="5">5年以上</option>
                  <option value="6">8年以上</option>
                  <option value="7">10年以上</option>
              </select>
              <font id="workingyearprompt" class="prompt"></font>
          </li>
          <li>
               <span><font>工作性质:</font></span>
            <span id="span19"><font class="emptyfont">&nbsp;</font></span>
              <select  class="selectheight" id="quality" name="quality">
                  <option selected="selected">请选择:</option>
                  <option value="0">全职</option>
                  <option value="1">兼职</option>
                  <option value="2">临时</option>
                  <option value="3">不限</option>
            </select>
            <font id="qualityprompt" class="prompt"></font>
          </li>
          <li>
                 <span><font>期望月薪:</font></span><span id="span20">
                <font class="emptyfont">&nbsp;</font></span>
                <input  type="text" class="baseinput" id="salary" name="salary">
                <font id="salaryprompt" class="prompt"></font>
          </li>
          <li>
               <span><font>工作经验:</font></span><span id="span21">
                <font class="emptyfont">&nbsp;</font></span>
                <div class="form-group">
              <textarea class="form-control" rows="5" id="experience" name="experience"></textarea>
              </div>
          </li>
</div>

<!-- //////////////////////////////////////////////////////////////////// -->
  <p class="lead"><h6><b><font>其他</b></h6></p>
    <ul class="nav nav-list">
         <li class="divider"></li>
    </ul>

<div id="divverifyleft">

          <li>
             <td class="basetd">
              <span><font>&nbsp;&nbsp;&nbsp;&nbsp;验证码:</font></span><span id="span22">
              <font class="xinfont">*</font></span>
            </td>
            <td>
              <input  type="text" id="verify" name="verify"><img src="<?php echo U('Portal/Join/verify',array('time',date()));?>" onclick='this.src=this.src+"?"+Math.random()' id="cerifyimg">
          </li>
</div>

 <div id="divbutton">
 <button type="button" class="btn btn-default" style="margin-left: 100px;margin-right: 30px;" id="submit_button"  data-toggle="modal" data-target="#myModal"><font>提交</font></button>
 <button type="button" class="btn btn-default" onclick="window.history.go(-1);"><font>取消</font></button>

    </div>

  </form>


  
<br>
<hr>
<?php echo hook('footer');?>
<div id="footer" align="center">

    <div class="links">
        @2015 版权所有 康吉诺(北京)科技有限公司 地址：北京市海淀区苏州街1号 电话：010-82614047

        <br/><br><br>
    </div>
</div>
<div id="backtotop">
    <i class="fa fa-arrow-circle-up"></i>
</div>



<?php echo ($site_tongji); ?>

      </div>


  
  <script type="text/javascript">
  (function($){$.extend({ms_DatePicker:function(options){var defaults={YearSelector:"#sel_year",MonthSelector:"#sel_month",DaySelector:"#sel_day",FirstText:"--",FirstValue:0};var opts=$.extend({},defaults,options);var $YearSelector=$(opts.YearSelector);var $MonthSelector=$(opts.MonthSelector);var $DaySelector=$(opts.DaySelector);var FirstText=opts.FirstText;var FirstValue=opts.FirstValue;var str="<option value=\""+FirstValue+"\">"+FirstText+"</option>";$YearSelector.html(str);$MonthSelector.html(str);$DaySelector.html(str);var yearNow=new Date().getFullYear();var yearSel=$YearSelector.attr("rel");for(var i=yearNow;i>=1950;i--){var sed=yearSel==i?"selected":"";var yearStr="<option value=\""+i+"\" "+sed+">"+i+"</option>";$YearSelector.append(yearStr);}
  var monthSel=$MonthSelector.attr("rel");for(var i=1;i<=12;i++){var sed=monthSel==i?"selected":"";var monthStr="<option value=\""+i+"\" "+sed+">"+i+"</option>";$MonthSelector.append(monthStr);}
  function BuildDay(){if($YearSelector.val()==0||$MonthSelector.val()==0){$DaySelector.html(str);}else{$DaySelector.html(str);var year=parseInt($YearSelector.val());var month=parseInt($MonthSelector.val());var dayCount=0;switch(month){case 1:case 3:case 5:case 7:case 8:case 10:case 12:dayCount=31;break;case 4:case 6:case 9:case 11:dayCount=30;break;case 2:dayCount=28;if((year%4==0)&&(year%100!=0)||(year%400==0)){dayCount=29;}
  break;default:break;}
  var daySel=$DaySelector.attr("rel");for(var i=1;i<=dayCount;i++){var sed=daySel==i?"selected":"";var dayStr="<option value=\""+i+"\" "+sed+">"+i+"</option>";$DaySelector.append(dayStr);}}}
  $MonthSelector.change(function(){BuildDay();});$YearSelector.change(function(){BuildDay();});if($DaySelector.attr("rel")!=""){BuildDay();}}});})(jQuery);var is={ie:navigator.appName=='Microsoft Internet Explorer',java:navigator.javaEnabled(),ns:navigator.appName=='Netscape',ua:navigator.userAgent.toLowerCase(),version:parseFloat(navigator.appVersion.substr(21))||parseFloat(navigator.appVersion),win:navigator.platform=='Win32'}
  is.mac=is.ua.indexOf('mac')>=0;if(is.ua.indexOf('opera')>=0){is.ie=is.ns=false;is.opera=true;}
  if(is.ua.indexOf('gecko')>=0){is.ie=is.ns=false;is.gecko=true;}
  </script>
  


  <script>
  $(function () {
    $.ms_DatePicker({
              YearSelector: ".sel_year",
              MonthSelector: ".sel_month",
              DaySelector: ".sel_day"
      });
    $.ms_DatePicker();
  });
  </script>

<!-- 表单验证代码 -->
<script type="text/javascript">
$(function(){
                var name_flag = false;
                var sex_flag = false;
                var sel_year_flag = false;
                var sel_month_flag = false;
                var sel_day_flag = false;
                var cellphone_flag = false;
                var email_flag = false;
                var education_flag = false;
                var professional_flag = false;
                var workingyear_flag = false;
          //姓名判断
          $('#name').blur(function(){
                        //姓名检测
                          $('#nameprompt').empty();
                      if($(this).val().length < 2 && $(this).val().length>0){
                        $('#nameprompt').append('姓名不能少于2个字符!');
                      }else if ($(this).val().length >12) {
                        $('#nameprompt').append('姓名不能大于12个字符!');
                      }else if($(this).val()==''){
                        $('#nameprompt').append('姓名不能为空!');
                    }else{
                      name_flag = true;
                    }
          });

          //性别自身判断
            $('#sex').blur(function(){
                  //性别判断
                  if($(this).find("option:selected").text()=='请选择:'){
                      $('#sexprompt').empty();
                       $('#sexprompt').append('请选择性别!');
                    }else{
                      $('#sexprompt').empty();
                      sex_flag = true;
                    };
                    //姓名判断
                      $('#nameprompt').empty();
                      if($('#name').val().length < 2 && $('#name').val().length>0){
                        $('#nameprompt').append('姓名不能少于2个字符!');
                      }else if ($('#name').val().length >12) {
                        $('#nameprompt').append('姓名不能大于12个字符!');
                      }else if($('#name').val()==''){
                        $('#nameprompt').append('姓名不能为空!');
                    }
            });

          //年份判断
        $('#sel_year').blur(function(){
                    //性别判断
                    if($('#sex').find("option:selected").text()=='请选择:'){
                      $('#sexprompt').empty();
                       $('#sexprompt').append('请选择您的性别!');
                    }else{
                      $('#sexprompt').empty();
                  }
                    //自身改变
                     if($(this).blur("option:selected").text()=='--'){
                      $('#sel_yearprompt').empty();
                       $('#sel_yearprompt').append('请选择您的出生年份!');
                    }else{
                      $('#sel_yearprompt').empty();
                      sel_year_flag = true;
                    };
        });

      //月份判断sel_yearprompt
      $('#sel_month').blur(function(){
                  //年份判断
                  if($('#sel_year').find("option:selected").text()=='--'){
                      $('#sel_yearprompt').empty();
                       $('#sel_yearprompt').append('请选择您的出生年份!');
                    }else{
                      $('#sel_yearprompt').empty();
                    };
                  //自身判断
                   if($(this).blur("option:selected").text()=='--'){
                      $('#sel_monthprompt').empty();
                       $('#sel_monthprompt').append('请选择您的出生月份!');
                    }else{
                      $('#sel_monthprompt').empty();
                      sel_month_flag = true;
                    };
      });

      //日期判断sel_day
      $('#sel_day').blur(function(){
                  //月份判断
                  if($('#sel_month').find("option:selected").text()=='--'){
                      $('#sel_monthprompt').empty();
                       $('#sel_monthprompt').append('请选择您的出生月份!');
                    }else{
                      $('#sel_monthprompt').empty();
                    };
                  //自身判断
                   if($(this).blur("option:selected").text()=='--'){
                      $('#sel_monthprompt').empty();
                       $('#sel_monthprompt').append('请选择您的出生日期!');
                    }else{
                      $('#sel_monthprompt').empty();
                      sel_day_flag = true;
                    };
      });

      //手机判断
       $('#cellphone').blur(function(){
                    if($(this).val().search(/^1[3|4|5|7|8]\d{9}$/)==-1){
                        $('#cellphoneprompt').empty();
                        $('#cellphoneprompt').append('请输入正确的手机号码格式');
                    }else{
                        $('#cellphoneprompt').empty();
                        cellphone_flag = true;
                    }
     });
      //邮箱判断
      $('#email').blur(function(){
              //邮箱判断
                 if (/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test($(this).val()) == false) {
                        $('#emailprompt').empty();
                        $('#emailprompt').append('请输入正确的邮箱格式!');
                    }else{
                        $('#emailprompt').empty();
                        email_flag=true;
                    }
              //手机判断
               if($('#cellphone').val().search(/^1[3|4|5|7|8]\d{9}$/)==-1){
                        $('#cellphoneprompt').empty();
                        $('#cellphoneprompt').append('请输入正确的手机号码格式');
                    }else{
                        $('#cellphoneprompt').empty();
                    }
      });

      //学历判断
            $('#education').blur(function(){
                  //自身判断
                  if($(this).find("option:selected").text()=='请选择:'){
                      $('#educationprompt').empty();
                       $('#educationprompt').append('请选择您的学历!');
                    }else{
                      $('#educationprompt').empty();
                      education_flag = true;
                    };
                    //邮箱判断
                       if (/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test($('#email').val()) == false) {
                        $('#emailprompt').empty();
                        $('#emailprompt').append('请输入正确的邮箱格式!');
                    }else{
                        $('#emailprompt').empty();
                    }
            });

          //专业判断
        $('#professional').blur(function(){
                    //学历判断
                    if($('#education').find("option:selected").text()=='请选择:'){
                      $('#educationprompt').empty();
                       $('#educationprompt').append('请选择您的学历!');
                    }else{
                      $('#educationprompt').empty();
                    };
                    //自身改变
                     $('#professionalprompt').empty();
                      if($(this).val().length < 2 && $(this).val().length>0){
                        $('#professionalprompt').append('专业不能少于2个字符!');
                      }else if ($(this).val().length >12) {
                        $('#professionalprompt').append('专业不能大于12个字符!');
                      }else if($(this).val()==''){
                        $('#professionalprompt').append('专业不能为空!');
                    }else{
                      professional_flag = true;
                    }
        });

      //工作年限
       $('#workingyear').blur(function(){
                  //自身判断
                  if($(this).find("option:selected").text()=='请选择:'){
                      $('#workingyearprompt').empty();
                       $('#workingyearprompt').append('请选择您的学历!');
                    }else{
                      $('#workingyearprompt').empty();
                      workingyear_flag = true;
                    };
                    //专业判断
                     $('#professionalprompt').empty();
                      if($('#profession').val().length < 2 && $('#profession').val().length>0){
                        $('#professionalprompt').append('专业不能少于2个字符!');
                      }else if ($('#profession').val().length >12) {
                        $('#professionalprompt').append('专业不能大于12个字符!');
                      }else if($('#profession').val()==''){
                        $('#professionalprompt').append('专业不能为空!');
                    }
            });



      // 后台进行

      //提交验证
       $('#submit_button').click(function(){
                    if(name_flag && sex_flag && sel_year_flag && sel_month_flag && sel_day_flag && cellphone_flag && email_flag && education_flag && professional_flag && workingyear_flag){
                        $('#applyForm').submit();
                           $(':input','#applyForm')
                .not(':button, :submit, :reset')
                .val('')
                .removeAttr('checked')
                .removeAttr('selected');
                    }else{

                      $('#identifier').modal(options);
                // window.location.reload();//刷新当前页面
                  $(':input','#applyForm')
                .not(':button, :submit, :reset')
                .val('')
                .removeAttr('checked')
                .removeAttr('selected');
                        return false;
                    }
                });

});
</script>

<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="position: relative;top:-500px;left:50%;width: 600px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">温馨提示</h4>
            </div>
            <div class="modal-body"><font color="red">您未按要求填写表单，申请失败，请重新填写！</font></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>
 -->