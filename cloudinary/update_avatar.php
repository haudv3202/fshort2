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

    $data = (new UploadApi())->upload($path,[
        'public_id' => 'Fshort/avatar/'. $name_image
    ]);
?>
