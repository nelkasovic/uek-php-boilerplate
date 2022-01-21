<?php

try {
    echo json_encode([
        'status' => true,
        'data' => [
            'year' => 2020,
            'month' => 'January',
            'day' => 22
        ]
    ], JSON_THROW_ON_ERROR);
} catch (Exception $e) {
    return null;
}