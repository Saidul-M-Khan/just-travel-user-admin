<?php

require_once('../../../../model/function.php');

$id = $_REQUEST['id'];

if (deleteupay($_GET['id'])) {
    header('location: ../../upay.php');
}