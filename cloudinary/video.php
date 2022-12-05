<!--<form action="" method="post" enctype="multipart/form-data">-->
<!--    <input type="file" name="image_1" id="">-->
<!--    <input type="submit" name="submit" value="Update">-->
<!--</form>-->

<?php

require_once "vendor/autoload.php";
use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;
Configuration::instance([
    'cloud' => [
      'cloud_name' => 'dnbbehk5b', 
      'api_key' => '377518485928239', 
      'api_secret' => 'FEQQeg4Rks0yeZ8I28Hn8GOUuC4'],
    'url' => [
      'secure' => true]]);

//        $path =   $_FILES['image_1']['tmp_name'];
//        $name = $_FILES['image_1']['name'];
//
//       (new UploadApi())->upload($path,[
//           'public_id' => 'Fshort/avatar/'. $name
//       ]);
    if(isset($_POST['sb_video'])){
        $video = $_FILES['videohome'];
            $title = $_POST['title'];
            $path = $video['tmp_name'];
            $namevideo = $video['name'];
            $name = explode(".",$namevideo);
            $data = (new UploadApi())->upload($path, [
                'resource_type' => 'video',
                'public_id' => 'Fshort/video/' . $name[0],
                'chunk_size' => 6000000,
                 "height"=>1024, "width"=>576, "crop"=>"crop"
                ]
            );
            new_post_video($title,$data['url'],1,$_SESSION['info']['id']);
            route('index.php');
    }

?>
