
<?php
include('./lib/dbcon.php');
dbcon();
$officer_clerk_id=$_GET['id'];
mysql_query("DELETE from officer_clerk where officer_clerk_id='$officer_clerk_id'") or die (mysql_error());
?>
<script>

window.location = "clerk_user.php";
</script>
<script type="text/javascript">
window.location.href="clerk_user.php";
</script>