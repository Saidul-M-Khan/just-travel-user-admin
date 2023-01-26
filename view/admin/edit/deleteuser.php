<?php

require_once('../../../model/function.php');

$id = $_REQUEST['id'];

if (deleteUsers($_GET['id'])) {
    header('location: ../user.php');
}