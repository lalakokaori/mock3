<?php
    include('../master/connect.php');


    $sql = "SELECT pt.part_id,p.part_desc,percent,progress FROM `part-trans` as pt,part as p group by part_id";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['part_id'],$fetch['part_desc'],$fetch['percent'],$fetch['progress']);
  }
$conn = null;

echo json_encode($output);
?>
