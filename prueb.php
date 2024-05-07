<?php

$payload = file_get_contents('php://input');
$opts = array("Host: wv-client.cvattv.com.ar",
              "Origin: chrome-extension://cjfbmleiaobegagekpmlhmaadepdeedn",
              "User-Agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.83 Safari/537.36"
             );
$rs = 'MALFORMED_REQUEST';
while ($rs == 'MALFORMED_REQUEST') {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://wv-client.cvattv.com.ar?deviceId=NmJiMDI4MDgwNTA2ZGJhYmVkMzFlZGZlY2MwYTE5OWQ');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, "1");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $opts);
    $rs = curl_exec($ch);
    curl_close($ch);
    if ($rs == 'MALFORMED_REQUEST') {
        $ch2 = curl_init();
        curl_setopt($ch2, CURLOPT_URL, 'https://lic_de_glow');
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch2, CURLOPT_POST, "1");
        curl_setopt($ch2, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch2, CURLOPT_HTTPHEADER, $opts);
        $rs = curl_exec($ch2);
        curl_close($ch2);
    }
}

echo $rs;
