<?php
session_start();
$ip = $_SERVER['REMOTE_ADDR'];
$dataFile = "data/$ip.json";

$data = [
    'coins' => 0,
    'energy' => 10,
];
file_put_contents($dataFile, json_encode($data));
echo json_encode($data);
?>
