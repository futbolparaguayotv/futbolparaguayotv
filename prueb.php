<?php
$license_json = '{
    "payload": "f62e93559765dfa6a89d2842b2b6d64a:9f6a8cf0bcb1d17ce79ea93d0d9c3d83",
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
