<?php

require_once('../../../../model/function.php');


$payment_method = $_REQUEST['payment_method'];
$price = $_REQUEST['price'];
$end_date = $_REQUEST['end_date'];
$name = $_REQUEST['name'];
$booking_for = $_REQUEST['booking_for'];
$status = $_REQUEST['status'];
$username = $_REQUEST['username'];
$id = $_REQUEST['id'];

$bookdata = ['id' => $id,
'name' => $name, 'booking_for' => $booking_for, 
'end_date' => $end_date, 
'price'=>$price, 
'payment_method'=>$payment_method, 'status'=>$status, 
'username'=>$username ];

$status = editbook($bookdata);

if ($status) {
    header('location: ../../booking.php');
} else {
    header('location: editbook.php?id={$id}');
}
