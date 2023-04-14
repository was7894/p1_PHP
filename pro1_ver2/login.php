<?php
/* form에서 입력받은 정보를 저장하려면 세션을 유지해야함 */
session_start();
$title="LOGIN";
include_once('inc/header.php');
include_once('config.php');
require_once('inc/functions.php');

if(user_is_auth()){
  redirect('user.php');
}

/* form에 보내진 변수가 있는지 없는지 */
if(isset($_POST['login'])){
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $password = $_POST['password'];
  
  if($email == false){
    $status = '이메일 형식에 맞게 입력 하시오.';
  }
  if(authenticate_user($email, $password)){ //ture일떄
    $_SESSION['email']=$email;
    redirect('user.php');

  }else{
    $status = "비밀번호 확인 하시오.";
  }
}


//사용자가 입력한 정보의 유효성 검증

/* 
함수호출 필요없음.. include를 했기 때문..
authenticate_user($email, $password); 
*/

//로그인시 이메일을 입력받아 사용자검증을 함
//이메일을 비교해서 로그인상태인지 아닌지를 판단.
/* if($_SERVER['REQUEST_METHOD']=='POST'){
  output($_POST);
}
if(isset($_POST['login'])){
  output($_POST); 
}*/
?>
  <link rel="stylesheet" href="./inc/login.css">
  </head>
  <body class="login">
    
    <?php
    include_once('inc/gnb.php');
    ?>
    
    <div id="container">
      <section class="section2">
        <div class="section2__inner">
          <div class="sec2_layout">
            <h1 class="login_tit"><?=$title?></h1>
            <form action="" method="post">
              <p>
                <label for="email">이메일</label>
                <input type="email" id="email" name="email">
              </p>
              <p>
                <label for="password">비밀번호</label>
                <input type="password" id="password" name="password">
              </p>
              <p>
                <input type="submit" name="login" value="로그인">
              </p>
            </form>
            <p>이계정은 test계정입니다. user@user.com 1234</p>
            <div class="error">
              <p>
                <?php
                  if(isset($status)){
                    echo $status;
                  }
                ?>
              </p>
            </div>
            <!-- <form action="" method="post" class="id_pass">
              <p>
                <label for="email">이메일</label>
                <input type="email" name="email" id="email" autocapitalize="off">
              </p>
              <p>
                <label for="password">비밀번호</label>
                <input type="password" name="password" id="password" autocapitalize="off">
              </p>
              <p><input type="submit" name="login" value="로그인"></p>
            </form> -->
          </div>
        </div>
      </section>

    </div>
    <!-- //container section-->
    <?php
    include_once('inc/footer.php');
    ?>
  </body>
</html>
