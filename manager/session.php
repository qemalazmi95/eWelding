<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['manager']) ||(trim ($_SESSION['manager']) == '')) {
	header("location:".host()."../index.php");
    exit();
}
$session_id=$_SESSION['manager'];

$manager_query = mysql_query("select * from manager where manager_id = '$session_id'")or die(mysql_error());
$manager_row = mysql_fetch_array($manager_query);
$manager_fullname =$manager_row['firstname']." ".$manager_row['lastname'];
?>