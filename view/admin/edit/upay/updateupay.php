<?php

require_once('../../../../model/function.php');


$username = $_REQUEST['username'];
$orderid = $_REQUEST['orderid'];
$paym = $_REQUEST['paym'];
$amount = $_REQUEST['amount'];
$status = $_REQUEST['status'];
$id = $_REQUEST['id'];

$upaydata = ['id' => $id, 
'orderid' => $orderid, 'username' => $username, 
'paym' => $paym, 
'amount'=>$amount, 
'status'=>$status ];

$status = editupay($upaydata);

if ($status) {
    header('location: ../../upay.php');
} else {
    header('location: editupay.php?id={$id}');
}
