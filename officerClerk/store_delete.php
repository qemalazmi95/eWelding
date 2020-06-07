
<?php
include('./lib/dbcon.php');
dbcon();
$store_manager_id=$_GET['id'];
mysql_query("DELETE from store_manager where store_manager_id='$store_manager_id'") or die (mysql_error());
?>
<script>

window.location = "store_user.php";
</script>
<script type="text/javascript">
window.location.href="store_user.php";
</script>