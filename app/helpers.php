<?php

function jsonResponse(array $data = [], array $http_headers = [])
{
    header('Content-Type: application/json');

    if (count($http_headers)) {
        foreach ($http_headers as $name => $value) {
            header("{$name}: {$value}");
        }
    }

    echo json_encode($data);
    exit;
}

function asset($file_path)
{
    return ASSETS_URL."/{$file_path}";
}