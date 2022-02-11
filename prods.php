<?php

include 'conn.php';
$info = json_decode(file_get_contents("php://input"));
$recno = $info->recno;
$pname = $info->productname;
$qty = $info->qty;

$kopi = "select * from stock where productname = '$pname'";
$zade = mysqli_query($don, $kopi);
$poke = mysqli_fetch_assoc($zade);
//$crate = $poke['unitprice'];
$stock = $poke['stockbal'];
$newstock = $stock + $qty;

$update = "update stock set stockbal = '$newstock' where productname ='$pname'";

mysqli_query($don, $update) or die('cant update');

$padit = "insert into stocktrans(date,productname,opstock,qtyin,qtyout,dmg,balance)values(curdate(),'$pname',0,'$qty',0,0,'$newstock')";

mysqli_query($don, $padit) or die('cant insert');

$data = array();

$del = "delete from sales where recno = '$recno' and productname = '$pname'";

mysqli_query($don, $del) or die('cant delete now');

$data = array("recno" => $recno, "product" => $pname, "qty" => $qty);
echo json_encode($data);

?>