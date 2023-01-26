<?php

require_once('../../../../model/function.php');

$id = $_REQUEST['id'];

if (deleteEvent($_GET['id'])) {
    header('location: ../../event.php');
}