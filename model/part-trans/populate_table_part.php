<?php
    include('../master/connect.php');


    $sql = "SELECT pt.part_id,part_code,part_desc,qty FROM `part-trans` as pt,part as p WHERE pt.status ='active' and pt.part_id=p.part_id group by part_id";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['part_id'],$fetch['part_code'],$fetch['part_desc'],$fetch['qty']);
  }
$conn = null;

echo json_encode($output);
?>
