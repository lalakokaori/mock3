<?php
    include('../master/connect.php');

$id = $_POST['id'];

  $sql = "UPDATE employee SET status = 'inactive' WHERE emp_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));

$conn = null;

echo json_encode($output);
?>
