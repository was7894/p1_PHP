<?php
/* form에서 입력받은 정보를 저장하려면 세션을 유지해야함 */
session_start();
$title="LOGIN";
include_once('inc/header.php');
include_once('config.php');
require_once('inc/functions.php');

$page = 'sub';
$pageTitle = '로그인페이지';
$pageSubText = '로그인 페이지에 오신것을 환영합니다.';

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

?>
  <link rel="stylesheet" href="./css/login.css">
  <!-- <link rel="stylesheet" href="./css/header.css"> -->
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
                <input class="login_btn" type="submit" name="login" value="로그인">
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
          </div>
        </div>
      </section>

    </div>
    <!-- //container section-->
    <?php
    include_once('inc/footer.php');
    // require_once('inc/functions.php');
    ?>
  </body>
</html>
