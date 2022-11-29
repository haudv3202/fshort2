<script>
const array_user_detail = <?php echo json_encode($posts_video); ?>;
console.log(array_user_detail);

const array_posts_user = <?php echo json_encode($posts_news); ?>;
// console.log(array_posts_user);

// render content page
function Video_home(datavideohome) {
  let ListvideoHome = document.querySelector(".videos_page");
if (ListvideoHome) {
    ListvideoHome.innerHTML = "";


    for (let item of datavideohome) {
        var Comments_video = "";
        for (let video_comment of item.comments) {
          Comments_video += `
            <div class="info_comment_video_page">
                <img src="${video_comment.avatar_comment}" alt="">
                <div class="text_logo_name_videos">
                <p>${video_comment.name_user_comment}<i class='bx bxs-check-circle' style='color:#2e88ff'></i></p>
            <p>${video_comment.time_date} ~ <i class='bx bx-world'></i></p>
        </div>
        </div>
            <div class="value_comment_user">
                <p>
                    ${video_comment.content}
                </p>
            </div>
        `
        }

        ListvideoHome.innerHTML += `
                   <div class="logo_name_videos_btn">
    
            <div class="logo_name_videos">
                <img src="${item.avatar}"
                    alt="">
                <div class="text_logo_name_videos">
                    <p><a href="?detail_video_other">${item.name}</a><i class='bx bxs-check-circle' style='color:#2e88ff'></i></p>
                    <p>${item.time_create} <i class='bx bx-world'></i></p>
                </div>
            </div>
    
            <div class="btn_logo_name_video">
                <!-- <input type="button" value="hello" id="test"> -->
                <button onclick="follow(this)" data-follow="1" class="btnFLLL">follow</button>
            </div>
        </div>
    <div class="links_video">
  <span onclick="showVideo()" ><video  width="50%" preload=""  controls type="video/mp4" loop
            src="${item.link}"></video></span>
    </div>
    <div class="feeling">
        <div class="icon_felling">
          <form action=""  method="POST">
            <input type="hidden" name="id_user" value="${item.id_user_log}">
             <input type="hidden" name="id_post" value="${item.id_post}">
            <button type="submit" name="submit_like" class="heart_form_felling"><i class='bx bx-heart'></i></button>
          </form>
            <i onclick="commentPost()" class='bx bx-message-rounded cmtPost'></i>
            <i class='bx bx-share bx-flip-horizontal'></i>
        </div>
        <div class="infor_view">
            <p>100 lượt thích</p>
            <p>0 Views</p>
        </div>
    </div>
    <div class="content_video_page">
        <p><b>#manhcuongEntertaiment</b></p>
        <p>${item.title}</p>
    </div>
<div class="comment_video_page">
` + Comments_video + `
</div>
    <div class="input_comment">
      <form action="index.php" method="post">
        <i class='bx bx-wink-smile'></i>
        <input type="hidden" name="id_post" value="${item.id_post}">
        <input type="hidden" name="name_cmt" value="${item.name}">
        <input type="text" name="content_video_home" required  placeholder="Thêm bình luận">
        <button type="submit" name="submit_comment_home"> Đăng</button>
      </form>
    </div>
         </div>
        
    `;
    }
  }
}
Video_home(array_user_detail);

// render about home
function About_home(dataabouthome) {
  let ListaboutHome = document.querySelector(".about_render_video");
  if (ListaboutHome) {
    ListaboutHome.innerHTML = "";
    for (let item of dataabouthome) {
       var Comments_video = "";
        for (let video_comment of item.comments) {
          Comments_video += `
            <div class="info_comment_video_page">
                <img src="${video_comment.avatar_comment}" alt="">
                <div class="text_logo_name_videos">
                <p>${video_comment.name_user_comment}<i class='bx bxs-check-circle' style='color:#2e88ff'></i></p>
            <p>${video_comment.time_date} ~ <i class='bx bx-world'></i></p>
        </div>
        </div>
            <div class="value_comment_user">
                <p>
                    ${video_comment.content}
                </p>
            </div>
        `
        }
      ListaboutHome.innerHTML += `
    <div class="logo_name_videos_btn">

        <div class="logo_name_videos">
            <img src="${item.avatar}"                alt="">
            <div class="text_logo_name_videos">
                <p><a href="?detail_video_other">${item.name}</a><i class='bx bxs-check-circle' style='color:#2e88ff'></i></p>
                <p>${item.time_create}<i class='bx bx-world'></i></p>
            </div>
        </div>

        <div class="btn_logo_name_video">
            <!-- <input type="button" value="hello" id="test"> -->
            <button onclick="follow(this)" data-follow="1" class="btnFLLL">follow</button>
        </div>
    </div>
      <div class="content_news_page">
        <p>${item.title}</p>
    </div>
    <div class="links_video">
        <span onclick="showProduct()">
        <img src="${item.link}" width="100%" style="border-radius:5px;" alt="">
        </span>
    </div>
    <div class="feeling">
        <div class="icon_felling">
<form action=""  onchange="this.form.submit()" method="POST">
            <i class='bx bx-heart'></i>
</form>
            <i onclick="commentPost()" class='bx bx-message-rounded cmtPost'></i>
            <i class='bx bx-share bx-flip-horizontal'></i>
        </div>
        <div class="infor_view">
            <p>100 lượt thích</p>
            <p>0 views</p>
        </div>
    </div>
    <div class="comment_video_page">
       
    </div>
    <div class="input_comment">
       <form action="index.php" method="post">
        <i class='bx bx-wink-smile'></i>
        <input type="hidden" name="id_post" value="${item.id_post}">
        <input type="hidden" name="name_cmt" value="${item.name}">
        <input type="text" name="content_video_home" required  placeholder="Thêm bình luận">
        <button type="submit" name="submit_comment_home"> Đăng</button>
      </form>
    </div>
  `;
    }
  }
}
About_home(array_posts_user);

// render video user

function Vieo_detail(data) {
  let ListVideouser = document.querySelector(".Post_video_user_detail");
  if (ListVideouser) {
    ListVideouser.innerHTML = "";
    for (let item of data) {
      ListVideouser.innerHTML += `
              <div class="video_user_detail" >
                          <span onclick="showVideo()"> <video src="${item.link}" type="video/mp4" type="video/mp4" muted class="vid" loop>
                          </video></span>
                          <div class="views_video_user_detail d-flex align-items-center">
                            <i class='bx bx-play fs-4'></i><span class="view_video">0</span>
                          </div>
                        </div>`;
    }
  }
}
Vieo_detail(array_user_detail);

// render posts

function Posts_user(datauser) {
  let ListPosts = document.querySelector(".Posts_user");
  if (ListPosts) {
    ListPosts.innerHTML = "";
    for (let item of datauser) {
      ListPosts.innerHTML += `
               <div
              class="posts_user_detail"
            >
              <span onclick="showProduct()"><img src="${item.link}" /></span>
                <div class="icon_posts_user" onclick="showProduct()">
                  <span>
                    <i class="bx bxs-heart"></i> 1k
                  </span>
                  <span><i class='bx bx-message-rounded-dots bx-flip-horizontal' ></i> 200</span>
                </div>
              </div>`;
    }
  }
}
Posts_user(array_posts_user);
///////////////////// scroll play video//////////////////////
var divvideohome = document.querySelector(".links_video");
if (divvideohome) {
  var videos = document.getElementsByTagName("video");
  function checkScroll() {
    var fraction = 0.8; // Play when 80% of the player is visible.

    for (var i = 0; i < videos.length; i++) {
      var video = videos[i];

      var x = video.offsetLeft,
        y = video.offsetTop,
        w = video.offsetWidth,
        h = video.offsetHeight,
        r = x + w, //right
        b = y + h, //bottom
        visibleX,
        visibleY,
        visible;

      visibleX = Math.max(
        0,
        Math.min(
          w,
          window.pageXOffset + window.innerWidth - x,
          r - window.pageXOffset
        )
      );
      visibleY = Math.max(
        0,
        Math.min(
          h,
          window.pageYOffset + window.innerHeight - y,
          b - window.pageYOffset
        )
      );

      visible = (visibleX * visibleY) / (w * h);

      if (visible > fraction) {
        video.play();
      } else {
        video.pause();
      }
    }
  }
}
window.addEventListener("scroll", checkScroll, false);
window.addEventListener("resize", checkScroll, false);
//  detail video button
// =============== visibility =============//



// const videoss = document.getElementById("videotest");
 
// document.addEventListener("visibilitychange", function () {
//     if (document["hidden"]) {
//         document.classList.remove("link_video")
//     } else {
//       document.classList.add("link_video");
//     }
// });
// ============== load=================//
window.addEventListener("load", () => {
  const loader = document.querySelector(".loader");

  loader.classList.add("loader-hidden");

  loader.addEventListener("transitionend", () => {

    document.body.removeChild("loader");

  })
});



const TextLoadervd = document.getElementById("text_loader");
TextLoadervd.classList.add("text_loader_hidden");
const LogoHeader = document.getElementById("logo_loader");
LogoHeader.classList.add("logo_loader_hidden");




function submitForm(event) {
  event.preventDefault();
  var ele = document.getElementById("valueInput");
  var elefile = document.getElementById("valuefile");
  let x = document.getElementById("text_loader");
  if (elefile.value != "" && ele.value != "") {
    test();
    elefile.value = "";
    ele.value = "";
  } else {
    alert("nhập cmm vào cu ạ");
  }
}

function submitFormNews(event) {
  event.preventDefault();
  var elenews = document.getElementById("valueInputNews");
  var elefilenews = document.getElementById("valueFileNews");
  if (elenews.value != "" && elefilenews.value != "") {
    News();
    elenews.value = "";
    elefilenews.value = "";
  } else {
    alert("nhập cmm vào cu ạ");
  }
}

function News() {
  alert('hello');
  const TextLoadervd = document.getElementById("text_loader");
  const LogoHeader = document.getElementById("logo_loader");
  const loader = document.querySelector(".loader");
  let x = document.getElementById("text_loader");

  //    document.body.appendChild(loader);
  loader.classList.remove("loader-hidden");
  TextLoadervd.classList.remove("text_loader_hidden");
  LogoHeader.classList.remove("logo_loader_hidden");


  setTimeout(function () { x.innerHTML = "Đang duyệt" }, 100);
  setTimeout(function () { x.innerHTML = "Đang đăng . . ." }, 2000);
  setTimeout(function () { x.innerHTML = "Đã đăng ! ! !" }, 5000);
  setTimeout(function () {

    x.classList.add("text_loader_hidden");
    loader.classList.add("loader-hidden");
    LogoHeader.classList.add("logo_loader_hidden");
    postnews();
  }, 6000);
  // setTimeout(function () {loader.classList.add("loader-hidden")},6000);
}

function test() {
  alert('hello');
  const TextLoadervd = document.getElementById("text_loader");
  const LogoHeader = document.getElementById("logo_loader");
  const loader = document.querySelector(".loader");
  let x = document.getElementById("text_loader");

  //    document.body.appendChild(loader);
  loader.classList.remove("loader-hidden");
  TextLoadervd.classList.remove("text_loader_hidden");
  LogoHeader.classList.remove("logo_loader_hidden");


  setTimeout(function () { x.innerHTML = "Đang duyệt" }, 100);
  setTimeout(function () { x.innerHTML = "Đang đăng . . ." }, 2000);
  setTimeout(function () { x.innerHTML = "Đã đăng ! ! !" }, 5000);
  setTimeout(function () {

    x.classList.add("text_loader_hidden");
    loader.classList.add("loader-hidden");
    LogoHeader.classList.add("logo_loader_hidden");
    postvd();
  }, 6000);
  // setTimeout(function () {loader.classList.add("loader-hidden")},6000);
}




//=================//
var mini_video = document.querySelector("#video_detail_mini");
if (mini_video) {
  document.querySelector("#video_detail_mini").style.display = "none";
  function showVideo() {
    var videoplay = document.querySelector(".video_click_play");
    var playiconvd = document.querySelector(".icon_play_video_center");
    var videos = document.querySelector("#video_detail_mini");
    var videohome = document.querySelector(".links_video");
    if (videos.style.display == "block") {
      videoplay.pause();
      videoplay.load();
      playiconvd.style.display = "block";
      videos.style.display = "none";
    } else {
      videoplay.play();
      
      playiconvd.style.display = "none";
      videos.style.display = "block";
    }
  }
}

// click ++value view

var clickvideoid = document.querySelectorAll(".video_user_detail");
var valuespan = document.querySelectorAll(".view_video");
var valueviewvideo = [];
var total = 0;

for (let i = 0; i < clickvideoid.length; i++) {
  valueviewvideo[i] = 0;
  clickvideoid[i].addEventListener("click", () => {
    valueviewvideo[i] = valueviewvideo[i] + 1;
    valuespan[i].innerHTML = valueviewvideo[i];
  });
}

// click play video
var videocentermini = document.querySelector(".video_center");
if (videocentermini) {
  var video = document.querySelector(".video_click_play");
  var playicon = document.querySelector(".icon_play_video_center");
  function play() {
    if (video.paused) {
      video.play();
      playicon.style.display = "none";
    } else {
      video.pause();
      playicon.style.display = "block";
    }
  }
}

// event volumns video mini
var videoctvl = document.querySelector(".video_center");
if (videoctvl) {
  const volume = document.querySelector("#volume");
  const volum2 = document.querySelector("#volum2");
  const videoplay = document.querySelector(".video_click_play");
  volume.oninput = () => {
    videoplay.volume = volume.value;
    if (volume.value == "0") {
      volum2.className = "bx bx-volume-mute";
    } else {
      volum2.className = "bx bx-volume-full";
      volum2.textContent = "";
    }
  };
}

// ranger time video
var videocttime = document.querySelector(".video_center");
if (videocttime) {
  var vid, playbtn, seekslider, curtimetext, durtimetext;
  function intializePlayer() {
    // Set object references
    vid = document.querySelector(".video_click_play");
    seekslider = document.querySelector("#seekslider_minivideo");
    curtimetext = document.querySelector("#curtimetext_minivideo");
    durtimetext = document.querySelector("#durtimetext_minivideo");
    // Add event listeners
    seekslider.addEventListener("change", vidSeek, false);
    vid.addEventListener("timeupdate", seektimeupdate, false);
  }
  window.onload = intializePlayer;
  function vidSeek() {
    var seekto = vid.duration * (seekslider.value / 100);
    vid.currentTime = seekto;
  }
  function seektimeupdate() {
    var nt = vid.currentTime * (100 / vid.duration);
    seekslider.value = nt;
    var curmins = Math.floor(vid.currentTime / 60);
    var cursecs = Math.floor(vid.currentTime - curmins * 60);
    var durmins = Math.floor(vid.duration / 60);
    var dursecs = Math.floor(vid.duration - durmins * 60);
    if (cursecs < 10) {
      cursecs = "0" + cursecs;
    }
    if (dursecs < 10) {
      dursecs = "0" + dursecs;
    }
    if (curmins < 10) {
      curmins = "0" + curmins;
    }
    if (durmins < 10) {
      durmins = "0" + durmins;
    }
    curtimetext.innerHTML = curmins + ":" + cursecs;
    durtimetext.innerHTML = durmins + ":" + dursecs;
  }
}

// ================Login INdex=============//

document.querySelector(".info_login_headerr").style.display = "none";
function IMG() {
  var loginUser = document.querySelector(".info_login_headerr");
  if (loginUser.style.display == "block") {
    loginUser.style.display = "none";
  } else {
    loginUser.style.display = "block";
  }
}

// ==============comment post video============//
let check = "none";
function commentPost() {
  if (check == "none") {
    check = "block";
  } else {
    check = "none";
  }
  let cmtPost = document.querySelectorAll(".cmtPost");
  let commentPost = document.querySelectorAll(".comment_video_page");
  for (let i = 0; i < commentPost.length; i++) {
    cmtPost[i].addEventListener("click", function () {
      commentPost[i].style.display = check;
    });
  }
}

// ===================follow===============//
let followcheck = "follow";
function follow(btn) {
  var follow = btn.dataset.follow;
  console.log(btn.dataset.follow);
  if (Number(follow)) {
    btn.innerHTML = "following";
    btn.dataset.follow = 0;
  } else {
    var checkFL = confirm("Do you want unfollow ?");
    if (checkFL == false) {
      btn.innerHTML = "following";
    } else {
      btn.innerHTML = "follow";
      btn.dataset.follow = 1;
    }
  }
  // if (followcheck == "follow") {
  //   followscheck = "following";
  // } else {
  //   followcheck = "follow";
  // }
  // const btns = document.querySelectorAll('.btnFLLL');
  // for (let i = 0; i < btns.length; i++) {
  //   btns[i].addEventListener("click", function () {
  //     // debugger;
  //     this.innerHTML = followcheck;
  //   })
  // }
}

// ================= follow right root==============//

let followcheckRight = "Follow";
function followRight() {
  if (followcheckRight == "Follow") {
    followcheckRight = "following";
  } else {
    followcheckRight = "Follow";
  }
  const btns = document.querySelectorAll(".follow_right_root");
  for (let i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
      // debugger;
      this.innerHTML = followcheckRight;
    });
  }
}

// follow()

// ====header===============//
function Aleart() {
  var aleart_mess_header = document.querySelector(".aleart_mess_header");
  var aleart_notifications = document.querySelector(".aleart_notifications");
  if (aleart_notifications.style.display == "block") {
    aleart_notifications.style.display = "none";
  } else {
    aleart_notifications.style.display = "block";
    aleart_mess_header.style.display = "none";
  }
}

function Mess() {
  var aleart_notifications = document.querySelector(".aleart_notifications");
  var aleart_mess_header = document.querySelector(".aleart_mess_header");
  if (aleart_mess_header.style.display == "block") {
    aleart_mess_header.style.display = "none";
  } else {
    aleart_mess_header.style.display = "block";
    aleart_notifications.style.display = "none";
  }
}
// =============== post_video =============//
function postvd() {
  var postvideo = document.querySelector(".postvideo");
  var testposstvd = document.querySelector(".testposstvd");
  if (postvideo.style.display == "block") {
    postvideo.style.display = "none";
  } else {
    testposstvd.style.marginTop = "100px";
    postvideo.style.transition = "all 2s";
    postvideo.style.display = "block";
  }
}
// ============post news=============//
function postnews() {
  var testposstvd = document.querySelector(".testposstvd");
  var postnews = document.querySelector(".postnews");
  if (postnews.style.display == "block") {
    postnews.style.display = "none";
  } else {
    testposstvd.style.marginTop = "100px";
    postnews.style.transition = "all 2s";
    postnews.style.display = "block";
  }
}

function viewAll() {
  var viewallText = document.querySelector("#viewAll");
  var viewall_friends_root_right = document.querySelector(
    ".viewall_friends_root_right"
  );
  if (viewall_friends_root_right.style.display == "block") {
    viewall_friends_root_right.style.display = "none";
    viewallText.innerHTML = "Xem tất cả";
  } else {
    viewall_friends_root_right.style.display = "block";
    viewallText.innerHTML = "Thu gọn";
  }
}

// ============= check validate =================//
function validate(event) {
  event.preventDefault();
  var contentVLD = document.querySelectorAll(".post_content_video").value;
  var btnVLD = document.querySelectorAll(".post_videos").value;
  if (contentVLD != "") {
    alert("đã nhận");
  }
}

//  detail posts button
var mini_posts = document.querySelector("#product_sp");
if (mini_posts) {
  var unproduct = (document.querySelector("#product_sp").style.display =
    "none");
  function showProduct() {
    var post = document.querySelector("#product_sp");
    var pcs = document.querySelector(".product_content_sp");
    if (post.style.display == "flex") {
      post.style.display = "none";
      post.style.transition = ".6s";
      pcs.style.top = "-10px";
      pcs.style.transition = ".6s";
    } else {
      post.style.display = "flex";
      post.style.justifyContent = "center";
      post.style.alignItems = "center";
      pcs.style.top = "0";
      pcs.style.left = "0";
      pcs.style.transition = ".6s";
    }
  }
}

// Check value input
var fromcmtpoosts = document.querySelector(".input_comment_user");
if (fromcmtpoosts) {
  function checkcomment_ip() {
    var ip = document.querySelector(".ip_cmt");
    var btn = document.querySelector(".button_comment");
    if (ip) {
      if (ip.value == "") {
        btn.style.opacity = "0.3";
        btn.disabled = "disabled";
      } else {
        btn.style.opacity = "1";
        btn.disabled = "";
      }
    }
  }
  checkcomment_ip();
}

// add like comment video

var valuenumberposts = 0;
var numberlikeposts = document.querySelector(".number_view_posts");
const iconheart = document.querySelector("#heart-icon");
function clickheartposts() {
  if (iconheart.classList[1] == "bx-heart") {
    iconheart.classList.add("bxs-heart");
    iconheart.classList.remove("bx-heart");
    valuenumberposts++;
    numberlikeposts.innerHTML = valuenumberposts;
  } else {
    iconheart.classList.add("bx-heart");
    iconheart.classList.remove("bxs-heart");
    valuenumberposts--;
    numberlikeposts.innerHTML = valuenumberposts;
  }
}

// even click commnent

var comment = document.querySelector(".user_comment_box");
if (comment) {
  document.querySelector(".user_comment_box").style.display = "none";
  function comment() {
    var commnentfs = document.querySelector(".user_comment_box");
    var comtposts = document.querySelector(".comment_posts_user");
    const iconchat = document.querySelector("#chat-icon");
    if (
      iconchat.classList[1] == "bxs-message-rounded" ||
      commnentfs.style.display == "block"
    ) {
      commnentfs.style.display = "none";
      comtposts.style.height = "150px";
      comtposts.style.transition = ".3s";
      iconchat.classList.add("bx-message-rounded");
      iconchat.classList.remove("bxs-message-rounded");
    } else {
      comtposts.style.height = "400px";
      comtposts.style.transition = ".3s";
      commnentfs.style.display = "block";
      iconchat.classList.add("bxs-message-rounded");
      iconchat.classList.remove("bx-message-rounded");
    }
  }
}

// follow and unfollow user
var bgfollow = document.querySelector(".btn_edit_user_other");
var followdetailother = document.querySelector(".btn_edit_user_other_span");
if (followdetailother) {
  followdetailother.innerHTML = "Follow";
  function followOther(btn) {
    var follow = btn.dataset.follow;

    if (Number(follow)) {
      followdetailother.innerHTML = "Đang Follow";
      bgfollow.style.backgroundColor = "white";
      bgfollow.style.color = "#ff3b5c";
      bgfollow.style.border = "2px solid #ff3b5c";
      btn.dataset.follow = 0;
    } else {
      var checkFL = confirm("Do you want unfollow ?");
      if (checkFL == false) {
        followdetailother.innerHTML = "Đang Follow";
        bgfollow.style.backgroundColor = "white";
        bgfollow.style.color = "#ff3b5c";
        bgfollow.style.border = "2px solid #ff3b5c";
      } else {
        followdetailother.innerHTML = "Follow";
        bgfollow.style.backgroundColor = "#ff3b5c";
        bgfollow.style.color = "white";
        btn.dataset.follow = 1;
      }
    }
  }
}

//  Video Time Bar

// Check value input commetn video mini
function checkcomment_ipvideo() {
  var ipvd = document.querySelector(".ip_cmt_mini");
  var btnvd = document.querySelector(".btn_cmt_vdmini");
  if (ipvd) {
    if (ipvd.value == "") {
      btnvd.style.color = "#414141";
      btnvd.disabled = "disabled";
    } else {
      btnvd.style.color = "red";
      btnvd.disabled = "";
    }
  }
}
checkcomment_ipvideo();

// hover video play
const Video = document.querySelectorAll(".vid");
for (let i = 0; i <= Video.length; i++) {
  Video[i].addEventListener("mouseover", function () {
    Video[i].play();
  });
  Video[i].addEventListener("mouseout", function () {
    Video[i].pause();
    Video[i].load();
  });
}

// click heart Number

function heart_video_cmt() {
  var click_like_video = document.querySelector(".heart_interactive i");
  var number_like_video = document.querySelector(".view_interactive_mini");
  var i = 0;
  if (click_like_video.style.color != "red") {
    click_like_video.style.color = "red";
    i++;
    number_like_video.innerHTML = i;
  } else {
    click_like_video.style.color = "white";
    number_like_video.innerHTML = i;
    i--;
  }
}

// minh anh js 
var coll = document.getElementsByClassName("row-centerfix");
if (coll) {
  var i;
  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function () {
      this.classList.toggle("active");
      var content = this.nextElementSibling;
      if (content.style.display === "block") {
        content.style.display = "none";
      } else {
        content.style.display = "block";
      }
    });
  }
}
// end minh anh js


</script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#valueInput").emojioneArea({
            pickerPosition: "right",
            shortnames: true
        });
    });

</script>

