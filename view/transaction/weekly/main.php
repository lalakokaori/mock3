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
                    <h4 class="page-head-line">WEEKLY ACCOMPLISHMENT REPORT</h4>
                        <div class="panel-body">

<div class="row">
                    <div class="col-md-6 col-lg-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
<div class="wrapper">
      
      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Report
            <small>WEEKLY ACCOMPLISHMENT REPORT</small>
          </h1>                              
        </section>


        <!-- Main content -->
        <section class="content">

         

          <div class="row" >              
          <div class="col-lg-12 col-sm-12 col-xs-12">
              <div class="box box-solid">
                <div class="box-header">     
                  <div class="row" style="margin-top:25px">

                    <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Work Description :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-user"></i></span>
                       <input type="text" placeholder=" Search Name ">
                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->

                    <div class="col-md-3 col-xs-12" id="custnameDiv">
                      <label id="custnameErr" ><font color="darkred">*</font>Unit:</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-user"></i></span>
                       <input type="text" placeholder=" Search Name ">
                      </div>   
                    </div> <!-- /.col-->  <!--Customer Field-->

                    <div class="col-md-3 col-xs-12" id="custnameDiv">
                      <label id="custnameErr" ><font color="darkred">*</font>Quantity :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-user"></i></span>
                       <input type="number" placeholder=" Search Name ">
                      </div>      
                      
                    </div> <!-- /.col-->  <!--Customer Field-->

                    <div class="col-md-3 col-xs-12">
                      <label><font color="darkred">*</font>Unit Cost:</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-user"></i></span>
                       <input type="number" placeholder=" Search Name ">
                      </div>   
                    </div> <!-- /.col-->  <!--Customer Field-->

 

                       <div class="col-md-3 col-xs-12" >
                      <label><font color="darkred">*</font>Amount :</label>    
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input value="<?php echo"".date('Y-m-d')."" ?>" type="date" class="form-control" >
                      </div>    
                    </div> <!-- /.col-->  

                       <div class="col-md-3 col-xs-3" >
                      <label><font color="darkred">*</font>Weight :</label>    
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon">%</i></span>
                        <input type="number" class="form-control" >
                      </div>    
                    </div> <!-- /.col-->  

                       

                    <hr>

                  </div><!--/.row-->

                  <h1>
           
            <small>ACCOMPLISHMENT (QUANTITY)</small>
          </h1>   

                       <div class="row" >              
          <div class="col-lg-12 col-sm-12 col-xs-12">
              <div class="box box-solid">
                <div class="box-header">     
                  <div class="row" style="margin-top:25px">

                    <div class="col-md-3 col-xs-12" >
                      <label id="transdateErr" ><font color="darkred">*</font>Previous :</label>    
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input value="<?php echo"".date('Y-m-d')."" ?>" type="date" class="form-control" >
                      </div>    
                    </div> <!-- /.col-->  
                      
                    <div class="col-md-3 col-xs-12" >
                      <label id="transdateErr" ><font color="darkred">*</font>This period :</label>    
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input value="<?php echo"".date('Y-m-d')."" ?>" type="date" class="form-control" >
                      </div>    
                    </div> <!-- /.col-->  

                    <div class="col-md-3 col-xs-12" >
                      <label id="transdateErr" ><font color="darkred">*</font>To date :</label>    
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input value="<?php echo"".date('Y-m-d')."" ?>" type="date" class="form-control" >
                      </div>    
                    </div> <!-- /.col-->  

                    

                    <hr>

                  </div><!--/.row-->


           
            <h1>
           
            <small>AMOUNT</small>
          </h1>   

                       <div class="row" >              
          <div class="col-lg-12 col-sm-12 col-xs-12">
              <div class="box box-solid">
                <div class="box-header">     
                  <div class="row" style="margin-top:25px">

                    <div class="col-md-3 col-xs-12" >
                      <label id="transdateErr" ><font color="darkred">*</font>Previous :</label>    
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input value="<?php echo"".date('Y-m-d')."" ?>" type="date" class="form-control" >
                      </div>    
                    </div> <!-- /.col-->  
                      
                    <div class="col-md-3 col-xs-12" >
                      <label id="transdateErr" ><font color="darkred">*</font>This period :</label>    
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input value="<?php echo"".date('Y-m-d')."" ?>" type="date" class="form-control" >
                      </div>    
                    </div> <!-- /.col-->  

                    <div class="col-md-3 col-xs-12" >
                      <label id="transdateErr" ><font color="darkred">*</font>To date :</label>    
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input value="<?php echo"".date('Y-m-d')."" ?>" type="date" class="form-control" >
                      </div>    
                    </div> <!-- /.col-->  

                    <div class="col-md-3 col-xs-12" >
                      <label><font color="darkred">*</font>Weight Accompished:</label>    
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon">%</span>
                        <input type="number" class="form-control" >
                      </div>    
                    </div> <!-- /.col-->  
                    

                    <hr>

                  </div><!--/.row-->
                        </div>
                        <div class="panel-body">

              </div>
              </div>
              </div><!--//
window.location='../../transaction/steps/main.php
                2nd panel body-->

              </div>
              </div>
              </div><!--//first panel body-->

              </div>
            </section>
          </div>
        </div>
      </div>
   <script src="../../../controller/steps-contract.js" type="text/javascript"></script>
<?php include("../../../view/master/design_end.html");//?>

</body>
</html>


