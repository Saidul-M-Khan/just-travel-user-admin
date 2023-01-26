<?php

require_once('../../../../model/function.php');

$id = $_REQUEST['id'];

if (deletelon($_GET['id'])) {
    header('location: ../../lounch.php');
}