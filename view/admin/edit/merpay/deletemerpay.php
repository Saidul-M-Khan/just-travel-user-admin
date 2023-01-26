<?php

require_once('../../../../model/function.php');

$id = $_REQUEST['id'];

if (deletemerpay($_GET['id'])) {
    header('location: ../../merpay.php');
}