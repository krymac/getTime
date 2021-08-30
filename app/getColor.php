<?php
error_reporting(0);
//var_dump($_REQUEST);
$resp->statusCode="0";
$resp->statusMsg="OK";
$resp->color="black";
header('Content-type: application/json');
echo json_encode( $resp );
?>