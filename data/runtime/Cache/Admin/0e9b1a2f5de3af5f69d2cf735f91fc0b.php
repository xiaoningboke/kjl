<?php if (!defined('THINK_PATH')) exit();?>
<!-- 基础引用-->

    <meta charset="UTF-8">

      <link href="/admin/themes/simplebootx/Public/assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="/admin/themes/simplebootx/Public/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
      <link href="/admin/themes/simplebootx/Public/assets/css/bootstrap-theme.min.css" rel="stylesheet">
<!--引入bootstrap库，默认包含  -->
<script type="text/javascript" src="/admin/themes/simplebootx/Public/assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/admin/themes/simplebootx/Public/assets/js/bootstrap.min.js"></script>


<!--基础引用  -->

<!--  -->
      <link href="/admin/themes/simplebootx/Public/qindex/css/base.css" rel="stylesheet">
<!--  -->

<style type="text/css">
  .control-label{
    position: relative;
    top:4px;
     right: -30px;
       }
       #adddivtitle{
         position: relative;
    left: -100px;
       }
       #adduploaddiv{
       position: relative;
       left: 109px;
       }
</style>

<div class="tab-pane fade in active" id="main">

<?php $title = $name[0]['about_title']; $content = $name[0]['about_content']; ?>

<form class="form-horizontal" action="/index.php/Admin/About/up" enctype="multipart/form-data" method="post">
  <input type="hidden" name="id" value="<?php echo ($id); ?>">
        <div class="form-group" id="adduploaddiv">
            <span><b>图片：</b></span>
          <input id="uploadFile1" placeholder="请选择上传文件" disabled="disabled"/>
      <div class="fileUpload btn btn-primary">
          <span>上传</span>
          <input id="uploadBtn1" type="file" class="upload" name='photo[]' />
        </div>
        </div>
<br/>
   <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label">标题：</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="input2" name="title" value="<?php echo ($title); ?>">
                  </div>
            </div>
   <div class="form-group">
          <label for="input2" class="col-sm-2 control-label">简介：</label>
          <div class="col-sm-8">
                <textarea class="form-control" rows="15" id="content"   name="content"><?php echo ($content); ?></textarea>
          </div>
        </div>

  <div id="divbutton">
    <p>
      <button type="submit" class="btn btn-default btn-lg">添加</button>
      &nbsp;&nbsp; &nbsp;&nbsp;
       <button type="button" class="btn btn-default btn-lg" onclick="window.history.go(-1);">取消</button>
    </p>

</div>
</form>
</div>

<script type="text/javascript">
document.getElementById("uploadBtn1").onchange=function(){document.getElementById("uploadFile1").value=this.value};
</script>