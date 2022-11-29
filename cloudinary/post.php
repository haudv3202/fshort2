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

if(isset($_POST['submit_post'])){
    $post = $_FILES['image_post'];
    $title = $_POST['title_news'];
    $path =   $post['tmp_name'];
    $name = $post['name'];
//    list($width, $height) = getimagesize($post['tmp_name']); lấy width $width ,$height
    $data = (new UploadApi())->upload($path,[
           'public_id' => 'Fshort/image_post/'. $name
       ]);
    new_post($title,$data['url'],2,$_SESSION['info']['id']);
    route('?about');
}

?>
