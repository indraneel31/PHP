<?php
/**
 * Created by PhpStorm.
 * User: krishna
 * Date: 10/3/16
 */

define('SALT', 'ab234sdfk2rowerslwerwer');

function encode_data($data)
{
    return base64_encode(serialize($data));
}

function decode_data($data)
{
    return unserialize(base64_decode($data));
}
?>