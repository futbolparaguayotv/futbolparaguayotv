<?php
$license_json = '{
    "payload": "https://mrpw.milcom.vcas.na1.verimatrixcloud.net:8063/?deviceId=MmRmZjY2MjQtMGZjOS0zYTFlLTgxMjMtYzJhNzM5ODU2YjFj",
    "content_id": "Evento Star - Test",
    "provider": "https://onetv.tigo.com/",
    "allowed_track_types": "SD_ONLY",
    "content_key_specs": [
        { "track_type": "SD" }
    ],
    "policy_overrides": {}
}';

header('Content-Type: application/json');
echo $license_json;
?>
