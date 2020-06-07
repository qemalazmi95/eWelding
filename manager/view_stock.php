<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php $stock_id = $_GET['id']; ?>
    <body id="home">
		<?php include('navbar_manager.php'); ?>
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
		                                <div class="muted pull-left">View Stock</div>
										<div class="muted pull-right"><a id="return" data-placement="top" class="btn btn-success" title="Click to Return" href="project.php"><i class="icon-arrow-left"></i> Back</a></p>		</div>
			<script type="text/javascript">
			$(document).ready(function(){
			$('#return').tooltip('show');
			$('#return').tooltip('hide');
			});
			</script>     
                                         
                                         <div class="muted pull-right">.    
                                        					    <a href="#" onClick="window.print()" class="btn btn-info" id="print" data-placement="leftt" title="Click to Print"><i class="icon-print icon-large"></i> Print</a></p>		      .</div>
		   <script type="text/javascript">
		     $(document).ready(function(){
		     $('#print').tooltip('show');
		     $('#print').tooltip('hide');
		     });
		   </script> 
                                                                
	<script>
									
	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
		}
	</script>
    <script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script>     
		                            </div>
                                   
                                   
                                   
                                   
                                   <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span style='font-size:14.0pt;
font-family:"Times New Roman","serif"'><img width=200 height=200 id="Picture 1"
src="AzwLogo.png"></span></b></p>

<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span style='font-size:14.0pt;
font-family:"Times New Roman","serif"'>AZ WELDING</span></b></p>

<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
font-family:"Times New Roman","serif"'>Lot 167, Kampung Dalam Kemunting</span></b></p>
<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
font-family:"Times New Roman","serif"'>Jalan Jerteh, 16800 Pasir Puteh, Kelantan.</span></b></p>



<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><b><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<div class="container">
<div class="container-fluid">
<div class="row-fluid">
<div class="pull-left"> 
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;; font-size: 12.0pt'>Project Detail</p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'> <?php
 $date = new DateTime();
 echo $date->format('l, F jS, Y');
 ?><o:p></o:p></span></p>
<div class="pull-right">
   <div class="empty">
           <p class=MsoNormal style='margin-bottom:0in; margin-left:-110px; margin-top:-30px; margin-bottom:.0001pt;line-height:
           normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
           "Times New Roman","serif"'>
		   
           
       
           
       
            <p class=MsoNormal style='margin-bottom:0in; margin-top:-30px; margin-bottom:.0001pt;line-height:
            normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
           "Times New Roman","serif"'>
			  	   
    </div>
</div>
  
<p>
  
<div class="block-content collapse in">									
                                    
	<script>
									
	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
		}
	</script>
                                   
                                   
                                   
                                   
		                            <div class="block-content collapse in">									
                                    
	<script>
									
	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
		}
	</script>
  
		                            </div>
		                            <div class="block-content collapse in">									
									
									<?php
									$query = mysql_query("select * from stock where stock_id ='$stock_id'")or die(mysql_error());
									$row = mysql_fetch_array($query);
									?>
									
									    
                                        <form class="form-inline" method="post">
										
                                        <div id="printableArea">
                                        
										<div class="control-group">
										  <label class="control-label" for="inputEmail">Stock Name</label>
:										
												<label class="control-label" for="inputEmail"><b><?php echo $row['stock_name']; ?></b></label>
										  </div>
										
										
										
										<div class="control-group">
										  <label class="control-label" for="inputPassword">Quantity :</label>
											
											<label class="control-label" for="inputEmail"><b><?php echo $row['quantity']; ?></b></label>					
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Price Per Unit</label>
:											
											<label class="control-label" for="inputEmail"><b><?php echo $row['stock_price_per_unit']; ?></b></label>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">GST(6%)</label>
:									
											<label class="control-label" for="inputEmail"><b><?php echo $row['stock_gst']; ?></b></label>
											
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Price Include GST :</label>
											
											<label class="control-label" for="inputEmail"><b><?php echo $row['stock_price_include_gst']; ?></b></label>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Total</label>
:											
											<label class="control-label" for="inputEmail"><b><?php echo $row['stock_total_price']; ?></b></label>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="inputPassword">Date :</label>
											
											<label class="control-label" for="inputEmail"><b><?php echo $row['date']; ?></b></label>
										</div>
										
										<div class="control-group">
										<div class="controls">
										
										
										
										</div>
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