<?php

require_once('../../../../model/function.php');

$id = $_REQUEST['id'];

if (deleteAir($_GET['id'])) {
    header('location: ../../air.php');
}