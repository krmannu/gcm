<?php header('content-type: application/json; charset=utf-8');
	  header("access-control-allow-origin: http://localhost");
echo json_encode(array('notification'=>array(array('title'=>'title abhi','body'=>'body abhi','icon'=>'icon','tag'=>'tag abhi'))));
?>