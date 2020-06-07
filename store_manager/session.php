<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['store_manager']) ||(trim ($_SESSION['store_manager']) == '')) {
	header("location:".host()."../index.php");
    exit();
}
$session_id=$_SESSION['store_manager'];

$store_query = mysql_query("select * from store_manager where store_manager_id = '$session_id'")or die(mysql_error());
$store_row = mysql_fetch_array($store_query);
$store_fullname =$store_row['firstname']." ".$store_row['lastname'];
?>