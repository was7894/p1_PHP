<?php
$title="광주과학기술원 메인페이지";
include('inc/header.php');
?>
  </head>

  <body>
    <!-- popup -->
    <div id="layer">
      <img src="./gist_images/layer_bell.png" alt="bell 무료이미지 출처:https://www.flaticon.com/kr/">
      <span>이 사이트는 구직용 포트폴리오로 &nbsp;학습용으로 제작하였으며,<br>
        상업적 목적이 없음을 알려드립니다.</span>
      <button>Close</button>
    </div>

    <?php
    include_once('inc/gnb.php');
    ?>

    <!-- section -->
    <!-- container section-->
    <div id="container">
      <!-- section1 mainvisual-->
      <section class="section1">
        <h3 class="head_hide">mainvisual</h3>
        <div class="section1__inner">
          <ul>
            <li class="youtube">
              <iframe src="https://www.youtube.com/embed/XfiXRUB252s?controls=0&autoplay=1&mute=1&loop=1&playlist=XfiXRUB252s" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe
             ><!-- frameborder="0" -->

              <div class="youtube_more_box">
                <a href="https://youtu.be/XfiXRUB252s" target="_blank"><img src="./gist_images/sec1_yt_btn.png" alt="gist youtube" class="YtBtnImg"> <span class="yt_txt">Youtube More</span></a>
              </div>
            </li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
      </section>
      <!-- //section1 mainvisual-->

      <!-- section2 new, banner, cld-->
      <section class="section2">
        <div class="section2__inner">
          <div class="sec2_layout">
            <!-- notice1 -->
            <div class="notice_1">
              <h2>NOW</h2>
              <!-- NOW_dep1 -->
              <ul class="teb_menu">
                <li>
                  <a href="#tab1" class="btn active">Total</a>

                  <div id="tab1" class="all_teb_content">
                    <ul class="teb_content">
                      <li><a href="#none" class="dep2_text">[In The Media] [SBS 뉴스] "과학사에서 중대한 돌파구"…'인공 태양' 가능성 열리나 (방우석 교수 인터뷰)</a> <span class="day">Dec.14</span></li>
                      <li><a href="#none" class="dep2_text">[People] 지스트 연구진, IoT 보안 신뢰성 높일 기술 '美 특허' 출원</a><span class="day">Dec.14</span></li>
                      <li><a href="#none" class="dep2_text">[공지사항] 한겨울의 동행축제 &lt;윈·윈터 페스티벌&gt; 2022.12.16.~12.25.</a><span class="day">Dec.13</span></li>
                      <li><a href="#none" class="dep2_text">[GIST Excellence] 지스트 학부생, 물리화학 분야 SCI급 저널에 논문 게재</a><span class="day">Dec.13</span></li>
                      <li><a href="#none" class="dep2_text">[공지사항] 성균관대학교 제4회 전국 대학생 AIxBookathon대회 개최</a><span class="day">Dec.12</span></li>
                      <li><a href="#none" class="dep2_text">[채용공고] 2022년 제2차 직원(일반정규직) 채용 필기전형 결과 발표 안내</a><span class="day">Dec.09</span></li>
                    </ul>
                    <a href="#none" class="more_box">
                      <span class="more_txt">MORE</span>
                    </a>
                  </div>
                </li>
                <li>
                  <a href="#tab2">News</a>

                  <div id="tab2" class="all_teb_content">
                    <ul class="teb_content">
                      <li><a href="#none" class="dep2_text">[Events] '담양딸기' 위한 AI 스마트팜 개발 MoU 체결</a> <span class="day">Dec.28</span></li>
                      <li><a href="#none" class="dep2_text">[In The Media] [연합뉴스TV] AI와 채팅하는 시대…일상 어디까지 들어올까? (안창욱 교수 인터뷰)</a><span class="day">Dec.26</span></li>
                      <li><a href="#none" class="dep2_text">[Events] (재)정원장학복지재단 김용만 이사장, 지스트 발전기금 기탁</a><span class="day">Dec.23</span></li>
                      <li><a href="#none" class="dep2_text">[Events] "인공지능 융합 연구로 사회문제해결 기여" 지스트, AI 융합인재 양성 지원사업 성과발표회 개최</a><span class="day">Dec.22</span></li>
                      <li><a href="#none" class="dep2_text">[GIST Excellence] 이재석 초빙석학교수 연구팀, 항생제 내성 극복할 '고분자 항생물질' 개발</a><span class="day">Dec.20</span></li>
                      <li><a href="#none" class="dep2_text">[Events] 열린 우주시대를 준비하며, 미세중력 속에서 생명노화의 비밀을 찾는다!</a><span class="day">Dec.19</span></li>
                    </ul>
                    <a href="#none" class="more_box">
                      <span class="more_txt">MORE</span>
                    </a>
                  </div>
                </li>
                <li>
                  <a href="#tab3">Notice</a>

                  <div id="tab3" class="all_teb_content">
                    <ul class="teb_content">
                      <li><a href="#none" class="dep2_text">★★★ 공지사항 게시글 업로드 시, 필독 ★★★</a> <span class="day">Apr.28</span></li>
                      <li>
                        <a href="#none" class="dep2_text">[권익인권센터] 인권포스터 공모전 연장 안내(~1.15.) [The poster contest for Human Rights(~January 15, 2023)] <img src="./gist_images/sec2_new_icon.gif" alt="새로운공지사항"></a><span class="day">Jan.02</span>
                      </li>
                      <li><a href="#none" class="dep2_text">제1학생회관 2층식당 운영 변경안내(Guidance on how to use the cafeteria 2nd Fl. of Student Union Bldg.1)</a><span class="day">Dec.26</span></li>
                      <li><a href="#none" class="dep2_text">[총무팀] 중앙도서관 1층 카페 일시적 단축 영업 GIST Central Library Cafeteria Temporary change of Business Hours</a><span class="day">Dec.23</span></li>
                      <li><a href="#none" class="dep2_text">[총무팀] 중앙숲 야외 카페(카페 이든) 일시적 단축 영업 (GIST Central Forest Cafeteria Temporary Change of Business</a><span class="day">Dec.23</span></li>
                      <li><a href="#none" class="dep2_text">[국제교류팀] 2022 Thank You Relay 행사 안내</a><span class="day">Dec.20</span></li>
                    </ul>
                    <a href="#none" class="more_box">
                      <span class="more_txt">MORE</span>
                    </a>
                  </div>
                </li>
                <li>
                  <a href="#tab4">Recruit</a>

                  <div id="tab4" class="all_teb_content">
                    <ul class="teb_content">
                      <li><a href="#none" class="dep2_text">[채용공고] 광주과학기술원 생명과학부 분자행동신경학 연구실 연구직(위촉연구원) 채용 공고</a><span class="day">Jan.03</span></li>
                      <li><a href="#none" class="dep2_text">[채용공고] 광주과학기술원 연구지원팀 행정지원직 채용 공고</a><span class="day">Jan.03</span></li>
                      <li><a href="#none" class="dep2_text">[채용공고] 2022년 4분기(10,11,12월) 친인척채용 현황 공개(전임연구원)</a><span class="day">Jan.03</span></li>
                      <li><a href="#none" class="dep2_text">[채용공고] 2022년 4분기(10,11,12월) 친인척채용 현황 공개</a><span class="day">Jan.02</span></li>
                      <li><a href="#none" class="dep2_text">[채용공고] 광주과학기술원 연구혁신센터 행정지원직 채용 공고</a><span class="day">Jan.02</span></li>
                      <li><a href="#none" class="dep2_text">[채용공고] 광주과학기술원 권익인권센터 행정지원직 채용 공고</a><span class="day">Jan.02</span></li>
                    </ul>
                    <a href="#none" class="more_box">
                      <span class="more_txt">MORE</span>
                    </a>
                  </div>
                </li>
                <li>
                  <a href="#tab5">People</a>
                  <div id="tab5" class="all_teb_content">
                    <ul class="teb_content">
                      <li>
                        <a href="#none" class="dep2_text">신소재공학부 통합과정 최일형 씨, 미국재료학회 학술대회서 우수논문발표상 수상 <img src="./gist_images/sec2_new_icon.gif" alt="새로운공지사항"></a> <span class="day">Jan.04</span>
                      </li>
                      <li><a href="#none" class="dep2_text">구정민 박사과정생, SIGGRAPH Asia 2022 최우수논문상 수상</a><span class="day">Dec.20</span></li>
                      <li><a href="#none" class="dep2_text">이윤호 교수, 젊은물학술인상 수상</a><span class="day">Dec.15</span></li>
                      <li><a href="#none" class="dep2_text">지스트 연구진, IoT 보안 신뢰성 높일 기술 '美 특허' 출원</a><span class="day">Dec.14</span></li>
                      <li><a href="#none" class="dep2_text">김경웅 교수, (사)대한자원환경지질학회장 선출</a><span class="day">Dec.05</span></li>
                      <li><a href="#none" class="dep2_text">에너지융합대학원 김윤수 교수, 재생에너지 분야 세계 저명 저널 편집위원 선임</a><span class="day">Dec.22</span></li>
                    </ul>
                    <a href="#none" class="more_box">
                      <span class="more_txt">MORE</span>
                    </a>
                  </div>
                </li>
              </ul>
              <!-- weather api -->
              <div class="weather_box">
                <ul class="info_list">
                  <li>
                    <div class="info">
                      <span class="ico"></span>
                      <span class="date"></span>
                      <!-- 자정넘어가서 로딩중일때 뜨게함. -->
                      <span class="temper">loading..</span>
                    </div>
                  </li>
                  <li>
                    <div class="info2">
                      <span class="dust_title">미세먼지</span>
                      <span class="dust">loading..</span>
                    </div>
                  </li>
                  <li>
                    <img src="./gist_images/img_weather_info.png" alt="api정보" class="dust_info">
                    <p class="info_text">수신 기준에 의하여 현재 환경과 <br>다소 차이가 발생할 수 있습니다.<br>(매 정각 약 20~30분 후 갱신)<br><em>API : 공공데이터포털 (기상청/한국환경공단)</em></p>
                  </li>
                </ul>
              </div>
            </div>
            <!-- //notice1 -->

            <!-- notice2 popup zone  -->
            <div class="notice_2">
              <div class="popup_zone">
                <h3 class="popup_title">popup zone</h3>
                <div class="popup_banner">
                  <div class="ctrl">
                    <a href="#none" class="btn_stop on"><img src="./gist_images/sec2_stopButton.png" alt=""></a>
                    <a href="#none" class="btn_play"><img src="./gist_images/sec2_playButton.png" alt=""></a>
                  </div>

                  <ul class="button_list">
                    <li><button type="button" class="btn on">1</button></li>
                    <li><button type="button" class="btn">2</button></li>
                    <li><button type="button" class="btn">3</button></li>
                    <li><button type="button" class="btn">4</button></li>
                    <li><button type="button" class="btn">5</button></li>
                    <li><button type="button" class="btn">6</button></li>
                  </ul>

                  <ul class="sec_visual2_list">
                    <li>
                      <a href="#none"><img src="./gist_images/sec2_1.jpg" alt="popup zone banner"></a>
                    </li>
                    <li>
                      <a href="#none"><img src="./gist_images/sec2_2.jpg" alt="popup zone banner"></a>
                    </li>
                    <li>
                      <a href="#none"><img src="./gist_images/sec2_3.png" alt="popup zone banner"></a>
                    </li>
                    <li>
                      <a href="#none"><img src="./gist_images/sec2_4.jpg" alt="popup zone banner"></a>
                    </li>
                    <li>
                      <a href="#none"><img src="./gist_images/sec2_5.png" alt="popup zone banner"></a>
                    </li>
                    <li>
                      <a href="#none"><img src="./gist_images/sec2_6.jpg" alt="popup zone banner"></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- //notice2 popup zone  -->

            <!-- calendar -->
            <div class="notice_3">
              <!-- 첫번째제목 -->
              <div class="title_more_wrap">
                <h2 class="cal_h2">GIST calendar</h2>
                <a href="#none" class="more_box">
                  <span class="more_txt">MORE</span>
                </a>
              </div>
              <div class="cld_box">
                <!-- 두번쨰제목 -->
                <div class="cld_title">2022.12</div>

                <!-- 년월일 -->
                <div class="cld_today">
                  <ul>
                    <li class="cld_flex">
                      <span class="cld_day">21</span>
                      <div class="year_box">
                        <div class="mon_year">
                          Dec.<br>
                          2022
                        </div>
                      </div>
                    </li>

                    <li class="cld_flex">
                      <div class="cld_day">25</div>
                      <div class="year_box">
                        <div class="mon_year">
                          Dec.<br>
                          2022
                        </div>
                      </div>
                    </li>

                    <li class="cld_flex">
                      <div class="cld_day">26</div>
                      <div class="year_box">
                        <div class="mon_year">
                          Dec.<br>
                          2022
                        </div>
                      </div>
                    </li>

                    <li class="cld_flex">
                      <div class="cld_day">26</div>
                      <div class="year_box">
                        <div class="mon_year">
                          Dec.<br>
                          2022
                        </div>
                      </div>
                    </li>

                    <li class="cld_flex">
                      <div class="cld_day">30</div>
                      <div class="year_box">
                        <div class="mon_year">
                          Dec.<br>
                          2022
                        </div>
                      </div>
                    </li>
                  </ul>

                  <ul class="cld_txt">
                    <li><img src="./gist_images/calendar_bullet.gif" alt=""><a href="#none" class="today_txt">겨울학기 수강신청</a></li>
                    <li><img src="./gist_images/calendar_bullet.gif" alt=""><a href="#none" class="today_txt">성탄절</a></li>
                    <li><img src="./gist_images/calendar_bullet.gif" alt=""><a href="#none" class="today_txt">겨울학기 개강</a></li>
                    <li><img src="./gist_images/calendar_bullet.gif" alt=""><a href="#none" class="today_txt">겨울학기 수강신청 변경</a></li>
                    <li><img src="./gist_images/calendar_bullet.gif" alt=""><a href="#none" class="today_txt">가을학기 성적 제출 마감</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- //calendar -->
      </section>
      <!-- //section2 new, banner, cld-->

      <!-- section3 num, interview-->
      <section class="section3">
        <div class="section3__inner">
          <!-- section3_bg -->
          <div class="sec3_bg">
            <!-- more box -->
            <a href="#none" class="more_box">
              <span class="more_txt">MORE</span>
            </a>
            <!-- //more box -->

            <!-- content_bg -->
            <div class="white_box1"></div>
            <div class="white_box2"></div>
            <div class="gray_box"></div>
            <!-- //content_bg -->

            <!-- title -->
            <div class="sec3_title1">GIST Infographic</div>
            <div class="sec3_title2">숫자로 보는<span> GIST</span></div>

            <!-- //title -->

            <!-- fourth -->
            <img src="./gist_images/sec3_num04.png" alt="QS 세계대학평가 교수 1인당 논문 피인용 수 4위" class="fourth">
            <div class="fourth_txt">
              QS 세계대학평가<br>
              교수 1인당 논문 피인용 수 4위
            </div>
            <!-- //fourth -->

            <!-- first -->
            <img src="./gist_images/sec3_num01.png" alt="교수 1인당 논문 피인용 수 14년 연속 국내 대학 1위" class="first">
            <div class="first_txt">
              교수 1인당 논문 피인용 수 <br>
              14년 연속 국내 대학 1위
            </div>
            <!-- //first -->

            <!-- 5billion -->
            <img src="./gist_images/sec3_5bilion.png" alt="총 기술이전 금액 514억" class="billion_img">
            <div class="billion_txt">
              기술사업화 현황 <br>
              총 기술이전 금액 514억
            </div>
            <!-- //5billion -->

            <!-- interview -->
            <div class="interview_content">
              <h3>Interview</h3>

              <div class="ctrl">
                <a href="#none" class="btn_stop on"><img src="./gist_images/sec3_interview_stop.png" alt=""></a>
                <a href="#none" class="btn_play"><img src="./gist_images/sec3_interview_play.png" alt=""></a>
              </div>

              <ul class="button_list">
                <li><button type="button" class="btn on">1</button></li>
                <li><button type="button" class="btn">2</button></li>
                <li><button type="button" class="btn">3</button></li>
                <li><button type="button" class="btn">4</button></li>
              </ul>
              <ul class="interview_slides">
                <li>
                  <div class="interview_img_inner">
                    <img src="./gist_images/sec3_1.jpeg" alt="" class="sec31_img">
                  </div>
                  <span>지스트(광주과학기술원, 총장 김기선) 지구‧환경공학부 이윤호 교수가 지난 12월 2일(금) 서울 웨스턴조선호텔에서 열린 제2회 K-Water 학술상 시상식에서‘젊은물학술인상(물환경 분야)’을 수상했다.</span>
                </li>
                <li>
                  <div class="interview_img_inner">
                    <img src="./gist_images/sec3_2.jpg" alt="" class="sec32_img">
                  </div>
                  <span>
                    지스트(광주과학기술원, 총장 김기선) 연구진이 보편화 되고 있는 사물인터넷(Internet of Things, IoT)을 타깃으로 한 재전송 공격*을 방어할 수있는 새로운 인증기법을 개발했다. IoT를 적용한 시스템의 보안이 뚫릴 경우 발생할 수 있는 심각한 사회문제들을 예방하고 IoT 관련 보안의 신뢰성을
                    제고해IoT 산업의 활성화를 촉진할 수 있을 것으로 예상된다.
                  </span>
                </li>
                <li>
                  <div class="interview_img_inner">
                    <img src="./gist_images/sec3_3.jpg" alt="" class="sec33_img">
                  </div>
                  <span>
                    지스트(광주과학기술원, 총장 김기선) 지구·환경공학부 김경웅 교수(국제환경연구소 소장)가 (사)대한자원환경지질학회 제31대 회장에 선출됐다. (사)대한자원환경지질학회는 지난 12월 2일(금) 한국과학기술회관에서 결산총회를 개최하고 김 교수를 신임 회장으로 선출했으며, 김 교수는 2023년
                    1월부터 2년간 (사)대한자원환경지질학회 제31대 회장으로서 활동할 예정이다.
                  </span>
                </li>
                <li>
                  <div class="interview_img_inner">
                    <img src="./gist_images/sec3_4.jpg" alt="" class="sec34_img">
                  </div>
                  <span>
                    지스트(광주과학기술원, 총장 김기선) 에너지융합대학원 김윤수 교수가 재생에너지 분야의 세계적인 저널인 「IEEE Transactions on Sustainable Energy(TSTE)」의 편집위원에 선임됐다. 김 교수는 2023년부터 2년 동안재생에너지의 전력망 연계를 위한 에너지관리시스템, 최적화 기법, 재생에너지
                    제어, 전력망 설계 분야의 편집위원으로서 논문 게재 과정에서 가장 중요한 심사자 선정 및 평가업무를 수행할 예정이다.
                  </span>
                </li>
              </ul>
              <div class="read_more_box"><a href="#none">Read more</a></div>
            </div>
            <!-- //interview -->
          </div>
        </div>
      </section>
      <!-- //section3 num, interview-->

      <!-- section4 sns -->
      <section class="section4">
        <h3 class="head_hide">section4_sns</h3>
        <div class="section4__inner">
          <div class="sec4_layout">
            <div class="sec4_tit1">SNS</div>
            <div class="sec4_tit2">@ GIST</div>
            <div class="sns_menu">
              <ul class="sns_menu_list">
                <li><img src="./gist_images/sec4_01instar.png" alt="인스타" class="snsimg"><a href="https://www.instagram.com/GIST.SNS/">Instagram</a></li>
                <li><img src="./gist_images/sec4_02facebook.png" alt="페이스북"><a href="https://www.facebook.com/GIST.SNS">Facebook</a></li>
                <li><img src="./gist_images/sec4_03youtube.png" alt="유튜브"><a href="https://www.youtube.com/c/GIST_YOUTUBE">Youtube</a></li>
                <li><img src="./gist_images/sec4_04linkedin.png" alt="linked in"><a href="https://www.linkedin.com/company/gwangju-institute-of-science-&-technology">LinkedIn</a></li>
                <li><img src="./gist_images/sec4_05blog.png" alt="블로그"><a href="https://blog.naver.com/bestgista">Blog</a></li>
              </ul>
            </div>
            <a href="#none" class="more_box">
              <span class="more_txt">MORE</span>
            </a>
          </div>
        </div>
      </section>
      <!-- //section4 sns -->
      <!-- section5 contents_box -->
      <section class="section5">
        <h3 class="head_hide">section5_contentbox</h3>
        <div class="section5__inner">
          <div class="sec5_layout">
            <div class="color_box"></div>
            <div class="color_box2"></div>
            <!-- content_box -->
            <ul class="content_box">
              <!-- 8x8 w1200딱맞게.-->
              <li>
                <a href="#none" class="content1"><img src="./gist_images/sec5_01DNA.png" alt=""><span>GRI (GIST연구원)</span></a>
              </li>
              <li>
                <a href="#none" class="content2"><img src="./gist_images/sec5_02notebook.png" alt=""><span>GIST신문</span></a>
              </li>
              <li>
                <a href="#none" class="content3"><img src="./gist_images/sec5_03_GTI.png" alt=""><span>GTI (산학협력)</span></a>
              </li>
              <li>
                <a href="#none" class="content4"><img src="./gist_images/sec5_pancel.png" alt=""><span>기초교육학부</span></a>
              </li>
              <!-- content5 null -->
              <li>
                <div class="null"></div>
              </li>
              <!-- //null -->
              <li>
                <a href="#none" class="content6"><img src="./gist_images/sec5_06covi.png" alt=""><span>코로나19현황</span></a>
              </li>
              <li>
                <div class="null"></div>
              </li>
              <li>
                <a href="#none" class="content8"><img src="./gist_images/sec5_08cap.png" alt=""><span>총동문회</span></a>
              </li>

              <!-- content box bottom -->

              <!-- content9 null-->
              <li>
                <div class="null"></div>
              </li>
              <li>
                <a href="#none" class="content10">
                  <img src="./gist_images/sec5_handshakepng.png" alt="">
                  <span
                   >지스트 소재·부품·장비<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;기술자문단</span
                 >
                </a>
              </li>
              <!-- content11 null -->
              <li>
                <div class="null"></div>
              </li>
              <li>
                <a href="#none" class="content12"><img src="./gist_images/sec5_bulb.png" alt=""><span>GTMBA</span></a>
              </li>
              <!-- content13 null -->
              <li>
                <div class="null"></div>
              </li>
              <li>
                <a href="#none" class="content14"><img src="./gist_images/sec5_14_3Dciber.png" alt=""><span>3D 사이버투어</span></a>
              </li>
              <li>
                <a href="#none" class="content15"><img src="./gist_images/sec5_15temple.png" alt=""><span>발전기금</span></a>
              </li>
              <li>
                <a href="#none" class="content16"><img src="./gist_images/sec5_16library.png" alt=""><span>전자도서관</span></a>
              </li>
              <!-- hidden box 식단표 -->
              <li>
                <a href="#none" class="content17"><img src="./gist_images/sec5_lunch.png" alt=""><span>식단표</span></a>
              </li>
            </ul>
            <!-- //content_box -->
            <div class="final_tit">
              <div class="tit01">미래를 향한 창의적 과학기술의 요람</div>
              <div class="tit02">Gwangju Institute of Science and Technology</div>
              <img src="./gist_images/sec5_logo.png" alt="section5 gist logo" class="fin_logo">
            </div>
          </div>
          <!-- //sec5_layout -->
        </div>
      </section>
      <!-- //section5 contents_box -->
    </div>
    <!-- //container section-->

    <?php
    include_once('inc/footer.php');
    require_once('inc/functions.php');
    ?>
  </body>
</html>
