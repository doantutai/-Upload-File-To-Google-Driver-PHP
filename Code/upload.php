<?php
include'config.php';
include_once 'vendor/autoload.php';
    $name = $_FILES['fileToUpload']['name'];
    $size = $_FILES['fileToUpload']['size'];
    $type = $_FILES['fileToUpload']['type'];
    $fileToUpload=$_POST['fileToUpload'];
    $password=$_POST['password'];
            // Nếu người dùng có chọn file để upload

            if (isset($_FILES['fileToUpload']))
        {
 if ($_FILES['fileToUpload']['error'] > 0) {
    echo " <script>swal({
  type: 'error',
  title: 'Oops...',
  text: 'File Đã Lổi Upload Lại',
})  </script>";       
 }   else        {
$client = new Google_Client();
$client->setAuthConfig('trongtrung.json');
$client->setScopes(['https://www.googleapis.com/auth/drive']);
$service = new Google_Service_Drive($client);
//$folderId = '1A6F-kEQs_FdrIShNkCH_wKKTFlCvx3VY';
$folderId= file_get_contents('token.txt');
$fileMetadata = new Google_Service_Drive_DriveFile(array(
'name' => '[TaiVe.TOP]'.$name,
'parents' => array($folderId)));
$content = file_get_contents($_FILES['fileToUpload']['tmp_name']);
$file = $service->files->create($fileMetadata, array(
'data' => $content,
'mimeType' =>  $type,
'uploadType' => 'multipart',
'fields' => 'id'));
mysqli_query($conn,"INSERT INTO `filetrung` SET `name`='$name',`size`='$size',`time`='".time()."',`link`='".$file->id."',`passwd`='$password', `type`='$type'");
echo " <script>swal({
  type: 'success',
  title: 'DONE',
  text: 'UPLOAD Lên Server Thành Công',
})  </script>";
}
}else{
  echo " <script>swal({
  type: 'error',
  title: 'Oops...',
  text: 'Chưa Nhập File Sao Up',
})  </script>";    
    
}
?>