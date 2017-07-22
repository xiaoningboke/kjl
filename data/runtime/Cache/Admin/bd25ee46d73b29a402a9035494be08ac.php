<?php if (!defined('THINK_PATH')) exit();?>


    <meta charset="UTF-8">

      <link href="/kjl/admin/themes/simplebootx/Public/assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="/kjl/admin/themes/simplebootx/Public/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
      <link href="/kjl/admin/themes/simplebootx/Public/assets/css/bootstrap-theme.min.css" rel="stylesheet">
<!--引入bootstrap库，默认包含  -->
<script type="text/javascript" src="/kjl/admin/themes/simplebootx/Public/assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/kjl/admin/themes/simplebootx/Public/assets/js/bootstrap.min.js"></script>



      <link href="/kjl/admin/themes/simplebootx/Public/qindex/css/index.css" rel="stylesheet">

<style type="text/css">
#ios{
position: relative;
top: 0;
left: 20px;
}

</style>
<!--  -->

</head>
<body>

<div id="main">
      <ul id="myTab" class="nav nav-tabs">
         <li class="active"><a href="#home" data-toggle="tab">
            前台大图</a></li>
        <!--  <li><a href="#ios" data-toggle="tab">要闻简介</a></li> -->
      </ul>
      <div id="myTabContent" class="tab-content">
         <div class="tab-pane fade in active" id="home">
            <p>
            <form action="<?php echo U('Admin/Qindex/upload');?>" enctype="multipart/form-data" method="post" >
<!--  -->
<table>
<tr height='80'>
  <td width="80">图片一:</td>
  <td>
    <input id="uploadFile1" placeholder="请选择上传文件" disabled="disabled" />
      <div class="fileUpload btn btn-primary">
          <span>上传</span>
          <input id="uploadBtn1" type="file" class="upload" name='photo[]' />
      </div>
  </td>
</tr>
<tr height='80'>
  <td width="80">图片二:</td>
  <td>
    <input id="uploadFile2" placeholder="请选择上传文件" disabled="disabled" />
      <div class="fileUpload btn btn-primary">
          <span>上传</span>
          <input id="uploadBtn2" type="file" class="upload" name='photo[]'/>
      </div>
  </td>
</tr>
<tr height='80'>
  <td width="80">图片三:</td>
  <td>
    <input id="uploadFile3" placeholder="请选择上传文件" disabled="disabled" />
      <div class="fileUpload btn btn-primary">
          <span>上传</span>
          <input id="uploadBtn3" type="file" class="upload" name='photo[]' />
      </div>
  </td>
</tr>
</table>

<button type="submit" class="btn btn-primary" id="buttonsubmit" >提交</button>
</form>
</p>
         </div>
<!--          <div class="tab-pane fade" id="ios">

<br/>
         <a class='btn btn-default btn-lg' href="<?php echo U('Admin/Qindex/add');?>">添加</a>
<br/>
<br/>

<table class="table table-bordered" width="1300">
<thead>
      <tr class="info">
              <th class="baseth">图片</th>
              <th class="baseth" width="200">标题</th>
              <th class="baseth">内容</th>
              <th class="baseth">操作</th>
      </tr>
</thead>
<tbody>
  <?php if(is_array($name)): foreach($name as $key=>$vo): ?><tr>
       <td class="basetd">
       <img src=".\themes\simplebootx\Public\mystyle\img\<?php echo ($vo["index_address"]); ?>" width="140" height="140">
       </td>
       <td class="basetd" width="200"><?php echo ($vo["index_title"]); ?></td>
       <td class="basetd"><?php echo ($vo["index_content"]); ?></td>
       <td class="basetd" width="120" ><a  href="<?php echo U('Admin/Qindex/edit',array('id'=>$vo['id']));?>">编辑</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a  href="<?php echo U('Admin/Qindex/deleat',array('id'=>$vo['id']));?>">删除</a></td>
     </tr><?php endforeach; endif; ?>
</tbody>


</table>

         </div> -->

      </div>


</div>

<script>
   $(function(){
      $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
      var activeTab = $(e.target).text();
      var previousTab = $(e.relatedTarget).text();
      $(".active-tab span").html(activeTab);
      $(".previous-tab span").html(previousTab);
   });
});
</script>

<script type="text/javascript">
document.getElementById("uploadBtn1").onchange=function(){document.getElementById("uploadFile1").value=this.value};document.getElementById("uploadBtn2").onchange=function(){document.getElementById("uploadFile2").value=this.value};document.getElementById("uploadBtn3").onchange=function(){document.getElementById("uploadFile3").value=this.value};
</script>