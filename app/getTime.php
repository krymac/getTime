<?php
error_reporting(0);
date_default_timezone_set("Europe/Warsaw");
$resp->currentTime=date("H:i:s");
header('Content-type: application/json');
echo json_encode( $resp );
?>