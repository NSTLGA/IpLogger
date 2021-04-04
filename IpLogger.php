<?php
    $date = date("d/m/Y");
    $time = date("H:i:s");
    $ip_address = $_SERVER["REMOTE_ADDR"];
    $file  = fopen("logs.txt", "a+");
    fwrite($file, "Logged IP: ");
    fwrite($file, "($ip_address) - $time | $date");
    fwrite($file, "\n");
    fclose($file);
?>