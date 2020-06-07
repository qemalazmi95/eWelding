<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; 
echo $get_id;
?>
    <body id="home">
		<?php include('navbar_manager.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
            
				<?php include('manager_sidebar.php'); ?>
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
										<div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="clerk_user.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
																<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script>     
		                            </div>
		                            <div class="block-content collapse in">		
                                   						
									
									<?php
									$query = mysql_query("select * from officer_clerk where officer_clerk_id = '$get_id'")or die(mysql_error());
									
									$row = mysql_fetch_array($query);
									$firstname = $row['firstname'];
									$lastname = $row['lastname'];
									$username = $row['username'];
									$password = $row['password'];
									$officer_clerk_id = $row['officer_clerk_id'];
									
									?>
									
									   <form class="form-horizontal" method="post">
							
										<div class="control-group">
		                                 <label class="control-label" for="inputEmail">Firstname</label>
			                                <div class="controls">
				                             
				                                   
				                              
                                                <input type="text" value="<?php echo $firstname ?>" class="span8" name="firstname" id="firstname"  placeholder="Firstname" required/>
                                                
                                                
		                                     </div>
	                                    </div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Lastname</label>
											<div class="controls">
											<input type="text" class="span8" name="lastname" id="lastname" value="<?php echo $lastname; ?>" placeholder="Lastname" required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Username</label>
											<div class="controls">
											<input type="text" value="<?php echo $username; ?>" class="span8" name="username" id="username" placeholder="Username" required>
											</div>
										</div>
                                        
                                        
                                        <div class="control-group">
											<label class="control-label" for="inputPassword"><b>password</b></label>
											<div class="controls">
											<input type="text" class="span8" name="password" id="password" value="<?php echo $password; ?>" placeholder="Password" required>
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
										
										
									
                                    
                                    
                                    
                                    
                                    
                                      <span class="navbar-fixed-bottom">
                                      <?php
										if (isset($_POST['update'])){
										//$client_id = $_POST['client_id'];											
										$firstname = $_POST['firstname'];
										$lastname = $_POST['lastname'];
										$username = $_POST['username'];
										$password = $_POST['password'];
										
										
									
										mysql_query("UPDATE officer_clerk SET	firstname = '$firstname', 
																		lastname = '$lastname',
																		username = '$username',
																		password = '$password'
																		
																	
																		where officer_clerk_id = '$officer_clerk_id' ")or die(mysql_error());
																										
									    //mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Edit device info $dev_name')")or die(mysql_error());
										?>
                                      </span>										<script>										
										window.location = "clerk_user.php";
										$.jGrowl("Officer Clerk Successfully Update", { header: 'Officer Clerk update' });
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