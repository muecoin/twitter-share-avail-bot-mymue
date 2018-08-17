<?php
$content = file_get_contents("https://mymue.com/api/status");

$result = json_decode($content);

print_r($result->SharesAvailable);

$shares = $result->SharesAvailable;
?>
