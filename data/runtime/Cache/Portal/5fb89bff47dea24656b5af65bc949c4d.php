<?php if (!defined('THINK_PATH')) exit();?>
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
    <link rel="icon" href="/themes/simplebootx/Public/assets/images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/themes/simplebootx/Public/assets/images/favicon.ico" type="image/x-icon">
    <link href="/themes/simplebootx/Public/assets/simpleboot/themes/simplebootx/theme.min.css" rel="stylesheet">
    <link href="/themes/simplebootx/Public/assets/simpleboot/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/themes/simplebootx/Public/assets/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
    <!--[if IE 7]>
    <link rel="stylesheet" href="/themes/simplebootx/Public/assets/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
    <![endif]-->
    <link href="/themes/simplebootx/Public/assets/css/style.css" rel="stylesheet">
    <style>
        /*html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(1);}*/
        #backtotop{position: fixed;bottom: 50px;right:20px;display: none;cursor: pointer;font-size: 50px;z-index: 9999;}
        #backtotop:hover{color:#333}
        #main-menu-user li.user{display: none}
    </style>


<!-- 以下修改 -->
        <link href="/themes/simplebootx/Public/assets/css/slippry/slippry.css" rel="stylesheet">
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
      <link href="/themes/simplebootx/Public/assets/simpleboot/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="/themes/simplebootx/Public/assets/simpleboot/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
      <link href="/themes/simplebootx/Public/assets/simpleboot/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
<!--引入bootstrap库，默认包含  -->
<script type="text/javascript" src="/themes/simplebootx/Public/assets/simpleboot/bootstrap/js/bootstrap.min.js"></script>


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
<link rel="stylesheet" href="/themes/simplebootx/Public/QQ/css/lrtk.css">

<script type="text/javascript" src="/themes/simplebootx/Public/QQ/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/themes/simplebootx/Public/QQ/js/lrtk.js"></script>
    </head>






    <link href="/themes/simplebootx/Public/article/css/article.css" rel="stylesheet">
    <!--  -->
<link href="/themes/simplebootx/Public/article/css/leftcontant.css" rel="stylesheet">
<!--  -->
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
       <a class="brand" href="/"><img src="/themes/simplebootx/Public/assets/images/logo.png"/></a>

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

<img src="/public/images/bag2.jpg" class="big">
    <div class="container">
    <br/>

        <hr>
       <div id='main'>
    <div id="divimg" align="center">
    <img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>" alt="<?php echo ($post_title); ?>" height="450px"  hspace="30">
    </div>

<!-- 测试 -->
     
                        
                            <font class="importtd"><br/><?php echo ($post_content); ?></font>
                       
   
<!-- 测试 -->

    </div>


        </div>
        <div id="nextpage"></div>

        
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

<?php
 @session_start(); $counter = intval(file_get_contents("counter.dat")); if(!$_SESSION['jbxue.com']) { $_SESSION['jbxue.com'] = true; $counter++; $fp = fopen("counter.dat","w"); fwrite($fp, $counter); fclose($fp); } $link=mysql_connect("localhost","root","root"); $db_selected=mysql_select_db("thinkcmf",$link); $result=mysql_query("update cmf_statistics set statistics_number='$counter' where id=1",$link); ?>


<?php echo ($site_tongji); ?>

    <script type="text/javascript">
//全局变量
var GV = {
    ROOT: "/",
    WEB_ROOT: "/",
    JS_ROOT: "public/js/"
};
</script>
   <!-- Placed at the end of the document so the pages load faster -->
   <script src="/public/js/jquery.js"></script>
   <script src="/public/js/wind.js"></script>
   <script src="/themes/simplebootx/Public/assets/simpleboot/bootstrap/js/bootstrap.min.js"></script>
   <script src="/public/js/frontend.js"></script>
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


    </div>
</body>
</html>