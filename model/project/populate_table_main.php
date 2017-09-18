<?php
    include('../master/connect.php');


  $sql = "SELECT * from project where status='active'";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();

  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['contract_id'],$fetch['proj_name']);

    //contract view
  }
$conn = null;

echo json_encode($output);
?>
