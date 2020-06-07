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
		                                <div class="muted pull-left">Edit Client</div>
										<div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="client.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
																<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script>     
		                            </div>
		                            <div class="block-content collapse in">		
                                   						
									
									<?php
									$query = mysql_query("select * from client where client_id = '$get_id'")or die(mysql_error());
									
									$row = mysql_fetch_array($query);
									$clientname = $row['client_name'];
									$ic = $row['client_ic'];
									$phonenumber = $row['client_phone_number'];
									$gender = $row['gender'];
									$address= $row['address'];
									$email= $row['email'];
									$client_id = $row['client_id'];
									$date = $row['date'];
									?>
									
									   <form class="form-horizontal" method="post">
							
										<div class="control-group">
		                                 <label class="control-label" for="inputEmail">Client Name</label>
			                                <div class="controls">
				                             
				                                   
				                              
                                                <input type="text" value="<?php echo $clientname ?>" class="span8" name="clientname" id="clientname"  placeholder="Client Name" required/>
                                                
                                                
		                                     </div>
	                                    </div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">I/C</label>
											<div class="controls">
											<input type="text" class="span8" name="ic" id="ic" value="<?php echo $ic; ?>" placeholder="I/C" required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Phone Number</label>
											<div class="controls">
											<input type="text" value="<?php echo $phonenumber; ?>" class="span8" name="phonenumber" id="phonenumber" placeholder="Phone Number" required>
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="inputPassword"  placeholder="Gender" >Gender</label>
											<div class="controls">
											<select name="gender"  required>
                                            										
													<option value="---select--"<?php if($gender=='---select---')echo'selected';?>>---select---</option>
                                                    <option value="Male"<?php if($gender=='Male')echo'selected';?>>Male</option>
                                                    <option value="Female"<?php if($gender=='Female')echo'selected';?>>Female</option>																									
												</select>								
											
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="inputPassword"><b>Address</b></label>
											<div class="controls">
											<input type="text" class="span8" name="address" id="address" value="<?php echo $address; ?>" placeholder="Address" required>
											</div>
										</div>
                                        
                                        	<div class="control-group">
											<label class="control-label" for="inputPassword">Email</label>
											<div class="controls">
											<input type="text" class="span8" name="email" id="email" value="<?php echo $email;?>" placeholder="Email" required>
											</div>
										</div>
                                        
                                          <div class="control-group">
											<label class="control-label" for="inputPassword"><b>Date</b></label>
											<div class="controls">
											<input type="date" class="span8" name="date" id="date" value="<?php echo $date;?>" placeholder="Date" required>
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
										//$client_id = $_POST['client_id'];											
										$client_name = $_POST['clientname'];
										$client_ic = $_POST['ic'];
										$client_phone_number = $_POST['phonenumber'];
										$gender = $_POST['gender'];
										$address= $_POST['address'];
										$email= $_POST['email'];
										$date = $_POST['date'];
										
									
										mysql_query("UPDATE client SET	client_name = '$client_name', 
																		client_ic = '$client_ic',
																		client_phone_number = '$client_phone_number',
																		gender = '$gender',
																		address = '$address',
																		email='$email',
																		date='$date'
																	
																		where client_id = '$client_id' ")or die(mysql_error());
																										
									    //mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Edit device info $dev_name')")or die(mysql_error());
										?>
											<script>
											alert('Successfully');
										    window.location = "client.php";
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