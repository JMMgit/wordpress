 var socket = io.connect('http://localhost:30/');
 socket.on("file-change-event", function (){
 window.location.reload();
 });