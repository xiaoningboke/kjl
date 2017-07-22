<?php if (!defined('THINK_PATH')) exit();?><!-- 后台首页 -->
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Set render engine for 360 browser -->
	<meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->

	<link href="/kjl/public/simpleboot/themes/<?php echo C('SP_ADMIN_STYLE');?>/theme.min.css" rel="stylesheet">
    <link href="/kjl/public/simpleboot/css/simplebootadmin.css" rel="stylesheet">
    <link href="/kjl/public/js/artDialog/skins/default.css" rel="stylesheet" />
    <link href="/kjl/public/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
    <style>
		form .input-order{margin-bottom: 0px;padding:3px;width:40px;}
		.table-actions{margin-top: 5px; margin-bottom: 5px;padding:0px;}
		.table-list{margin-bottom: 0px;}
	</style>
	<!--[if IE 7]>
	<link rel="stylesheet" href="/kjl/public/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
	<![endif]-->
	<script type="text/javascript">
	//全局变量
	var GV = {
	    ROOT: "/kjl/",
	    WEB_ROOT: "/kjl/",
	    JS_ROOT: "public/js/",
	    APP:'<?php echo (MODULE_NAME); ?>'/*当前应用名*/
	};
	</script>
    <script src="/kjl/public/js/jquery.js"></script>
    <script src="/kjl/public/js/wind.js"></script>
    <script src="/kjl/public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
    <script>
    	$(function(){
    		$("[data-toggle='tooltip']").tooltip();
    	});
    </script>
<?php if(APP_DEBUG): ?><style>
		#think_page_trace_open{
			z-index:9999;
		}
	</style><?php endif; ?>
<style>
.home_info li em {
	float: left;
	width: 120px;
	font-style: normal;
}
li {
	list-style: none;
}
</style>
</head>
<body>
	<div class="wrap">
		<div id="home_toptip"></div>
		<!-- 系统通知 -->
		<h4 class="well"><?php echo L('SYSTEM_NOTIFICATIONS');?></h4>
		<li> &nbsp &nbsp网站总访问量： <span><?php echo ($num); ?>人</span></li>

		<!-- 系统信息 -->
		<h4 class="well"><?php echo L('SYSTEM_INFORMATIONS');?></h4>
		<div class="home_info">
			<ul>
				<?php if(is_array($server_info)): $i = 0; $__LIST__ = $server_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><em><?php echo ($key); ?></em> <span><?php echo ($vo); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<!-- 发起团队 -->
		<h4 class="well"><?php echo L('INITIATE_TEAM');?></h4>
		<div class="home_info" id="home_devteam">
			<ul>

				<li><em>核心开发者</em> <span>潍坊千行信息科技有限公司</span></li>
				<li><em><?php echo L('TEAM_MEMBERS');?></em> <span>潍坊千行信息科技有限公司</span></li>
				<li><em><?php echo L('CONTACT_EMAIL');?></em> <span>493568344@qq.com</span></li>
			</ul>
		</div>
	<!--贡献者 -->
		<h4 class="well"><?php echo L('CONTRIBUTORS');?></h4>

	</div>
	<script src="/kjl/public/js/common.js"></script>
	<?php $lang_set=defined('LANG_SET')?LANG_SET:''; $thinkcmf_version=defined('THINKCMF_VERSION')?THINKCMF_VERSION:''; ?>

</body>
</html>