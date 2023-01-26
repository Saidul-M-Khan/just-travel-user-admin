<?php

require_once('../../../../model/function.php');

$offer_name = $_REQUEST['offer_name'];
$offer_summary = $_REQUEST['offer_summary'];
$offer_details = $_REQUEST['offer_details'];
$offer_rules = $_REQUEST['offer_rules'];
$status = $_REQUEST['status'];
$offer_id = $_REQUEST['offer_id'];

$offerdata = ['offer_id' => $offer_id, 'offer_name' => $offer_name, 'offer_summary' => $offer_summary,'offer_details'=>$offer_details, 'offer_rules'=>$offer_rules,'status'=>$status];

$status = editOffer($offerdata);

if ($status) {
    header('location: ../../offer.php');
} else {
    header('location: editoffer.php?id={$id}');
}
