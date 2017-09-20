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
                    <h4 class="page-head-line">MONTHLY ACCOMPLISHMENT REPORT</h4>
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
            <small>MONTHLY ACCOMPLISHMENT REPORT</small>
          </h1>                              
        </section>


        <!-- Main content -->
        <section class="content">

         

          <div class="row" >              
          <div class="col-lg-12 col-sm-12 col-xs-12">
              <div class="box box-solid">
                <div class="box-header">     
                  
                  <h1>
           
            <small>Cost Details</small>
          </h1>   
                    <div class="row" style="margin-top:25px">

                    <div class="col-md-3 col-xs-12" >
                      <label id="custnameErr" ><font color="darkred">*</font>Project Cost :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon">₱</span>
                       <input type="number" placeholder=" Search Name ">
                      </div>    
                      <input type='hidden' id="chkCust" value="no-match">
                    </div> <!-- /.col-->  <!--Customer Field-->

                      <div class="col-md-3 col-xs-12" id="custnameDiv">
                      <label id="custnameErr" ><font color="darkred">*</font>Cost Change :</label>
                      <div class="input-group" style="margin-top:3px">
                      <span class="input-group-addon">₱</span>
                       <input type="number"  placeholder=" Search Name ">
                       
                      </div>    
                       
                       <input type="radio"  value="male"> Addition<br>
                       <input type="radio"  value="male"> Deduction<br>
                      
                    </div> <!-- /.col-->  <!--Customer Field-->

                    <div class="col-md-3 col-xs-12">
                      <label><font color="darkred">*</font>Total Project Cost :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon">₱</span>
                       <input type="number" placeholder=" Search Name ">
                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->

                  </div><!--/.row-->

                  <h1>
           
            <small>Project Expenditures</small>
          </h1>   
                    <div class="row" style="margin-top:25px">

                    <div class="col-md-3 col-xs-12" >
                      <label id="custnameErr" ><font color="darkred">*</font>Projected :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon">₱</i></span>
                       <input type="number" placeholder=" Search Name ">
                      </div>    
                     
                    </div> <!-- /.col-->  <!--Customer Field-->

                      <div class="col-md-3 col-xs-12" >
                      <label><font color="darkred">*</font>Actual :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon">₱</i></span>
                       <input type="number" placeholder=" Search Name ">
                      </div>    
                     
                    </div> <!-- /.col-->  <!--Customer Field-->

                    <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Variance (+/-) :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon">₱</i></span>
                       <input type="number" placeholder=" Search Name ">
                      </div>    
                    
                    </div> <!-- /.col-->  <!--Customer Field-->

                  </div><!--/.row-->

                       <h1>
           
            <small>Percentage Accomplishment</small>
          </h1>   
                    <div class="row" style="margin-top:25px">

                    <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Schedule :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon">%</i></span>
                       <input type="number" placeholder=" Search Name ">

                      </div>    
                      <input type='hidden' id="chkCust" value="no-match">
                    </div> <!-- /.col-->  <!--Customer Field-->

                      <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Actual :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon">%</i></span>
                       <input type="number" placeholder=" Search Name ">
                      </div>    
                      <input type='hidden' id="chkCust" value="no-match">
                    </div> <!-- /.col-->  <!--Customer Field-->

                    <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Variance (+/-) :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon">%</i></span>
                       <input type="number" placeholder=" Search Name ">
                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->
               



                  </div><!--/.row-->


                    <div class="row" style="margin-top:25px">

                    <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Equivalent in days :</label>
                      <div class="input-group" style="margin-top:3px">
                        <input type="radio"> ahead :<br>
                       <span class="input-group-addon">days</i></span>
                       <input type="number" placeholder=" Search Name ">

                      </div>    
                      
                      <div class="input-group" style="margin-top:3px">
                        <input type="radio"> delay :<br>
                       <span class="input-group-addon">days</i></span>
                       <input type="number" placeholder=" Search Name ">

                      </div>    
                    </div> <!-- /.col-->  <!--Customer Field-->

                      

                  </div><!--/.row-->

                  <h1>
           
            <small>Project Duration</small>
          </h1>   
                    <div class="row" style="margin-top:25px">

                    <div class="col-md-3 col-xs-12">
                      <label><font color="darkred">*</font>Contract :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon">days</i></span>
                       <input type="number" placeholder=" Search Name ">

                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->

                      <div class="col-md-3 col-xs-12">
                      <label><font color="darkred">*</font>Completed :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon">days</i></span>
                       <input type="number" placeholder=" Search Name ">

                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->

                    <div class="col-md-3 col-xs-12" >
                      <label id="custnameErr" ><font color="darkred">*</font>Remaining :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon">days</i></span>
                       <input type="number" placeholder=" Search Name ">

                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->
               
                    <div class="col-md-3 col-xs-12">
                      <label><font color="darkred">*</font>Granted time extension :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon">days</i></span>
                       <input type="number" placeholder=" Search Name ">

                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->


                  </div><!--/.row-->



                 

                    <!-- address rows -->
                    <div class="row"  style="margin-top:25px">
                      <div class="col-md-3 col-xs-12">
                        <label><font color="darkred">*</font>Activities Accomplished for the Month :</label>     
                        <textarea rows="4" class="form-control" style="resize:none"></textarea>
                      </div> <!--/. col -->

                      <div class="col-md-3 col-xs-12">
                        <label><font color="darkred">*</font>Problems Encountered:</label>     
                        <textarea rows="4" class="form-control" style="resize:none"></textarea>
                      </div> <!--/. col -->
                      
                      <div class="col-md-3 col-xs-12">
                        <label ><font color="darkred">*</font>Actions Taken:</label>     
                        <textarea rows="4" class="form-control" style="resize:none"></textarea>
                      </div> <!--/. col -->

                      </div>
                       <div class="row"  style="margin-top:25px">
                      <div class="col-md-3 col-xs-12">
                        <label><font color="darkred">*</font>Major Activities Next Month:</label>     
                        <textarea rows="4" class="form-control" style="resize:none"></textarea>
                      </div> <!--/. col -->
                   

                   
                      <div class="col-md-3 col-xs-12">
                        <label><font color="darkred">*</font>Materials Needed:</label>     
                        <textarea rows="4" class="form-control" style="resize:none"></textarea>
                      </div> <!--/. col -->

                      <div class="col-md-3 col-xs-12">
                        <label><font color="darkred">*</font>Remarks :</label>     
                        <textarea rows="4" class="form-control" style="resize:none"></textarea>
                      </div> <!--/. col -->
                  </div> <!-- /. row -->

                  

                <hr>
                <!--TABLES -->

   
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


