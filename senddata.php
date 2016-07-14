<?php header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
echo json_encode(array('notification'=>array(array('title'=>'title abhi','body'=>'body abhi','icon'=>'icon','tag'=>'tag abhi'))));



?>