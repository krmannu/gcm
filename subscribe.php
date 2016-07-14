<?php
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("gcm")or die(mysql_error());


if($_GET['sid']){
	
	echo $token=$_GET['sid'];
	
 $query="INSERT INTO broswer values(NULL,'$token')";
 mysql_query($query)or die(mysql_error());
	
	
}

//echo json_encode(array('title'=>'title','body'=>'body','icon'=>'icon','tag'=>'tag'));



?>