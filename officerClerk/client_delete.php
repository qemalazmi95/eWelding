
<?php
include('./lib/dbcon.php');
dbcon();
$client_id=$_GET['id'];
mysql_query("DELETE from client where client_id='$client_id'") or die (mysql_error());
?>
<script>

window.location = "client.php";
</script>
<script type="text/javascript">
window.location.href="client.php";
</script>