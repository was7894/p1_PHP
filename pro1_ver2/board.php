<?php
$title="게시판 페이지";
include_once('inc/header.php');

$page = 'sub';
$pageTitle = '자유게시판';
$pageSubText = 'Don’t worry if it doesn’t work right. If everything did, you’d be out of a job.';
$conn = mysqli_connect("localhost", "wa7894", "rlagudtjq1065!", "wa7894");

if($_GET['skey'] || $_GET['bdkey']) $sqlSearch = "and {$_GET['skey']} like '%{$_GET['bdkey']}%'";

$sql="SELECT * FROM `green_board` where (1) {$sqlSearch} order by number desc";
//echo $sql;
$result = mysqli_query($conn, $sql);


// count
$result2 = mysqli_query($conn, "SELECT count(*) as cnt FROM `green_board` where (1) {$sqlSearch} order by number desc");
$row2 = mysqli_fetch_assoc($result2);
$allCount = $row2['cnt'];

?>
  <link rel="stylesheet" href="./css/board.css">
  </head>
  <body class="login">
    
    <?php
    include_once('inc/gnb.php');
    ?>

    <div id="container">
      <section class="section2">
        <div class="section2__inner">
          <div class="sec2_layout">
            <h2 class="tit_cont">자유게시판</h2>

            <!-- <h2>글 검색</h2> -->
            
            <hr />
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
            <p class="total_board">총 게시글 : <?=$allCount?></p>
            <div class="wrap_btn">
              <a href="write.php" class="btn_g btn_g1">글쓰기</a>
              <a href="board.php" class="btn_g btn_g1">글목록</a>
            </div>
            <hr />
            <div class="sear_box">
              
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
            </div>
            <div class="del_box">
              <h2>글 삭제</h2>
              <form action="delete.php" method="post">
                <h3>삭제할 글번호를 입력하시오.</h3>
                <div>
                  <label for="msgdel">번호:</label>
                  <input type="text" id="msgdel" name="delnum" />
                  <input type="submit" value="삭제" />
                </div>
              </form>
            </div>
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
