
<?php
require_once("models/mysqlconnect.php"); 
require_once("models/config.php");
//$select_query = "SELECT 'images_path' FROM  'images_tbl' ORDER by 'images_id' DESC";
$result = mysql_query("SELECT images_path FROM images_tbl ORDER by images_id DESC");
?>


<?php while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {?>
	<?php include("left-nav.php"); ?>
    <link href="css/gallery.css" rel="stylesheet">
    <img src='<?php echo ($row["images_path"]) ?>'/>
<?php } ?>
