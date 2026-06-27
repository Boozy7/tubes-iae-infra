<?php
$opts = [
    "http" => [
        "method" => "POST",
        "header" => "Content-Type: application/json\r\nAccept: application/json\r\n",
        "content" => json_encode(["name" => "my test team", "description" => "desc"]),
        "ignore_errors" => true
    ]
];
$result = @file_get_contents("http://localhost:8004/api/teams", false, stream_context_create($opts));
if ($result === false) {
    echo "ERROR: " . error_get_last()['message'];
} else {
    echo $result;
}
