<?php
$license_json = '{
    "payload": "https://mrpw.milcom.vcas.na1.verimatrixcloud.net:8063?deviceId=OGRhMmY4OTQtZjU0Yy0zOWI3LTgxNjUtMmYxNGZiMGNkNGQx",
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
