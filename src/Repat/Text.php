<?php

namespace Repat;

class Text
{
    /**
     * Text to be censored
     *
     * @var string
     */
    private $text;

    /**
     * Constructor
     *
     * @param string $text
     */
    public function __construct(?string $text = null)
    {
        $this->text = $text;
    }

    /**
     * Setter for text
     *
     * @param  string $text
     * @return \Repat\Text
     */
    public function setText(string $text) : self
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Censors email addresses out of $this->text
     *
     * @param  string $replace
     * @return string
     */
    public function censorEmail($replace = '*') : string
    {
        return preg_replace(REGEX_EMAIL, redact($this->text, $replace), $this->text);
    }
}
