<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body id="home">
		<?php include('navbar_manager.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('manager_sidebar.php'); ?>
		<div class="muted pull-left"><a href="clerk_user.php" class="btn btn-info"  id="add" data-placement="right" title="Click to Add Device" ><i class="icon-plus-sign icon-large"></i> Officer Clerk List</a></div>
        
						<div class="span9" id="content">
		                    <div class="row-fluid">
							   
                               
                               
		                        <!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Add New Officer Clerk</div>
                                        
                                     
                                        
                                        
										
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
											<label class="control-label" for="inputPassword"><b>Firstname</b></label>
											<div class="controls">
											<input type="text" class="span8" name="firstname" id="firstname" placeholder="Firtname" required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword"><b>Lastname</b></label>
											<div class="controls">
											<input type="text" class="span8" name="lastname" id="lastname" placeholder="Lastname" required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword"><b>Username</b></label>
											<div class="controls">
											<input type="text" class="span8" name="username" id="username" placeholder="Username" required>
											</div>
										</div>
                                        
                                       <div class="control-group">
											<label class="control-label" for="inputPassword"><b>Password</b></label>
											<div class="controls">
											<input type="text" class="span8" name="password" id="password" placeholder="Password" required>
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
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
										
						
//$query = mysql_query("select * from project where projectname = '$projectname' ")or die(mysql_error());
//$count = mysql_num_rows($query);

$query = mysql_query("select * from officer_clerk where username = '$username' and password = '$password' and firstname = '$firstname' and password = '$password' ")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Data Already Exist');
</script>
<?php
}else{
mysql_query("insert into officer_clerk (username,password,firstname,lastname,thumbnails) values('$username','$password','$firstname','$lastname','images/NO-IMAGE-AVAILABLE.jpg')")or die(mysql_error());

//mysql_query("insert into activity_log (date,username,action) values(NOW(),'$manager_username','Add officer_clerk User $firstname')")or die(mysql_error());
?>
<script>
alert('Successfully');
window.location = "clerk_user.php";
</script>

</script>
<?php
}
}
?>

<?php include('script.php'); ?>
</div>
</div>
<?php include('footer.php'); ?>