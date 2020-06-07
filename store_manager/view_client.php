<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php $client_id = $_GET['id']; ?>
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
		                        <div  class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">View Client</div>
										<div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="client.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
																<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script>     
                                                                   <div class="block-content collapse in">	
                                                                
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
normal; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;; font-size: 12.0pt'>Client Detail</p>

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
  
</div>
            </div>
 
		                         						
                                    
                                    
                                    
                                    		
									
									<?php
									$query = mysql_query("select * from client where client_id ='$client_id'")or die(mysql_error());
									$row = mysql_fetch_array($query);
									?>
									
									    <form class="form-inline" method="post">
										
										<div class="control-group">
											<label class="control-label" for="inputEmail">Name :</label>
											
										<label class="control-label" for="inputEmail"><b><?php echo $row['client_name']; ?></label>
										  </div>
										
										
										
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">I/C :</label>
											
											<label class="control-label" for="inputPassword"><b>				<?php echo $row['client_ic']; ?></b></label>
											
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Phone Number :</label>
											
											<label class="control-label" for="inputPassword"><b><?php echo $row['client_phone_number']; ?></b></label>
											
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Gender :</label>
											
											<label class="control-label" for="inputPassword"><b><?php echo $row['gender']; ?></b></label>
										  </div>
									
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Address :</label>
											
											<label class="control-label" for="inputPassword"><b><?php echo $row['address']; ?></b></label>
											</div>
										<div class="control-group">
										  <label class="control-label" for="inputPassword">Email :</label>
											
											<label class="control-label" for="inputPassword"><b><?php echo $row['email']; ?></b></label>
										  
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="inputPassword">Date :</label>
											
											<label class="control-label" for="inputPassword"><b><?php echo $row['date']; ?></b></label>
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