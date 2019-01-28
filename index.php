<?php
$url = 'https://mymue.com/api/Status/Get';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
$data = curl_exec($curl);
curl_close($curl);

$result = json_decode($data);
print_r($result->SharesAvailable);

$shares = $result->SharesAvailable;

require_once "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

define('CONSUMER_KEY', 'XXXXXXXXXXXXXXXX');
define('CONSUMER_SECRET', 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX');
define('ACCESS_TOKEN', 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX');
define('ACCESS_TOKEN_SECRET', 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX');

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

$status = 'There are ' .$shares. ' shares available on mymue.com. $MUE'; //text for your tweet.
if ($shares > "0") {
$post_tweets = $connection->post("statuses/update", ["status" => $status]);
}
?>
