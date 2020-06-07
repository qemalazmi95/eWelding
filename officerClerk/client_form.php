<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body id="home">
		<?php include('navbar_clerk.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('clerk_sidebar.php'); ?>
		
						<div class="span9" id="content">
		                    <div class="row-fluid">
							
		                        <!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Add Client</div>
										<div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="client.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
																<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script>   
                            
		                            </div>
		                <div class="block-content collapse in">	
                         <div class="alert alert-success"><i class="icon-info-sign"></i> Please Fill in required details</div>						
							<form class="form-horizontal" method="post">
							
										
							
										<div class="control-group">
		                                 <label class="control-label" for="inputEmail">Client Name</label>
			                                <div class="controls">
				                             
				                                   
				                              
                                                <input type="text"  class="span8" name="clientname" id="clientname"  placeholder="Client Name" required/>
		                                     </div>
	                                    </div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">I/C</label>
											<div class="controls">
											<input type="text" class="span8" name="ic" id="ic"  placeholder="I/C" required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Phone Number</label>
											<div class="controls">
											<input type="text"  class="span8" name="phonenumber" id="phonenumber" placeholder="Phone Number" required>
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="inputPassword"  placeholder="Gender" >Gender</label>
											<div class="controls">
											<select name="gender"  required>
                                            										
													<option>---select---</option>
                                                    <option>Male</option>
                                                    <option>Female</option>																									
												</select>								
											
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="inputPassword">Address</label>
											<div class="controls">
											<textarea rows="4" cols="100" maxlength="100"  class="span8" name="address" id="address"  placeholder="Address" required></textarea>
											</div>
										</div>
                                        
                                        	<div class="control-group">
											<label class="control-label" for="inputPassword">Email</label>
											<div class="controls">
											<input type="text" class="span8" name="email" id="email"  placeholder="Email" required>
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="inputPassword"><b>Date</b></label>
											<div class="controls">
											<input type="date" class="span8" name="date" id="date"  placeholder="Date" required>
											</div>
										</div>
										
										
				
												
												
										<div class="control-group">
										<div class="controls">
										<button name="save" id="save" name="singlebutton" data-placement="right" title="Click here to Save your new data." class="btn btn-primary"><i class="icon-save"></i> Save</button>				
										</div>
										</div>
										<script type="text/javascript">
										$(document).ready(function(){
										$('#save').tooltip('show');
										$('#save').tooltip('hide');
										});
										</script>
							</form>
<?php
if (isset($_POST['save'])){
$clientname = $_POST['clientname'];
$ic = $_POST['ic'];
$gender = $_POST['gender'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$address = $_POST['address'];
$date = $_POST['date'];

										
						
//$query = mysql_query("select * from client where clientname = '$clientname' ")or die(mysql_error());
//$count = mysql_num_rows($query);

if ($clientname == ""){ ?>
<script>
alert('Device Code already Exist');
window.location = "client.php";
</script>


<?php
}else{
mysql_query("insert into client (client_name,client_ic,gender,client_phone_number,email,address,date) values('$clientname','$ic','$gender','$phonenumber','$email','$address','$date')")or die(mysql_error());
//mysql_query("insert into notification (fullname,notification,date_of_notification,link) value('$client_fullname','Add device id $dev_id, Serial Number: $dev_serial',NOW(),'device_stocks.php')")or die(mysql_error());										
?>
<script>
alert('Successfully');
window.location = "client.php";
</script>
<?php
}
}
?>
																										
		                            </div>
		                        </div>
		                        <!-- /block -->
		                    </div>
		                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>