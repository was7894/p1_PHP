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
    $user_name = $_POST['name'];
    $user_title = $_POST['title'];
    $user_msg = $_POST['message'];
    $user_date = date("Y-m-d H:i:s");

    if(!$user_name) echo '이름좀 입력좀';
    if(!$user_title) echo '타이틀 입력좀';
    if(!$user_msg) echo '메시지 입력좀';

    /* insert into 테이블명(컬럼1, 컬럼2) values (컬럼1값, 컬럼2값)*/
    $sql = "INSERT INTO green_board (name, title, message, date) VALUES ('$user_name','$user_title',  '$user_msg', '$user_date')";
    /* 조회
      mysqli_query($link,'sql statement')
    */
    /* 전송 결과 확인. result는 몇개의 결과값을 반환함. */
    $result = mysqli_query($conn, $sql);


    echo "$result 개의 글이 등록되었습니다.";
    if($result === false){
      echo '저장하지 못했습니다.';
      error_log(mysqli_error($conn)); //에러 로그 기록
    }else{
      echo '저장성공';
    }
    /* print $user_name;
    print $user_msg; */


    mysqli_close($conn);
    print "<hr>";
    ?>
    <a href="board.php">목록으로돌아가기</a>
</body>
</html>
