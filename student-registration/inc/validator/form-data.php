<?php
/**
 * Created by PhpStorm.
 * User: Krishna
 * Date: 10/3/16
 */

function show_value($filed, $data)
{
    if (isset($data[$filed]['value'])) {
        return $data[$filed]['value'];
    }
   return null;
}

function show_message($filed, $data)
{

    if (isset($data[$filed]['error_msg'])) {
        return $data[$filed]['error_msg'];
    }
    return null;
}