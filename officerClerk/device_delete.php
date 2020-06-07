<?php
//include('./lib/dbcon.php');

include('./lib/dbcon.php');
dbcon();
$project_id=$_GET['id'];
mysql_query("DELETE from project where project_id='$project_id'") or die (mysql_error());

?>
<script>
											
										    window.location = "project_new.php";
											</script>