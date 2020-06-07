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
		                                <div class="muted pull-left">Add New Project</div>
										
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
				                              <select name="clientname" class="chzn-select"  required/>
				                                 <option></option>
			                                       <?php $device_name =  mysql_query("select * from client")or die(mysql_error()); 
			                                        while ($row=mysql_fetch_array($device_name)){ 
													$dev_name = $row['client_name'];
													?>
				                                    <option value="<?php echo $row['client_id']; ?>&nbspName&nbsp<?php echo $row['client_name']; ?>"><?php echo $row['client_name']; ?></option>
				                                     <?php } ?>
				                                </select>
		                                     </div>
	                                    </div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Project Name</label>
											<div class="controls">
											<input type="text" class="span8" name="projectname" id="projectname" placeholder="Project Name" required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Project Location</label>
											<div class="controls">
											<input type="text" class="span8" name="location" id="location" placeholder="Project Location" required>
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="inputPassword"><b>Starting Date</b></label>
											<div class="controls">
											<input type="date" class="span8" name="date" id="date" placeholder="Starting Date" required>
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="inputPassword"><b>Expected Date</b></label>
											<div class="controls">
											<input type="date" class="span8" name="date1" id="date2" placeholder="Expected Date" required>
											</div>
										</div>
                                        
                                        	<div class="control-group">
											<label class="control-label" for="inputPassword">Expected Cost</label>
											<div class="controls">
											<input type="text" class="span8" name="price" id="price" placeholder="Expected Cost" required>
											</div>
										</div>
						
										
										
										<div class="control-group">
											<label class="control-label" for="inputPassword"  placeholder="Project Status" >Project Status</label>
											<div class="controls">
											<select name="project_status"  required>												   <option>--Select--</option>
													<option>New</option>
                                                    <option>Pending</option>
                                                    <option>Finish</option>																									
												</select>								
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
$projectname = $_POST['projectname'];
$location = $_POST['location'];
$date = $_POST['date'];
$date1 = $_POST['date1'];
$price = $_POST['price'];
$project_status = $_POST['project_status'];

										
						
//$query = mysql_query("select * from project where projectname = '$projectname' ")or die(mysql_error());
//$count = mysql_num_rows($query);

if ($clientname ==""){ ?>


<script>
alert('Device Code already Exist');
window.location = "project_new.php";
</script>
<?php
}else{
$sql=mysql_query("insert into project (client_id,project_name,location,project_start_date,project_expected_date,project_expected_price,status_project) values('$clientname','$projectname','$location','$date','$date1','$price','$project_status')")or die(mysql_error());
//mysql_query("insert into notification (fullname,notification,date_of_notification,link) value('$client_fullname','Add device id $dev_id, Serial Number: $dev_serial',NOW(),'device_stocks.php')")or die(mysql_error());		
if ($sql){
								
?>
<!--<script>
alert('berjaya');
window.location = "project.php";
</script> -->

<script>
alert('Successfully');
window.location = "project_new.php";
</script>

<?php
}
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