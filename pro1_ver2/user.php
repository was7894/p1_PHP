<?php
  session_start();
  $title="회원전용페이지";
  include_once('inc/header.php');
  include_once('config.php');
  require_once('inc/functions.php');
  confirm_user_is_auth();
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
            <h1 class="user_tit"><?=$title?></h1>
            <p>회원님 안녕하세요.</p>   
            <a href="logout.php" class="logout_btn">로그아웃</a>
          </div>
        </div>
      </section>

    </div>
    <!-- //container section-->
    <?php
    include_once('inc/footer.php');
    ?>
  </body>

