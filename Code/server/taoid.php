<?php
include_once 'vendor/autoload.php';
$client = new Google_Client();
$client->setAuthConfig('trongtrung.json');
$client->setScopes(['https://www.googleapis.com/auth/drive']);
$service = new Google_Service_Drive($client);
$fileMetadata = new Google_Service_Drive_DriveFile(array(
'name' => 'Google_Service_Drive',
'mimeType' => 'application/vnd.google-apps.folder'));
$file = $service->files->create($fileMetadata, array(
'fields' => 'id'));
printf("Folder ID: %s\n", $file->id);

