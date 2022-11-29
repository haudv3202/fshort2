// render content page
function Video_home(datavideohome) {
  let ListvideoHome = document.querySelector(".videos_page");
  var boxcmtvideohome = document.querySelector("#comment_post_home");
if (ListvideoHome && boxcmtvideohome) {
    ListvideoHome.innerHTML = "";
    for (let item of datavideohome) {
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
     <span onclick="showVideo()"><video  width="50%" preload=""  controls type="video/mp4" loop
            src="${item.link}"></video></span>
    </div>
    <div class="feeling">
        <div class="icon_felling">
          <form action=""  method="POST">
            <input type="hidden" name="id_user" value="${item.id_user_log}">
             <input type="hidden" name="id_post" value="${item.id_post}">
            <button type="submit" name="submit_like"><i class='bx bx-heart heart_form_felling'></i></button>
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
        <p>Tôi thật hối hận khi không biết tới dev front end Mạnh Cường sớm hơn, thật đáng tiếc huhuhu. Bởi vì anh ta
            quá là đỉnh đi mà huhuhu 😭😭😭 </p>
    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>             
    $(document).ready(function(){
        $("#comment_post_home").load("site/comment/comment.php", {idpro: ${item.id_post}});
    });
  }
    </script>
               <div id="comment_post_home">
      
         </div>
        
    `;
    }
  }
}
Video_home(array_user_detail);