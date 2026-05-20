<?php

$canal = $_GET['ch'] ?? '';

$canales = [
    'espn5' => 'https://la14hd.com/vivo/canales.php?stream=espn5',
];

if (!isset($canales[$canal])) {
    die("Canal no encontrado");
}

header('Content-Type: application/vnd.apple.mpegurl');
header('Access-Control-Allow-Origin: *');

$options = [
    "http" => [
        "method" => "GET",
        "header" =>
            "Origin: https://la14hd.com\r\n" .
            "Referer: https://la14hd.com/\r\n" .
            "User-Agent: Mozilla/5.0\r\n"
    ]
];

$context = stream_context_create($options);

echo file_get_contents($canales[$canal], false, $context);
