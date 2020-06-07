<?php
     
		include('manager/lib/dbcon.php');
		dbcon(); 
		session_start();	
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		/*................................................ Manager .....................................................*/
			//$query = "SELECT * FROM manager WHERE username='$username' AND password='$password'";
			$query = mysql_query("SELECT * FROM manager WHERE username='$username' AND password='$password'")
		or die(mysql_error());
			$num_row = mysql_num_rows($query);
			$row= mysql_fetch_array($query);
			
		/*...................................................Officer Clerk ..............................................*/
		$query_clerk = mysql_query("SELECT * FROM officer_clerk WHERE username='$username' AND password='$password'")
		or die(mysql_error());
		$num_row_clerk = mysql_num_rows($query_clerk);
		$row_clerk = mysql_fetch_array($query_clerk);
		
		/*...................................................Store Manager ..............................................*/
		$query_store = mysql_query("SELECT * FROM store_manager WHERE username='$username' AND password='$password'")
		or die(mysql_error());
		$num_row_store = mysql_num_rows($query_store);
		$row_store = mysql_fetch_array($query_store);
		
		if( $num_row > 0 ) { 
		$_SESSION['manager']=$row['manager_id'];
		echo 'true_manager';
		
		//mysql_query("insert into user_log (username,login_date,manager_id)values('$username',NOW(),".$row['manager_id'].")")or die(mysql_error());
		
		}else if ($num_row_clerk > 0){
		$_SESSION['officer_clerk']=$row_clerk['officer_clerk_id'];
		echo 'true_clerk';
		
		mysql_query("insert into user_log (username,login_date,officer_clerk_id)values('$username',NOW(),".$row_clerk['officer_clerk_id'].")")or die(mysql_error());
		
		}else if ($num_row_store > 0){
		$_SESSION['store_manager']=$row_store['store_manager_id'];
		echo 'true_store';
		
		mysql_query("insert into user_log (username,login_date,officer_clerk_id)values('$username',NOW(),".$row_store['store_manager_id'].")")or die(mysql_error());
		
		 }else{ 
				echo 'false';
		}	
		
		
				
		?>