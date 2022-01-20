<?php

namespace App;

class Example
{
    protected bool $running = false;
    protected string $greeting = '';

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