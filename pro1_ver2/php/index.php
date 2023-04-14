<!--htdocs/board 
  글조회,검색,삭제 
view.php(글보기)
wirte(글쓰기페이지)
insert(글입력)
delete(글삭제)
search(글검색)
list(글목록)
-->
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>섭형게시판</title>
  </head>
  <body>
  
    <h1>김형섭게시판</h1>
    <h2>글 목록</h2>
    <ul>
      <?php
      $conn = mysqli_connect("localhost", "wa7894", "rlagudtjq1065!", "wa7894");
      if(! $conn){
        echo "연결에 실패하였습니다.". mysqli_connect_error(); 
      }else{
        echo "연결에 성공하였습니다.". mysqli_connect_error();
      }
      $sql="SELECT * FROM `green_board`";
      $result=mysqli_query($conn,$sql);
      $list='';
      //반복문
      while($row=mysqli_fetch_array($result)){
        $list=$list."<li>{$row['number']} : <a href='view.php?number={$row['number']}'>{$row['name']}</a></li>";
      }
      echo $list;
      ?>
    </ul>
    
    <hr />
    <p><a href="write.php">글쓰기</a></p>
    <hr />
    <h2>글 검색</h2>
    <form action="search.php" method="post">
      <h3>검색할 키워드를 입력하시오.</h3>
      <p>
        <label for="search">키워드:</label>
        <input type="text" id="search" name="skey" />
      </p>
      <input type="submit" value="검색" />
    </form>
    <hr />
    <h2>글 삭제</h2>
    <form action="delete.php" method="post">
      <h3>삭제할 메시지 번호를 입력하시오.</h3>
      <p>
        <label for="msgdel">번호:</label>
        <input type="text" id="msgdel" name="delnum" />
      </p>
      <input type="submit" value="삭제" />
    </form>
    
  </body>
</html>
