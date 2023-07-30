<?php

class ProtectedProperties
{
    /**
     * @var string
     */
    protected string $string = 'protected';

    /**
     * @return string
     */
    protected function getString(): string
    {
        return $this->string;
    }
}