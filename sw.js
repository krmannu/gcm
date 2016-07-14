self.addEventListener('push', function(event) {  
  console.log('Received a push message TEST', event);

  /* var title = 'Yay a messageOK.';  
  var body = 'We have received a push message.';  
  var icon = '/images/icon-192x192.png';  
  var tag = 'simple-push-demo-notification-tag';

  event.waitUntil(  
    self.registration.showNotification(title, {  
      body: body,  
      icon: icon,  
      tag: tag  
    })  
  );   */
  
  
  //==================== don't use above ===================
  
  event.waitUntil(
    fetch('http://localhost/gcm/senddata.php').then(function(response) {
		
		console.log(response);
		alert(response);
        
    })
);
  
  
  
  
  //===================don't use under =====================
  
});