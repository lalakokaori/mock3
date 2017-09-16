<?php include('../../../controller/master/log.php');

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("../../../view/master/design.html");//header and design ?>

<body>
<div class="se-pre-con"></div>
<?php include("../../../view/master/design_sidebar.php");//header and design ?>

    <!-- HEADER END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
               <!--**********************************-->

                            <div class="modal fade" id="cat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Category </h4>
                                        </div>
                                        <div class="modal-body">

                                             <div class="col-sm-5 col-xs-10" id="f_type_cat_div" class='form-group'>
                                                <label><font color="darkred">*</font>Part</label> <!-- MODEL -->     <select class="form-control input-lg" id="modal_equip_type" required><option selected="selected" value="none">-Category First-</option>
                                                </select>

                                            </div>
                                            <div class="col-sm-5 col-xs-10" id="f_type_cat_div" class='form-group'>
                                                <label><font color="darkred">*</font>Amount</label> <!-- MODEL -->
                                                <input type="text" class="form-control input-lg" id="f_type_cat" required>

                                            </div>
                                        </div>


                                         <div class="col-md-4 col-xs-12"><br><button id="btn_reset" class="btn btn-block btn-lg">Reset</button></div>
                                         <div class="col-md-4 col-xs-12"><br><button id="btn_save" class="btn btn-block btn-success btn-lg">Save</button></div>
                                         <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="subcat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Subcategory</h4>
                                        </div>
                                        <div class="modal-body">
                                           <div class="col-sm-6 col-xs-12" id="f_type_subcat_div" class='form-group'>
                                                <label><font color="darkred">*</font>Pay Item</label> <!-- MODEL -->
                                                <input type="text" class="form-control input-lg" id="f_type_subcat" required><label>hey</label>
                                            </div>
                                            <div class="col-sm-6 col-xs-12" id="modal_category_div" class='form-group'>
                                            <label><font color="darkred">*</font>Part</label> <!-- MODEL -->
                                             <select class="form-control input-lg" id="modal_category" required>

                                            </select>
                                        </div>
                                        <div class="col-sm-7 col-xs-12" id="f_type_subcat_div" class='form-group'>
                                                <label><font color="darkred">*</font>Amount</label> <!-- MODEL -->
                                                <input type="text" class="form-control input-lg" id="f_type_subcat" required>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                         <div class="col-md-2 col-xs-12"><br><button id="btn_reset1" class="btn btn-block btn-lg">Reset</button></div>

                                         <div class="col-md-2 col-xs-12"><br><button id="btn_save1" class="btn btn-block btn-success btn-lg">Save</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                     <!-- End Modals-->
<!--**********************************-->

            </div>

            <div class="row">

              <!--   Kitchen Sink -->

                    <div class="panel-heading" align="center">
                        <h4 class="page-head-line">Schedule</h4>
                    </div>
                    <div class="panel panel-default">
                    <div class="panel-body">
                    <!--pill tabs-->
                     <ul class="nav nav-pills">
                                <li class="active"><a href="#cat-pills" data-toggle="tab">Part</a>
                                </li>
                                <li class=""><a href="#sub-pills" data-toggle="tab">Pay Item</a>
                                       </li>
                            </ul>
                            <!-- pill-->
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="cat-pills">
                    <br />
                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#cat">Add</button>
                                    <h4>Part</h4>
                        <div class="table-responsive">
                            <table id="table_category" class="table table-striped table-bordered table-hover" >
                                <thead>
                                    <tr>

                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>%</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sub-pills"><br/>
                     <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#subcat" id="subAdd">Add</button>
                                    <h4>Pay Item </h4>
                        <div class="table-responsive">
                            <table id="table_subcategory" class="table table-striped table-bordered table-hover" >
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Part</th>
                                        <th>Name</th>
                                        <th>%</th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>


                    </div>
                </div>

</div>

<script type="text/javascript">
    var test=$("#type").val();

</script>
 <script src="../../../controller/part-trans.js" type="text/javascript"></script>

<?php include("../../../view/master/design_end.html");//?>

</body>
</html>
