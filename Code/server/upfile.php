<?php
include_once 'vendor/autoload.php';
$client = new Google_Client();
$client->setAuthConfig('trongtrung.json');
$client->setScopes(['https://www.googleapis.com/auth/drive']);
$service = new Google_Service_Drive($client);
$folderId = '1xfS-xR89QRi3xHRGbj08YX9XADJuAT2j';
$fileMetadata = new Google_Service_Drive_DriveFile(array(
'name' => 'photo.jpg',
'parents' => array($folderId)));
$content = file_get_contents('http://m.pcworld.com.vn/files/articles/2015/1238853/googledrive-400.jpg');
$file = $service->files->create($fileMetadata, array(
'data' => $content,
'mimeType' => 'image/jpeg',
'uploadType' => 'multipart',
'fields' => 'id'));
printf("File ID: %s\n", $file->id);

