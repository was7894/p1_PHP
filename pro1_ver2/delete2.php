
<!-- 게시판 내용안에 들어가서 삭제 -->
<?php
  $conn = mysqli_connect("localhost", "wa7894", "rlagudtjq1065!", "wa7894");
/*   if(! $conn){
    echo "연결에 실패하였습니다.". mysqli_connect_error(); 
  } else {
    echo "연결에 성공하였습니다.";
  } */

  $del_num=$_GET['number'];
  $sql="DELETE FROM `green_board` WHERE number = $del_num";
  $result=mysqli_query($conn, $sql);
  
  if (mysqli_query($conn, $sql)) {
    echo $del_num . "번째 글이 삭제되었습니다.";
  } else {
    echo "삭제에 실패하였습니다.: " . mysqli_error($conn);
  }
  mysqli_close($conn);
  
?>
 <hr />
    <p><a href="board.php">목록으로 돌아가기</a></p>
<hr />

