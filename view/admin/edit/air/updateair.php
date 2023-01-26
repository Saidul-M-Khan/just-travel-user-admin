<?php

require_once('../../../../model/function.php');


$air_ticket_price = $_REQUEST['air_ticket_price'];
$plane_journey_date = $_REQUEST['plane_journey_date'];
$plane_ticket_availability = $_REQUEST['plane_ticket_availability'];
$plane_available_seat = $_REQUEST['plane_available_seat'];
$flight_no = $_REQUEST['flight_no'];
$status = $_REQUEST['status'];

$air_ticket_id = $_REQUEST['air_ticket_id'];

$airdata = ['air_ticket_id' => $air_ticket_id, 
'air_ticket_price' => $air_ticket_price, 'plane_journey_date' => $plane_journey_date, 
'plane_ticket_availability' => $plane_ticket_availability, 
'plane_available_seat'=>$plane_available_seat, 
'flight_no'=>$flight_no, 'status'=>$status];

$status = editAir($airdata);

if ($status) {
    header('location: ../../air.php');
} else {
    header('location: editair.php?id={$id}');
}
