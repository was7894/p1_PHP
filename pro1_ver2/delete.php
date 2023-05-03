<!--htdocs/board 
  글조회,검색,삭제 
view.php(글보기)
wirte(글쓰기페이지)
insert(글입력)
delete(글삭제)
search(글검색)
list(글목록)
-->
<!-- 전체 게시판에서 삭제 -->
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>글삭제</title>
  </head>
  <body>
  
    <h1>숫자지정글삭제</h1>
    <h2>글 목록</h2>
    <ul>
    <?php
    $conn = mysqli_connect("localhost", "wa7894", "rlagudtjq1065!", "wa7894");

    if (! $conn) {
      die("연결에 실패하였습니다.: " . mysqli_connect_error()); 
    }

    $num = mysqli_real_escape_string($conn, $_POST['delnum']);
    $sql_del = "DELETE FROM `green_board` WHERE number = $num";

    if (mysqli_query($conn, $sql_del)) {
      echo $num . "번째 글이 삭제되었습니다.";
    } else {
      echo "삭제에 실패하였습니다.: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>
    </ul>
    
    <hr />
    <p><a href="board.php">게시판 화면으로 돌아가기</a></p>
    <hr />
    
    
  </body>
</html>
