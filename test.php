<?php
header("Content-Type:application/json");
http_response_code(200);

if(strtoupper($_SERVER['REQUEST_METHOD']) === 'GET') {
    $tokenChallenge = $_GET["hub_challenge"];
    echo intval($tokenChallenge);
}
