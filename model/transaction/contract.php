<?php
    include('../master/connect.php');
    session_start();
    $_SESSION['clients']=$_POST['client'];
    $_SESSION['ref']=$_POST['ref'];
    $_SESSION['cont_id']=$_POST['cont_id'];
    $_SESSION['name']=$_POST['name'];
    $cont_id=$_POST['cont_id'];
    $client=$_POST['client'];
    $ref=$_POST['ref'];
    $start=$_POST['start'];
    $name=$_POST['name'];
    $day=$_POST['day'];
    $amount=$_POST['amount'];
    $user=$_POST['user'];
    //$period=$_POST['period'];


    $sql = "INSERT INTO contract(contract_id,emp_id,client_id,contract_name,contract_refnum,contract_days,contract_start,contract_amt,status) values(?,?,?,?,?,?,?,?,?)";
  $q = $conn->prepare($sql);
  $q -> execute(array($cont_id,$user,$client,$name,$ref,$day,$start,$amount,'ACTIVE'));

  $conn = null;

  echo json_encode($output);

?>
