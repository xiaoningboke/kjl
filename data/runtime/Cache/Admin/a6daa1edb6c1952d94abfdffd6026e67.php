<?php if (!defined('THINK_PATH')) exit();?>
    <meta charset="UTF-8">

      <link href="/kjl/admin/themes/simplebootx/Public/assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="/kjl/admin/themes/simplebootx/Public/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
      <link href="/kjl/admin/themes/simplebootx/Public/assets/css/bootstrap-theme.min.css" rel="stylesheet">
<!--引入bootstrap库，默认包含  -->
<script type="text/javascript" src="/kjl/admin/themes/simplebootx/Public/assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/kjl/admin/themes/simplebootx/Public/assets/js/bootstrap.min.js"></script>




      <link href="/kjl/admin/themes/simplebootx/Public/join/css/index.css" rel="stylesheet">

<style type="text/css">
#main{
   width: 80%;
    position: relative;
    left: 30px;
    top:-30px;

}
  .divposition{
 position: relative;
    top: 20px;
    left: 15px;
  }
   th{
text-align: center;
vertical-align:middle !important;
}
  td{
text-align: center;
vertical-align:middle !important;
}
</style>


<div id="main">
      <ul id="myTab" class="nav nav-tabs">
         <li class="active"><a href="#bridf" data-toggle="tab">公司简介
            </a></li>
         <li><a href="#honor" data-toggle="tab">公司荣誉</a></li>
         <li><a href="#qualifications" data-toggle="tab">资质认证
            </a></li>
         <li><a href="#partner" data-toggle="tab">合作伙伴</a></li>
      </ul>
      <div id="myTabContent" class="tab-content">

         <div class="tab-pane fade in active" id="bridf">
          

<!-- 基础引用-->

    <meta charset="UTF-8">

      <link href="/kjl/admin/themes/simplebootx/Public/assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="/kjl/admin/themes/simplebootx/Public/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
      <link href="/kjl/admin/themes/simplebootx/Public/assets/css/bootstrap-theme.min.css" rel="stylesheet">
<!--引入bootstrap库，默认包含  -->
<script type="text/javascript" src="/kjl/admin/themes/simplebootx/Public/assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/kjl/admin/themes/simplebootx/Public/assets/js/bootstrap.min.js"></script>


<!--基础引用  -->

<!--  -->
      <link href="/kjl/admin/themes/simplebootx/Public/qindex/css/base.css" rel="stylesheet">
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
 <div align="center"><h3>公司简介</h3></div>
<br/>
<form class="form-horizontal" action="/kjl/index.php/Admin/About/about" enctype="multipart/form-data" method="post">
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
          <label for="input2" class="col-sm-2 control-label">简介：</label>
          <div class="col-sm-8">
                <textarea class="form-control" rows="10" id="content"  name="gsjj"><?php echo ($data[0][about_content]); ?></textarea>
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


         </div>

         <div class="tab-pane fade" id="honor">
          
<div class="divposition">
 <div align="center"><h3>公司荣誉</h3></div>
<br/>

<br/>

<table class="table table-bordered" width="1300">
<thead>
      <tr class="info">
              <th class="baseth">图片</th>
              <th class="baseth">操作</th>
      </tr>
</thead>
<tbody>
    <?php if(is_array($gsry)): foreach($gsry as $key=>$vo): ?><tr>
       <td class="basetd">
      <img src=".\themes\simplebootx\Public\about\img\<?php echo ($vo["about_address"]); ?>"  width="140" height="140">
       </td>
       <td><a href="<?php echo U('Admin/About/upp',array('id'=>$vo['id']));?>">编辑</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a  href="<?php echo U('Admin/About/deleat',array('id'=>$vo['id']));?>">删除</a></td>
     </tr><?php endforeach; endif; ?>
</tbody>


</table>


 <form action="/kjl/index.php/Admin/About/add" enctype="multipart/form-data" method="post" >

<input type="hidden" name="about_flag" value="1">
   <div class="form-group" id="adduploaddiv">
            <span><b>图片：</b></span>
          <input id="uploadFile01" placeholder="请选择上传文件" disabled="disabled"/>
      <div class="fileUpload btn btn-primary">
          <span>上传</span>
          <input id="uploadBtn01" type="file" class="upload"  name='photo[]'/>
        </div>
         <button type="submit" class="btn btn-default btn-lg">添加</button>
          <button type="button" class="btn btn-default btn-lg" onclick="window.history.go(-1);">取消</button>
    </div>


</form>


         </div>





<script type="text/javascript">
document.getElementById("uploadBtn01").onchange=function(){document.getElementById("uploadFile01").value=this.value};
</script>


         </div>

         <div class="tab-pane fade" id="qualifications">
          
<div class="divposition">
 <div align="center"><h3>资质认证</h3></div>
<br/>


<br/>
<table class="table table-bordered" width="1300">
<thead>
      <tr class="info">
              <th class="baseth">图片</th>
              <th class="baseth">操作</th>
      </tr>
</thead>
<tbody>
    <?php if(is_array($zzrz)): foreach($zzrz as $key=>$vo): ?><tr>
       <td class="basetd">
    <img src=".\themes\simplebootx\Public\about\img\<?php echo ($vo["about_address"]); ?>"  width="140" height="140">
       </td>
       <td>
         <a href="<?php echo U('Admin/About/upp',array('id'=>$vo['id']));?>">编辑</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a  href="<?php echo U('Admin/About/deleat',array('id'=>$vo['id']));?>">删除</a>
       </td>
     </tr><?php endforeach; endif; ?>
</tbody>


</table>


 <form action="/kjl/index.php/Admin/About/add" enctype="multipart/form-data" method="post" >

<input type="hidden" name="about_flag" value="2">
   <div class="form-group" id="adduploaddiv">
            <span><b>图片：</b></span>
          <input id="uploadFile11" placeholder="请选择上传文件" disabled="disabled"/>
      <div class="fileUpload btn btn-primary">
          <span>上传</span>
          <input id="uploadBtn11" type="file" class="upload"  name='photo[]'/>
        </div>
           <button type="submit" class="btn btn-default btn-lg">添加</button>
            <button type="button" class="btn btn-default btn-lg" onclick="window.history.go(-1);">取消</button>
    </div>


</form>


         </div>





<script type="text/javascript">
document.getElementById("uploadBtn11").onchange=function(){document.getElementById("uploadFile11").value=this.value};
</script>


         </div>

         <div class="tab-pane fade" id="partner">

              
<div class="divposition">
 <div align="center"><h3>合作伙伴</h3></div>
<br/>
 <a class='btn btn-default btn-lg' href="<?php echo U('Admin/About/addh');?>">添加</a>
<br/><br/>
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
       <img src=".\themes\simplebootx\Public\about\img\<?php echo ($vo["about_address"]); ?>" width="140" height="140">
       </td>
       <td class="basetd" width="200"><?php echo ($vo["about_title"]); ?></td>
       <td class="basetd"><?php echo ($vo["about_content"]); ?></td>
       <td class="basetd" width="120" ><a href="<?php echo U('Admin/About/edit',array('id'=>$vo['id']));?>">编辑</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a  href="<?php echo U('Admin/About/deleat',array('id'=>$vo['id']));?>">删除</a></td>
     </tr><?php endforeach; endif; ?>
</tbody>


</table>

         </div>



         </div>

      </div>
</div>