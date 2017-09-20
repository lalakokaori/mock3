<?php
ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);


  if($_SESSION["persan_user_name"]=="" || $_SESSION["persan_user_type"]=="")
  {?>
    <script type="text/javascript">
      function Redirect()
      {
        window.location="view/master/login.php";
       // alert("Please Log-in");
      }
      Redirect();
    </script>
  <?php }
  else{
  $persan_user_name = $_SESSION["persan_user_name"];
  $persan_user_type = $_SESSION["persan_user_type"];
  echo'<input type="hidden" id="persan_user_type" value="'.$persan_user_type.'">';
  }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("../../../view/master/design.html");//header and design ?>
<body>


<?php include("../../../view/master/design_sidebar.php");//header and design ?>

<!--**********************************-->
                   <div class="row" style="padding-top: 25px;">
                <div class="col-md-12">
                    <h4 class="page-head-line">Monthly Accomplishment Report</h4>
                    </div>
                    </div>

                    </div>
            </div>




            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <div class="x_content">

                    <form class="form-horizontal form-label-left" novalidate>




                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Project Name <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <!--  <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="both name(s) e.g Jon Doe" required="required" type="select"> -->
                        <select id="heard" class="form-control" required="">
                          <option selected="selected" value="none">-Select Project Name-</option>
                        </select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Project Code <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <!--  <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="both name(s) e.g Jon Doe" required="required" type="select"> -->
                        <select id="heard" class="form-control" required="">
                          <option selected="selected" value="none">-Select Project Code-</option>
                        </select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day">Project Location <span class="required"></span>
                        </label>
                        <div class="col-md-4 col-sm-3 col-xs-12">
                          <input type="text" id="day" name="day" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day">Agency/Client Name <span class="required"></span>
                        </label>
                        <div class="col-md-4 col-sm-3 col-xs-12">
                          <input type="text" id="day" name="day" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Contract Period <span class="required"></span>
                        </label>
                        <div class="col-md-4 col-sm-3 col-xs-12">
                          <input type="date" id="date" name="date" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Accomplishment Cut-off Date <span class="required"></span>
                        </label>
                        <div class="col-md-4 col-sm-3 col-xs-12">
                          <input type="date" id="date" name="date" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Start Date <span class="required"></span>
                        </label>
                        <div class="col-md-4 col-sm-3 col-xs-12">
                          <input type="date" id="date" name="date" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Target Completion Date <span class="required"></span>
                        </label>
                        <div class="col-md-4 col-sm-3 col-xs-12">
                          <input type="date" id="date" name="date" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Activities Accomplished for the Month: <span class="required"></span>
                        </label>

                        <div class="col-xs-3 col-sm-3 col-xs-6">
                          <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Problems Encountered: <span class="required"></span>
                        </label>

                        <div class="col-xs-3 col-sm-3 col-xs-6">
                          <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Actions Taken: <span class="required"></span>
                        </label>

                        <div class="col-xs-3 col-sm-3 col-xs-6">
                          <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Major Activites Next Month: <span class="required"></span>
                        </label>

                        <div class="col-xs-3 col-sm-3 col-xs-6">
                          <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Materials Needed: <span class="required"></span>
                        </label>

                        <div class="col-xs-3 col-sm-3 col-xs-6">
                          <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Remarks: <span class="required"></span>
                        </label>

                        <div class="col-xs-3 col-sm-3 col-xs-6">
                          <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>


                       <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>


<?php include("../../../view/master/design_end.html");//?>

</body>
</html>

<!---->
