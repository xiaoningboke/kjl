<?php if (!defined('THINK_PATH')) exit();?>
    <meta charset="UTF-8">

      <link href="/kjl/admin/themes/simplebootx/Public/assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="/kjl/admin/themes/simplebootx/Public/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
      <link href="/kjl/admin/themes/simplebootx/Public/assets/css/bootstrap-theme.min.css" rel="stylesheet">
<!--引入bootstrap库，默认包含  -->
<script type="text/javascript" src="/kjl/admin/themes/simplebootx/Public/assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/kjl/admin/themes/simplebootx/Public/assets/js/bootstrap.min.js"></script>



<style type="text/css">
  .upp{
    margin-top: 80px;
    margin-left: 50px;
  }
</style>

      <link href="/kjl/admin/themes/simplebootx/Public/Join/css/index.css" rel="stylesheet">

<div class="upp">


 <form action="/kjl/index.php/Admin/About/aboutt" enctype="multipart/form-data" method="post" >

<input type="hidden" name="id" value="<?php echo ($id); ?>">
   <div class="form-group" id="adduploaddiv">
            <span><b>图片：</b></span>
          <input id="uploadFile11" placeholder="请选择上传文件" disabled="disabled"/>
      <div class="fileUpload btn btn-primary">
          <span>上传</span>
          <input id="uploadBtn11" type="file" class="upload"  name='photo[]'/>
        </div>
        <br/><br/>
           <button type="submit" class="btn btn-default btn-lg" sty>提交</button>
           <button type="button" class="btn btn-default btn-lg" onclick="window.history.go(-1);">取消</button>
    </div>


</form>


         </div>

<script type="text/javascript">
document.getElementById("uploadBtn11").onchange=function(){document.getElementById("uploadFile11").value=this.value};
</script>