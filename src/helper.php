<?php
/**
 * Regular Expression for an email address
 * @var string
 */
define('REGEX_EMAIL', '/(?:[a-z0-9!#$%&\'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&\'*+\/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/');

/**
 * Default value to replace the text with
 * @var string
 */
define('DEFAULT_REPLACE', '*');

if (!function_exists('redact')) {
    /**
     * Replaces input with the same number of given character
     *
     * @param  string $input
     * @param  string $replace
     * @return string
     */
    function redact(string $input, string $replace = DEFAULT_REPLACE) : string
    {
        return str_repeat($replace, strlen($input));
    }
}

if (!function_exists('censor_email')) {
    /**
     * Helper function
     *
     * @param string $text
     * @param string $replace
     * @return string
     */
    function censor_email(string $text, string $replace = DEFAULT_REPLACE) : string
    {
        $text = new \Repat\Text($text);
        return $text->censorEmail($replace);
    }
}
