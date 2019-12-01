<?php
include_once 'vendor/autoload.php';
$client = new Google_Client();
$client->setAuthConfig('trongtrung.json');
$client->setScopes(['https://www.googleapis.com/auth/drive']);
$service = new Google_Service_Drive($client);
$folderId = '1paMyCFsGUJGXiZzJI2PQGqRnLzznYkjf';
$newPermission = new Google_Service_Drive_Permission();
$newPermission->setType('anyone');
$newPermission->setRole('reader');
try{
$result = $service->permissions->create(
$folderId, $newPermission, array('fields' => 'id'));
if($result instanceof Google_Service_Exception){
printf($result);
}else{
printf("Permission ID: %s\n", $result->id);
}
}catch(Exception $e){
print "An error occurred: " . $e->getMessage();
}

