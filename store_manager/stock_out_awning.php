<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php $project_id =$_GET['project_id']; ?>
     <body id="home">
		<?php include('navbar_store.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('store_sidebar.php'); ?>
			    
				<div class="span9" id="content">
                     <div class="row-fluid">
					 
					 <h2 id="sc" align="center"><image src="../admin/images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	             $count_item=mysql_query("select * from stock");
	             $count = mysql_num_rows($count_item);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Withdrawal</div>
                         
						  </div>
						  
                 <h4 id="sc">Wihtdrawal Stock 
					<div align="right" id="sc">Date:
						<?php
                            $date = new DateTime();
                            echo $date->format('l, F jS, Y');
                         ?></div>
				 </h4>  							  
<br/>	

<a id="return" data-placement="top" class="btn btn-info" title="Iron" href="stock_out.php"></i> Iron</a>
<a id="return" data-placement="top" class="btn btn-info" title="Awning" href="stock_out_awning.php"></i> Awning</a>
<a id="return" data-placement="top" class="btn btn-info" title="Paint" href="stock_out_paint.php"></i> Paint</a>
<a id="return" data-placement="top" class="btn btn-info" title="Others" href="stock_out_others.php"></i> Others</a>




<div class="block-content collapse in">
  <div class="span12">
	<form action="" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		        <tr>			        
				
                    <th><p>Stock Name</p>
                      <p>&nbsp;</p></th>
					<th><p>Quantity</p>
					  <p>&nbsp;</p></th>
                      <th><p>Withdraw</p>
					  <p>&nbsp;</p></th>
					<input type="number" name="quantity" placeholder="quantity" class="form-control name_list" />
					
			        					
                    						
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
		$device_query = mysql_query("select stock_id,stock_name,quantity from stock where categories =('awning')")or die(mysql_error());
		while($row = mysql_fetch_array($device_query)){
			
		
		?>
        
        
				
           
                
                
                
                
                
             <form action="stock_out_awning.php" method="post">       						
		<tr>

             <input type="hidden" name="project_id" value="<?php echo $project_id; ?>">
             <input type="hidden" name="stock_id" value="<?php echo $row['stock_id']; ?>">
            	
        	<td><?php echo $row['stock_name']; ?></td>
			<td><?php echo $row['quantity']; ?></td>
            <input type="hidden" name="quantity" value="<?php echo $row['quantity']; ?>">
			<td><input type="number" id="qty" name="withdraw" placeholder="quantity" class="form-control name_list" required/></td>
<?php   ?>
						
			
            <?php #include('toolttip_edit_delete.php'); ?>												
			<td> <button id="update2" data-placement="right" title="Click to update" name="update2" type="submit" onclick="myFunction();" class="btn btn-info"><i class="icon-save icon-large"></td></form> 
            
            <script>
function myFunction(){


if(qty>$quantity){
	 alert("You button was pressed"); 
//content to be evaluated  
} 

};

</script>
          
            
		</tr>
											
	<?php } ?>   

</tbody>
</table>
</form>		
		
			  		
</div>
</div>
</div>
</div>
</div>

</div>	
<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
 </body>
</html>
<?php

	
if (isset($_POST['update2'])){


										$date=date("Y-m-d");
										$project_id =$_POST['project_id']	;							
										$stock_id =$_POST['stock_id']	;										
										$quantity = $_POST['quantity'];
										$withdraw = $_POST['withdraw'];
                                        
                                        $newquantity=($quantity -$withdraw);
										
										
									
										mysql_query("UPDATE stock SET	quantity='$newquantity' where stock_id = '$stock_id'  ")or die(mysql_error());
										
										mysql_query("INSERT INTO withdrawal_stock (withdrawal_stock_id,stock_id,project_id,quantity,date) VALUES ('NULL','$stock_id','$project_id','$withdraw','$date')")or die(mysql_error());
										if(mysql_query){
											echo "<script>										
										window.location.href = 'stock_out_awning.php?project_id=".$project_id."';
										
										</script>";
										}
  ?>
  
  
  <?php                                      
}
																										
?>


