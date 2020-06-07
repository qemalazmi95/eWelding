<?php
//core
function dbcon(){
	$user = "root";
	$pass = "";
	$host = "localhost";
	$db = "azw_e-inventory";
	mysql_connect($host,$user,$pass);
	mysql_select_db($db);
}

function host(){
	$h = "http://".$_SERVER['HTTP_HOST']."/azw_e-inventory/";
	return $h;
}

function hRoot(){
	$url = $_SERVER['DOCUMENT_ROOT']."/azw_e-inventory/";
	return $url;
}

//parse string
function gstr(){
    $qstr = $_SERVER['QUERY_STRING'];
    parse_str($qstr,$dstr);
    return $dstr;
}

?>
