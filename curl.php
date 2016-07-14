<?php
  function send_push_message($subscription_ids)
  {
  // Set GCM endpoint
  $url = 'https://android.googleapis.com/gcm/send';
 
  $fields = array(
      'registration_ids' => array($subscription_ids),
	  'data'              => array( "message" => 'hi' ),
  );
 
  $headers = array(
      'Authorization: key=AIzaSyC3PWiNlyrqGkjXqANYfdq7quUlnDqIYWU',
      'Content-Type: application/json'
  );
 
  $ch = curl_init();
 
  // Set the url, number of POST vars, POST data
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
 
  // Execute post
  $result = curl_exec($ch);
  
  if ($result === FALSE) {
      die('Push msg send failed in curl: ' . curl_error($ch));
  }
 
  print_r($result);
 
  // Close connection
  curl_close($ch);
}
send_push_message('eMd6jvRXNeo:APA91bFfAa-zVw5t_6x8bYkqbSZLqdOeVH1wxeSGhI5ufotqliAxsANpo1w-FfwWkoZnIWa6AXef6yZYIcJfPy5FFgui_H9_0Fv1hEPOQTAVaVldFahbH-tVhGkctjLX0OchPNHk34FR');