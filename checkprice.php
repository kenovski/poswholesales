<?php
include 'conn.php';
$info = json_decode(file_get_contents("php://input"));
$pname = $info->pname;
$rate = $info->rate;

echo $pame;
echo $rate;
//$kopi = "select * from stock where productname = '$pname'";
$update = "update stock set unitprice = $rate where productname = '$pname'";
$zade = mysqli_query($don, $update);

$kata = array();

$kata = array("msg" => "Selling price updated");

echo json_encode($kata);

?>