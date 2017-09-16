<?php
    include('../master/connect.php');


  $sql = "SELECT pay_item_code,p.part_code,description FROM pay_item as pi,part as p where p.part_id=pi.part_id and pi.status = 'active'  GROUP BY  pay_item_id ORDER BY pay_item_id desc";

  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['pay_item_code'],$fetch['part_code'], $fetch['description']);
  }
$conn = null;

echo json_encode($output);
?>
