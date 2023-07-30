<?php

class PublicProperties
{
    /**
     * @var string
     */
    public string $string = 'public';

    /**
     * @return string
     */
    public function getString(): string
    {
        return $this->string;
    }
}