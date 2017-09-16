<?php include('../../../controller/master/log.php');?>
<!---->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("../../../view/master/design.html");//header and design ?>


<body>
<div class="se-pre-con"></div>
<?php include("../../../view/master/design_sidebar.php");//header and design ?>
                <!--**********************************-->
            <div class="row" style="padding-top: 25px;">
                <div class="col-md-12">
                    <h4 class="page-head-line">Project Manager</h4>
                        <div class="panel-body">


<div id="step-2">
            <h2 class="StepTitle">Project Team</h2>
            <p>
              <div id="client_div">
              <label class="control-label col-md-24 col-sm-12 col-xs-12">Client</label>
              <select id="client" class="form-control" required="">
              <option value="">Select..</option>
            </select>

          </div>
              <label class="control-label col-md-24 col-sm-12 col-xs-12" for="op-mgr">Operations Manager <span class="required">*</span>
              </label>
              <select id="client" class="form-control" required="">
              <option value="">Select..</option>
            </select>
            <br>

            <label class="control-label col-md-24 col-sm-12 col-xs-12" for="proj-engr">Project Engineer/Field Engineer <span class="required">*</span>
            </label>
            <select id="client" class="form-control" required="">
            <option value="">Select..</option>
          </select>
          <br>

           <label class="control-label col-md-24 col-sm-12 col-xs-12" for="mtrl-engr">Materials Engineer <span class="required">*</span>
           </label>
           <select id="client" class="form-control" required="">
           <option value="">Select..</option>
         </select>
         <br>

          <label class="control-label col-md-24 col-sm-12 col-xs-12" for="foreman">Foreman <span class="required">*</span>
          </label>
          <select id="client" class="form-control" required="">
          <option value="">Select..</option>
        </select>
        <br>

          <label class="control-label col-md-24 col-sm-12 col-xs-12" for="wrh-in-charge">Warehouse-in-Charge <span class="required">*</span>
          </label>
          <select id="client" class="form-control" required="">
          <option value="">Select..</option>
        </select>
        <br>

          <label class="control-label col-md-24 col-sm-12 col-xs-12" for="eqpt-in-charge">Equipment-in-Charge <span class="required">*</span>
          </label>
          <select id="client" class="form-control" required="">
          <option value="">Select..</option>
        </select>
        <br>

        <label class="control-label col-md-24 col-sm-12 col-xs-12" for="safety-officer">Safety Officer <span class="required">*</span>
        </label>
        <select id="client" class="form-control" required="">
        <option value="">Select..</option>
      </select>
      <br>

        <label class="control-label col-md-24 col-sm-12 col-xs-12" for="timekeeper">Timekeeper <span class="required">*</span>
        </label>
        <select id="client" class="form-control" required="">
        <option value="">Select..</option>
      </select>
<br>


            <div class="col-md-2 "><br><button id="btn_reset" class="btn btn-block btn-lg">Reset</button></div>

            <div class="col-md-4" >  <br><button id="btn_save" class="btn btn-block btn-success btn-lg" onclick="saves1();">Next</button></div>

            </p>

        </div>

                    </div>
              </div>
              </div><!--//first panel body-->


 <script src="../../../controller/steps.js" type="text/javascript"></script>
<?php include("../../../view/master/design_end.html");//?>

</body>
</html>
