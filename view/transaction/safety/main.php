<?php include('../../../controller/master/log.php');
?>

<!---->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("../../../view/master/design.html");//header and design ?>
<body>
<?php include("../../../view/master/design_sidebar.php");//header and design ?>
    <!-- LOGO HEADER END-->
            <div class="row" style="padding-top: 25px;">
                <div class="col-md-12">
                    <h4 class="page-head-line">SAFETY OFFICER</h4>
                        <div class="panel-body col-md-4 col-sm-4 col-xs-12">
                        <LABEL>Project Code</LABEL>
                        <select id="heard" class="form-control" required="">
                          <option selected="selected" value="none">-Select Project Code-</option>
                        </select> 
                        </div>
                </div>
            </div>
            <div class="row" style="padding-top: 25px;">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped ">
                        <thead>
                        <tr>
                        <th>#</th>
                        <th>Questions</th>
                        <th width=20%>Option</th>                  
                        </tr>
                        </thead>
                        <tbody>
                        <tr>  
                        <td>1</td>
                        <td>Office trailer with power, secure site location and neat?</td>
                        <td>
            <label><input type="radio" name="1_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="1_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="1_group" value="sub" />Non-Compliant</label><br>
            <label><input type="radio" name="1_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="1_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>2</td>
                        <td>Storage trailer(s) or Warehouse, secure site location and neat?</td>
                        <td>
            <label><input type="radio" name="2_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="2_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="2_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="2_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="2_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>3</td>
                        <td>Injury records being kept? Injury handling procedures established?</td>
                        <td>
            <label><input type="radio" name="3_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="3_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="3_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="3_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="3_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>4</td>
                        <td>Telephone, fax line & dedicated computer line?</td>
                        <td>
            <label><input type="radio" name="4_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="4_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="4_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="4_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="4_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>5</td>
                        <td>Sanitary facilities are well maintained?</td>
                        <td>
            <label><input type="radio" name="5_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="5_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="5_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="5_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="5_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>6</td>
                        <td>Water available? (drinking, testing, dust control, personal use )</td>
                        <td>
            <label><input type="radio" name="6_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="6_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="6_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="6_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="6_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>7</td>
                        <td>Site communications ( radios, etc.)</td>
                        <td>
            <label><input type="radio" name="7_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="7_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="7_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="7_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="7_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>8</td>
                        <td>Office equipment ( telephone, fax machine, copier, etc. )</td>
                        <td>
            <label><input type="radio" name="8_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="8_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="8_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="8_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="8_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>9</td>
                        <td>Office furnishings ( desk, chair's, filing cabinet, print table, etc. )</td>
                        <td>
            <label><input type="radio" name="9_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="9_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="9_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="9_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="9_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>10</td>
                        <td>Permits/licenses/Certificate of Insurance?</td>
                        <td>
            <label><input type="radio" name="10_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="10_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="10_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="10_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="10_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>11</td>
                        <td>Nail, boards, debris removed?</td>
                        <td>
            <label><input type="radio" name="11_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="11_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="11_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="11_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="11_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>12</td>
                        <td>Regular disposal of wastes? Waste containers provided?</td>
                        <td>
            <label><input type="radio" name="12_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="12_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="12_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="12_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="12_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>13</td>
                        <td>Warnings signs and safety signs complete and posted?</td>
                        <td>
            <label><input type="radio" name="13_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="13_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="13_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="13_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="13_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>14</td>
                        <td>Hazard lights utilized?</td>
                        <td>
            <label><input type="radio" name="14_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="14_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="14_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="14_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="14_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>15</td>
                        <td>Delivery address and unloading point for material?</td>
                        <td>
            <label><input type="radio" name="15_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="15_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="15_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="15_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="15_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>16</td>
                        <td>Safety needs ( please check first aid kits, medical facilities location)</td>
                        <td>
            <label><input type="radio" name="16_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="16_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="16_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="16_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="16_group" />others</label></td>  
            
                        </tr>

                        <tr>  
                        <td>17</td>
                        <td>Open ditches, drop offs protected? Ladders lowered?</td>
                        <td>
            <label><input type="radio" name="17_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="17_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="17_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="17_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="17_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>18</td>
                        <td>MSDS for received hazardous wastes? Control/disposal established?</td>
                        <td>
            <label><input type="radio" name="18_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="18_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="18_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="18_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="18_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>19</td>
                        <td>Fire extinguishers available and inspected?</td>
                        <td>
            <label><input type="radio" name="19_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="19_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="19_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="19_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="19_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>20</td>
                        <td>Flammable liquids in secure container/storage?</td>
                        <td>
            <label><input type="radio" name="20_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="20_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="20_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="20_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="20_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>21</td>
                        <td>Established equipment fueling method (turn off/grounded)?</td>
                        <td>
            <label><input type="radio" name="21_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="21_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="21_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="21_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="21_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>22</td>
                        <td>PPEs adequate and utilized? (face, head, eye, hand, foot protection)?</td>
                        <td>
            <label><input type="radio" name="22_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="22_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="22_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="22_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="22_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>23</td>
                        <td>Safety orientations conducted to all employees</td>
                        <td>
            <label><input type="radio" name="23_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="23_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="23_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="23_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="23_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>24</td>
                        <td>Equipment had undergone preventive maintenance?</td>
                        <td>
            <label><input type="radio" name="24_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="24_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="24_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="24_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="24_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>25</td>
                        <td>Materials properly stored/stacked? Inventories updated?</td>
                        <td>
            <label><input type="radio" name="25_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="25_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="25_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="25_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="25_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>26</td>
                        <td>Proper tool being used? Stored after use? Grounded properly?</td>
                        <td>
            <label><input type="radio" name="26_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="26_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="26_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="26_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="26_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>27</td>
                        <td>Equipment had undergone preventive maintenance?</td>
                        <td>
            <label><input type="radio" name="27_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="27_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="27_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="27_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="27_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>28</td>
                        <td>Materials properly stored/stacked? Inventories updated?</td>
                        <td>
            <label><input type="radio" name="28_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="28_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="28_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="28_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="28_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>29</td>
                        <td>Proper tool being used? Stored after use? Grounded properly?</td>
                        <td>
            <label><input type="radio" name="29_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="29_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="29_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="29_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="29_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>30</td>
                        <td>All operators qualified? Complies with local laws and ordinances?</td>
                        <td>
            <label><input type="radio" name="30_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="30_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="30_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="30_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="30_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>31</td>
                        <td>Roads sidewalks protected? Adjacent structures properly shored?</td>
                        <td>
            <label><input type="radio" name="31_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="31_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="31_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="31_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="31_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>32</td>
                        <td>Barricades or covers installed?</td>
                        <td>
            <label><input type="radio" name="32_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="32_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="32_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="32_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="32_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>33</td>
                        <td>Excavation barricaded and lighting provided?</td>
                        <td>
            <label><input type="radio" name="33_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="33_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="33_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="33_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="33_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>34</td>
                        <td>Seat belts available? Lights, brakes, warning signals operative?</td>
                        <td>
            <label><input type="radio" name="34_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="34_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="34_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="34_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="34_group" />others</label></td>  
            
                        </tr>
                        <tr>  
                        <td>35</td>
                        <td>Oily rag containers used and emptied daily at garage/repair shops?</td>
                        <td>
            <label><input type="radio" name="35_group" value="equip"/>Compliant</label><br>
            <label><input type="radio" name="35_group" value="cat" />Needs Improvement</label><br>
            <label><input type="radio" name="35_group" value="sub" />Non-Compliant</label><<br>
            <label><input type="radio" name="35_group" value="sub" />Not Applicable</label><br>
            <label><input type="radio" name="35_group" />others</label></td>  
            
                        </tr>
                        </tbody>
                    </table>
                </div>


            </div>              
    

<?php include("../../../view/master/design_end.html");//?>

</body>
</html>

<!---->

