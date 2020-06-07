
<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 14 (filtered)">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:8.0pt;
	margin-left:0in;
	line-height:107%;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-link:"Balloon Text Char";
	margin:0in;
	margin-bottom:.0001pt;
	font-size:8.0pt;
	font-family:"Tahoma","sans-serif";}
span.BalloonTextChar
	{mso-style-name:"Balloon Text Char";
	mso-style-link:"Balloon Text";
	font-family:"Tahoma","sans-serif";}
.MsoChpDefault
	{font-family:"Calibri","sans-serif";}
.MsoPapDefault
	{margin-bottom:8.0pt;
	line-height:107%;}
@page WordSection1
	{size:13.0in 8.5in;
	margin:48.25pt .5in .5in .75in;}
div.WordSection1
	{page:WordSection1;}
-->
</style>
<?php include('print_header.php'); ?>
<?php include('session.php'); ?>
</head>
<?php // $get_id = $_GET['project_id']; ?>
<body lang=EN-US>
<div class="empty">
<?php include('navbar_manager.php'); ?>
<div class="container">
  <div class="row-fluid">
      <div class="col-lg-12">
            <div class="alert alert-success alert-dismissable">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             <i class="icon-check"></i><strong> </strong>
            </div>
       </div>
    </div>
  </div>
 </div>
</div>

 <div class="container">
 <div class="row-fluid">
 <div class="block">
<div class="row-fluid">

<div class=WordSection1>

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
normal; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;; font-size: 12.0pt'>Project </p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'>DATE: <?php
 $date = new DateTime();
 echo $date->format('l, F jS, Y');
 ?><o:p></o:p></span></p>
<div class="pull-right">
   <div class="empty">
           <p class=MsoNormal style='margin-bottom:0in; margin-left:-110px; margin-top:-30px; margin-bottom:.0001pt;line-height:
           normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
           "Times New Roman","serif"'>
		   <a href="#" onClick="window.print()" class="btn btn-info" id="print" data-placement="top" title="Click to Print"><i class="icon-print icon-large"></i> Print</a></p>		      
		   <script type="text/javascript">
		     $(document).ready(function(){
		     $('#print').tooltip('show');
		     $('#print').tooltip('hide');
		     });
		   </script> 
            <p class=MsoNormal style='margin-bottom:0in; margin-top:-30px; margin-bottom:.0001pt;line-height:
            normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
           "Times New Roman","serif"'>
			<a id="return" data-placement="top" class="btn btn-success" title="Click to Return" href="device_stocks.php"><i class="icon-arrow-left"></i> Back</a></p>		
			<script type="text/javascript">
			$(document).ready(function(){
			$('#return').tooltip('show');
			$('#return').tooltip('hide');
			});
			</script>       	   
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
    
                         
 <?php $get_id = $_GET['id']; ?>                                   
									<?php
									$query = mysql_query("select a.*, b.* from project a,
		 client b where a.client_id= '$get_id'")or die(mysql_error());
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
										
										<div class="control-group">
										<div class="control">
										
										
										</div>
										</div>
										<p>
										  <script type="text/javascript">
										$(document).ready(function(){
										$('#update').tooltip('show');
										$('#update').tooltip('hide');
										});
										  </script>
									    </p> 
										</form>
										
										
									
								
		                            </div>

<?php include('script.php'); ?>
<div class="empty">
<center>
<hr>
		<footer>
           <p>
ALL RIGHT RESERVED AZW E-INVENTORY SYSTEM</p>
        <footer>
</center>
</div>
</html>