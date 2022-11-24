<?php

//fetch_comment.php

$query = "
SELECT * FROM comments 
WHERE parent_comment_id = '0' 
ORDER BY id DESC
";
$statement = $connect->prepare($query);
$stmt->execute();

$data = $stmt->fetchAll();
$output = '';
foreach($data as $row)
{
 $output .= '
<div class="user_comment_video_mini">
              <div class="avatar_name_icon_mini_video">
                <div class="avatar_mini_video">
                  <img src="../public/setting/img/chup-anh-hoang-hon-bang-smartphone_800x450.jpg" alt="">
                </div>
                <div class="name_comment_mini_video">
                              <h4>'.$row["id_account"].'</h4>
                    </div>
              </div>
              <div class="comment_video_mini">
               <div class="text_comment_video_mini">
                 <span>'.$row["content"].'</span><br>
                <span class="time_cmt_vdmini">'.$row["create_date"].'</span>
               </div>
              </div>
            </div>
 ';
 $output .= get_reply_comment($conn, $row["id"]);
}

echo $output;

function get_reply_comment($conn, $parent_id = 0, $marginleft = 0)
{
 $query = "
 SELECT * FROM tbl_comment WHERE parent_comment_id = '".$parent_id."'
 ";
 $output = '';
 $stmt = $conn->prepare($query);
 $stmt->execute();
 $data = $stmt->fetchAll();
 $count = $stmt->rowCount();
 if($parent_id == 0)
 {
  $marginleft = 0;
 }
 else
 {
  $marginleft = $marginleft + 48;
 }
 if($count > 0)
 {
  foreach($result as $row)
  {
   $output .= '
   <div class="panel panel-default" style="margin-left:'.$marginleft.'px">
    <div class="panel-heading">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i></div>
    <div class="panel-body">'.$row["comment"].'</div>
    <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply</button></div>
   </div>
   ';
   $output .= get_reply_comment($connect, $row["comment_id"], $marginleft);
  }
 }
 return $output;
}

// ?>