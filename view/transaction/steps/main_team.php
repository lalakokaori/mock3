<?php include('../../../controller/master/log.php');
$v=$_GET["contract"]; 
?>
<input type="hidden" name="cont_id" value="<?=$v?>">
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
                    <h4 class="page-head-line">Project Team</h4>
                        <div class="panel-body">

<div id="step-2">
  
            <p>

                 <div class="col-md-6 col-xs-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                        <div class="panel-body">

             Operations Manager <span class="required">*</span>
              </label>
      <div id="OM_div">
              <select id="OM" class="form-control" required="">
              <option value="none">Select..</option>

            </select>
      </div>
            <br>
      <div id="PI_div">
          Project Engineer/Field Engineer <span class="required">*</span>

            <select id="PI" class="form-control" required="">
            <option value="none">Select..</option>
          </select>

      </div>  
          <br>
      <div id="Materials_div">
          Materials Engineer <span class="required">*</span>
                     <select id="Materials" class="form-control" required="">
           <option value="none">Select..</option>
         </select>

      </div>
         <br>

      <div id="Foreman_div">
          Foreman <span class="required">*</span>
          <select id="Foreman" class="form-control" required="">
          <option value="none">Select..</option>
        </select>
      </div>

        <br>

      <div id="Warehouse_div">
        Warehouse-in-Charge <span class="required">*</span>
          <select id="Warehouse" class="form-control" required="">
          <option value="none">Select..</option>
        </select>
      </div>


        <br>

      <div id="Equipment-in-Charge_div">
        Equipment-in-Charge <span class="required">*</span>
          
          <select id="Equipment-in-Charge" class="form-control" required="">
          <option value="none">Select..</option>
        </select>
      </div>

        <br>
        
     <div id="Safety_div">
        Safety Officer <span class="required">*</span>
        <select id="Safety" class="form-control" required="">
        <option value="none">Select..</option>
      </select>
    </div>

      <br>

   <div id="Timekeeper_div">
        Timekeeper <span class="required">*</span>
        </label>
        <select id="Timekeeper" class="form-control" required="">
        <option value="none">Select..</option>
      </select>
    </div>
<br>


           <div class="col-md-4" >  <br><button id="btn_reset" class="btn btn-block btn-primary btn-lg"">Reset</button></div>

            <div class="col-md-4" >  <br><button id="btn_save" class="btn btn-block btn-success btn-lg" onclick="saves1();">Next</button></div>

            </p>

            </div>
            </div>
            </div><!--second panel-->
</div>
            </div>
              </div>
              </div><!--//first panel body-->


 <script src="../../../controller/steps-team.js" type="text/javascript"></script>
<?php include("../../../view/master/design_end.html");//?>

</body>
</html>
