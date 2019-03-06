<?php

require __DIR__ . '/../vendor/autoload.php';

use EdSDK\FileUploaderServer\FileUploader;

FileUploader::fileUploadRequest(
    array(
        'dirFiles' => './images',
        'dirTmp'   => './images/tmp'
    )
);