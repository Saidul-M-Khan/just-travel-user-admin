<?php

require_once('db.php');


function getAllBusTicket()
{
    $con = getConnection();
    $sql = "select * from bus_ticket where (bus_ticket_availability='Available') or (bus_ticket_availability='available')";
    $result = mysqli_query($con, $sql);
    return $result;
}

function getAllLaunchTicket()
{
    $con = getConnection();
    $sql = "select * from launch_ticket where (launch_ticket_availability='Available') OR (launch_ticket_availability='available')";
    $result = mysqli_query($con, $sql);
    return $result;
}

function getAllAirTicket()
{
    $con = getConnection();
    $sql = "select * from air_ticket where (plane_ticket_availability='Available') OR (plane_ticket_availability='available')";
    $result = mysqli_query($con, $sql);
    return $result;
}

function getAllEventTicket()
{
    $con = getConnection();
    $sql = "select * from event_ticket where (event_ticket_availability='Available') OR (event_ticket_availability='available')";
    $result = mysqli_query($con, $sql);
    return $result;
}

function getAllHotel()
{
    $con = getConnection();
    $sql = "select * from hotel";
    $result = mysqli_query($con, $sql);
    return $result;
}

function getAllPlace()
{
    $con = getConnection();
    $sql = "select * from places";
    $result = mysqli_query($con, $sql);
    return $result;
}

function getAllOffer()
{
    $con = getConnection();
    $sql = "select * from offers";
    $result = mysqli_query($con, $sql);
    return $result;
}

function getUserById($data)
{
    $con = getConnection();
    $sql = "select * from users where id={$data}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function getUserInfo($data)
{
    $con = getConnection();
    $sql = "select * from users where id={$data}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function checkLogin($data)
{
    $con = getConnection();
    $fusername = $data['NID'];
    $fpassword = $data['Password'];
    $query = mysqli_query($con, "select * from users where username='$fusername' && password='$fpassword'");
    $num_rows = mysqli_num_rows($query);
    $row = mysqli_fetch_array($query);

    if ($num_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function getBusTicketById($bus_ticket_id)
{
    $con = getConnection();
    $sql = "select * from bus_ticket where bus_ticket_id={$bus_ticket_id}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function getLaunchTicketById($launch_ticket_id)
{
    $con = getConnection();
    $sql = "select * from launch_ticket where launch_ticket_id={$launch_ticket_id}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function getAirTicketById($air_ticket_id)
{
    $con = getConnection();
    $sql = "select * from air_ticket where air_ticket_id={$air_ticket_id}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function getEventTicketById($event_id)
{
    $con = getConnection();
    $sql = "select * from event_ticket where event_id={$event_id}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function getHotelById($hotel_id)
{
    $con = getConnection();
    $sql = "select * from hotel where hotel_id={$hotel_id}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function getEventDetailsById($event_id)
{
    $con = getConnection();
    $sql = "select * from event_ticket where event_id={$event_id}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function editUserInfo($user)
{
    $con = getConnection();
    $sql = "update users set fname='{$user['fname']}', password='{$user['password']}', email='{$user['email']}', photo='{$user['photo']}' where id={$user['id']}";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function deleteProfile($id)
{
    $con = getConnection();
    $sql = "delete from users where id={$id}";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function cancelOrder($order_id)
{
    $con = getConnection();
    $sql = "delete from orders where order_id='{$order_id}'";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function cancelBooking($booking_id)
{
    $con = getConnection();
    $sql = "delete from booking where booking_id='{$booking_id}'";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getOrderById($order_id)
{
    $con = getConnection();
    $sql = "select * from orders where order_id={$order_id}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function getBookingById($booking_id)
{
    $con = getConnection();
    $sql = "select * from booking where booking_id={$booking_id}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}
