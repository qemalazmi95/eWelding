     <div class="span3" id="sidebar">
	               <img id="avatar" class="img-polaroid" src="<?php echo $row['thumbnails']; ?>">
				    <?php #include('count_damage.php'); ?>
					 <?php #include('count_dump.php'); ?>
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                    
                        <li class="active"> <a href="dashboard_clerk.php"><i class="icon-chevron-right"></i><i class="icon-home"></i>Dashboard</a></li>
                        <li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs1"><i class=""></i><i class="icon-wrench"></i>&nbsp;Project						
                            <div class="muted pull-right"><i class="caret"></i></div></a>
						    <ul id="bs1" class="collapse">
                            <li class="">
                            <a href="project_new.php"><font color ="black"><i class="icon-chevron-right"></i><i class="icon-file-alt"></i>&nbsp;Project list</font></a>
                            <li class="">
                            <a href="add_project.php"><font color ="black"><i class="icon-chevron-right"></i><i class="icon-fixed-width icon-pencil"></i>&nbsp;Add New Project</font></a>
                            </li>
                        
						    </ul>
                        				 <li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs2"><i class=""></i><i class="icon-book"></i>&nbsp;Client Management						
                            <div class="muted pull-right"><i class="caret"></i></div></a>
						    <ul id="bs2" class="collapse">
                            <li class=""><a href="client.php"><font color ="black"><i class="icon-chevron-right"></i><i class="icon-list-alt"></i>&nbsp;Client list</font></a></li>
                            <li class="">
                            <a href="client_form.php"><font color ="black"><i class="icon-chevron-right"></i><i class="icon-user"></i>&nbsp;Add New Client</font></a></li>
                            
                            </ul>    
                       <li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs3"><i class=""></i><i class="icon-inbox"></i>&nbsp;Stock						
                            <div class="muted pull-right"><i class="caret"></i></div></a>
						    <ul id="bs3" class="collapse">
                            <li class="">
                            <a href="stock.php"><font color ="black"><font color ="black"><i class="icon-chevron-right"></i><i class="icon-tasks"></i>&nbsp;Stock list</font></font></a></li>
                            <li class="">
                            <a href="add_stock.php"><font color ="black"><i class="fa fa-dropbox"></i><i class=""></i>&nbsp;Add New Stock</font></a></li>
                            </ul>            
                        
                        <li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs4"><i class=""></i><i class="icon-group"></i>&nbsp;Registration							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs4" class="collapse">						
                            <li class="">
                            <a href="add_store.php"><font color ="black"><i class="icon-chevron-right"></i><i class="icon-user"></i>&nbsp;Store Manager</font></a>
                            </li></ul>
                            
                             
                            <li>
                            <a href="user_log.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> User Log</a>
                        </li>
						</li>
                        
                        
                      
                          
                            
                            
						
                        
									
		

						

                        
                    
                    </ul>
					
				<?php #include('search_form.php'); ?>
				<?php #include('search_form1.php'); ?>										
    </div>