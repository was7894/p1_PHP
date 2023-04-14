/*section1--------------------------------------------------------------------------*/
$(".dep1 li")
  .mouseover(function () {
    //header__bottom 색변화
    $(".header__bottom").css("backgroundColor", "#2e363d");

    //dep2
    $(this).find(".all_dep2").stop().slideDown(400);
  })
  .mouseout(function () {
    $(".header__bottom").css("backgroundColor", "rgb(46, 54, 61, 0.5)");

    $(this).find(".all_dep2").stop().slideUp(400);
  });
// -----------------------------------------------------------------------------------
/* section2 banner slides*/

// let ctrl = $(".popup_banner .ctrl a img");
let sec2_slides = $(".popup_banner .sec_visual2_list a img");
let currentIndex = 0;
sec2_slides.eq(currentIndex).fadeIn();

//timer 초기화
let timer;
let btnPlay = $(".btn_play");
let btnStop = $(".btn_stop");

// 이벤트핸들러(이벤트종류)
btnStop.click(function (e) {
  e.preventDefault();
  slideStop();
});

btnPlay.click(function (e) {
  e.preventDefault();
  slidePlay();
});

// slide play  button
function slidePlay() {
  timer = setInterval(slidesMove, 3000);
  $(".btn_stop").addClass("on");
  $(".btn_play").removeClass("on");
}

// slide stop button
function slideStop() {
  clearInterval(timer);
  $(".btn_play").addClass("on");
  $(".btn_stop").removeClass("on");
}

slidePlay();

//section2 버튼클릭슬라이드전환
let button = $(".popup_banner .button_list li");
let btnIndex = 0;

button.click(function (e) {
  e.preventDefault();
  btnIndex = $(this).index();
  // console.log(`click${btnIndex}`);
  button.removeClass("on");
  $(this).eq(btnIndex).find(".btn").addClass("on");
  slideStop(); /* 스탑시킨후 버튼누른 페이지로 이동. */

  sec2_slides.stop().fadeOut();
  sec2_slides.eq(btnIndex).stop().fadeIn();
  button.find(".btn").removeClass("on");
  button.eq(btnIndex).find(".btn").addClass("on");

  if (currentIndex !== btnIndex) {
    currentIndex = btnIndex;
  }
});

// section2 : timer slide move
let count = sec2_slides.length;

function slidesMove() {
  button.find(".btn").removeClass("on"); //실행시 버튼 on효과 다 제거
  let nextIndex = (currentIndex + 1) % count;
  sec2_slides.eq(currentIndex).fadeOut();
  sec2_slides.eq(nextIndex).fadeIn();
  currentIndex = nextIndex;
  button.eq(currentIndex).find(".btn").addClass("on");
}

// section2 : tab menu 관련
let tab_btn = $(".teb_menu>li>a");
let tab_cont = $(".teb_menu>li>div");

// 첫화면 active
// tab_btn.eq(0).addClass("active");
tab_btn.eq(0).addClass("on");
tab_cont.eq(0).show();

tab_btn.click(function (e) {
  e.preventDefault();
  let $this = $(this);
  let curren_click = $this.attr("href"); //현재클릭한 href값 얻음
  // console.log(curren_click);
  tab_cont.hide(); //display:none
  $(curren_click).show(); //display:block;

  tab_btn.removeClass("active");
  $this.addClass("active");

  // 밑줄
  tab_btn.removeClass("on");
  $this.addClass("on");
});

//section3 interview slides----------------------------------------------------------------------------
let sec3_slides = $(".interview_slides li");
// console.log(sec3_slides);
let sec3_currentIndex = 0;
let button3 = $(".interview_content .button_list li");
let count3 = sec3_slides.length;
let btn_stop = $(".interview_content .btn_stop");
let btn_play = $(".interview_content .btn_play");

sec3_slides.eq(sec3_currentIndex).fadeIn();
let timer3 = setInterval(slidesMove2, 4000);

btn_stop.click(function (e) {
  e.preventDefault();
  slideStop3();
});

btn_play.click(function (e) {
  e.preventDefault();
  slidePlay3();
});

function slidePlay3() {
  timer3 = setInterval(slidesMove2, 4000);
  $(btn_stop).addClass("on");
  $(btn_play).removeClass("on");
}

// slide stop button
function slideStop3() {
  clearInterval(timer3);
  $(btn_play).addClass("on");
  $(btn_stop).removeClass("on");
}

button3.click(function (e) {
  e.preventDefault();
  let btnIndex = $(this).index();
  // console.log(btnIndex);
  button3.find(".btn").removeClass("on");
  button3.eq(btnIndex).find(".btn").addClass("on");
  sec3_slides.stop().fadeOut(1000);
  sec3_slides.eq(btnIndex).stop().fadeIn(1000);
  slideStop3();

  if (sec3_currentIndex !== btnIndex) {
    sec3_currentIndex = btnIndex;
  }
});

function slidesMove2() {
  button3.find(".btn").removeClass("on");
  let nextIndex = (sec3_currentIndex + 1) % count3;
  sec3_slides.eq(sec3_currentIndex).fadeOut(1000);
  sec3_slides.eq(nextIndex).fadeIn(1000);
  sec3_currentIndex = nextIndex;
  button3.eq(sec3_currentIndex).find(".btn").addClass("on");
}

// section3 animation 효과

let img_first = document.querySelector(".first");
let txt_first = document.querySelector(".first_txt");
let img_fourth = document.querySelector(".fourth");
let txt_fourth = document.querySelector(".fourth_txt");
let img_billion = document.querySelector(".billion_img");
let txt_billion = document.querySelector(".billion_txt");
let interview = document.querySelector(".interview_slides");

window.addEventListener("scroll", function () {
  let value = window.scrollY; //스크롤 y좌표 가져옴
  console.log(value);

  if (value > 1350) {
    img_first.style.animation = "appear 0.5s ease-out forwards";
    txt_first.style.animation = "appear 0.5s ease-out forwards";
    img_fourth.style.animation = "appear 1s ease-out forwards";
    txt_fourth.style.animation = "appear 1s ease-out forwards";
    img_billion.style.animation = "appear 1.5s ease-out forwards";
    txt_billion.style.animation = "appear 1.5s ease-out forwards";
    interview.style.animation = "appear 2s ease-out forwards";
  } else {
    img_first.style.animation = "disappear 0.2s ease-out";
    txt_first.style.animation = "disappear 0.2s ease-out";
    img_fourth.style.animation = "disappear 0.2s ease-out";
    txt_fourth.style.animation = "disappear 0.2s ease-out";
    img_billion.style.animation = "disappear 0.2s ease-out";
    txt_billion.style.animation = "disappear 0.2s ease-out";
    interview.style.animation = "disappear 0.2s ease-out";
  }

  // section5 animation효과
  let box1 = document.querySelector(".content1");
  let box2 = document.querySelector(".content2");
  let box3 = document.querySelector(".content3");
  let box4 = document.querySelector(".content4");
  let box5 = document.querySelector(".content6");
  let box6 = document.querySelector(".content8");
  let box7 = document.querySelector(".content10");
  let box8 = document.querySelector(".content12");
  let box9 = document.querySelector(".content14");
  let box10 = document.querySelector(".content15");
  let box11 = document.querySelector(".content16");
  let clbox = document.querySelector(".color_box");
  let clbox2 = document.querySelector(".color_box2");
  let fin_logo = document.querySelector(".final_tit");

  if (value > 2500) {
    box1.style.animation = "appear 0.5s ease-in-out forwards";
    box2.style.animation = "appear 1s ease-in-out forwards";
    box3.style.animation = "appear 1.5s ease-in-out forwards";
    box4.style.animation = "appear 2s ease-out forwards";
    box5.style.animation = "appear 2s ease-out forwards";
    box6.style.animation = "appear 2s ease-out forwards";
    box7.style.animation = "appear 2s ease-out forwards";
    box8.style.animation = "appear 2s ease-out forwards";
    box9.style.animation = "appear 1.5s ease-in-out forwards";
    box10.style.animation = "appear 1s ease-in-out forwards";
    box11.style.animation = "appear 0.5s ease-in-out forwards";
    clbox.style.animation = "appear 2.1s ease-in-out forwards";
    clbox2.style.animation = "appear 1s ease-in-out forwards";
    fin_logo.style.animation = "fin 2.6s linear forwards";
  }
});
// footer----------------------------------------------------------------------------------------------
$(".btn_quick").on("click", function () {
  let quickBox = $(".cont_quick");
  let maxHeight = quickBox.height() + 90;
  if (quickBox.css("display") != "block") {
    quickBox.stop().delay(200).fadeIn(200);
    $(".footer").stop().animate({ "padding-top": maxHeight }, 300);
    /*이렇게 안주면 아래로 떨어져버림.. 
    scrollTop:원글맨처음부터 현재화면보이는부분까지 길이
    scrollHeight:전체글의 길이라고 비유해봄.*/
    // get(0) : dom의 element를 가져옴 index()랑 차이점 확인
    console.log($("html, body").get(0));
    $("html, body").animate({ scrollTop: $("html, body").get(0).scrollHeight }, 300);
  } else {
    quickBox.stop().fadeOut(200);
    $("#footer").stop().delay(200).animate({ paddingTop: "50px" });
  }
});

//팝업
document.querySelector("#layer button").addEventListener("click", function () {
  document.querySelector("#layer").style.display = "none";
});
