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
                    <h4 class="page-head-line">Safety Inspection Checklist</h4>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Project Code <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <!--  <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="both name(s) e.g Jon Doe" required="required" type="select"> -->
                        <select id="heard" class="form-control" required="">
                          <option selected="selected" value="none">-Select Project Code-</option>
                        </select>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>




                       <label>1.) Office trailer with power, secure site location and neat?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>2.)Storage trailer(s) or Warehouse, secure site location and neat?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>3.)Injury records being kept? Injury handling procedures established?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>


                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>4.) Telephone, fax line & dedicated computer line? <span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>5.) Sanitary facilities are well maintained?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>6.) Water available? (drinking, testing, dust control, personal use ).<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>7.) Site communications ( radios, etc.).<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>8.) Office equipment ( telephone, fax machine, copier, etc. ).<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>9.) Office furnishings ( desk, chair's, filing cabinet, print table, etc. )<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>10.) Permits/licenses/Certificate of Insurance?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>11.) Nail, boards, debris removed?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>12.) Regular disposal of wastes? Waste containers provided?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>13.) Warnings signs and safety signs complete and posted?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>14.) Hazard lights utilized?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>15.) Delivery address and unloading point for material?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>16.) Safety needs ( please check first aid kits, medical facilities location)<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>17.) Open ditches, drop offs protected? Ladders lowered?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>18.) MSDS for received hazardous wastes? Control/disposal established?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>19.) Fire extinguishers available and inspected?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>20.) Flammable liquids in secure container/storage?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>

                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>21.) Established equipment fueling method (turn off/grounded)?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>22.) PPEs adequate and utilized? (face, head, eye, hand, foot protection)?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>23.) Safety orientations conducted to all employees<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>24.) Equipment had undergone preventive maintenance?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>25.) Materials properly stored/stacked? Inventories updated?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>

                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>26.) Proper tool being used? Stored after use? Grounded properly?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>27.) Equipment had undergone preventive maintenance?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>28.) Materials properly stored/stacked? Inventories updated?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>29.) Proper tool being used? Stored after use? Grounded properly?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>30.) All operators qualified? Complies with local laws and ordinances?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>31.) Roads sidewalks protected? Adjacent structures properly shored?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>32.) Barricades or covers installed?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>33.) Excavation barricaded and lighting provided?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>34.) Seat belts available? Lights, brakes, warning signals operative?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>35.) Oily rag containers used and emptied daily at garage/repair shops?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>36.) Adequate lighting and ventilation for repair shop and warehouse?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>OTHERS:<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    JQUERY DATATABLES
                    <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                BASIC EXAMPLE
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Questions</th>
                                            <th>Option</th>


                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Questions</th>
                                            <th>Options</th>


                                        </tr>
                                    </tfoot>
                                    <tbody>


                                        <tr>
                                        <td>1</td>
                                            <td>Office trailer with power, secure site location and neat?</td>
                                <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>


                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Storage trailer(s) or Warehouse, secure site location and neat?</td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>

                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Injury records being kept? Injury handling procedures established?</td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Telephone, fax line & dedicated computer line?</td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Sanitary facilities are well maintained?</td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Water available? (drinking, testing, dust control, personal use</td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td> Site communications ( radios, etc.).</td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Office equipment ( telephone, fax machine, copier, etc. ).</td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Office furnishings ( desk, chair's, filing cabinet, print table, etc. )</td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Permits/licenses/Certificate of Insurance?</td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td> Nail, boards, debris removed?</td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>

                                        <tr>
                                            <td>12</td>
                                            <td> Regular disposal of wastes? Waste containers provided?</td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>

                                        <tr>
                                            <td>13</td>
                                            <td>Warnings signs and safety signs complete and posted?</td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>

                                        <tr>
                                            <td>14</td>
                                            <td> Hazard lights utilized?</td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>

                                        <tr>
                                            <td>15</td>
                                            <td> Delivery address and unloading point for material?</td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>

                                        <tr>
                                            <td>16</td>
                                            <td>Safety needs ( please check first aid kits, medical facilities location)</td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>

                                        <tr>
                                            <td>17</td>
                                            <td></td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>

                                        <tr>
                                            <td>18</td>
                                            <td></td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>

                                        <tr>
                                            <td>19</td>
                                            <td></td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>

                                        <tr>
                                            <td>20</td>
                                            <td></td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>

                                        <tr>
                                            <td>21</td>
                                            <td></td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>

                                        <tr>
                                            <td>22</td>
                                            <td></td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>

                                        <tr>
                                            <td>23</td>
                                            <td></td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>

                                        <tr>
                                            <td>24</td>
                                            <td></td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>

                                        <tr>
                                            <td>25</td>
                                            <td></td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>

                                        <tr>
                                            <td>26</td>
                                            <td></td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>

                                        <tr>
                                            <td>27</td>
                                            <td></td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>

                                        <tr>
                                            <td>28</td>
                                            <td></td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>

                                        <tr>
                                            <td>29</td>
                                            <td></td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>

                                        <tr>
                                            <td>30</td>
                                            <td></td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>
                                        <tr>
                                            <td>31</td>
                                            <td></td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>

                                        <tr>
                                            <td>32</td>
                                            <td></td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>
                                        <tr>
                                            <td>33</td>
                                            <td></td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>
                                        <tr>
                                            <td>34</td>
                                            <td></td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>
                                        <tr>
                                            <td>35</td>
                                            <td></td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>
                                        <tr>
                                            <td>36</td>
                                            <td></td>
                                            <td><input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <br>
                                <input type="radio" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                <input type="radio" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Others</label></td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->

    </section>






<?php include("../../../view/master/design_end.html");//?>

</body>
</html>

<!---->
