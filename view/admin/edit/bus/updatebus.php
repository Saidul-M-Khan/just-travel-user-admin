<?php

require_once('../../../../model/function.php');


$bus_ticket_type = $_REQUEST['bus_ticket_type'];
$bus_ticket_price = $_REQUEST['bus_ticket_price'];
$bus_ticket_availability = $_REQUEST['bus_ticket_availability'];
$bus_available_seat = $_REQUEST['bus_available_seat'];
$bus_journey_date = $_REQUEST['bus_journey_date'];
$status = $_REQUEST['status'];
$image = $_REQUEST['image'];
$bus_ticket_id = $_REQUEST['bus_ticket_id'];

$busdata = ['bus_ticket_id' => $bus_ticket_id, 
'bus_ticket_type' => $bus_ticket_type, 'bus_ticket_price' => $bus_ticket_price, 
'bus_ticket_availability' => $bus_ticket_availability, 
'bus_available_seat'=>$bus_available_seat, 
'bus_journey_date'=>$bus_journey_date, 'status'=>$status, 
'image'=>$image ];

$status = editBus($busdata);

if ($status) {
    header('location: ../../bus.php');
} else {
    header('location: editbus.php?id={$id}');
}
