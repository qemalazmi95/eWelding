      <div class="span3" id="sidebar">
	               <img id="avatar" class="img-polaroid" src="<?php echo $row['thumbnails']; ?>">
				    <?php #include('count_damage.php'); ?>
					 <?php #include('count_dump.php'); ?>
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                    
                        <li class="active"> <a href="dashboard_clerk.php"><i class="icon-chevron-right"></i><i class="icon-home"></i>&nbsp;Dashboard</a> </li>
						<li>
                            <a href="project.php"><i class="icon-chevron-right"></i><i class="icon-desktop"></i> Project </a>
                        </li>
                        					<li>
                            <a href="client.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> Client Management</a>
                        </li>
                        <li>
                            <a href="stock.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> stock</a>
                        </li>
                        <li class="active">						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs2"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;Registration
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs2" class="collapse">						
                            <li class="">
                            <a href="clerk_user.php"><i class="icon-chevron-right"></i><i class="icon-user"></i>&nbsp;Officer Clerk</a>
                            </li>
						    <li class="">
                            <a href="store_user.php"><i class="icon-chevron-right"></i><i class="icon-user"></i>&nbsp;Store Manager </a>
                            </li>
						    </ul>
						</li>
												
				
  
					
					
				<?php #include('search_form.php'); ?>
				<?php #include('search_form1.php'); ?>										
    </div>