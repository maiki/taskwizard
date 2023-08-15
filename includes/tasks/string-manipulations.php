<?php
/**
 * Fun String Manipulation Functions for Taskwizard
 *
 * @package Taskwizard
 */

// Prevent direct file access
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Reverse a string (Mirror Text)
 *
 * @param string $string String to reverse.
 * @return string Reversed string.
 */
function taskwizard_reverse_string($string) {
    return strrev($string);
}

/**
 * Convert a string to ROT13
 *
 * @param string $string String to convert.
 * @return string String in ROT13.
 */
function taskwizard_rot13_string($string) {
    return str_rot13($string);
}

/**
 * Convert a string to Pig Latin
 *
 * @param string $string String to convert.
 * @return string String in Pig Latin.
 */
function taskwizard_piglatin_string($string) {
    return preg_replace('/([aeiou])(\w+)(\s|$)/i', '$2$1ay$3', $string);
}

/**
 * Convert a string to CamelCase
 *
 * @param string $string String to convert.
 * @return string String in CamelCase.
 */
function taskwizard_camelcase_string($string) {
    return str_replace(' ', '', ucwords(str_replace('_', ' ', $string)));
}

/**
 * Convert a string to snake_case
 *
 * @param string $string String to convert.
 * @return string String in snake_case.
 */
function taskwizard_snakecase_string($string) {
    return strtolower(preg_replace('/\s+/', '_', $string));
}

/**
 * Convert a string to kebab-case
 *
 * @param string $string String to convert.
 * @return string String in kebab-case.
 */
function taskwizard_kebabcase_string($string) {
    return strtolower(preg_replace('/\s+/', '-', $string));
}

/**
 * Convert a string to UPPERCASE
 *
 * @param string $string String to convert.
 * @return string String in UPPERCASE.
 */
function taskwizard_uppercase_string($string) {
    return strtoupper($string);
}

/**
 * Convert a string to lowercase
 *
 * @param string $string String to convert.
 * @return string String in lowercase.
 */
function taskwizard_lowercase_string($string) {
    return strtolower($string);
}

/**
 * Scramble a string
 *
 * @param string $string String to scramble.
 * @return string Scrambled string.
 */
function taskwizard_scramble_string($string) {
    return str_shuffle($string);
}

/**
 * Convert a string to Leet Speak (1337 5P34K)
 *
 * @param string $string String to convert.
 * @return string String in Leet Speak.
 */
function taskwizard_leetspeak_string($string) {
    $leet = array('A' => '4', 'B' => '8', 'E' => '3', 'G' => '6', 'I' => '1', 'O' => '0', 'S' => '5', 'T' => '7');
    return strtr(strtoupper($string), $leet);
}
