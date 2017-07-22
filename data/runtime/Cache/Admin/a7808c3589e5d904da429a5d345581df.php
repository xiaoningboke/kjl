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
         <li class="active"><a href="#apply" data-toggle="tab">申请列表
            </a></li>
         <li><a href="#details" data-toggle="tab">职位详情</a></li>
      </ul>
      <div id="myTabContent" class="tab-content">
          <!-- 申请列表 -->
         <div class="tab-pane fade in active" id="apply">
          

    <div align="center" id="editdivalign"><h3>申请列表</h3></div>

    <ul class="nav nav-list">

         <li class="divider"></li>

    </ul>
      <link href="/kjl/admin/themes/simplebootx/Public/join/css/join.css" rel="stylesheet">
<div id="editmain">
    <div class="table-responsive">
        <table class="table table-hover table-bordered table-striped" width="800px" id="join-table">
          <thead>
            <tr class="info">
                        <th>申请职位</th>
                        <th>姓名</th>
                        <th>性别</th>
                      <th>出生日期</th>
                        <th>手机</th>
                        <th>邮箱</th>
                         <th>学历</th>
                        <th>专业</th>
                        <th>工作年限</th>
                        <th>操作</th>
            </tr>
          </thead>
          <tbody>
          <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($vo["apply_position"]); ?></td>
                            <td><?php echo ($vo["apply_name"]); ?></td>
                            <td>
                            <?php switch($vo["apply_sex"]): case "0": ?>女<?php break;?>
                            <?php case "1": ?>男<?php break;?>
                            <?php default: ?>性别<?php endswitch;?>
                            </td>
                            <td><?php echo ($vo["apply_birthday"]); ?></td>
                            <td><?php echo ($vo["apply_cellphone"]); ?></td>
                            <td><?php echo ($vo["apply_mailbox"]); ?></td>
                           <td>
                            <?php switch($vo["apply_education"]): case "0": ?>中专及以上<?php break;?>
                            <?php case "1": ?>高中<?php break;?>
                            <?php case "2": ?>专科<?php break;?>
                            <?php case "3": ?>本科<?php break;?>
                            <?php case "4": ?>硕士<?php break;?>
                            <?php case "5": ?>博士及以上<?php break;?>
                            <?php default: ?>学历要求<?php endswitch;?>
                            </td>
                            <td><?php echo ($vo["apply_professional"]); ?></td>
                            <td>
                            <?php switch($vo["apply_workingyear"]): case "0": ?>应届毕业生<?php break;?>
                            <?php case "1": ?>在校大学生<?php break;?>
                            <?php case "2": ?>1年以上<?php break;?>
                            <?php case "3": ?>2年以上<?php break;?>
                            <?php case "4": ?>3年以上<?php break;?>
                            <?php case "5": ?>5年以上<?php break;?>
                            <?php case "6": ?>8年以上<?php break;?>
                            <?php case "7": ?>10年以上<?php break;?>
                            <?php default: ?>工作年限<?php endswitch;?>
                            </td>
                            <td><a href="<?php echo U('Admin/Position/applydetails',array('id'=>$vo['id']));?>">详情</a> &nbsp;| &nbsp;<a href="<?php echo U('Admin/Position/applydelete',array('id'=>$vo['id']));?>">删除</a></td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          </tbody>
        </table>
    </div>



    </div>

         </div>
         <!-- 申请列表 -->

         <div class="tab-pane fade" id="details">
                <!-- 职位详情 -->
              <style type="text/css">
    .btn-lg{
        margin-left: 30px;
    }
</style>

    <div align="center" id="editdivalign"><h3>职位详情</h3></div>

    <ul class="nav nav-list">
   <a class='btn btn-default btn-lg' href="<?php echo U('Admin/Position/addposition');?>">添加</a>
         <li class="divider"></li>

    </ul>
      <link href="/kjl/admin/themes/simplebootx/Public/join/css/join.css" rel="stylesheet">
<div id="editmain">
    <div class="table-responsive">
        <table class="table table-hover table-bordered table-striped" width="800px" id="join-table">
          <thead>
            <tr class="info">
                        <th width="80">职位名称</th>
                        <th>职位类型</th>
                        <th>性别</th>
                        <th>工作性质</th>
                        <th>薪水范围</th>
                        <th>学历要求</th>
                         <th>工作地区</th>
                        <th>工作部门</th>
                        <th>工作年限</th>
                        <th width="140">操作</th>
            </tr>
          </thead>
          <tbody>
          <?php if(is_array($position)): $i = 0; $__LIST__ = $position;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                           <td>
                           <?php echo ($vo["position_name"]); ?>
                           </td>
                            <td><?php echo ($vo["position_type"]); ?></td>
                            <td>
                            <?php switch($vo["position_sex"]): case "0": ?>女<?php break;?>
                            <?php case "1": ?>男<?php break;?>
                            <?php default: ?>性别<?php endswitch;?>
                            </td>
                            <td><?php echo ($vo["position_nature"]); ?></td>
                            <td><?php echo ($vo["position_salary"]); ?></td>
                            <td>
                            <?php switch($vo["position_education"]): case "0": ?>中专及以上<?php break;?>
                            <?php case "1": ?>高中<?php break;?>
                            <?php case "2": ?>专科<?php break;?>
                            <?php case "3": ?>本科<?php break;?>
                            <?php case "4": ?>硕士<?php break;?>
                            <?php case "5": ?>博士及以上<?php break;?>
                            <?php default: ?>学历要求<?php endswitch;?>
                            </td>
                            <td><?php echo ($vo["position_district"]); ?></td>
                            <td><?php echo ($vo["position_section"]); ?></td>
                            <td>
                            <?php switch($vo["position_year"]): case "0": ?>应届毕业生<?php break;?>
                            <?php case "1": ?>在校大学生<?php break;?>
                            <?php case "2": ?>1年以上<?php break;?>
                            <?php case "3": ?>2年以上<?php break;?>
                            <?php case "4": ?>3年以上<?php break;?>
                            <?php case "5": ?>5年以上<?php break;?>
                            <?php case "6": ?>8年以上<?php break;?>
                            <?php case "7": ?>10年以上<?php break;?>
                            <?php default: ?>工作年限<?php endswitch;?>
                            </td>
                            <td><a href="<?php echo U('Admin/Position/positiondetails',array('id'=>$vo['id']));?>">查看</a> &nbsp;|&nbsp;<a href="<?php echo U('Admin/Position/updateposition',array('id'=>$vo['id']));?>">更改</a> &nbsp;| &nbsp;<a href="<?php echo U('Admin/Position/positiondelete',array('id'=>$vo['id']));?>">删除</a></td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          </tbody>
        </table>
    </div>


    </div>

              <!--  职位详情-->
         </div>




      </div>
</div>