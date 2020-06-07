<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php 
error_reporting(E_ERROR | E_PARSE);

if(isset($_POST['filter'])) { 
    // query to get all Fitzgerald records
	$date1=$_POST['date1'];
	$date2=$_POST['date2'];
    $query = "select stock.stock_name,stock.stock_price_per_unit,withdrawal_stock.quantity,withdrawal_stock.date from withdrawal_stock left join stock on withdrawal_stock.stock_id= stock.stock_id where date >= '$date1' and date <= '$date2' order by withdrawal_stock.date DESC   " ;
	
	 $count_item2="select * from client where date >= '$date1' and date <= '$date2'";
  $count_item="select * from project where project_start_date >= '$date1' and project_start_date <= '$date2'";
  
  $item2=mysql_query($count_item2);
  $item =mysql_query($count_item);
  

  
  $count2 = mysql_num_rows($item2);
  $count = mysql_num_rows($item);
	 
			 
}  
else { 
    // query to get all records 
	
    $query = "select stock.stock_name,stock.stock_price_per_unit,withdrawal_stock.quantity,withdrawal_stock.date from withdrawal_stock left join stock on withdrawal_stock.stock_id= stock.stock_id order by withdrawal_stock.date DESC   " ;
	
	 $count_item2="select * from client ";
  $count_item="select * from project ";
  
  $item2=mysql_query($count_item2);
  $item =mysql_query($count_item);
  

  
  $count2 = mysql_num_rows($item2);
  $count = mysql_num_rows($item);


 
	  
}
 $query1 = mysql_query($query);


   

 ?>
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
		                                <div class="muted pull-left">View Project</div>
									  <div class="muted pull-right"><a id="return" data-placement="top" class="btn btn-success" title="Click to Return" href="project_new.php"><i class="icon-arrow-left"></i> Back</a></p>		</div>
			<script type="text/javascript">
			$(document).ready(function(){
			$('#return').tooltip('show');
			$('#return').tooltip('hide');
			});
			</script>     
                                         
                                         <div class="muted pull-right">.    
                                        					    <a href="#" onClick="window.print()" class="btn btn-info" id="print" data-placement="top" title="Click to Print"><i class="icon-print icon-large"></i> Print</a></p>		      .</div>
		   <script type="text/javascript">
		     $(document).ready(function(){
		     $('#print').tooltip('show');
		     $('#print').tooltip('hide');
		     });
		   </script> 
           
           <form action='<?php echo $_SERVER['PHP_SELF']; ?>' method='post' name='form_filter' >										<label class="control-label" for="inputPassword">
             <p>&nbsp;</p>
             <p>&nbsp;</p>
             <p><b>Start</b>
               
               <input type="date" class="span8" name="date1" id="date1" size="8" placeholder="Expected Date" required>
             </p>
             <p><b>End</b>
               
               <input type="date" class="span8" name="date2" id="date2"  placeholder="Expected Date" required>
               <input type='submit' name="filter" value = 'Enter'>
             </p>
                                           
                                            
           </form>
           
           
           </div>
                                   
                                          
                                   
																<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script>     
		                           
                                   
 
                                  <div class="container-fluid" style="background-color:#fff">
   <div class="row-fluid"> 
   
                                   
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
normal; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;; font-size: 12.0pt'><h4>Report</h4> </p>



 <div class="control-group">
     	

											
										


<p> <?php
 $date = new DateTime();
 echo $date->format('l jS  F Y  ');
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
                                    
                                    
									
                          
                                    
									<div id="printableArea">
  

									    <form class="form-inline"  method="post">
										<div class="control-group">
											<label class="control-label" for="Pname">Start	 			:</label>
													
												<label class="control-label" for="Pname"> <b><?php  echo $date1; ?></b></label>
										
										</div>
                                        <div class="control-group">
											<label class="control-label" for="Pname">End	 			:</label>
													
												<label class="control-label" for="Pname"> <b><?php  echo $date2; ?></b></label>
										
										</div>
										
										
                                        
                                        
                                        
										<div class="control-group">
											<label class="control-label" for="Pname">Total Project	 			:</label>
													
												<label class="control-label" for="Pname"> <b><?php  echo $count; ?></b></label>
										
										</div>
										
										
										
										<div class="control-group">
											<label class="control-label" for="Cname">Total Client				:</label>
											
											<label class="control-label" for="Cname"><b><?php  echo $count2; ?></b></label>
											
										</div>
										<div class="control-group">
										<div class="control">
										
										
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
					</div></div>
                                        
                                        
                                         <P></P>              
                                <div class="pull-left"> 
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;; font-size: 12.0pt'><h4>Project Requirement</h4></p>
<P></P>
									
								<div class="pull-left"> 
		                         <table cellpadding="0" cellspacing="0" border="0" class="table" >
		<thead>		
		        <tr>			        
					
                    <th>Stock Name*</th>
					<th>Quantity*</th>
                    <th>Price Per Unit*</th>
                    <th >Total*</th>
                    <th >Date*</th>
                    
                    
					
			        					
                    						
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
										
									
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
           <td></td>
     </tr>
</tbody>
</table>
                                
                                <div class="center">
    <div class="span12">
  	
		
		
			  		
</div>
</div>
		         <P></P>
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
		<?php //include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>
