<?php

namespace App;

class Example
{
    protected bool $running;
    protected string $greeting;

    public function __construct(bool $running = false, string $greeting = '')
    {
        $this->running = $running;
        $this->greeting = $greeting;
    }

    public static function sayHello(): string
    {
        return "<h3>Hello Static World!</h3>";
    }

    public function getRunning(): bool
    {
        return $this->running;
    }

    public function setRunning($value): Example
    {
        $this->running = $value;

        return $this;
    }

    public function getGreeting(): string
    {
        return $this->greeting;
    }

    public function setGreeting(string $greeting): Example
    {
        $this->greeting = $greeting;

        return $this;
    }
}