<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
  .control-label{
   position: relative !important;
   top:8px !important;
   right: -105px !important;
}
#divbutton{
margin: 0 auto;
width: 200px;
}
#main{
width: 80%;
}
#adduploaddiv{
  margin-left:  140px;
}


/**/
 .fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
#uploadFile1{
    width: 220px;
    height: 30px;
    position: relative;
    top: 5px;
}
#imagetitle{
  position: relative;
  top:8px;
  left: -20px;
}

/**/
</style>


    <meta charset="UTF-8">

      <link href="/admin/themes/simplebootx/Public/assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="/admin/themes/simplebootx/Public/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
      <link href="/admin/themes/simplebootx/Public/assets/css/bootstrap-theme.min.css" rel="stylesheet">
<!--引入bootstrap库，默认包含  -->
<script type="text/javascript" src="/admin/themes/simplebootx/Public/assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/admin/themes/simplebootx/Public/assets/js/bootstrap.min.js"></script>


<?php $title = $name[0]['contact_title']; $address = $name[0]['contact_address']; $postcode = $name[0]['contact_postcode']; $phone = $name[0]['contact_phone']; $fax = $name[0]['contact_fax']; $email = $name[0]['contact_email']; ?>
<div id="main">
<br/><br/>
    <div align="center" id="adddivtitle"><h3>修改合作</h3></div>

    <ul class="nav nav-list">

         <li class="divider"></li>

    </ul>

<br/><br/>
<form action="/index.php/Admin/Contact/add" enctype="multipart/form-data" method="post" >
 <input type="hidden" name="id" value="<?php echo ($id); ?>">
        <br/>
        <div class="form-group">
          <label for="addinput2" class="col-sm-2 control-label">名称</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="addinput2"  value="<?php echo ($title); ?>" name="title">
          </div>
        </div>
        <br/><br/>
        <div class="form-group">
          <label for="addinput3" class="col-sm-2 control-label">地址</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="addinput3" value="<?php echo ($address); ?>" name="address">
          </div>
        </div>
        <br/><br/>
        <div class="form-group">
          <label for="addinput5" class="col-sm-2 control-label">手机</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="addinput5" value="<?php echo ($phone); ?>" name="phone">
          </div>
        </div>
        <br/><br/>
        <div class="form-group">
          <label for="addinput6" class="col-sm-2 control-label">传真</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="addinput6" value="<?php echo ($fax); ?>" name="fax">
          </div>
        </div>
        <br/><br/>
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