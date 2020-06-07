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
		                                <div class="muted pull-left">Add New Stock</div>
										
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
											<label class="control-label" for="inputPassword">Stock Name</label>
											<div class="controls">
											<input type="text" class="span8" name="stockname" id="stockname" placeholder="Stock Name" required>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="inputPassword"  placeholder="Categories" >Categories</label>
											<div class="controls">
											<select name="categories"  required>
                                            		<option>--Select--</option>										
													<option>Paint</option>
                                                    <option>Awning</option>
                                                    <option>Iron</option>
                                                    <option>Others</option>																									
												</select>								
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Quantity</label>
											<div class="controls">
											<input type="text" class="span8" name="quantity" id="quantity" placeholder="Quantity" required>
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="inputPassword">Price Per Unit</label>
											<div class="controls">
											<input type="text" class="span8" name="priceunit" id="priceunit" onChange="updateGST()" placeholder="Price Per Unit" required>
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
                                        
                                        <script type="text/javascript">
										$('.control-group').on('input','.spam8',function()
										{
											var totalsum = 0;
											$('.control-group.spam8').each(function(){
											var inputVal = $(this).val();
											if($.isNumeric(inputVal)){
												totalSum += parseFloat(inputVal);
										}
										
											});
											$('$result').val(totalSum);
										</script>
							</form>
<?php
if (isset($_POST['save'])){
$stockname = $_POST['stockname'];
$categories = $_POST['categories'];
$quantity = $_POST['quantity'];
$priceunit = $_POST['priceunit'];


										
						
//$query = mysql_query("select * from project where projectname = '$projectname' ")or die(mysql_error());
//$count = mysql_num_rows($query);

if ($stockname ==""){ ?>


<script>
alert('Device Code already Exist');
window.location = "stock.php";
</script>
<?php
}else{
mysql_query("insert into stock (stock_name,categories,quantity,stock_price_per_unit) values('$stockname','$categories','$quantity','$priceunit')")or die(mysql_error());
//mysql_query("insert into notification (fullname,notification,date_of_notification,link) value('$client_fullname','Add device id $dev_id, Serial Number: $dev_serial',NOW(),'device_stocks.php')")or die(mysql_error());										
?>
<script>
alert('Successfully');
window.location = "stock.php";
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