<?php
$title="공지사항";
include_once('inc/header.php');

$page = 'sub';
$pageTitle = 'GISTian';
$pageSubText = 'Students are the heart and soul of GIST';

// include_once('inc/login_inc');

$conn = mysqli_connect("localhost", "wa7894", "rlagudtjq1065!", "wa7894");
// $conn = mysqli_connect("localhost", "root","","mango_board");
// if(! $conn){
//   echo "연결에 실패하였습니다.". mysqli_connect_error(); 
// }else{
//   echo "연결에 성공하였습니다.". mysqli_connect_error();
// }

if($_GET['skey'] || $_GET['bdkey']) $sqlSearch = "and {$_GET['skey']} like '%{$_GET['bdkey']}%'";

$sql="SELECT * FROM `green_board` where (1) {$sqlSearch} order by number desc";
//echo $sql;
$result = mysqli_query($conn, $sql);


// count
$result2 = mysqli_query($conn, "SELECT count(*) as cnt FROM `green_board` where (1) {$sqlSearch} order by number desc");
$row2 = mysqli_fetch_assoc($result2);
$allCount = $row2['cnt'];

?>
  <link rel="stylesheet" href="./inc/login.css">
  </head>
  <body class="login">
    
    <?php
    include_once('inc/gnb.php');
    ?>

    <div id="container">
      <section class="section2">
        <div class="section2__inner">
          <div class="sec2_layout">
            <h2 class="tit_cont">공지사항</h2>
            <span>총 게시글 : <?=$allCount?></span>
            <div class="tbl_g">
              <table>
                <caption class="screen_out">글 목록</caption>
                <thead>
                <tr>
                  <th class="th_num" scope="col">번호</th>
                  <th class="th_tit" scope="col">제목</th>
                  <th class="th_user" scope="col">작성자</th>
                  <th class="th_date" scope="col">작성일</th>
                  <th class="th_hit" scope="col">조회수</th>
                  <th class="th_file" scope="col">첨부파일</th>
                </tr>
                </thead>
                <tbody>
                  <?php if($allCount == 0){ ?>
                  <tr>
                    <td colspan="6">
                      게시글이 없습니다.
                    </td>  
                  </tr>
                  <?php }else{
                  //반복문
                  while($row = mysqli_fetch_array($result)){ ?>
                  <tr>
                    <td><?= $row['number'] ?></td>
                    <td class="tbl_tit"><a href='view.php?number=<?= $row['number'] ?>'><?= $row['title'] ?></a></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= date("Y-m-d", strtotime($row['date'])); ?></td>
                    <td><?= $row['hit'] ?></td>
                    <td>
                      <?php if($row['file'] === '1'){ ?>
                        파일있음
                      <?php } ?>
                    </td>
                  </tr>
                  <?php } ?>
                <?php } ?>
              
                </tbody>
              </table>
            </div>

            <div class="wrap_btn">
              <a href="write.php" class="btn_g btn_g1">글쓰기</a>
              <a href="board.php" class="btn_g btn_g1">글목록</a>
            </div>
            <hr />
            <h2>글 검색</h2>
            <form method="get">
              <h3>검색할 키워드를 입력하시오.</h3>
              <select name="skey" id="findItem" title="검색 카테고리 선택">
                <option value="title"<?php if($_GET['skey'] === 'title'){ ?> selected<?}?>>제목</option>
                <option value="message"<?php if($_GET['skey'] === 'message'){ ?> selected<?}?>>내용</option>
                <option value="name"<?php if($_GET['skey'] === 'name'){ ?> selected<?}?>>작성자</option>
              </select>
              <label for="search">키워드: </label>
              <input type="search" id="search" name="bdkey" title="검색어를 입력하세요." value="<?= $_GET['bdkey'] ?>">
    
              <input type="submit" value="검색" />
            </form>
            <hr />
            <h2>글 삭제</h2>
            <form action="delete.php" method="post">
              <h3>삭제할 글번호를 입력하시오.</h3>
              <p>
                <label for="msgdel">번호:</label>
                <input type="text" id="msgdel" name="delnum" />
              </p>
              <input type="submit" value="삭제" />
            </form>
          </div>
        </div>
        <!-- //calendar -->
      </section>
    </div>
    <!-- //container section-->
    <?php
    include_once('inc/footer.php');
    require_once('inc/functions.php');
    ?>
  </body>
</html>
