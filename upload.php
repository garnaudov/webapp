 <?php


require_once("models/mysqlconnect.php"); 
require_once("models/config.php");

    function GetImageExtension($imagetype)
   	 {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }
	 
	 
	 
if (!empty($_FILES["uploadedimage"]["name"])) {

	$file_name=$_FILES["uploadedimage"]["name"];
	$temp_name=$_FILES["uploadedimage"]["tmp_name"];
	$imgtype=$_FILES["uploadedimage"]["type"];
	$ext= GetImageExtension($imgtype);
	$imagename=date("d-m-Y")."-".time().$ext;
	$target_path = "images/".$imagename;
	
	

if(move_uploaded_file($temp_name, $target_path)) {

 	$query_upload="INSERT INTO images_tbl (images_path,submission_date)
VALUE ('".$target_path."','".date("d/m/Y")."')";
	mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error());  
	
}else{

   exit("Error While uploading image on the server");
} 

}
?>
<?php include("left-nav.php"); ?>
<form action="upload.php" enctype="multipart/form-data" method="post">

<table style="border-collapse: collapse; font: 12px Tahoma;" border="1" cellspacing="5" cellpadding="5">
<tbody><tr>
<td>
<input name="uploadedimage" type="file">
</td>

</tr>

<tr>
<td>
<input name="Upload Now" type="submit" value="Upload Image">
</td>
</tr>


</tbody></table>

</form>