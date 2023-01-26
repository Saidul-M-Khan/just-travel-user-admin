<?php

require_once('../../../../model/function.php');

$id = $_REQUEST['id'];

if (deletebook($_GET['id'])) {
    header('location: ../../booking.php');
}