<?php

require_once('../../../../model/function.php');


$mername = $_REQUEST['mername'];
$due = $_REQUEST['due'];
$shopname = $_REQUEST['shopname'];
$status = $_REQUEST['status'];
$merid = $_REQUEST['merid'];

$merpaydata = ['merid' => $merid, 
'mername' => $mername, 'shopname' => $shopname,'status'=>$status,'due'=>$due ];

$status = editmerpay($merpaydata);

if ($status) {
    header('location: ../../merpay.php');
} else {
    header('location: editmerpay.php?id={$id}');
}
