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
    <h2>검색결과</h2>
    <ul>
      <?php
      $conn = mysqli_connect("localhost", "wa7894", "rlagudtjq1065!", "wa7894");
      if(! $conn){
        echo "연결에 실패하였습니다.". mysqli_connect_error(); 
      }else{
        echo "연결에 성공하였습니다.". mysqli_connect_error();
      }
      // 원하는 키워드가 있는 글번호를 조회
      // sql SELECT * FROM 테이블명, 테이블명의 모든 내용 조회.
      // WHERE이라는 조건절 WHERE[필드명]조건,
      //조건을 저장할 변수
      $user_bdkey=$_POST['bdkey'];/* input 키워드 저장 */

      // LIKE는 일부 일치하는 컬럼 조회
      //php에서 % = *(아스테리스크)
      $sql="SELECT * FROM `green_board` WHERE message LIKE '%$user_bdkey%'";
      $result=mysqli_query($conn,$sql);
      $list='';
      //반복문
      while($row=mysqli_fetch_array($result)){
        $list=$list."<li>{$row['number']} : <a href='view.php?number={$row['number']}'>{$row['name']}</a></li>";
      }
      echo $list;
      mysqli_close($conn);
      ?>
    </ul>
    
    <hr />
    <p><a href="board.php">목록으로 돌아가기</a></p>
    
    
  </body>
</html>
