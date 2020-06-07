
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="AZW e-Inventory System>
    <meta name="author" content="Ezuddin Azmi">
<link rel="shortcut icon" href="images/logo.png" />
</head>
<?php include('header_dashboard.php'); ?>
    <body id="home">
		<?php include('navbar_about.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
								<div class="navbar navbar-inner block-header">
									<div id="" class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="index.php"><i class="icon-arrow-left"></i> Back</a></div>
									<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script> 
								</div>
                            <div class="block-content collapse in">
							<h3></i><i class="icon-group"></i>&nbsp;Team Developers</h3>
							<hr>
                                <div class="span3">
										<center>
										<img id="developers" src="manager/developers/din.jpg" class="img-circle">
										<hr>
										<p>Name: Ezuddin Azmi</p>
										<p>Contact Number: 013-9129275</p>
										
										</center>
								</div>
								
                                <div class="span3">
										<center>
								        <img id="developers" src="manager/developers/epul.jpg" class="img-circle">
								        <hr>
										<p>Name: Syaiful Izzat Razalli</p>
										<p>Contact Number: 011-32343326</p>
								        </center>
								</div>
								
                                <div class="span3">
										<center>
								        <img id="developers" src="manager/developers/afifi.jpg" class="img-circle">
								        <hr>
										<p>Name: Afifi Khalili</p>
										<p>Contact Number: 017-5602071</p>
								        </center>
								</div>
								
                           
								</div>
								
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		
        </div>
		<?php include('script.php'); ?>
    </body>
</html>