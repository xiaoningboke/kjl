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
            页面大图</a></li>
      </ul>
      <div id="myTabContent" class="tab-content">
         <div class="tab-pane fade in active" id="home">
            <p>
<form action="<?php echo U('Admin/Bigpicture/upload');?>" enctype="multipart/form-data" method="post">
<!--  -->
<table>
<tr height='80'>
  <td width="80">关于我们:</td>
  <td>
    <input id="uploadFile1" placeholder="请选择上传文件" disabled="disabled" />
      <div class="fileUpload btn btn-primary">
          <span>上传</span>
          <input id="uploadBtn1" type="file" class="upload" name='photo[]' />
      </div>
  </td>
</tr>
<tr height='80'>
  <td width="80">产品中心:</td>
  <td>
    <input id="uploadFile2" placeholder="请选择上传文件" disabled="disabled" />
      <div class="fileUpload btn btn-primary">
          <span>上传</span>
          <input id="uploadBtn2" type="file" class="upload" name='photo[]'/>
      </div>
  </td>
</tr>
<tr height='80'>
  <td width="80">解决方案:</td>
  <td>
    <input id="uploadFile3" placeholder="请选择上传文件" disabled="disabled" />
      <div class="fileUpload btn btn-primary">
          <span>上传</span>
          <input id="uploadBtn3" type="file" class="upload" name='photo[]' />
      </div>
  </td>
</tr>
<tr height='80'>
  <td width="80">成功案例:</td>
  <td>
    <input id="uploadFile4" placeholder="请选择上传文件" disabled="disabled" />
      <div class="fileUpload btn btn-primary">
          <span>上传</span>
          <input id="uploadBtn4" type="file" class="upload" name='photo[]' />
      </div>
  </td>
</tr>
<tr height='80'>
  <td width="80">加入我们:</td>
  <td>
    <input id="uploadFile5" placeholder="请选择上传文件" disabled="disabled" />
      <div class="fileUpload btn btn-primary">
          <span>上传</span>
          <input id="uploadBtn5" type="file" class="upload" name='photo[]' />
      </div>
  </td>
</tr>
<tr height='80'>
  <td width="80">联系我们:</td>
  <td>
    <input id="uploadFile6" placeholder="请选择上传文件" disabled="disabled" />
      <div class="fileUpload btn btn-primary">
          <span>上传</span>
          <input id="uploadBtn6" type="file" class="upload" name='photo[]' />
      </div>
  </td>
</tr>

</table>
<button type="submit" class="btn btn-primary" id="buttonsubmit" >提交</button>

<script type="text/javascript">
document.getElementById("uploadBtn1").onchange=function(){document.getElementById("uploadFile1").value=this.value};document.getElementById("uploadBtn2").onchange=function(){document.getElementById("uploadFile2").value=this.value};document.getElementById("uploadBtn3").onchange=function(){document.getElementById("uploadFile3").value=this.value};document.getElementById("uploadBtn4").onchange=function(){document.getElementById("uploadFile4").value=this.value};document.getElementById("uploadBtn5").onchange=function(){document.getElementById("uploadFile5").value=this.value};document.getElementById("uploadBtn6").onchange=function(){document.getElementById("uploadFile6").value=this.value};
</script>