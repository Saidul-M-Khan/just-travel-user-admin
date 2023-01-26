<?php

require_once('../../../../model/function.php');

$id = $_REQUEST['id'];

if (deleteOffer($_GET['id'])) {
    header('location: ../../offer.php');
}