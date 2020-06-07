<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
       <body id="home">
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
                     <div class="block">
                       <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">View Project</div>
										<div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="project_new.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
																<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script>     
                                                                 <div class="block-content collapse in">
					          <div class="span12">
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


           
 
			  	   
    </div>
</div>
  

  
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
                                    
                                    
									<?php
									$query = mysql_query("select *from project left join client on project.client_id= client.client_id where project_id = '$get_id'" )or die(mysql_error());
									$row = mysql_fetch_array($query);
									?>
                          
                                    
									<div id="printableArea">
  

								      <form class="form-inline" action = "contoh.php"  method="post">
										
										<div class="control-group">
											<label class="control-label" for="Pname">Project Name	 			:</label>
													
												<label class="control-label" for="Pname"> <b><?php echo $row['project_name']; ?></b></label>
										
										</div>
										
										
										
										<div class="control-group">
											<label class="control-label" for="Cname">Client Name 				:</label>
											
											<label class="control-label" for="Cname"><b><?php echo $row['client_name']; ?> </b></label>
											
										</div>
										
										<div class="control-group">
											<label class="control-label" for="Location">Location 				:</label>
											
											<label class="control-label" for="Location"><b><?php echo $row['location']; ?></b></label>
											
										</div>
										
										<div class="control-group">
											<label class="control-label" for="Pstarting">Project Starting  		:</label>
											
											<label class="control-label" for="Pstarting"><b><?php echo $row['project_start_date']; ?></b> </label>
											
										</div>
										
										<div class="control-group">
											<label class="control-label" for="Pfinish">Project Expected Finish 	:</label>
											
											<label class="control-label" for="Pfinish"><b><?php echo $row['project_expected_date']; ?></b></label>
											
										</div>
										
										<div class="control-group">
											<label class="control-label" for="Pcost">Project Cost 				:</label>
											
											<label class="control-label" for="Pcost"><b><?php echo $row['project_expected_price']; ?></b></label>
											
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="Status">Status Project 			:</label>
											
											<label class="control-label" for="Status"><b><?php echo $row['status_project']; ?></b></label>
											
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
                            
                            
                    <div class="row-fluid">
<div class="pull-left"> 
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;; font-size: 12.0pt'>Project Requirement</p>

          <?php
									//$query1 = mysql_query("select *from withdrawal_stock left join stock on withdrawal_stock.stock_id= stock.stock_id where project_id = '$get_id'" )or die(mysql_error());
									//$row = mysql_fetch_array($query);
									?>
                                    
                                    	
<div class="block-content collapse in">
    <div class="span12">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" >
		<thead>		
		        <tr>			        
					
                    <th>Stock Name</th>
					<th>Quantity</th>
                    <th>Price Per Unit</th>
                    <th >Total</th>
                    <th >Date</th>
                    
                    
					
			        					
                    						
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
										
									$query1 = mysql_query("select stock.stock_name,stock.stock_price_per_unit,withdrawal_stock.quantity,withdrawal_stock.date from withdrawal_stock left join stock on withdrawal_stock.stock_id= stock.stock_id where withdrawal_stock.project_id = '$get_id' order by withdrawal_stock.date DESC   " )or die(mysql_error());
									$total2=0;
									while ($data = mysql_fetch_array($query1)){
											
									?>
	         
                						
		<tr>
        	<td><?php echo $data['stock_name']; ?></td>
			<td><?php echo $data['quantity']; ?></td>
            <td>RM <?php echo $data['stock_price_per_unit']; ?></td>
            <td>RM <?php echo $total=( $data['quantity'] * $data['stock_price_per_unit']);?></td>
            <td><?php echo $data['date']; ?></td>
            			
			
		</tr>
			
											
	<?php   $total2+=$total; } ?> 
    <tr>  
           <td><b><h4>Total Price</h4></b></td>
           <td></td>
           <td></td>
           <td><h4>RM <?php echo $total2; ?></h4></td>
     </tr>
</tbody>
</table>
		
		
			  		
</div>
</div>           
 
			  	   
    </div>
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
</div>
</div>
</div>
</div>
</div>
</div>
	
</div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>