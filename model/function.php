<?php
// include './config.php';
require 'db.php';

function getUserById($id)
{
    $con = getConnection();
    $sql = "select * from users where id={$id}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function editUser($userdata)
{
    $con = getConnection();
    $sql = "update users set username='{$userdata['username']}', password='{$userdata['password']}', email='{$userdata['email']}' where id={$userdata['id']}";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function deleteUsers($id)
{
    $con = getConnection();
    $sql = "delete from users where id={$id}";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getAllHotel()
{
    $con = getConnection();
    $sql = "select * from hotel";
    $result = mysqli_query($con, $sql);
    return $result;
}
function getHotelById($id)
{
    $con = getConnection();
    $sql = "SELECT * FROM hotel where hotel_id={$id}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}
function editHotel($hoteldata)
{
    $con = getConnection();
    $sql = "UPDATE hotel SET hotel_name='{$hoteldata['hotel_name']}', hotel_location='{$hoteldata['hotel_location']}', regular_booking_price='{$hoteldata['regular_booking_price']}',discounted_booking_price='{$hoteldata['discounted_booking_price']}',booking_date='{$hoteldata['booking_date']}',hotel_services='{$hoteldata['hotel_services']}',hotel_image='{$hoteldata['hotel_image']}' where hotel_id={$hoteldata['hotel_id']}";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}
function deleteHotel($id)
{
    $con = getConnection();
    $sql = "delete from hotel where hotel_id={$id}";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}


function getAllEvent()
{
    $con = getConnection();
    $sql = "select * from event_ticket";
    $result = mysqli_query($con, $sql);
    return $result;
}
function getEventById($id)
{
    $con = getConnection();
    $sql = "SELECT * FROM event_ticket where event_id={$id}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}
function editEvent($eventdata)
{
    $con = getConnection();
    $sql = "UPDATE event_ticket SET event_name='{$eventdata['event_name']}', event_location='{$eventdata['event_location']}', event_ticket_price='{$eventdata['event_ticket_price']}',event_details='{$eventdata['event_details']}',event_start_date='{$eventdata['event_start_date']}',event_end_date='{$eventdata['event_end_date']}',event_image='{$eventdata['event_image']}' where event_id={$eventdata['event_id']}";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}
function deleteEvent($id)
{
    $con = getConnection();
    $sql = "delete from event_ticket where event_id={$id}";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getAllPLace()
{
    $con = getConnection();
    $sql = "select * from places";
    $result = mysqli_query($con, $sql);
    return $result;
}

function getPLaceById($id)
{
    $con = getConnection();
    $sql = "SELECT * FROM places where place_id={$id}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function editPLace($placedata)
{
    $con = getConnection();
    $sql = "UPDATE places SET place_name='{$placedata['place_name']}', place_description='{$placedata['place_description']}',place_image='{$placedata['place_image']}' where place_id={$placedata['place_id']}";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function deletePLace($id)
{
    $con = getConnection();
    $sql = "delete from places where place_id={$id}";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getAllOffer()
{
    $con = getConnection();
    $sql = "select * from offers";
    $result = mysqli_query($con, $sql);
    return $result;
}

function getOfferById($id)
{
    $con = getConnection();
    $sql = "SELECT * FROM offers where offer_id={$id}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function editOffer($offerdata)
{
    $con = getConnection();
    $sql = "UPDATE offers SET offer_name='{$offerdata['offer_name']}', offer_summary='{$offerdata['offer_summary']}',offer_details='{$offerdata['offer_details']}',offer_rules='{$offerdata['offer_rules']}', status='{$offerdata['status']}' where offer_id={$offerdata['offer_id']}";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function deleteOffer($id)
{
    $con = getConnection();
    $sql = "delete from offers where offer_id={$id}";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getAllBus()
{
    $con = getConnection();
    $sql = "select * from bus_ticket";
    $result = mysqli_query($con, $sql);
    return $result;
}
function getBusById($id)
{
    $con = getConnection();
    $sql = "SELECT * FROM bus_ticket where bus_ticket_id={$id}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function editBus($busdata)
{
    $con = getConnection();
    $sql = "UPDATE bus_ticket SET image='{$busdata['image']}',bus_journey_date='{$busdata['bus_journey_date']}', bus_available_seat='{$busdata['bus_available_seat']}', bus_ticket_availability='{$busdata['bus_ticket_availability']}',bus_ticket_price='{$busdata['bus_ticket_price']}',bus_ticket_type='{$busdata['bus_ticket_type']}', status='{$busdata['status']}' where bus_ticket_id={$busdata['bus_ticket_id']}";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function deleteBus($id)
{
    $con = getConnection();
    $sql = "delete from bus_ticket where bus_ticket_id={$id}";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getAllAir()
{
    $con = getConnection();
    $sql = "select * from air_ticket";
    $result = mysqli_query($con, $sql);
    return $result;
}

function getAirById($id)
{
    $con = getConnection();
    $sql = "SELECT * FROM air_ticket where air_ticket_id={$id}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function editAir($airdata)
{
    $con = getConnection();
    $sql = "UPDATE air_ticket SET air_ticket_price='{$airdata['air_ticket_price']}', plane_journey_date='{$airdata['plane_journey_date']}', plane_ticket_availability='{$airdata['plane_ticket_availability']}',plane_available_seat='{$airdata['plane_available_seat']}',flight_no='{$airdata['flight_no']}', status='{$airdata['status']}' where air_ticket_id={$airdata['air_ticket_id']}";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function deleteAir($id)
{
    $con = getConnection();
    $sql = "delete from air_ticket where air_ticket_id={$id}";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getAlllon()
{
    $con = getConnection();
    $sql = "select * from launch_ticket";
    $result = mysqli_query($con, $sql);
    return $result;
}

function getlonById($id)
{
    $con = getConnection();
    $sql = "SELECT * FROM launch_ticket where launch_ticket_id={$id}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function editlon($londata)
{
    $con = getConnection();
    $sql = "UPDATE launch_ticket SET launch_deck_type='{$londata['launch_deck_type']}', launch_ticket_price='{$londata['launch_ticket_price']}', launch_ticket_availability='{$londata['launch_ticket_availability']}',launch_available_seats='{$londata['launch_available_seats']}',launch_departure_time='{$londata['launch_departure_time']}', status='{$londata['status']}' where launch_ticket_id={$londata['launch_ticket_id']}";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function deletelon($id)
{
    $con = getConnection();
    $sql = "delete from launch_ticket where launch_ticket_id={$id}";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getAllmerpay()
{
    $con = getConnection();
    $sql = "select * from merpay";
    $result = mysqli_query($con, $sql);
    return $result;
}
function getmerpayById($id)
{
    $con = getConnection();
    $sql = "SELECT * FROM merpay where merid={$id}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}
function editmerpay($merpaydata)
{
    $con = getConnection();
    $sql = "UPDATE merpay SET mername='{$merpaydata['mername']}', shopname='{$merpaydata['shopname']}', due='{$merpaydata['due']}', status='{$merpaydata['status']}' where merid={$merpaydata['merid']}";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function deletemerpay($id)
{
    $con = getConnection();
    $sql = "delete from merpay where merid={$id}";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getAllupay()
{
    $con = getConnection();
    $sql = "select * from upay";
    $result = mysqli_query($con, $sql);
    return $result;
}
function getupayById($id)
{
    $con = getConnection();
    $sql = "SELECT * FROM orders where id={$id}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}
function editupay($upaydata)
{
    $con = getConnection();
    $sql = "UPDATE orders SET username='{$upaydata['username']}', orderid='{$upaydata['orderid']}', paym='{$upaydata['paym']}', status='{$upaydata['status']}', amount='{$upaydata['amount']}' where id={$upaydata['id']}";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function deleteupay($id)
{
    $con = getConnection();
    $sql = "delete from orders where id={$id}";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getAllbook()
{
    $con = getConnection();
    $sql = "select * from booking";
    $result = mysqli_query($con, $sql);
    return $result;
}

function getbookById($id)
{
    $con = getConnection();
    $sql = "SELECT * FROM booking where id={$id}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function editbook($bookdata)
{
    $con = getConnection();
    $sql = "UPDATE booking SET username='{$bookdata['username']}', booking_for='{$bookdata['booking_for']}', name='{$bookdata['name']}', status='{$bookdata['status']}', end_date='{$bookdata['end_date']}', price='{$bookdata['price']}', payment_method='{$bookdata['payment_method']}' where id={$bookdata['id']}";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function deletebook($id)
{
    $con = getConnection();
    $sql = "delete from booking where id={$id}";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}
