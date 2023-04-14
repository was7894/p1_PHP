<?php
$title="로그인페이지";
include_once('inc/header.php');

$page = 'sub';
$pageTitle = 'GISTian';
$pageSubText = 'Students are the heart and soul of GIST';

// include_once('inc/login_inc');

?>
</head>
<body>
<?php
  include_once('inc/gnb.php');
?>
<div id="container">
  <div class="section2__inner">
    <div class="sec2_layout">
      <h2 class="tit_cont">글쓰기</h2>
      <form action="insert.php" method="post">
        <div class="tbl_g2">
          <table>
          <tr>
            <th><label for="name">이름</label></th>
            <td><input type="text" id="name" name="name" maxlength="5"  required></td>
          </tr>
          <tr>
            <th><label for="title">제목</label></th>
            <td><input id="title" name="title" maxlength="100" required></td>
          </tr>
          <tr>
            <th><label for="message">내용</label></th>
            <td>
              <textarea  id="message" name="message" col="30" rows="10" maxlength="500" required></textarea>
            </td>
          </tr>
        </table>
        </div>
        <button type="submit">글쓰기</button>
        
      </form>
      </div>
    </div>
  </div>
  <?php
    include_once('inc/footer.php');
    require_once('inc/functions.php');
  ?>
</body>
</html>