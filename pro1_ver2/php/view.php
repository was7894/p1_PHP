<?php
  $conn = mysqli_connect("localhost", "wa7894", "rlagudtjq1065!", "wa7894");
  if(! $conn){
    echo "연결에 실패하였습니다.". mysqli_connect_error(); 
  } else {
    echo "연결에 성공하였습니다.";
  }

  $view_num=$_GET['number'];
  $sql="SELECT * FROM `green_board` WHERE number=$view_num";
  $result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>view 섭 게시판</title>
</head>
<body>
  <h1>자유게시판</h1>
  <h2>글내용</h2>
  <?php
  //글이있으면
    if($row=mysqli_fetch_array($result)){
      ?>
      <h3>글번호: <?php echo $row['number'] ?>/글쓴이:<?=$row['name'];?> 
      <h3>글번호: <?php echo $row['number'] ?>/글쓴이: <?php echo $row['name']; ?></h3>
    </h3>
      <div><?php echo $row['content']; ?></div>
      <?php
    }
      ?>
  
</body>
</html>