<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image_1" id="">
    <input type="submit" name="submit" value="Update">
</form>

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

    //   (new UploadApi())->upload($path); img
    $path =  null;
    if(isset($_POST['submit'])){
        $a = $_FILES['image_1'];
        $path = $a['tmp_name'];
        $namevideo = $a['name'];
        $name = explode(".",$namevideo);
        $data = (new UploadApi())->upload($path, [
            'resource_type' => 'video',
            'public_id' => 'Fshort/video/' . $name[0],
            'chunk_size' => 6000000,
            'eager' => [
              ['width' => 720, 'height' => 1280, 'crop' => 'pad'], 
              ['width' => 160, 'height' => 100, 'crop' => 'crop', 'gravity' => 'south']], 
            'eager_async' => true, 
            'eager_notification_url' => 'https://mysite.example.com/notify_endpoint']
          );
          
    }

?>
