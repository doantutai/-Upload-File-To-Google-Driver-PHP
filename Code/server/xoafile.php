<?php
include_once 'vendor/autoload.php';
$client = new Google_Client();
$client->setAuthConfig('trongtrung.json');
$client->setScopes(['https://www.googleapis.com/auth/drive']);
$service = new Google_Service_Drive($client);
$optParams = array(
'fields' => "*");
$results = $service->files->listFiles($optParams);
foreach($results as $file){
$service->files->delete($file->getId());
}
$service->files->emptytrash();

