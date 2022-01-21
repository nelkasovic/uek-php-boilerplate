<?php

namespace App;

use JsonException;

class Response
{
    /**
     * @throws JsonException
     */
    public static function json($data): ?string
    {
        return json_encode($data, JSON_THROW_ON_ERROR);
    }
}