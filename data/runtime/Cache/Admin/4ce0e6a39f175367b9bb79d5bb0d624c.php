<?php if (!defined('THINK_PATH')) exit();?>
    <meta charset="UTF-8">

      <link href="/kjl/admin/themes/simplebootx/Public/assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="/kjl/admin/themes/simplebootx/Public/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
      <link href="/kjl/admin/themes/simplebootx/Public/assets/css/bootstrap-theme.min.css" rel="stylesheet">
<!--引入bootstrap库，默认包含  -->
<script type="text/javascript" src="/kjl/admin/themes/simplebootx/Public/assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/kjl/admin/themes/simplebootx/Public/assets/js/bootstrap.min.js"></script>




<!--  -->
      <link href="/kjl/admin/themes/simplebootx/Public/Join/css/index.css" rel="stylesheet">
<!--  -->


<div id="main">
      <ul id="myTab" class="nav nav-tabs">
         <li class="active"><a href="#edit" data-toggle="tab">
            招聘管理</a></li>
         <li><a href="#add" data-toggle="tab">添加招聘</a></li>
      </ul>
      <div id="myTabContent" class="tab-content">
          <!-- 招聘管理 -->
         <div class="tab-pane fade in active" id="edit">
          
    <div align="center" id="editdivalign"><h3>招聘管理</h3></div>

    <ul class="nav nav-list">

         <li class="divider"></li>

    </ul>
      <link href="/kjl/admin/themes/simplebootx/Public/join/css/join.css" rel="stylesheet">
<div id="editmain">
    <div class="table-responsive">
        <table class="table table-hover table-bordered table-striped" width="800" id="join-table">
          <thead>
            <tr class="info">
                        <th width="100">职位名称</th>
                        <th width="200">职位类型</th>
                        <th>工作年限</th>
                         <th>薪水范围</th>
                        <th>招聘人数</th>
                        <th>工作地区</th>
                        <th>学历要求</th>
                        <th>发布时间</th>
                        <th>招聘管理</th>
            </tr>
          </thead>
          <tbody>
          <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($vo["join_title"]); ?></td>
                            <td><?php echo ($vo["join_type"]); ?></td>
                            <td>
                             <?php switch($vo["join_agelimit"]): case "0": ?>应届毕业生<?php break;?>
                            <?php case "1": ?>在校大学生<?php break;?>
                            <?php case "2": ?>1年以上<?php break;?>
                            <?php case "3": ?>2年以上<?php break;?>
                            <?php case "4": ?>3年以上<?php break;?>
                            <?php case "5": ?>5年以上<?php break;?>
                            <?php case "6": ?>8年以上<?php break;?>
                            <?php case "7": ?>10年以上<?php break;?>
                            <?php default: ?>工作年限<?php endswitch;?>
                            </td>
                            <td><?php echo ($vo["join_pay"]); ?></td>
                            <td><?php echo ($vo["join_number"]); ?></td>
                            <td><?php echo ($vo["join_district"]); ?></td>
                            <td>
                            <?php switch($vo["join_education"]): case "0": ?>中专及以上<?php break;?>
                            <?php case "1": ?>高中<?php break;?>
                            <?php case "2": ?>专科<?php break;?>
                            <?php case "3": ?>本科<?php break;?>
                            <?php case "4": ?>硕士<?php break;?>
                            <?php case "5": ?>博士及以上<?php break;?>
                            <?php default: ?>学历要求<?php endswitch;?>
                            </td>
                            <td><?php echo ($vo["join_time"]); ?></td>
                            <td><a href="<?php echo U('Admin/Join/write',array('id'=>$vo['id']));?>">修改</a>&nbsp;|&nbsp;<a href="<?php echo U('Admin/Join/delete',array('id'=>$vo['id']));?>">删除</a></td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          </tbody>
        </table>
    </div>


    </div>

         </div>
         <!-- 招聘管理 -->


         <div class="tab-pane fade" id="add">
              <!-- 添加招聘 -->
              
    <div align="center" id="adddivtitle"><h3>添加招聘</h3></div>

    <ul class="nav nav-list">

         <li class="divider"></li>

    </ul>


    <meta charset="UTF-8">

      <link href="/kjl/admin/themes/simplebootx/Public/assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="/kjl/admin/themes/simplebootx/Public/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
      <link href="/kjl/admin/themes/simplebootx/Public/assets/css/bootstrap-theme.min.css" rel="stylesheet">
<!--引入bootstrap库，默认包含  -->
<script type="text/javascript" src="/kjl/admin/themes/simplebootx/Public/assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/kjl/admin/themes/simplebootx/Public/assets/js/bootstrap.min.js"></script>




<form class="form-horizontal" action="<?php echo U('Admin/Join/add');?>" method="post">
        <div class="form-group">
          <label for="addinput1" class="col-sm-2 control-label">职位名称：</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="addinput1" name="addtitle">
          </div>
        </div>
        <br/><br/>
        <div class="form-group">
          <label for="addinput2" class="col-sm-2 control-label">职位类型：</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="addinput2" name="addtype">
          </div>
        </div>
        <br/><br/>
        <div class="form-group">
          <label for="addinput3" class="col-sm-2 control-label">工作年限：</label>
          <div class="col-sm-8">
            <select  class="form-control" id="addinput3" name="addagelimit">
                    <option value="0">应届毕业生</option>
                    <option value="1">在校大学生</option>
                    <option value="2" >1年以上</option>
                    <option value="3">2年以上</option>
                    <option value="4">3年以上</option>
                    <option value="5">5年以上</option>
                    <option value="6">8年以上</option>
                    <option value="7">10年以上</option>
                    <option value="8">不限</option>
                </select>
          </div>
        </div>
      <br/><br/>
        <div class="form-group">
          <label for="addinput4" class="col-sm-2 control-label">薪水范围：</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="addinput4" name="addpay">
          </div>
        </div>
        <br/><br/>
        <div class="form-group">
          <label for="addinput5" class="col-sm-2 control-label">招聘人数：</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="addinput5" name="addnumber">
          </div>
        </div>
        <br/><br/>
        <div class="form-group">
          <label for="addinput6" class="col-sm-2 control-label">工作地区：</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="addinput6" name="adddistrict">
          </div>
        </div>
      <br/><br/>
        <div class="form-group">
              <label for="addinput7" class="col-sm-2 control-label">学历要求：</label>
              <div class="col-sm-8">
            <select class="form-control" name="addeducation">
                              <option selected="selected">请选择:</option>
                              <option value="0">中专及以上</option>
                              <option value="1">高中</option>
                              <option value="2">专科</option>
                              <option value="3">本科</option>
                              <option value="4">硕士</option>
                              <option value="5">博士及以上</option>
          </select>
              </div>
        </div>
        <br/><br/>
  <div id="divbutton">
    <p>
      <button type="submit" class="btn btn-default btn-lg">添加</button>
      &nbsp;&nbsp; &nbsp;&nbsp;
      <button type="button" class="btn btn-default btn-lg" onclick="location.href='U("Admin/Join/index");'">取消</button>
    </p>
</div>
</form>


              <!-- 添加招聘 -->
         </div>

      </div>
</div>