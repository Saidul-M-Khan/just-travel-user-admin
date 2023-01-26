<?php

require_once('../../../../model/function.php');

$id = $_REQUEST['id'];

if (deleteBus($_GET['id'])) {
    header('location: ../../bus.php');
}