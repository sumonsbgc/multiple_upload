<?php

$fileName       = $_FILES['file']['name'];
$fileType       = $_FILES['file']['type'];
$fileTmpName    = $_FILES['file']['tmp_name'];
$fileSize       = $_FILES['file']['size'];
$fileError      = $_FILES['file']['error'];


$uploads_dir = 'upload';

foreach ($fileError as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {

        $tmpName = $fileTmpName[$key];

        $ext = pathinfo($fileName[$key], PATHINFO_EXTENSION );
        $name = strstr(pathinfo($fileName[$key], PATHINFO_FILENAME), "-min", true);
        $name = $name.'.'.$ext;

        move_uploaded_file($tmpName, "$uploads_dir/$name");
    }
}