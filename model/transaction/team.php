<?php
    include('../master/connect.php');
    session_start();
    $om=$_POST['om'];
    $pi=$_POST['pi'];
    $time=$_POST['time'];
    $Safety=$_POST['Safety'];
    $EIC=$_POST['EIC'];
    $Warehouse=$_POST['Warehouse'];
    $Foreman=$_POST['Foreman'];
    $mat=$_POST['mat'];
<<<<<<< HEAD
    $cont_id=$_POST['cont_id'];
    //$period=$_POST['period'];


    $sql = "INSERT INTO proj_team(proj_id,opt_mgr,field_engr,mtrls_engr,foreman,wrh_incharge,eqpt_incharge,safety_officer,timekeeper,status) values(?,?,?,?,?,?,?,?,?)";
  $q = $conn->prepare($sql);
  $q -> execute(array($cont_id,$mo,$time,$Safety,$EIC,$Warehouse,$Foreman,$mat,'ACTIVE'));
=======
    $cont_id=$_SESSION['cont_id'];
    //$period=$_POST['period'];


    $sql = "INSERT INTO proj_team(team_id,contract_id,opt_mgr,field_engr,mtrls_engr,foreman,wrh_incharge,eqpt_incharge,safety_officer,timekeeper,status) values((select lpad (no,6,'EQ') from proj_team as pt where no = (select max(no) from proj_team as p)),?,?,?,?,?,?,?,?,?,?)";
  $q = $conn->prepare($sql);
  $q -> execute(array($cont_id,$om,$PI,$mat,$Foreman,$Warehouse,$EIC,$Safety,$time,'ACTIVE'));
>>>>>>> mobile


?>
