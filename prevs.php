<?php

include 'conn.php';
$info = json_decode(file_get_contents("php://input"));
$search = $info->searchTerm;

$selx = "select * from sales where recno = $search";
$sel = mysqli_query($don, $selx);
$data = array();
$rata = array();

while ($row = mysqli_fetch_array($sel)) {
	$data[] = array("cust" => $row['customername'], "prod" => $row['productname'], "qty" => $row['qtyout'], "disc" => $row['discount'], "rec" => $row['recno'], "rate" => $row['unitprice'], "salesid" => $row['salesid']);

}

echo json_encode($data);
//echo json_encode(rata.array_push($data));
//echo $data;
