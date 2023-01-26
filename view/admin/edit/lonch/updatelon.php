<?php

require_once('../../../../model/function.php');


$launch_deck_type = $_REQUEST['launch_deck_type'];
$launch_ticket_price = $_REQUEST['launch_ticket_price'];
$launch_ticket_availability = $_REQUEST['launch_ticket_availability'];
$launch_departure_time = $_REQUEST['launch_departure_time'];
$launch_available_seats = $_REQUEST['launch_available_seats'];
$status = $_REQUEST['status'];
$launch_ticket_id = $_REQUEST['launch_ticket_id'];

$londata = ['launch_ticket_id' => $launch_ticket_id, 
'launch_departure_time' => $launch_departure_time,
'launch_ticket_availability' => $launch_ticket_availability, 'launch_available_seats'=>$launch_available_seats,
'launch_ticket_price'=>$launch_ticket_price, 
'launch_deck_type'=>$launch_deck_type, 'status'=>$status ];

$status = editlon($londata);

if ($status) {
    header('location: ../../lounch.php');
} else {
    header('location: editlon.php?id={$id}');
}
