<?php

include 'conn.php';
$info = json_decode(file_get_contents("php://input"));
$pname = $info->pname;
$cname = $info->cname;
//$rec = $info->rec;
$rec = $info->rec;
//echo 'Name of product' . $pname;
//$rec = mysqli_real_escape_string($don, $info->rec);
//$unitcost = $info->unitcost;
$qty = $info->qty;
$qty = 1;
$discount = $info->discount;

//$xion = "insert into stock(productname)values('fanta orange')";
$kopi = "select * from stock where productname = '$pname'";
$zade = mysqli_query($don, $kopi);
$poke = mysqli_fetch_assoc($zade);
$crate = $poke['unitprice'];
$stock = $poke['stockbal'];

$newstock = $stock - $qty;

$update = "update stock set stockbal = $newstock where productname ='$pname'";

mysqli_query($don, $update);

//echo "unitprice is..." .json_encode($crate);
$pon = "insert into sales(date,customername,productname,unitprice,qtyout,discount,recno)values(curdate(),'$cname','$pname','$crate','$qty', '$discount','$rec')";
mysqli_query($don, $pon) or die('cant insert');

//$padit = "insert into stocktrans(date,productname,opstock,qtyin,qtyout,dmg,balance)values(curdate(),'$pname',0,0,'$qty',0,'$newstock')";

$padit = "insert into stocktrans(date,productname,opstock,qtyin,qtyout,dmg,balance)values(curdate(),'$pname',0,0,'$qty',0,'$newstock')";

mysqli_query($don, $padit);
$ran = array();
//$msg = "incremented";
$ran = array("msg" => "incremented");
echo json_encode($ran);

?>