<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
     <body id="home">
		<?php include('navbar_clerk.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
              <?php include('clerk_sidebar.php'); ?>
              <div class="span9" id="content">
                   <div class="row-fluid">
					 
					 <h2 id="sc" align="center"><image src="../admin/images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	             $count_item=mysql_query("select * from store_manager");
	             $count = mysql_num_rows($count_item);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Store Manager(s) List</div>
                          <div class="muted pull-right">
								Number of All Store Manager: <span class="badge badge-info"><?php  echo $count; ?></span>
                                
							 </div>
						  </div>
						  
                 <h4 id="sc">Store Manager List 
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
	
<div class="block-content collapse in">
    <div class="span12">
	<form action="" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		        <tr>			        
					<th class="empty"></th>
                    <th>Name</th>
					<th>Username</th>
					
			        					
                    <th class="empty"></th>						
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
		$device_query = mysql_query("select * from store_manager")or die(mysql_error());
		while($row = mysql_fetch_array($device_query)){
		
		?>
				
           
                
                
                
                
                
                						
		<tr>
		<td>
		</td>
        	<td><?php echo $row['firstname']; ?></td>
			<td><?php echo $row['username']; ?></td>
			
			
			
		
			<?php include('toolttip_edit_delete.php'); ?>												
			<td class="empty" width="80"><a rel="tooltip"  title="Edit Device" id="e<?php echo $row['store_manager_id']; ?>" href="store_edit.php<?php echo '?id='.$row['store_manager_id']; ?>" class="btn btn-info"><i class="icon-pencil"> Edit</i> </a></td>
            <?php include('toolttip_edit_delete.php'); ?>												
			<td class="empty" width="80"><a rel="tooltip"  title="Delete" id="e<?php echo $row['store_manager_id']; ?>" href="store_delete.php<?php echo '?id='.$row['store_manager_id']; ?>" <?php echo "onClick=\"javascript:return confirm('are you sure you want to delete this?');\"" ?> class="btn btn-danger"><i class="icon-pencil"> Delete</i> </a></td>
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