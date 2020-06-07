<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['officer_clerk']) ||(trim ($_SESSION['officer_clerk']) == '')) {
	header("location:".host()."../index.php");
    exit();
}
$session_id=$_SESSION['officer_clerk'];

$clerk_query = mysql_query("select * from officer_clerk where officer_clerk_id = '$session_id'")or die(mysql_error());
$clerk_row = mysql_fetch_array($clerk_query);
$officer_clerk_fullname =$clerk_row['firstname']." ".$clerk_row['lastname'];
?>