<?php include('header_dashboard.php'); ?>
<?php include('session.php'); 


error_reporting(E_ERROR | E_PARSE);

if($_POST['filter-query'] == 'Paint') { 
    // query to get all Fitzgerald records 
    $query = "select * from stock where categories='Paint'"; 
		 
} 
elseif($_POST['filter-query'] == 'Awning') { 
    // query to get all Fitzgerald records 
    $query = "select * from stock where categories='Awning'"; 
			 
}
elseif($_POST['filter-query'] == 'Iron') { 
    // query to get all Fitzgerald records 
    $query = "select * from stock where categories='Iron'"; 
			 
}
elseif($_POST['filter-query'] == 'Others') { 
    // query to get all Fitzgerald records 
    $query = "select * from stock where categories='Others'"; 
			 
}
 
else { 
    // query to get all records 
    $query = "select * from stock";
	 
	 
} 
$device_query = mysql_query($query);
?>
     <body id="home">
		<?php include('navbar_manager.php'); ?>
        <div class="container-fluid">
          <div class="row-fluid">
				<?php include('manager_sidebar.php'); ?>
    <div class="span9" id="content">
                     <div class="row-fluid">
					 
					 <h2 id="sc" align="center"><image src="../admin/images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	             $count_item=mysql_query("select * from stock");
	             $count = mysql_num_rows($count_item);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Stock(s) List</div>
                          <div class="muted pull-right">
								Number of All Stock: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>
						  
                 <h4 id="sc">Stock List 
					<div align="right" id="sc">Date:
						<?php
                            $date = new DateTime();
                            echo $date->format('l, F jS, Y');
                         ?></div>
				 </h4>  							  
<br/>														
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

<form action='<?php echo $_SERVER['PHP_SELF']; ?>' method='post' name='form_filter' >
             	
             <select name="filter-query">
                     <option >All</option>
                    <option value="Paint">Paint</option>
                    <option value="Awning">Awning</option>
                    <option value="Iron">Iron</option>
                    <option value="Others">Others</option>
                  
                </select>
                <input type='submit' value = 'Filter'>
                </form>
	
<div class="block-content collapse in">
    <div class="span12">
	<form action="" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		        <tr>			        
					<th class="empty"></th>
                    <th>Stock Name</th>
					<th>Quantity</th>
                    <th>Price Per Unit</th>
                    <th>Categories</th>
                    
					
			        					
                  						
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
		
		while($row = mysql_fetch_array($device_query)){
		
		?>
	         
                						
		<tr>
		<td>
		</td>
        	<td><?php echo $row['stock_name']; ?></td>
			<td><?php echo $row['quantity']; ?></td>
            <td><?php echo $row['stock_price_per_unit']; ?></td>
            <td><?php echo $row['categories']; ?></td>
			
			
			
			
           
            
            </
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