<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
    .tdalign{
        text-align: right !important;
    }
    #main{
  width: 1000px;
  height: 460px;
  margin: 20px auto;
    }
     .category{
width:188px !important;
text-align: right !important;
 }
</style>


    <meta charset="UTF-8">

      <link href="/kjl/admin/themes/simplebootx/Public/assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="/kjl/admin/themes/simplebootx/Public/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
      <link href="/kjl/admin/themes/simplebootx/Public/assets/css/bootstrap-theme.min.css" rel="stylesheet">
<!--引入bootstrap库，默认包含  -->
<script type="text/javascript" src="/kjl/admin/themes/simplebootx/Public/assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/kjl/admin/themes/simplebootx/Public/assets/js/bootstrap.min.js"></script>


    <div align="center" style="margin-top: 30px"><h3>职位详情</h3></div>

    <ul class="nav nav-list">

         <li class="divider"></li>

    </ul>
    <!--   X-editable - v1.5.0-->
<link href="/kjl/admin/themes/simplebootx/Public/position/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
<script type="text/javascript" src="/kjl/admin/themes/simplebootx/Public/position/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    <!--  X-editable - v1.5.0 -->

<div id="main">
    <div class="table-responsive">
        <table class="table table-bordered" width="1200" id="join-table">
          <tbody>
          <?php if(is_array($positiondetails)): $i = 0; $__LIST__ = $positiondetails;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td class="category active tdalign">职位类型：</td>
                    <td><?php echo ($vo["position_type"]); ?></td>
                    <td class="category active tdalign">职位名称：</td>
                    <td><?php echo ($vo["position_name"]); ?></td>
                </tr>
                 <tr>
                    <td class="category active tdalign">招聘人数：</td>
                    <td><?php echo ($vo["position_number"]); ?></td>
                    <td class="category active tdalign">性别：</td>
                    <td>
                         <?php switch($vo["position_sex"]): case "2": ?>不限<?php break;?>
                            <?php case "0": ?>女<?php break;?>
                            <?php case "1": ?>男<?php break;?>
                            <?php default: ?>性别<?php endswitch;?>
                    </td>
                 </tr>
                 <tr>
                    <td class="category active tdalign">工作性质：</td>
                    <td><?php echo ($vo["position_nature"]); ?></td>
                    <td class="category active tdalign">薪水范围：</td>
                    <td><?php echo ($vo["position_salary"]); ?></td>
                 </tr>
                 <tr>
                    <td class="category active tdalign">学历要求：</td>
                    <td>
                            <?php switch($vo["position_education"]): case "0": ?>中专及以上<?php break;?>
                            <?php case "1": ?>高中<?php break;?>
                            <?php case "2": ?>专科<?php break;?>
                            <?php case "3": ?>本科<?php break;?>
                            <?php case "4": ?>硕士<?php break;?>
                            <?php case "5": ?>博士及以上<?php break;?>
                            <?php default: ?>性别<?php endswitch;?>
                    </td>
                    <td class="category active tdalign">工作地区：</td>
                    <td><?php echo ($vo["position_district"]); ?></td>
                 </tr>
                 <tr>
                    <td class="category active tdalign">工作部门：</td>
                    <td><?php echo ($vo["position_section"]); ?></td>
                    <td class="category active tdalign">工作年限：</td>
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
                 </tr>
                 <tr>
                    <td class="category active tdalign">年龄要求：</td>
                    <td><?php echo ($vo["position_age"]); ?></td>
                    <td class="category active tdalign">职位标记：</td>
                    <td><?php echo ($vo["position_tag"]); ?></td>
                 </tr>
                 <tr>
                    <td class="category active tdalign">发布日期：</td>
                    <td><?php echo ($vo["position_release"]); ?></td>
                    <td class="category active tdalign">截止日期：</td>
                    <td><?php echo ($vo["position_abort"]); ?></td>
                 </tr>
                 <tr>
                    <td class="category active tdalign">职位描述：</td>
                    <td colspan="3"><?php echo ($vo["position_describe"]); ?></td>
                 </tr>
                 <tr>
                    <td class="category active tdalign">能力要求：</td>
                    <td colspan="3"><?php echo ($vo["position_require"]); ?></td>
                 </tr>
                 <tr>
                    <td class="category active tdalign">其他说明：</td>
                    <td colspan="3"><?php echo ($vo["position_other"]); ?></td>
                 </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          </tbody>
        </table>
    </div>
    <div align="center">
         <button type="button" class="btn btn-default btn-lg" onclick="window.history.go(-1);">返回</button>
    </div>
</div>



<script type="text/javascript">
    $(document).ready(function(){
    $('#username').editable();
}）;
</script>