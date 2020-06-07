<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>

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
                                
		                        <div id="" class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">View Project</div>
										<div class="muted pull-right"><a id="return" data-placement="top" class="btn btn-success" title="Click to Return" href="purchaces_order.php"><i class="icon-arrow-left"></i> Back</a></p>		</div>
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
		   </script> </div>
                                          
                                        
																<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script>     
		                            <div class="container-fluid" style="background-color:#fff">                                                      <div class="block-content collapse in">
                                   
                                   
                                   
                                   
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


<p> <?php
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
	<P></P>              
                    <div class="center"> 
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;; font-size: 12.0pt'><h4>Purchaces Order</h4></p>
<P></P>

          <?php
									//$query1 = mysql_query("select *from withdrawal_stock left join stock on withdrawal_stock.stock_id= stock.stock_id where project_id = '$get_id'" )or die(mysql_error());
									//$row = mysql_fetch_array($query);
									?>
    <style>

table {
    width: 100%;
}

th {
    height: 50px;
}
table {
    border-collapse: collapse;
    width: 100%;
}
table {border: none;}

</style>

       
<!-----------------------------------Content------------------------------------>
<?php
									{
						
										
										$query= mysql_query("select * from purchaces_order where purchaces_order_id = 1 ")or die(mysql_error());	
										
									$data= mysql_fetch_array($query);
									?>
                                    
                                      <div class="center">
    <div class="span12">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" >
		<thead>		
		        <tr>			        
					
                    <th><p><h5>Stock Name</h5></p>
                      <h6><p><?php echo $data['withdraw1']; ?></p>
                      <p><?php echo $data['withdraw2']; ?></p>
                      <p><?php echo $data['withdraw3']; ?></p>
                      <p><?php echo $data['withdraw4']; ?></p>
                      <p><?php echo $data['withdraw5']; ?></p>
                      <p><?php echo $data['withdraw6']; ?></p>
                      <p><?php echo $data['withdraw7']; ?></p>
                      <p><?php echo $data['withdraw8']; ?></p>
                      <p><?php echo $data['withdraw9']; ?></p>
                      <p><?php echo $data['withdraw10']; ?></p>
                      </h6></th>
					<th><p><h5>Quantity</h5></p>
					  <h6><p><?php echo $data['quantity1']; ?></p>
                      <p><?php echo $data['quantity2']; ?></p>
                      <p><?php echo $data['quantity3']; ?></p>
                      <p><?php echo $data['quantity4']; ?></p>
                      <p><?php echo $data['quantity5']; ?></p>
                      <p><?php echo $data['quantity6']; ?></p>
                      <p><?php echo $data['quantity7']; ?></p>
                      <p><?php echo $data['quantity8']; ?></p>
                      <p><?php echo $data['quantity9']; ?></p>
                      <p><?php echo $data['quantity10']; ?></p>
                      </h6></th>						
		    </tr>
		</thead>
<tbody>
	     
              
                						
	
											
	<?php   } ?> 
 
</tbody>
</table>
		
		
			  		
</div>
</div>           </div>
                                
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