<?php

class PrivateProperties
{
    /**
     * @var string
     */
    private string $string = 'private';

    /**
     * @return string
     */
    private function getString(): string
    {
        return $this->string;
    }
}