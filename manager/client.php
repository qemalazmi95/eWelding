<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body id="home">
		<?php include('navbar_manager.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('manager_sidebar.php'); ?>
			    
				  <div class="span9" id="content">
                     <div class="row-fluid">
					            				  
					  <h2 id="sc" align="center"><image src="../admin/images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	             $count_item=mysql_query("select * from client ");
	             $count = mysql_num_rows($count_item);
                 ?>		                 					 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-check"></i> Client List</div>
							 <div class="muted pull-right">
								Number of client (s): <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                          </div>
						  
				 <h4 id="sc">Client (s) List
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
					<th>Client  Name</th>
					<th>Gender </th>
					<th>Phone Number </th>
			        <th>Email  </th>
					<th>Address  </th>
					                   					              		
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
	
		<?php
	    $device_query = mysql_query("select * from client") or die(mysql_error());
	    while ($row = mysql_fetch_array($device_query)) {
		$id = $row['client_id'];
		$dev_name = $row['client_name'];
		?>
										
		<tr>
		<td class="empty">
			
		</td>
			<td><?php echo $row['client_name']; ?></td>
			<td><?php echo $row['gender']; ?></td>
			<td><?php echo $row['client_phone_number']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['address']; ?></td>
			
											
	   

<?php # include('toolttip_edit_delete.php'); ?>												
			<td class="empty" width="80"><a rel="tooltip"  title="Edit Device" id="e<?php echo $row['client_id']; ?>" href="view_client.php<?php echo '?id='.$row['client_id']; ?>" class="btn btn-info"><i class="icon-pencil"> view</i> </a></td>
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

	
<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
 </body>
</html>