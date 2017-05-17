<?php
/**
 * Supported uitl functions
 */

if (!function_exists('starts_width')) {
    /**
     * check whether starts width needle
     * @param string $str
     * @param string $needle
     * @return bool
     */
    function starts_width($str, $needle)
    {
        return strpos($str, $needle) === 0;
    }
}

if (!function_exists('ends_width')) {
    /**
     * check whether ends width needle
     * @param string $str
     * @param string $needle
     * @return bool
     */
    function ends_width($str, $needle)
    {
        return strpos($str, $needle) === (strlen($str) - 1);
    }

}