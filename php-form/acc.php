<?php
/**
 * Created by PhpStorm.
 * User: Krishna
 */

// set member entry id from the GET request
$member_entry_id = isset($_GET['member_entry_id']) ? $_GET['member_entry_id'] : '';

// dummy array of users
$arr_users = array(
    array(
        'email' => 'jershome@mail.com',
        'phone' => '9786991398',
        "username" => 'jer',
        "password" => "jer"
    ),
    array(
        'email' => 'krishna@mail.com',
        'phone' => '23421453242',
        "username" => 'krishna',
        "password" => "krishna"
    ),
);

$member_emails = array_column($arr_users, 'email');
$member_phones = array_column($arr_users, 'phone');
$memberExist = false;

// checks member exists with array of emails
$memberExist = in_array($member_entry_id, $member_emails);

// if $memberexist is false, then checks with the array of phones
if ($memberExist == false)
    $memberExist = in_array($member_entry_id, $member_phones);


if ($memberExist) {
    include "login-form.php";
} else {
    include "register-form.php";
}