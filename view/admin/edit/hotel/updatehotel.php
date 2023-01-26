<?php

require_once('../../../../model/function.php');

$hotel_name = $_REQUEST['hotel_name'];
$hotel_location = $_REQUEST['hotel_location'];
$regular_booking_price = $_REQUEST['regular_booking_price'];
$discounted_booking_price = $_REQUEST['discounted_booking_price'];
$booking_date = $_REQUEST['booking_date'];
$hotel_services = $_REQUEST['hotel_services'];
$hotel_image = $_REQUEST['hotel_image'];
$hotel_id = $_REQUEST['hotel_id'];

$hoteldata = ['hotel_id' => $hotel_id, 'hotel_name' => $hotel_name, 'hotel_location' => $hotel_location, 'regular_booking_price' => $regular_booking_price, 'discounted_booking_price'=>$discounted_booking_price, 'booking_date'=>$booking_date, 'hotel_services'=>$hotel_services, 'hotel_image'=>$hotel_image ];
$status = editHotel($hoteldata);

if ($status) {
    header('location: ../../hotel.php');
} else {
    header('location: edithotel.php?id={$id}');
}
