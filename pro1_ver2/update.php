<?php
  $conn = mysqli_connect("localhost", "wa7894", "rlagudtjq1065!", "wa7894");
  if(! $conn){
    echo "연결에 실패하였습니다.". mysqli_connect_error(); 
  } else {
    echo "연결에 성공하였습니다.";
  }

  $view_num=$_GET['number'];
  $sql="SELECT * FROM `green_board` WHERE number=$view_num";
  $result=mysqli_query($conn, $sql);
  
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>글수정하기</title>
</head>
<body>
  <h1>글수정</h1>
  <?php
  //db에 해당 글번호가 있을경우 실행.
    if($row=mysqli_fetch_array($result)){
      
    };
  ?>
  <form action="modify.php" method="post">
    <input type="hidden" name="number" value="<?= $view_num?>">
    <p>
      <label for="name">작성자:</label>
      <input type="text" id="name" name="name" value="<?= $row['name']?>">
    </p>

    <p>
      <label for="message">메시지:</label>
      <textarea  id="message" name="message" col="30" rows="10 <?= $row['message']?>">수정전의 메시지:<?= $row['message']?></textarea>
    </p>
    <input type="submit" value="전송">
  </form>
</body>
</html>
