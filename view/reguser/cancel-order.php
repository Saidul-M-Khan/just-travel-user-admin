<?php

require_once('../../model/model.php');


$order_id = $_REQUEST['order_id'];
$booking_id = $_REQUEST['booking_id'];

if (cancelOrder($_GET['order_id'])) {
    header('location: ./order-status.php');
}

if (cancelBooking($_GET['booking_id'])) {
    header('location: ./order-status.php');
}
