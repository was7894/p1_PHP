<?php
  session_start();
  session_unset(); //세션의 값 삭제
  session_destroy();//세션의 id 삭제
  require_once('inc/functions.php');
  redirect('login.php'); exit();
?>
