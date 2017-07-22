<?php if (!defined('THINK_PATH')) exit();?><!-- 基础引用-->

    <meta charset="UTF-8">

      <link href="/kjl/admin/themes/simplebootx/Public/assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="/kjl/admin/themes/simplebootx/Public/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
      <link href="/kjl/admin/themes/simplebootx/Public/assets/css/bootstrap-theme.min.css" rel="stylesheet">
<!--引入bootstrap库，默认包含  -->
<script type="text/javascript" src="/kjl/admin/themes/simplebootx/Public/assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/kjl/admin/themes/simplebootx/Public/assets/js/bootstrap.min.js"></script>


<!--基础引用  -->


 <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
    #adddivtitle{
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
    <div align="center" id="adddivtitle"><h3>添加详情</h3></div>

    <ul class="nav nav-list">

         <li class="divider"></li>

    </ul>


<form class="form-horizontal" action="<?php echo U('Admin/Position/appendposition');?>" method="post">
        <div class="form-group">
          <label for="addinput1" class="col-sm-2 control-label">职位名称：</label>
          <div class="col-sm-8">
             <select class="form-control" id="addinput1" name="addtitle">
                               <option selected="selected">请选择:</option>
                                <?php if(is_array($data)): foreach($data as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>+<?php echo ($vo["join_title"]); ?>"><?php echo ($vo["join_title"]); ?></option><?php endforeach; endif; ?>

          </select>
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
          <label for="addinput3" class="col-sm-2 control-label">职位人数：</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="addinput3" name="addnumber">
          </div>
        </div>
      <br/><br/>
        <div class="form-group">
          <label for="addinput4" class="col-sm-2 control-label">工作性质：</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="addinput4" name="addnature">
          </div>
        </div>
        <br/><br/>
        <div class="form-group">
          <label for="updateinput9" class="col-sm-2 control-label">薪水范围：</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="updateinput9" name="addsalary">
          </div>
        </div>
        <br/><br/>
        <div class="form-group">
          <label for="addinput5" class="col-sm-2 control-label">性别：</label>
          <div class="col-sm-8">
             <select class="form-control" name="addsex" id="addinput5">
                              <option value="2" selected="selected">不限</option>
                              <option value="0">女</option>
                              <option value="1">男</option>
          </select>
          </div>
        </div>
      <br/><br/>
        <div class="form-group">
              <label for="addinput6" class="col-sm-2 control-label">学历要求：</label>
              <div class="col-sm-8">
            <select class="form-control" name="addeducation"  id="addinput6">
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
        <div class="form-group">
          <label for="addinput7" class="col-sm-2 control-label">工作地区：</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="addinput7" name="adddistrict">
          </div>
        </div>
        <!--  -->
        <br/><br/>
        <div class="form-group">
          <label for="addinput16" class="col-sm-2 control-label">工作部门：</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="addinput16" name="addsection">
          </div>
        </div>
        <!--  -->
        <br/><br/>
        <div class="form-group">
          <label for="addinput8" class="col-sm-2 control-label">工作年限：</label>
          <div class="col-sm-8">
            <select class="form-control" name="addyear"  id="addinput8">
                              <option selected="selected">请选择:</option>
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
          <label for="addinput9" class="col-sm-2 control-label">年龄要求：</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="addinput9" name="addage">
          </div>
        </div>
        <br/><br/>
        <div class="form-group">
          <label for="addinput11" class="col-sm-2 control-label">截止日期：</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="addinput11" name="addabort"  placeholder="形容：xxxx-xx-xx">
          </div>
        </div>
        <br/><br/>
        <div class="form-group">
          <label for="addinput12" class="col-sm-2 control-label">职位标记：</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="addinput12" name="addtag">
          </div>
        </div>
        <br/><br/>
        <div class="form-group">
          <label for="addinput13" class="col-sm-2 control-label">职位描述：</label>
          <div class="col-sm-8">
          <textarea class="form-control" rows="5" id="addinput13"  name="adddescribe"></textarea>
          </div>
        </div>
        <br/><br/>
        <div class="form-group">
          <label for="addinput14" class="col-sm-2 control-label">能力要求：</label>
          <div class="col-sm-8">
          <textarea class="form-control" rows="5" id="addinput14"  name="addrequire"></textarea>
          </div>
        </div>
        <br/><br/>
        <div class="form-group">
          <label for="addinput15" class="col-sm-2 control-label">其他说明：</label>
          <div class="col-sm-8">
          <textarea class="form-control" rows="5" id="addinput15"  name="addother"></textarea>
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
$(function(){


  $('#').blur(function(){
        alert($('#addinput1').val());
    alert('sdddd');
     // $.ajax({
     //                        type : 'POST',
     //                        url : '<?php echo U("Admin/Position/specialitys");?>',
     //                        data : {
     //                          "ids":$('#addinput1').val();
     //                        },
     //                        success: function (data) {
     //                            if (data) {
     //                              alert('cg');

     //                            }
     //                        },
    //  //                        error:(function() {
    //  //                            alert('sb');
    //  //                        });
    //  //                    });
    // );
  }
});
</script>