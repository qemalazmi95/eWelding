<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body id="home">
		<?php include('navbar_store.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('store_sidebar.php'); ?>	
                   <div class="span9" id="content">
                      <div class="row-fluid">
					     <?php $query= mysql_query("select * from store_manager where store_manager_id = '$session_id'")or die(mysql_error());
						   $row = mysql_fetch_array($query);
						 ?>
				         <div class="col-lg-12">
                          <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                             <img id="avatar1" class="img-responsive" src="<?php echo $row['thumbnails']; ?>"><strong> Welcome!</strong> <?php echo $store_row['firstname']." ".$store_row['lastname'];  ?>
                          </div>
                        </div>
					   				
					  <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-dashboard">&nbsp;</i>Dashboard</div>
								<div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
                            </div>
							
                           <div class="block-content collapse in"><div class="block-content collapse in">
<div id="page-wrapper">
        <?php 
	     $result = mysql_query("select * from stock")or die(mysql_error());
		 $stocks = mysql_num_rows($result);
		 ?>
                <div class="row-fluid">				
                    <div class="span6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                        <i class="fa fa-dropbox fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $stocks; ?></div>
                                        <div>Stock</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="stock.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
		<?php 
	     $new = mysql_query("select * from project")or die(mysql_error());
		 $new = mysql_num_rows($new);
		 ?>			
                     <div class="span6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                      <i class="fa fa-briefcase fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $new;?></div>
                                        <div>Project</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="project_new.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
				 </div>
 </div> 				 							
<div id="page-wrapper">
           <div class="row-fluid">
		 <?php 
	     $client = mysql_query("select * from client")or die(mysql_error());
		 $damage = mysql_num_rows($client);
		 ?>	
			 <div class="span6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                 
         <div class="span3"><br/>
                                      <i class=" fa fa-book fa-5x"></i><br/>
                                  </div>
                                  <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $damage;?></div>
                                        <div>Client</div><br/>
                                  </div>
                                </div>
							 </div>	
                            </div>
                            <a href="client.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
		
				
				
			                 </div>
                             <div class="span12"></div>
                          </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
			
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
	
</html>