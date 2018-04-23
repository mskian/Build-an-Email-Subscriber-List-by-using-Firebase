<?php

class Data {

/**
 * Returns a sanatized email;
 *
 * @param string $data
 * @return string
 */
public static function clean_email($data) {
    $data = preg_replace("/[^a-zA-Z0-9-@.]/", "", $data);
    return $data;
}

/**
 * Strip all characters but letters, numbers, and whitespace;
 *
 * @param string $data
 * @return string
 */
public static function clean_name($data) {
    $data = preg_replace("/[^a-zA-Z0-9\s]/", "", $data);
    return $data;
}

}
