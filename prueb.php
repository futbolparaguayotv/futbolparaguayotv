<?php
$license_json = '{
    "payload": "",
    "content_id": "Evento Star - Test",
    "provider": "/",
    "allowed_track_types": "SD_ONLY",
    "content_key_specs": [
        { "track_type": "SD" }
    ],
    "policy_overrides": {}
}';

header('Content-Type: application/json');
echo $license_json;
?>
