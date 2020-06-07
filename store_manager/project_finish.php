<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
     <body id="home">
		<?php include('navbar_store.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('store_sidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">
					 
					 <h2 id="sc" align="center"><image src="../admin/images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	             $count_item=mysql_query("select * from project LEFT JOIN client ON project.client_id=client.client_id");
	             $count = mysql_num_rows($count_item);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Project(s) List</div>
                          <div class="muted pull-right">
								Number of All Project: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>
						  
                 <h4 id="sc">Project List 
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
                    <th><p>Client Name</p>
                      <p>&nbsp;</p></th>
					<th><p>Project Name</p>
					  <p>&nbsp;</p></th>
					<th><p>Location</p>
					  <p>&nbsp;</p></th>
					<th>Status 
                    <div id="project_status"class="control-group" >
				               <div class="controls"> </div>
                               <a id="return" data-placement="top" class="btn btn-info" title="New" href="project_new.php"></i> New</a>
                               <a id="return" data-placement="top" class="btn btn-warning" title="New" href="project_pending.php"></i> Pending</a>
                               <a id="return" data-placement="top" class="btn btn-success" title="New" href="project_finish.php"></i> Finish</a>
                    </th>
			        					
                    <th class="empty"></th>						
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
		$device_query = mysql_query("select a.*, b.* from project a,
		 client b where a.client_id=b.client_id
		 and status_project= ('finish')")or die(mysql_error());
		while($row = mysql_fetch_array($device_query)){
		
		?>
				
           
                
                
                
                
                
                						
		<tr>
		<td>
		</td>
        	<td><?php echo $row['client_name']; ?></td>
			<td><?php echo $row['project_name']; ?></td>
			<td><?php echo $row['location']; ?></td>
			<td><?php echo $row['status_project']; ?></td>
			
			
			
			<?php #include('toolttip_edit_delete.php'); ?>												
			<td class="empty" width="80"><a rel="tooltip"  title="View Project Detial" id="e<?php echo $row['client_id']; ?>" href="view_project.php<?php echo '?id='.$row['client_id']; ?>" class="btn btn-info"><i class="icon-pencil"> view</i> </a></td>
            
            
          
            
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