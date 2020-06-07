<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php $stock_id = $_GET['id']; ?>
    <body>
		<?php include('navbar_store.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('store_sidebar.php'); ?>
		
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
		                                <div class="muted pull-left">View Stock</div>
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
									$query = mysql_query("select * from stock where stock_id ='$stock_id'")or die(mysql_error());
									$row = mysql_fetch_array($query);
									?>
									
									    <form class="form-horizontal" method="post">
										
										<div class="control-group">
											<label class="control-label" for="inputEmail">Stock Name</label>
											<div class="controls">			
												<input type="text" class="span8" value="<?php echo $row['stock_name']; ?>" name="stock_name" id="inputPassword" placeholder="Stock Name" readonly>
											</div>
										</div>
										
										
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Quantity</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['quantity']; ?>" name="quantity" id="inputPassword" placeholder="Quantity" readonly>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Price Per Unit</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['stock_price_per_unit']; ?>" name="priceunit" id="inputPassword" placeholder="Price Per Unit" readonly>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">GST(6%)</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['stock_gst']; ?>" name="gst" id="inputPassword" placeholder="GST" readonly>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Price Include GST</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['stock_price_include_gst']; ?>" name="pricegst" id="inputPassword" placeholder="Price Include GST" readonly>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Total</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['stock_total_price']; ?>" name="total" id="inputPassword" placeholder="Total" readonly>
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="inputPassword">Date</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['date']; ?>" name=			
                                            "date" id="inputPassword" placeholder="Date" readonly>
											</div>
										</div>
										
										<div class="control-group">
										<div class="controls">
										
										
										</div>
										</div>
										<script type="text/javascript">
										$(document).ready(function(){
										$('#update').tooltip('show');
										$('#update').tooltip('hide');
										});
										</script> 
										</form>
										
										
									
								
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