// render about home
function About_home(dataabouthome) {
  let ListaboutHome = document.querySelector(".about_render_video");
  if (ListaboutHome) {
    ListaboutHome.innerHTML = "";
    for (let item of dataabouthome) {
      var Comments_posts = "";
      for (let posts_comment of item.comments) {
        Comments_posts += `
                <div class="info_comment_video_page">
            <img src="${posts_comment.avatar_comment}" alt="">
            <div class="text_logo_name_videos">
                <p>${posts_comment.name_user_comment}<i class='bx bxs-check-circle' style='color:#2e88ff'></i></p>
                <p>${posts_comment.time_date} ~ <i class='bx bx-world'></i></p>
            </div>
        </div>
        <div class="value_comment_user">
            <p>
            ${posts_comment.content}
          </p>
        </div>
        `;
      }
      ListaboutHome.innerHTML +=
        `
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
    ` +
        Comments_posts +
        `
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
