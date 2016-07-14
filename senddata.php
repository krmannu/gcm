<?php header('content-type: application/json; charset=utf-8');
	  header("access-control-allow-origin: *");
echo json_encode(array('notification'=>array(array('title'=>'title abhi','body'=>'body abhi','icon'=>'icon','tag'=>'tag abhi'))));
?>