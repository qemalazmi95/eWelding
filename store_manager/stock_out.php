<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php
error_reporting(E_ERROR | E_PARSE);

if($_POST['filter-query'] == 'Paint') { 
    // query to get all Fitzgerald records 
    $query = "select stock_id,stock_name,quantity from stock where categories='Paint'"; 
	$project_id =$_POST['project_id'];		 
} 
elseif($_POST['filter-query'] == 'Awning') { 
    // query to get all Fitzgerald records 
    $query = "select stock_id,stock_name,quantity from stock where categories='Awning'"; 
	$project_id =$_POST['project_id'];		 
}
elseif($_POST['filter-query'] == 'Iron') { 
    // query to get all Fitzgerald records 
    $query = "select stock_id,stock_name,quantity from stock where categories='Iron'"; 
	$project_id =$_POST['project_id'];		 
}
elseif($_POST['filter-query'] == 'Others') { 
    // query to get all Fitzgerald records 
    $query = "select stock_id,stock_name,quantity from stock where categories='Others'"; 
	$project_id =$_POST['project_id'];		 
}
 
else { 
    // query to get all records 
    $query = "select stock_id,stock_name,quantity from stock";
	$project_id =$_GET['project_id'];	 
	 
} 
$device_query1 = mysql_query($query);


?>
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

<section>
          
		  <article id="box">
		     <h5>Category :</h5>
			 <div id="categories-search">
             <form action='<?php echo $_SERVER['PHP_SELF']; ?>' method='post' name='form_filter' >
               <input type="hidden" name="project_id2" value="<?php echo $project_id; ?>">
               <select name="filter-query">
                 <option >All</option>
                    
                    <option value="Paint">Paint</option>
                    <option value="Awning">Awning</option>
                    <option value="Iron">Iron</option>
                    <option value="Others">Others</option>
                  
                </select>
                <input type='submit' value = 'Filter'>
                </form>
                
                
                
		       <div class="container-fluid">
		         <div class="row-fluid"> 
   <div class="empty">
	   <div class="pull-right">
	  
        
		<script type="text/javascript">
		  $(document).ready(function(){
		  $('#add').tooltip('show');
		  $('#add').tooltip('hide');
		  });
		  </script> 		
       </div>
   </div>
</div>
</div>
	
<div class="block-content collapse in">
    <div class="span12">
	<form action="" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		        <tr>			        
				
                    <th><p>Stock Name</p></th>
					<th><p>Quantity</p></th>
                      <th><p>Withdraw</p></th>
				
					
			        					
                    						
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
		
		
		

		while($row = mysql_fetch_array($device_query1))
		
		
		
		
		
		
		{
			
		
		?>
        
        
				
           
                
                
                
                
                
             <form action="stock_out.php" method="post">       						
		<tr>

             <input type="hidden" name="project_id" value="<?php echo $project_id; ?>">
             <input type="hidden" name="stock_id" value="<?php echo $row['stock_id']; ?>">
            	
        	<td><?php echo $row['stock_name']; ?></td>
			<td><?php echo $row['quantity']; ?></td>
            <input type="hidden" name="quantity" value="<?php echo $row['quantity']; ?>">
			<td><input type="number" id="qty" name="withdraw" placeholder="quantity" class="form-control name_list" min="0" max="<?php echo $row['quantity']; ?>" required/></td>
				
			
            <?php #include('toolttip_edit_delete.php'); ?>												
			<td> <button id="update2" data-placement="right" title="Click to update" name="update2" type="submit"  class="btn btn-info"><i class="icon-double-angle-down"> Withdraw</i></td></form> 
            
            
           
            
            
          
            
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
										window.location.href = 'stock_out.php?project_id=".$project_id."';
										
										</script>";
										}
  ?>
  
  
  <?php                                      
}
																										
?>


