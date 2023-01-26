<?php

require_once('../../../../model/function.php');

$id = $_REQUEST['id'];

if (deletePlace($_GET['id'])) {
    header('location: ../../place.php');
}