<?php
include 'server.php';
session_destroy();
header('Location: '.$http_referer);
?>