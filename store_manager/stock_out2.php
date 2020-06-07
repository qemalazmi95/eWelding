
<?php
//include('./lib/dbcon.php');

include('./lib/dbcon.php');
dbcon();
if (isset($_POST['update'])){


										
										$stock_id = $_POST['stock_id'];											
										$quantity = $_POST['quantity'];
										$withdraw = $_POST['withdraw'];
                                        
                                        $newquantity=$quantity -$widthdraw;
										
										
									
										mysql_query("UPDATE stock SET	quantity = '$newquantity' where stock_id = '$stock_id' ")or die(mysql_error());
                                        
                                        
																										
?>
<script type="text/javascript">
window.location.href="stock_out.php";
</script>
