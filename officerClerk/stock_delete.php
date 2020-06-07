
<?php
include('./lib/dbcon.php');
dbcon();
$stock_id=$_GET['id'];
mysql_query("DELETE from stock where stock_id='$stock_id'") or die (mysql_error());
?>
<script type="text/javascript">
window.location.href="stock.php";
</script>