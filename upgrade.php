<?php
session_start();
$ip = $_SERVER['REMOTE_ADDR'];
$dataFile = "data/$ip.json";

if (file_exists($dataFile)) {
    $data = json_decode(file_get_contents($dataFile), true);
    if ($data['coins'] >= 10) {
        $data['coins'] -= 10;
        $data['energy'] += 10;
    }
    file_put_contents($dataFile, json_encode($data));
    echo json_encode($data);
}
?>
