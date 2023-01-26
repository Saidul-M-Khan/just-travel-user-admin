<?php

require_once('../../../../model/function.php');

$place_name = $_REQUEST['place_name'];
$place_description = $_REQUEST['place_description'];
$place_image = $_REQUEST['place_image'];
$place_id = $_REQUEST['place_id'];

$placedata = ['place_id' => $place_id, 'place_name' => $place_name, 'place_description' => $place_description,'place_image'=>$place_image];

$status = editPlace($placedata);

if ($status) {
    header('location: ../../place.php');
} else {
    header('location: editplace.php?id={$id}');
}
