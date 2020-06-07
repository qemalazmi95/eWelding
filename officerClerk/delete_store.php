<?php
include('./lib/dbcon.php');
dbcon();
if (isset($_POST['delete_store'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM store_manager where store_manager_id='$id[$i]'");
}
header("location: store_user.php");
}
?>