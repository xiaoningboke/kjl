<?php if (!defined('THINK_PATH')) exit();?><!-- 基础引用-->

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
     #main{
         width: 80%;
   margin-top: 20px;
    position: relative;
    left: 10px;
       }
    #updatedivtitle{
      margin-top: 50px;
      margin-bottom: 20px;
    }

  .control-label{
   position: relative;
   top:4px;
   right: -30px;
}

</style>

<div id="main">
    <div align="center" id="updatedivtitle"><h3>添加详情</h3></div>

    <ul class="nav nav-list">

         <li class="divider"></li>

    </ul>


<form class="form-horizontal" action="<?php echo U('Admin/Position/modifyposition');?>" method="post">
        <div class="form-group">
<?php if(is_array($positiondetails)): $i = 0; $__LIST__ = $positiondetails;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><input type="hidden" name="name" value="<?php echo ($positionjoinid); ?>">
        <input type="hidden" name="id" value="<?php echo ($updateid); ?>">
          <label for="updateinput1" class="col-sm-2 control-label">职位名称：</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="updateinput1" name="updatetitle" value="<?php echo ($vo["position_name"]); ?>">
          </div>
        </div>
        <br/><br/>
        <div class="form-group">
          <label for="updateinput2" class="col-sm-2 control-label">职位类型：</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="updateinput2" name="updatetype" value="<?php echo ($vo["position_type"]); ?>">
          </div>
        </div>
        <br/><br/>
        <div class="form-group">
          <label for="updateinput3" class="col-sm-2 control-label">职位人数：</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="updateinput3" name="updatenumber"  value="<?php echo ($vo["position_number"]); ?>">
          </div>
        </div>
      <br/><br/>
        <div class="form-group">
          <label for="updateinput4" class="col-sm-2 control-label">工作性质：</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="updateinput4" name="updatenature"  value="<?php echo ($vo["position_nature"]); ?>">
          </div>
        </div>
        <br/><br/>
        <div class="form-group">
          <label for="updateinput9" class="col-sm-2 control-label">薪水范围：</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="updateinput9" name="updatesalary"  value="<?php echo ($vo["position_salary"]); ?>">
          </div>
        </div>
        <br/><br/>
        <div class="form-group">
                <input type="hidden" name="sex" value="<?php echo ($vo["position_sex"]); ?>" id="sex">
          <label for="updateinput5" class="col-sm-2 control-label">性别：</label>
          <div class="col-sm-8">
             <select class="form-control" name="updatesex" id="updateinput5">
                              <option value="2">不限</option>
                              <option value="0">女</option>
                              <option value="1">男</option>
          </select>
          </div>
        </div>
      <br/><br/>
        <div class="form-group">
              <label for="updateinput6" class="col-sm-2 control-label">学历要求：</label>
              <div class="col-sm-8">
  <input type="hidden" name="education" value="<?php echo ($vo["position_education"]); ?>" id="education">
            <select class="form-control" name="updateeducation"  id="updateinput6">
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
        <div class="form-group">
          <label for="updateinput7" class="col-sm-2 control-label">工作地区：</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="updateinput7" name="updatedistrict"  value="<?php echo ($vo["position_district"]); ?>">
          </div>
        </div>
            <br/><br/>
        <div class="form-group">
          <label for="addinput16" class="col-sm-2 control-label">工作部门：</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="addinput16" name="updatesection" value="<?php echo ($vo["position_section"]); ?>">
          </div>
        </div>
          <br/><br/>
        <div class="form-group">
        <input type="hidden" name="education" value="<?php echo ($vo["position_year"]); ?>" id="year">
          <label for="updateinput8" class="col-sm-2 control-label">工作年限：</label>
          <div class="col-sm-8">
            <select class="form-control" name="updateyear"  id="updateinput8">
                              <option value="0">应届毕业生</option>
                              <option value="1">在校大学生</option>
                              <option value="2">1年以上</option>
                              <option value="3">2年以上</option>
                              <option value="4">3年以上</option>
                              <option value="5">5年以上</option>
                              <option value="6">8年以上</option>
                              <option value="7">10年以上</option>
          </select>
          </div>
        </div>
        <br/><br/>
        <div class="form-group">
          <label for="updateinput9" class="col-sm-2 control-label">年龄要求：</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="updateinput9" name="updateage"  value="<?php echo ($vo["position_age"]); ?>">
          </div>
        </div>
        <br/><br/>
        <div class="form-group">
          <label for="updateinput10" class="col-sm-2 control-label">发布日期：</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="updateinput10" name="updaterelease"  placeholder="形容：xxxx-xx-xx"  value="<?php echo ($vo["position_release"]); ?>">
          </div>
        </div>
        <br/><br/>
        <div class="form-group">
          <label for="updateinput11" class="col-sm-2 control-label">截止日期：</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="updateinput11" name="updateabort"  placeholder="形容：xxxx-xx-xx"   value="<?php echo ($vo["position_abort"]); ?>">
          </div>
        </div>
        <br/><br/>
        <div class="form-group">
          <label for="updateinput12" class="col-sm-2 control-label">职位标记：</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="updateinput12" name="updatetag"   value="<?php echo ($vo["position_tag"]); ?>">
          </div>
        </div>
              <br/><br/>
        <div class="form-group">
          <label for="updateinput13" class="col-sm-2 control-label">职位描述：</label>
          <div class="col-sm-8">
          <textarea class="form-control" rows="5" id="updateinput13"  name="updatedescribe"><?php echo ($vo["position_describe"]); ?></textarea>
          </div>
        </div>
        <br/><br/>
        <div class="form-group">
          <label for="updateinput14" class="col-sm-2 control-label">能力要求：</label>
          <div class="col-sm-8">
          <textarea class="form-control" rows="5" id="updateinput14"  name="updaterequire"><?php echo ($vo["position_require"]); ?></textarea>
          </div>
        </div>
        <br/><br/>
        <div class="form-group">
          <label for="updateinput15" class="col-sm-2 control-label">其他说明：</label>
          <div class="col-sm-8">
          <textarea class="form-control" rows="5" id="updateinput15"  name="updateother"><?php echo ($vo["position_other"]); ?></textarea>
          </div>
        </div>
        <br/><br/>
  <div id="divbutton">
    <p>
      <button type="submit" class="btn btn-default btn-lg">添加</button>
      &nbsp;&nbsp; &nbsp;&nbsp;
      <button type="button" class="btn btn-default btn-lg" onclick="window.history.go(-1);">取消</button>
    </p>
</div><?php endforeach; endif; else: echo "" ;endif; ?>
</form>
</div>

<script type="text/javascript">
  $(function(){
      $("#updateinput5").val($("#sex").val());
      $("#updateinput6").val($("#education").val());
      $("#updateinput8").val($("#year").val());
  });
</script>