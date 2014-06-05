 <?php
header('Access-Control-Allow-Origin: *');
header('Cache-Control: no-cache');
header('Pragma: no-cache');
header('X-Powered-By: Rikblog.com');
$url="http://192.168.1.19:8585/json.htm?type=devices&rid=83&jsoncallback=".($_GET["jsoncallback"]);
$handle=fopen($url, "r");
$contents = stream_get_contents($handle);
fclose ($handle);
print_r($contents);
?>
