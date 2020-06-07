
<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body id="home">
		<?php include('navbar_store.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
              <?php include('store_sidebar.php'); ?>
              <div class="span9" id="content">
                  <div class="row-fluid">
							
		                        <!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Purchaces Order</div>
										
																<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script>   
                            
		                            </div>
		                <div class="block-content collapse in">	
                         <div class="alert alert-success"><i class="icon-info-sign"></i> Please Fill in required details</div>						
						  <form class="form-horizontal"  method="post">
							
									
                                    
                                    	
										
										<div class="control-group">
											 <label class="control-label" for="inputEmail">Stock Name</label>
			                                <div class="controls">
				                              <select name="withdraw1" class="chzn-select"  required/>
				                                 <option></option>
			                                       <?php $device_name =  mysql_query("select * from stock")or die(mysql_error()); 
			                                        while ($row=mysql_fetch_array($device_name)){ 
													$dev_name = $row['stock_name'];
													?>
				                                    <option value="<?php echo $row['stock_name']; ?>"><?php echo $row['stock_name']; ?></option>
				                                     <?php } ?>
				                                </select>
	                                      
                                          
                                          
											<input type="number" style="width: 150px;" class="span8" name="quantity1" id="quantity1" placeholder="Quantity" required>
											
                            </div>
                                        
                                        <div class="control-group">
                                        <label class="control-label" for="inputEmail">Stock Name</label>
			                                <div class="controls">
				                              <select name="withdraw2" class="chzn-select"  />
				                                 <option></option>
			                                       <?php $device_name =  mysql_query("select * from stock")or die(mysql_error()); 
			                                        while ($row=mysql_fetch_array($device_name)){ 
													$dev_name = $row['stock_name'];
													?>
				                                    <option value="<?php echo $row['stock_name']; ?>"><?php echo $row['stock_name']; ?></option>
				                                     <?php } ?>
				                                </select>
	                                      
                                          
                                          
											<input type="number" style="width: 150px;" class="span8" name="quantity2" id="quantity2" placeholder="Quantity" >
											
	                                    </div>
                                        
                                        <div class="control-group">
                                       <label class="control-label" for="inputEmail">Stock Name</label>
			                                <div class="controls">
				                              <select name="withdraw3" class="chzn-select"  />
				                                 <option></option>
			                                       <?php $device_name =  mysql_query("select * from stock")or die(mysql_error()); 
			                                        while ($row=mysql_fetch_array($device_name)){ 
													$dev_name = $row['stock_name'];
													?>
				                                    <option value="<?php echo $row['stock_name']; ?>"><?php echo $row['stock_name']; ?></option>
				                                     <?php } ?>
				                                </select>
	                                      
                                          
                                          
											<input type="number" style="width: 150px;" class="span8" name="quantity3" id="quantity3" placeholder="Quantity" >
											
	                                    </div>
                                        <div class="control-group">
                                       <label class="control-label" for="inputEmail">Stock Name</label>
			                                <div class="controls">
				                              <select name="withdraw4" class="chzn-select"  />
				                                 <option></option>
			                                       <?php $device_name =  mysql_query("select * from stock")or die(mysql_error()); 
			                                        while ($row=mysql_fetch_array($device_name)){ 
													$dev_name = $row['stock_name'];
													?>
				                                    <option value="<?php echo $row['stock_name']; ?>"><?php echo $row['stock_name']; ?></option>
				                                     <?php } ?>
				                                </select>
	                                      
                                          
                                          
											<input type="number" style="width: 150px;" class="span8" name="quantity4" id="quantity4" placeholder="Quantity">
											
	                                    </div>
                                        <div class="control-group">
                                       <label class="control-label" for="inputEmail">Stock Name</label>
			                                <div class="controls">
				                              <select name="withdraw5" class="chzn-select"  />
				                                 <option></option>
			                                       <?php $device_name =  mysql_query("select * from stock")or die(mysql_error()); 
			                                        while ($row=mysql_fetch_array($device_name)){ 
													$dev_name = $row['stock_name'];
													?>
				                                    <option value="<?php echo $row['stock_name']; ?>"><?php echo $row['stock_name']; ?></option>
				                                     <?php } ?>
				                                </select>
	                                      
                                          
                                          
											<input type="number" style="width: 150px;" class="span8" name="quantity5" id="quantity5" placeholder="Quantity" >
											
	                                    </div>
                                        
                                        <div class="control-group">
                                       <label class="control-label" for="inputEmail">Stock Name</label>
			                                <div class="controls">
				                              <select name="withdraw6" class="chzn-select"  />
				                                 <option></option>
			                                       <?php $device_name =  mysql_query("select * from stock")or die(mysql_error()); 
			                                        while ($row=mysql_fetch_array($device_name)){ 
													$dev_name = $row['stock_name'];
													?>
				                                    <option value="<?php echo $row['stock_name']; ?>"><?php echo $row['stock_name']; ?></option>
				                                     <?php } ?>
				                                </select>
	                                      
                                          
                                          
											<input type="number" style="width: 150px;" class="span8" name="quantity6" id="quantity6" placeholder="Quantity" >
											
	                                    </div>
                                        
                                         <div class="control-group">
                                        <label class="control-label" for="inputEmail">Stock Name</label>
			                                <div class="controls">
				                              <select name="withdraw7" class="chzn-select"  />
				                                 <option></option>
			                                       <?php $device_name =  mysql_query("select * from stock")or die(mysql_error()); 
			                                        while ($row=mysql_fetch_array($device_name)){ 
													$dev_name = $row['stock_name'];
													?>
				                                    <option value="<?php echo $row['stock_name']; ?>"><?php echo $row['stock_name']; ?></option>
				                                     <?php } ?>
				                                </select>
	                                      
                                          
                                          
											<input type="number" style="width: 150px;" class="span8" name="quantity7" id="quantity7" placeholder="Quantity" >
											
	                                    </div>
                                        
                                         <div class="control-group">
                                        <label class="control-label" for="inputEmail">Stock Name</label>
			                                <div class="controls">
				                              <select name="withdraw8" class="chzn-select"  />
				                                 <option></option>
			                                       <?php $device_name =  mysql_query("select * from stock")or die(mysql_error()); 
			                                        while ($row=mysql_fetch_array($device_name)){ 
													$dev_name = $row['stock_name'];
													?>
				                                    <option value="<?php echo $row['stock_name']; ?>"><?php echo $row['stock_name']; ?></option>
				                                     <?php } ?>
				                                </select>
	                                      
                                          
                                          
											<input type="number" style="width: 150px;" class="span8" name="quantity8" id="quantity8" placeholder="Quantity" >
											
	                                    </div>
                                        
                                         <div class="control-group">
                                        <label class="control-label" for="inputEmail">Stock Name</label>
			                                <div class="controls">
				                              <select name="withdraw9" class="chzn-select"  />
				                                 <option></option>
			                                       <?php $device_name =  mysql_query("select * from stock")or die(mysql_error()); 
			                                        while ($row=mysql_fetch_array($device_name)){ 
													$dev_name = $row['stock_name'];
													?>
				                                    <option value="<?php echo $row['stock_name']; ?>"><?php echo $row['stock_name']; ?></option>
				                                     <?php } ?>
				                                </select>
	                                      
                                          
                                          
											<input type="number" style="width: 150px;" class="span8" name="quantity9" id="quantity9" placeholder="Quantity" >
											
	                                    </div>
                                        
                                         <div class="control-group">
                                        <label class="control-label" for="inputEmail">Stock Name</label>
			                                <div class="controls">
				                              <select name="withdraw10" class="chzn-select"  />
				                                 <option></option>
			                                       <?php $device_name =  mysql_query("select * from stock")or die(mysql_error()); 
			                                        while ($row=mysql_fetch_array($device_name)){ 
													$dev_name = $row['stock_name'];
													?>
				                                    <option value="<?php echo $row['stock_name']; ?>"><?php echo $row['stock_name']; ?></option>
				                                     <?php } ?>
				                                </select>
	                                      
                                          
                                          
											<input type="number" style="width: 150px;" class="span8" name="quantity10" id="quantity10" placeholder="Quantity" >
											
	                                    </div>
                            </td>
										
										
							  
                              
                                        
							<div class="control-group">
										  <label class="control-label" for="inputPassword">Date</label>
							  <div class="controls">
											<input type="date" class="span8" name="date" id="date" placeholder="Starting Date" required>
											</div>
							  </div>
                                        
                                       
										
												
												
										<div class="control-group">
										<div class="controls">
										<button name="save" id="save" name="singlebutton" data-placement="right" href="view_purchaces_order.php" title="Click here to Save your new data." class="btn btn-primary"><i class="icon-save"></i> Save</button>				
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
$stockname1 = $_POST['withdraw1'];
$stockname2 = $_POST['withdraw2'];
$stockname3 = $_POST['withdraw3'];
$stockname4 = $_POST['withdraw4'];
$stockname5 = $_POST['withdraw5'];
$stockname6 = $_POST['withdraw6'];
$stockname7 = $_POST['withdraw7'];
$stockname8 = $_POST['withdraw8'];
$stockname9 = $_POST['withdraw9'];
$stockname10 = $_POST['withdraw10'];
$quantity1 = $_POST['quantity1'];
$quantity2 = $_POST['quantity2'];
$quantity3 = $_POST['quantity3'];
$quantity4 = $_POST['quantity4'];
$quantity5 = $_POST['quantity5'];
$quantity6 = $_POST['quantity6'];
$quantity7 = $_POST['quantity7'];
$quantity8 = $_POST['quantity8'];
$quantity9 = $_POST['quantity9'];
$quantity10 = $_POST['quantity10'];
$date = $_POST['date'];

										
						
//$query = mysql_query("select * from client where clientname = '$clientname' ")or die(mysql_error());
//$count = mysql_num_rows($query);

if ($date == ""){ ?>
<script>
alert('Device Code already Exist');
window.location = "purchaces_order.php";
</script>


<?php
}else{



mysql_query("UPDATE purchaces_order SET withdraw1 = '$stockname1',
										withdraw2 = '$stockname2',
										withdraw3 = '$stockname3',
										withdraw4 = '$stockname4',
										withdraw5 = '$stockname5',
										withdraw6 = '$stockname6',
										withdraw7 = '$stockname7',
										withdraw8 = '$stockname8',
										withdraw9 = '$stockname9',
										withdraw10 = '$stockname10',
										quantity1 = '$quantity1',
										quantity2 = '$quantity2',
										quantity3 = '$quantity3',
										quantity4 = '$quantity4',
										quantity5 = '$quantity5',
										quantity6 = '$quantity6',
										quantity7 = '$quantity7',
										quantity8 = '$quantity8',
										quantity9 = '$quantity9',
										quantity10 = '$quantity10',
										date = '$date'

  where purchaces_order_id= 1 ")or die(mysql_error());									
?>


<script>
alert('Successfully');
window.location="view_purchaces_order.php";
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
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>
