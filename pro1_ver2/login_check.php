<?php
  session_start();
  include_once('config.php');
  require_once('inc/functions.php');
  $mysqli = mysqli_connect("localhost", "wa7894", "rlagudtjq1065!", "wa7894"); // db연결
  //login.php에서 입력받은 id, password
  $username = $_POST['email'];
  $userpass = $_POST['password'];
  
  $q = "SELECT * FROM member WHERE id = '$username' AND password = '$userpass'";
  // echo $q;
  $result = $mysqli->query($q);
  $row = $result->fetch_array(MYSQLI_ASSOC);
    
  //결과가 존재하면 세션 생성
  if ($row != null) {
      $_SESSION['email'] = $row['id'];
      redirect('user.php');
      exit;
  }
  
  //결과가 존재하지 않으면 로그인 실패
  if($row == null){
      echo "<script>alert('아이디와 비밀번호를 확인해주세요.2')</script>";
      redirect('login.php');
      exit;
  }
  ?>