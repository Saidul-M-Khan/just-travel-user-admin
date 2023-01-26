<?php

require_once('../../../../model/function.php');

$id = $_REQUEST['id'];

if (deleteHotel($_GET['id'])) {
    header('location: ../../hotel.php');
}