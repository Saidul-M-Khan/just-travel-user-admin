<?php

require_once('../../../model/function.php');

$user_name = $_REQUEST['username'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];
$id = $_REQUEST['id'];

$userdata = ['id' => $id, 'username' => $user_name, 'password' => $password, 'email' => $email];
$status = editUser($userdata);

if ($status) {
    header('location: ../user.php');
} else {
    header('location: edituser.php?id={$id}');
}
