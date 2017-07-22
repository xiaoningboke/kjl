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
#picturemargin{
  margin-top: 20px;
  margin-left: 50px;
}
.col-sm-8{
margin-left: -100px;
}
.col-sm-2{
  margin-top: 5px;
}
</style>
<!--  -->

</head>
<body>

<div id="main">
      <ul id="myTab" class="nav nav-tabs">
         <li  class="active"><a href="#ios" data-toggle="tab">公司管理</a></li>
          <li><a href="#home" data-toggle="tab">
            右侧大图</a></li>
                    <li><a href="#touch" data-toggle="tab">
            弹窗</a></li>
      </ul>
      <div id="myTabContent" class="tab-content">
         <div class="tab-pane fade in active" id="ios">
            <p>
<div>
<div align="center"><h3>分公司</h3></div>
<br/>
 <a class='btn btn-default btn-lg' href="<?php echo U('Admin/Contact/addf');?>">添加</a>
<br/><br/>
<table class="table table-bordered">
<thead>
      <tr class="info">
        <th  class="baseth">名称</th>
        <th  class="baseth">地址</th>
        <th  class="baseth">电话</th>
        <th  class="baseth">传真</th>
        <th  class="baseth">操作</th>
      </tr>
</thead>
<tbody>
<?php if(is_array($name)): foreach($name as $key=>$vo): ?><tr>
          <td><?php echo ($vo["contact_title"]); ?></td>
        <td><?php echo ($vo["contact_address"]); ?></td>
        <td><?php echo ($vo["contact_phone"]); ?></td>
        <td><?php echo ($vo["contact_fax"]); ?></td>
       <td class="basetd" width="120" ><a href="<?php echo U('Admin/Contact/edit',array('id'=>$vo['id']));?>">编辑</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a  href="<?php echo U('Admin/Contact/deleat',array('id'=>$vo['id']));?>">删除</a></td>
     </tr><?php endforeach; endif; ?>
</tbody>
</table>
          </div>
</p>
         </div>
         <div class="tab-pane fade" id="home">

<br/>
         <div id="picturemargin">

            <form action="/kjl/index.php/Admin/Contact/pircture" enctype="multipart/form-data" method="post" >

        <div class="form-group" id="adduploaddiv">
            <span><b>图片：</b></span>
          <input id="uploadFile1" placeholder="请选择上传文件" disabled="disabled"/>
      <div class="fileUpload btn btn-primary">
          <span>上传</span>
          <input id="uploadBtn1" type="file" class="upload" name='pircture[]' />
        </div>
        </div>
  <button type="submit" class="btn btn-default btn-lg" style="margin-left: 50px;">完成</button>&nbsp;&nbsp;
  <button type="button" class="btn btn-default btn-lg" onclick="window.history.go(-1);">取消</button>
     </form>

   </div>

         </div>
       <div class="tab-pane fade" id="touch">

<br/>
         <div id="picturemargin">

            <form action="/kjl/index.php/Admin/Contact/touch" enctype="multipart/form-data" method="post" >


           <div class="form-group">
          <label for="addinput2" class="col-sm-2 control-label">QQ：</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="addinput2" name="qq">
          </div>
        </div>
        <br/><br/>
        <div class="form-group">
          <label for="addinput3" class="col-sm-2 control-label">电话：</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="addinput3" name="phone">
          </div>
        </div>
      <br/><br/>


  <button type="submit" class="btn btn-default btn-lg" style="margin-left: 50px;">完成</button>&nbsp;&nbsp;
  <button type="button" class="btn btn-default btn-lg" onclick="window.history.go(-1);">取消</button>
     </form>

   </div>

         </div>
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
document.getElementById("uploadBtn1").onchange=function(){document.getElementById("uploadFile1").value=this.value};
</script>