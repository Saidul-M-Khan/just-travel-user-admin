<?php

require_once('../../../../model/function.php');

$event_name = $_REQUEST['event_name'];
$event_location = $_REQUEST['event_location'];
$event_ticket_price = $_REQUEST['event_ticket_price'];
$event_details = $_REQUEST['event_details'];
$event_start_date = $_REQUEST['event_start_date'];
$event_end_date = $_REQUEST['event_end_date'];
$event_image = $_REQUEST['event_image'];
$event_id = $_REQUEST['event_id'];

$eventdata = ['event_id' => $event_id, 'event_name' => $event_name, 'event_location' => $event_location,'event_ticket_price' => $event_ticket_price, 'event_details'=>$event_details,'event_start_date'=>$event_start_date, 'event_end_date'=>$event_end_date, 'event_image'=>$event_image];
$status = editEvent($eventdata);

if ($status) {
    header('location: ../../event.php');
} else {
    header('location: editevent.php?id={$id}');
}
