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
                    <h4 class="page-head-line">DAILY ACCOMPLISHMENT REPORT</h4>
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
            <small>DAILY ACCOMPLISHMENT REPORT</small>
          </h1>                              
        </section>


        <!-- Main content -->
        <section class="content">

         

          <div class="row" >              
          <div class="col-lg-12 col-sm-12 col-xs-12">
              <div class="box box-solid">
                <div class="box-header">     
                  <div class="row" style="margin-top:25px">

                    <div class="col-md-3 col-xs-12" id="custnameDiv">
                      <label id="custnameErr" ><font color="darkred">*</font>Project Name :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-user"></i></span>
                       <input id="custname" type="text" name="custname"  onblur="checkCustomer(this.value)" onfocus="checkCustomer(this.value)" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder=" Search Name ">
                      </div>    
                      <input type='hidden' id="chkCust" value="no-match">
                    </div> <!-- /.col-->  <!--Customer Field-->

                    <div class="col-md-3 col-xs-12" id="transdateDiv">
                      <label id="transdateErr" ><font color="darkred">*</font>Order Date :</label>    
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input id="transdate" value="<?php echo"".date('Y-m-d')."" ?>" type="date" class="form-control" >
                      </div>    
                    </div> <!-- /.col-->  

                    <div class="col-md-3 col-xs-12" id="clerkDiv">
                      <label id="clerkErr"  ><font color="darkred">*</font>Day :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-user"></i></span>
                       <input id="clerk" type="text" name="clerk" onblur="checkClerk(this.value)" onfocus="checkClerk(this.value)"  class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder=" Search Name ">
                      </div>    
                      <input type='hidden' id="chkClerk" value='no-match'>
                    </div> <!-- /.col-->  <!--Customer Field-->                 

                    

                                   
                  </div><!--/.row-->

                  <div class="row" style="margin-top:25px">

                    <div class="col-md-3 col-xs-12" id="custnameDiv">
                      <label id="custnameErr" ><font color="darkred">*</font>Activities :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-user"></i></span>
                       <input id="custname" type="text" name="custname"  onblur="checkCustomer(this.value)" onfocus="checkCustomer(this.value)" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder=" Search Name ">
                      </div>    
                      <input type='hidden' id="chkCust" value="no-match">
                    </div> <!-- /.col-->  <!--Customer Field-->

                    <div class="col-md-3 col-xs-12" id="custnameDiv">
                      <label id="custnameErr" ><font color="darkred">*</font>Station :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-user"></i></span>
                       <input id="custname" type="text" name="custname"  onblur="checkCustomer(this.value)" onfocus="checkCustomer(this.value)" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder=" Search Name ">
                      </div>    
                      <input type='hidden' id="chkCust" value="no-match">
                    </div> <!-- /.col-->  <!--Customer Field-->

                    <div class="col-md-3 col-xs-12" id="clerkDiv">
                      <label id="clerkErr"  ><font color="darkred">*</font>Volume :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-user"></i></span>
                       <input id="clerk" type="text" name="clerk" onblur="checkClerk(this.value)" onfocus="checkClerk(this.value)"  class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder=" Search Name ">
                      </div>    
                      <input type='hidden' id="chkClerk" value='no-match'>
                    </div> <!-- /.col-->  <!--Customer Field-->                 

                  <div class="col-sm-1 col-xs-2">
                          <h4 class="box-title">
                               <button id="btn_save" role="button" data-toggle='tooltip' title="Save Record" data-placement='bottom' class="btn text-green" 
                               style="box-shadow: 0px 3px 7px #888888; border-radius:100px; width:50px; height:50px; margin-bottom:5px; outline:none;
                               text-align: center; font-size:25px; background-color:white; "> <i class="ion-android-done"></i>+</button>                            
                          </h4>                            
                        </div>    
                  </div><!--/.row-->

                  <div class="row" style="margin-top:25px">

                    <div class="col-md-3 col-xs-12" id="custnameDiv">
                      <label id="custnameErr" ><font color="darkred">*</font>Manpower :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"></span>
                       <input id="custname" type="text" name="custname"  onblur="checkCustomer(this.value)" onfocus="checkCustomer(this.value)" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder=" Search Name ">
                      </div>   
                      <div class="input-group" style="margin-top:3px">
                     
                       
                      </div>    

                      <input type='hidden' id="chkCust" value="no-match">
                    </div> <!-- /.col-->  <!--Customer Field-->



                  <div class="col-sm-1 col-xs-2">
                          <h4 class="box-title">
                               <button id="btn_save" role="button" data-toggle='tooltip' title="Save Record" data-placement='bottom' class="btn text-green" 
                               style="box-shadow: 0px 3px 7px #888888; border-radius:100px; width:50px; height:50px; margin-bottom:5px; outline:none;
                               text-align: center; font-size:25px; background-color:white; "> <i class="ion-android-done"></i>+</button>                            
                          </h4>                            
                        </div>    
                  </div><!--/.row-->

                     <div class="row" style="margin-top:25px">

                    <div class="col-md-3 col-xs-12" id="custnameDiv">
                      <label id="custnameErr" ><font color="darkred">*</font>Materials/Lubricants/Fuel Used :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-user"></i></span>
                       <input id="custname" type="text" name="custname"  onblur="checkCustomer(this.value)" onfocus="checkCustomer(this.value)" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder=" Search Name ">
                      </div>    
                      <input type='hidden' id="chkCust" value="no-match">
                    </div> <!-- /.col-->  <!--Customer Field-->

                    <div class="col-md-3 col-xs-12" id="custnameDiv">
                      <label id="custnameErr" ><font color="darkred">*</font>Quantity :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-user"></i></span>
                       <input id="custname" type="text" name="custname"  onblur="checkCustomer(this.value)" onfocus="checkCustomer(this.value)" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder=" Search Name ">
                      </div>    
                      <input type='hidden' id="chkCust" value="no-match">
                    </div> <!-- /.col-->  <!--Customer Field-->

                    <div class="col-md-3 col-xs-12" id="clerkDiv">
                      <label id="clerkErr"  ><font color="darkred">*</font>Equipment Used :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-user"></i></span>
                       <input id="clerk" type="text" name="clerk" onblur="checkClerk(this.value)" onfocus="checkClerk(this.value)"  class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder=" Search Name ">
                      </div>    
                      <input type='hidden' id="chkClerk" value='no-match'>
                    </div> <!-- /.col-->  <!--Customer Field-->       

                    <div class="col-md-3 col-xs-12" id="clerkDiv">
                      <label id="clerkErr"  ><font color="darkred">*</font>Utilization :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-user"></i></span>
                       <input id="clerk" type="text" name="clerk" onblur="checkClerk(this.value)" onfocus="checkClerk(this.value)"  class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder=" Search Name ">
                      </div>    
                      <input type='hidden' id="chkClerk" value='no-match'>
                    </div> <!-- /.col-->  <!--Customer Field-->           

                  <div class="col-sm-1 col-xs-2">
                          <h4 class="box-title">
                               <button id="btn_save" role="button" data-toggle='tooltip' title="Save Record" data-placement='bottom' class="btn text-green" 
                               style="box-shadow: 0px 3px 7px #888888; border-radius:100px; width:50px; height:50px; margin-bottom:5px; outline:none;
                               text-align: center; font-size:25px; background-color:white; "> <i class="ion-android-done"></i>+</button>                            
                          </h4>                            
                        </div>    
                  </div><!--/.row-->

                  <div class="row" style="margin-top:25px">

                    <div class="col-md-3 col-xs-12" id="custnameDiv">
                      <label id="custnameErr" ><font color="darkred">*</font>Materials/Equipments/Documents Received</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"></span>
                       <input id="custname" type="text" name="custname"  onblur="checkCustomer(this.value)" onfocus="checkCustomer(this.value)" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder=" Search Name ">
                      </div>   
                      <div class="input-group" style="margin-top:3px">
                     
                       
                      </div>    

                      <input type='hidden' id="chkCust" value="no-match">
                    </div> <!-- /.col-->  <!--Customer Field-->
                    <div class="col-md-3 col-xs-12" id="custnameDiv">
                      <label id="custnameErr" ><font color="darkred">*</font>Quantity :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"></span>
                       <input id="custname" type="number" name="custname"  onblur="checkCustomer(this.value)" onfocus="checkCustomer(this.value)" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder=" Search Name ">
                      </div>   
                      <div class="input-group" style="margin-top:3px">
                     
                       
                      </div>    

                      <input type='hidden' id="chkCust" value="no-match">
                    </div>
                     <div class="col-sm-1 col-xs-2">

                      <div class="row" style="margin-top:25px">
                    <div class="container">
  <div class="row">
    <input type="hidden" name="count" value="1" />
        <div class="control-group" id="fields">
           
            <div class="controls" id="profs"> 
                <form class="input-append">
                    <div id="field"><input autocomplete="off" class="input" id="field1" name="prof1" type="text" placeholder="sample add" data-items="8"/><button id="b1" class="btn add-more" type="button" style="box-shadow: 0px 3px 7px #888888; border-radius:100px; width:50px; height:50px; margin-bottom:5px; outline:none;
                               text-align: center; font-size:25px; background-color:white; ">+</button></div>
                </form>
            <br>
          
            </div>
        </div>
  </div>
</div>
</div>
</div>

                  <div class="col-sm-1 col-xs-2">
                                          
                        </div>    
                  </div><!--/.row-->

                    <!-- address rows -->
                    <div class="row"  style="margin-top:25px" id="pickupDiv">
                      <div class="col-md-3 col-xs-12">
                        <label id="pickupErr" ><font color="darkred">*</font>Problems Encountered :</label>     
                        <textarea id="pickup" rows="2" class="form-control" style="resize:none"></textarea>
                      </div> <!--/. col -->
                  

                    <div class="col-md-3 col-xs-12" id="deliveryDiv">
                      <label id="deliveryErr" ><font color="darkred">*</font>Visitors :</label>     
                      <textarea id="delivery" rows="2" class="form-control" style="resize:none"></textarea>
                    </div> <!--/. -->

                    
                  </div> <!-- /. row -->

                  <div class="row"  style="margin-top:25px" id="pickupDiv">
                    <div class="col-md-3 col-xs-12" id="custnameDiv">
                      <label id="custnameErr" ><font color="darkred">*</font>Prepared by :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"></span>
                       <input id="custname" type="text" name="custname"  onblur="checkCustomer(this.value)" onfocus="checkCustomer(this.value)" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder=" Search Name ">
                      </div>   
                      <div class="input-group" style="margin-top:3px">
                     
                       
                      </div>    

                      <input type='hidden' id="chkCust" value="no-match">
                    </div>

                    <div class="col-md-3 col-xs-12" id="custnameDiv">
                      <label id="custnameErr" ><font color="darkred">*</font>Approved by :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"></span>
                       <input id="custname" type="text" name="custname"  onblur="checkCustomer(this.value)" onfocus="checkCustomer(this.value)" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder=" Search Name ">
                      </div>   
                      <div class="input-group" style="margin-top:3px">
                     
                       
                      </div>    

                      <input type='hidden' id="chkCust" value="no-match">
                    </div>

                    
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
<script type="text/javascript">
$(document).ready(function(){
    var next = 1;
    $(".add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" style="margin-bottom:20px;">-</button></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });
    

    
});

</script>
</body>
</html>


