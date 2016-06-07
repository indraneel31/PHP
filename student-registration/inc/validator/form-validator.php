<?php
/**
 * Created by PhpStorm.
 * User: Krishna S
 * Date: 10/3/16
 */

function validate_form(&$form_data, $filed_conditions)
{
    $formValid = true;
    if (!empty($form_data)) {
        foreach ($form_data as $key => $input) {
            $form_data[$key] = array('value' => $input);
            $conditions = isset($filed_conditions[$key]) ? $filed_conditions[$key] : array();
            if (!empty($conditions)) {
                foreach ($conditions as $k => $condition) {
                    if ($k == 'required' && $condition == true) { // required conditions
                        if (valid_required($input) == false) {
                            $form_data[$key]['focus'] = true;
                            $form_data[$key]['error_msg'] = "Required this filed";
                            $formValid = false;
                            break;
                        }
                    } else if ($k == 'min-length') { // min-length condition
                        if (valid_min_length($input, $condition) == false) {
                            $form_data[$key]['focus'] = true;
                            $form_data[$key]['error_msg'] = "Required min length at least $condition chars.";
                            $formValid = false;
                            break;
                        }
                    } else if ($k == 'max-length') { // max-length condition
                        if (valid_max_length($input, $condition) == false) {
                            $form_data[$key]['focus'] = true;
                            $form_data[$key]['error_msg'] = "This should not exceed the max length $condition chars.";
                            $formValid = false;
                            break;
                        }
                    } else if ($k == 'phone_number') { // phone_number condition
                        if (valid_phone($input,$condition) == false) {
                            $form_data[$key]['focus'] = true;
                            $form_data[$key]['error_msg'] = "Requried this field ";
                            $formValid = false;
                            break;
                        }
                    } else if ($k == 'email') { // email condition
                        if (valid_email($input, $condition) == false) {
                            $form_data[$key]['focus'] = true;
                            $form_data[$key]['error_msg'] = "required a valid email $condition chars. ";
                            $formValid = false;
                            break;
                        }
                    } else if ($k == 'postal_code') {
                        if (valid_postal_code($input) == false) {
                            $form_data[$key]['focus'] = true;
                            $form_data[$key]['error_msg'] = "Invalid postal code ";
                            $formValid = false;
                            break;
                        }
                    }
                }
            }
        }
    }
    return $formValid;
}

// validation required
function valid_required($input)
{
    return $input != null ? true : false;
}

// validate min length
function valid_min_length($input, $min)
{
    return strlen($input) >= $min ? true : false;
}

// validate max length
function valid_max_length($input, $max)
{
    return strlen($input) <= $max ? true : false;
}

// validate email
function valid_email($input, $email)
{
    return preg_match("/^[\w\.\-]+[\@]+[\w]+[\.]+[a-z]{2,3}$/", $input) == $email ? true : false;

}

// validate phone number
function valid_phone($input)
{
    return preg_match("/^([\+91]+[\s\-])?[\d]{10}+$/", $input) == $phone ? true : false;
}

// validate postal code
function valid_postal_code($input)
{
    return preg_match("/^[\d]{3}+[\s]?[\d]{3}+$/", $input) == $postal_code ? true : false;
}
?>