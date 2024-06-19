<?php
session_start();
$ip = $_SERVER['REMOTE_ADDR'];
$dataFile = "data/$ip.json";

if (!file_exists($dataFile)) {
    $data = [
        'coins' => 0,
        'energy' => 10,
    ];
    file_put_contents($dataFile, json_encode($data));
} else {
    $data = json_decode(file_get_contents($dataFile), true);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Click Game</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function clickButton() {
            fetch('click.php')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('coins').textContent = data.coins;
                    document.getElementById('energy').textContent = data.energy;
                });
        }

        function upgradeEnergy() {
            fetch('upgrade.php')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('coins').textContent = data.coins;
                    document.getElementById('energy').textContent = data.energy;
                });
        }

        function resetProgress() {
            fetch('reset.php')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('coins').textContent = data.coins;
                    document.getElementById('energy').textContent = data.energy;
                });
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Click Game</h1>
        <p>Coins: <span id="coins"><?= $data['coins'] ?></span></p>
        <p>Energy: <span id="energy"><?= $data['energy'] ?></span></p>
        <div class="buttons">
            <button onclick="clickButton()">Click</button>
            <button onclick="upgradeEnergy()">Upgrade Energy (10 coins)</button>
            <button onclick="resetProgress()">Reset</button>
        </div>
    </div>
</body>
</html>
