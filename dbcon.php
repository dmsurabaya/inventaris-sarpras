<?php
//core

	$user = "root";
	$pass = "";
	$host = "localhost";
	$db = "thesis";
	$koneksi= mysqli_connect($host,$user,$pass,$db);
	// mysqli_select_db($koneksi,$db);
	if (!$koneksi) {
		die("<script>alert('Gagal tersambung dengan database.')</script>");
	}


function host(){
	$h = "http://".$_SERVER['HTTP_HOST']."/thesis/";
	return $h;
}

function hRoot(){
	$url = $_SERVER['DOCUMENT_ROOT']."/thesis/";
	return $url;
}

//parse string
function gstr(){
    $qstr = $_SERVER['QUERY_STRING'];
    parse_str($qstr,$dstr);
    return $dstr;
}

?>
