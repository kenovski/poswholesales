<?php

include 'conn.php';
$info = json_decode(file_get_contents("php://input"));
$search = $info->searchTerm;
//echo "Searched value is...." . $search;
//$selx = "select * from sales where recno = $search";
$selx = "select sum(qtyout * unitprice) as extended from sales where recno = $search";
$sel = mysqli_query($don, $selx);
$zade = mysqli_fetch_assoc($sel);
$total = $zade['extended'];

//echo json_encode($total);
echo number_format($total, 2);
//echo json_encode(rata.array_push($data));
//echo $data;
