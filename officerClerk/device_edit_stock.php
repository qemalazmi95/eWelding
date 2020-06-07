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
										<div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="stock.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
																<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script>     
		                            </div>
		                            <div class="block-content collapse in">		
                                   						
									
									<?php
									$query = mysql_query("select * from stock where stock_id = '$get_id'")or die(mysql_error());
									
									$row = mysql_fetch_array($query);
									$stockname = $row['stock_name'];
									$categories = $row['categories'];
									$quantity = $row['quantity'];
									$priceunit = $row['stock_price_per_unit'];
									
									
									$stock_id = $row['stock_id'];
									
									?>
									
									   <form class="form-horizontal" method="post">
							
										<div class="control-group">
											<label class="control-label" for="inputPassword">Stock Name</label>
											<div class="controls">
											<input type="text" value="<?php echo $stockname; ?>" class="span8" name="stockname" id="stockname" placeholder="Stock Name" readonly>
											</div>
										</div>
                                        
                                         <div class="control-group">
                                        
											<label class="control-label" for="inputPassword"  placeholder="Categories" >Categories</label>
											<div class="controls">
											<select name="categories"  required>
                                            										
													<option value="Paint"<?php if($categories=='Paint')echo'selected';?>>Paint</option>
                                                    <option value="Awning"<?php if($categories=='Awning')echo'selected';?>>Awning</option>
                                                    <option value="Iron"<?php if($categories=='Iron')echo'selected';?>>Iron</option>	
                                                    <option value="Others"<?php if($categories=='Others')echo'selected';?>>Others</option>																								
												</select>								
											
											</div>
										</div>
											
                                        
                                        
										<div class="control-group">
											<label class="control-label" for="inputPassword">Quantity</label>
											<div class="controls">
											<input type="text" value="<?php echo $quantity; ?>" class="span8" name="quantity" id="quantity" placeholder="Quantity" required>
											</div>
										</div>
										
                                        			<div class="control-group">
											<label class="control-label" for="inputPassword">Price Per Unit</label>
											<div class="controls">
											<input type="text" value="<?php echo $priceunit; ?>" class="span8" name="priceunit" id="priceunit" placeholder="Price Per Unit" required>
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
										$stockname = $_POST['stockname'];
										$categories = $row['categories'];
										$quantity = $_POST['quantity'];
										$priceunit = $_POST['priceunit'];
										
										
										
									
										mysql_query("UPDATE stock SET	stock_name = '$stockname', 
																		quantity = '$quantity',
																		categories = '$categories',
																		stock_price_per_unit = '$priceunit'
																		
																	
																		where stock_id = '$stock_id'")or die(mysql_error());
																										
									    //mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Edit device info $dev_name')")or die(mysql_error());
										?>
										<script>
alert('Successfully');
window.location = "stock.php";
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