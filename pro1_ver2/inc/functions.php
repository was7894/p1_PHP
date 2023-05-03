
<?php
  function output($value){
    print_r($value);
  }

  /* 사용자 검증 함수 */
  function authenticate_user($email, $password){
    if($email == user_name && $password == password){
      return true;
    }
  }

  function redirect($url){
    header("Location: $url"); exit();
  }
  //회원인지 확인
  function user_is_auth(){
    return isset($_SESSION['email']); /* email 값이 있으면 true반환 */
  }
  
  //비회원(false)일경우 login페이지로 이동
  function confirm_user_is_auth(){
    if(! user_is_auth()){
      redirect('login.php'); exit();
    }
  }
?>