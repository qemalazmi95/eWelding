<?php
//core
function dbcon(){
	$user = "epiz_20738249";
	$pass = "ezuddin1997";
	$host = "sql308.epizy.com";
	$db = "epiz_20738249_azwinventory";
	mysql_connect($host,$user,$pass);
	mysql_select_db($db);
}

function host(){
	$h = "http://".$_SERVER['HTTP_HOST']."/epiz_20738249_azwinventory/";
	return $h;
}

function hRoot(){
	$url = $_SERVER['DOCUMENT_ROOT']."/epiz_20738249_azwinventory/";
	return $url;
}

//parse string
function gstr(){
    $qstr = $_SERVER['QUERY_STRING'];
    parse_str($qstr,$dstr);
    return $dstr;
}

?>
