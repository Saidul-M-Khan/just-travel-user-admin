<?php

require_once('../model/model.php');

$fname = $_REQUEST['fname'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];
// $photo = $_REQUEST['photo'];
$photo = $_REQUEST['target_file'];
$id = $_REQUEST['id'];


// $photo = $_POST['filepath'];









// if (isset($_POST['display'])) {
//     $displayStatus = $_POST['display'];
// } else {
//     $displayStatus = "No";
// }

$user = ['id' => $id, 'fname' => $fname, 'password' => $password, 'email' => $email, 'photo' => $photo];
$status = editUserInfo($user);

if ($status) {
    header('location: ../view/reguser/profile.php');
} else {
    header('location: ../view/reguser/edit-profile.php?id={$id}');
}
