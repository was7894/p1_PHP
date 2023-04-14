
<?php
  include_once('inc/header.php');
  $page = 'sub';
  $pageTitle = 'GISTian';
  $pageSubText = 'Students are the heart and soul of GIST';
  
  $conn = mysqli_connect("localhost", "wa7894", "rlagudtjq1065!", "wa7894");
  // if(! $conn){
  //   echo "연결에 실패하였습니다.". mysqli_connect_error(); 
  // } else {
  //   echo "연결에 성공하였습니다.";
  // }

  $view_num=$_GET['number'];
  $sql="SELECT * FROM `green_board` WHERE number=$view_num";
  $result=mysqli_query($conn,$sql);

  // find hit
  $result2 = mysqli_query($conn, "SELECT * FROM `green_board` WHERE number=$view_num");
  $row2 = mysqli_fetch_assoc($result2);
  $hitCount = $row2['hit'] + 1;

  // update hit
  $update_query = "UPDATE  `green_board` SET hit = '{$hitCount}' WHERE number = {$view_num}";
  mysqli_query($conn, $update_query);
?>
</head>
<body>
<?php
  include_once('inc/gnb.php');
?>
<div id="container">
  <div class="section2__inner">
    <div class="sec2_layout">
      <h1 class="board_tit">공지사항</h1>
  
  <?php
  //글이있으면
    if($row=mysqli_fetch_array($result)){
      ?>
      <strong>제목 : <?php echo $row['title']; ?></strong>
      <br>
      <ul>
        <li>글쓴이: <?=$row['name']?></li>
        <li>작성일: <?=$row['date']?></li>
        <li>조회수: <?=$row['hit']?></li>
      </ul>

      <hr><br>
      <div>내용 : <?php echo $row['message']; ?></div>

      <?php
    }
      ?>
        <div class="wrap_btn">
          <a href="update.php?number=<?=$row['number']?>" class="btn_g btn_g1">수정</a>
          <a href="write.php" class="btn_g btn_g1">쓰기</a>
          <a href="delete2.php?number=<?=$row['number']?>" class="btn_g btn_g1">삭제</a>
          <a href="board.php" class="btn_g btn_g1">목록</a>
        </div>
      </div>
    </div>
  </div>
  <?php
    include_once('inc/footer.php');
    require_once('inc/functions.php');
  ?>
</body>
</html>