<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  /* db를 서버에 보내려면 접속을 해야됨.*/
  /* mysqli_connect("서버주소(닷홈호스트명), 아이디,비밀번호, db명"); 
  http://wa7894.dothome.co.kr/board/insert.php
  */
    $conn = mysqli_connect("localhost", "wa7894", "rlagudtjq1065!", "wa7894");
    
    if(! $conn){
      echo "연결에 실패하였습니다.". mysqli_connect_error(); 
    }else{
      echo "연결에 성공하였습니다.". mysqli_connect_error();
    }

    /* write.php의 name값을 받아 저장 */
    $number=$_POST['number'];
    $user_name = $_POST['name'];
    $user_msg = $_POST['message'];
    
    /* insert into 테이블명(컬럼1, 컬럼2) values (컬럼1값, 컬럼2값)*/
    $sql = "UPDATE green_board SET name='$user_name', message='$user_msg' WHERE number=$number";
    /* 조회
      mysqli_query($link,'sql statement')
    */
    /* 전송 결과 확인. result는 몇개의 결과값을 반환함. */
    $result = mysqli_query($conn, $sql);
    if($result===false){
      echo "수정에 실패했습니다.";
      error_log(mysqli_error($conn));
    }else{
      echo "수정을 완료 하였습니다.";

    }
    mysqli_close($conn);
    print "<hr>";
    ?>
    <a href="board.php">목록으로 돌아가기</a>
</body>
</html>
