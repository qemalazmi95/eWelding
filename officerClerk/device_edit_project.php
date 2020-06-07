<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; 
echo $get_id;
?>
    <body id="home">
		<?php include('navbar_clerk.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
            
				<?php include('clerk_sidebar.php'); ?>
               <div class="span9" id="content">
                     <div class="row-fluid">
									
					                <script type="text/javascript">
		                             $(document).ready(function(){
		                             $('#add').tooltip('show');
		                             $('#add').tooltip('hide');
		                              });
		                            </script> 
		                        <!-- block -->
		                        <div id="" class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Edit Device</div>
										<div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="project_new.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
																<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script>     
		                            </div>
		                            <div class="block-content collapse in">		
                                   						
									
									<?php
									$query = mysql_query("select * from project 
									LEFT JOIN client ON project.client_id=client.client_id
									where project_id = '$get_id'")or die(mysql_error());
									
									$row1 = mysql_fetch_array($query);
									$nameproject = $row1['project_name'];
									$location = $row1['location'];
									$startdate = $row1['project_start_date'];
									$duedate = $row1['project_expected_date'];
									$cost = $row1['project_expected_price'];
									$project_id = $row1['project_id'];
									$status = $row1['status_project'];
									?>
									
									   <form class="form-horizontal" method="post">
							
										<div class="control-group">
		                                 <label class="control-label" for="inputEmail">Client Name</label>
			                                <div class="controls">
				                              

												 <?php $device_name =  mysql_query("select * from client 
									LEFT JOIN project ON client.client_id=project.client_id
									where project_id = '$get_id' ")or die(mysql_error()); 
			                                        while ($row=mysql_fetch_array($device_name)){ 
													$dev_name = $row['client_name'];
													$id = $row['client_id'];
													}
													?>
				                                   
				                              
                                                <input type="text" value="<?php echo $dev_name ?>" class="span8" name="clientname" id="clientname" readonly/>
		                                     </div>
	                                    </div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Project Name</label>
											<div class="controls">
											<input type="text" class="span8" name="projectname" id="projectname" value="<?php echo $nameproject; ?>" placeholder="Project Name" required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Project Location</label>
											<div class="controls">
											<input type="text" value="<?php echo $location; ?>" class="span8" name="location" id="location" placeholder="Project Location" required>
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="inputPassword"><b>Starting Date</b></label>
											<div class="controls">
											<input type="date" class="span8" name="date" id="date" value="<?php echo $startdate; ?>" placeholder="Starting Date" required>
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="inputPassword"><b>Expected Date</b></label>
											<div class="controls">
											<input type="date" class="span8" name="date1" id="date2" value="<?php echo $duedate; ?>" placeholder="Expected Date" required>
											</div>
										</div>
                                        
                                        	<div class="control-group">
											<label class="control-label" for="inputPassword">Expected Cost</label>
											<div class="controls">
											<input type="text" class="span8" name="price" id="price" value="<?php echo $cost;?>" placeholder="Expected Price" required>
											</div>
										</div>
						
										
										
						<div class="control-group">
											<label class="control-label" for="inputPassword"  placeholder="Project Status" >Project Status</label>
											<div class="controls">
											<select name="project_status"  required>
                                            										
													<option value="New"<?php if($status=='New')echo'selected';?>>New</option>
                                                    <option value="Pending"<?php if($status=='Pending')echo'selected';?>>Pending</option>
                                                    <option value="Finish"<?php if($status=='Finish')echo'selected';?>>Finish</option>																									
												</select>								
											
											</div>
										</div>
										
										<div class="control-group">
										<div class="controls">
										
										<button id="update" data-placement="right" title="Click to update" name="update" type="submit" class="btn btn-info"><i class="icon-save icon-large"></i> Update</button>
										</div>
										</div>
										<script type="text/javascript">
										$(document).ready(function(){
										$('#update').tooltip('show');
										$('#update').tooltip('hide');
										});
										</script> 
										</form>
										
										<?php
										if (isset($_POST['update'])){
										// $client_id = $_POST['client_id'];											
										$clientname = $_POST['clientname'];
										$projectname = $_POST['projectname'];
										$location = $_POST['location'];
										$date = $_POST['date'];
										$date1 = $_POST['date1'];
										$price = $_POST['price'];
										$status = $_POST['project_status'];
										
										
									
										mysql_query("UPDATE project SET	project_name = '$projectname', 
																		location = '$location',
																		project_start_date = '$date',
																		project_expected_date = '$date1',
																		project_expected_price = '$price',
																		status_project='$status'
																	
																		where project_id = '$project_id' ")or die(mysql_error());
																										
									    //mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Edit device info $dev_name')")or die(mysql_error());
										?>
																			<script>
alert('Successfully');
window.location = "project_new.php";
</script>
										<?php
										}
										
										
										?>
									
								
		                            </div>
		                        </div>
		                        <!-- /block -->
		                    </div>
		                </div>
            </div>
<script>
	jQuery(document).ready(function(){
		jQuery("#opt11").hide();
		jQuery("#opt12").hide();
		jQuery("#opt13").hide();		

		jQuery("#qtype").change(function(){	
			var x = jQuery(this).val();			
			if(x == '1') {
				jQuery("#opt11").show();
				jQuery("#opt12").hide();
				jQuery("#opt13").hide();
			} else if(x == '2') {
				jQuery("#opt11").hide();
				jQuery("#opt12").show();
				jQuery("#opt13").hide();
			}
		});
		
	});
</script>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>