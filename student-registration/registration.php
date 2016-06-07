<?php
/**
 * Created by PhpStorm.
 * User: Krishna
 * Date: 10/3/16
 */

require_once "./inc/validator/form-validator.php";
include_once "./inc/convertions/encrypt-decrypt.php";

// errors
$form_data = array();

// is set studentForm
if (isset($_POST['studentForm'])) {

    $form_data = $_POST['studentForm'];
    $form_data['gender'] = isset($form_data['gender']) ? $form_data['gender'] : null;

    // field conditions for validation
    $filed_conditions = array(
        'firstname' => array('required' => true),
        'gender' => array('required' => true),
       'last_yr_percentage' => array('required' => true, 'min-length' => 1, 'max-length' => 3),
        'applying_for' => array('required' => true),
        'phone_number' => array('required' => true, 'type' => 'phone','unique' => true),
        'email' => array('required' => true, 'type' => 'email', 'unique' => true),
        'postal_code' => array('required' => true, 'type' => 'postal_code'),
    );

    $result = validate_form($form_data, $filed_conditions);
    if ($result == false) {
        $form_data = encode_data($form_data);
        header("Location: index.php?form_data=$form_data");
        exit;
    } else {
        header("Location: registration-success.php");
        exit;
    }
}
?>