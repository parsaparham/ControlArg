<?php

include("lib/connect.php");
include("libsms/nusoap.php");

$object=new class_parent();

$did=$_GET['id'];

//Get Category name for delete file
$sql="select * from certificates where id=?";
$arr=array($did);
$res=$object->select($sql,$arr);
$name=$res[0]['name'];
//Get Full name of file (name and extention) for deleting
$path = '../uploads/certificates/'.$name.".*";
$filenames = glob($path);
$file=$filenames[0];
$fileType= pathinfo($file, PATHINFO_EXTENSION);
$image="../uploads/certificates/".$name.".".$fileType;
//delete file
echo $image;
unlink($image);



//Delete record
$sql="delete from certificates where id=?";
$res=$object->myquery($sql,$arr);


phpAlert("گواهینامه با موفقیت حذف شد.");
?> <script> location.assign("certificates.php");  </script> <?php



