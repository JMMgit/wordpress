 var socket = io.connect('http://localhost:8080/');
 socket.on("file-change-event", function (){
 window.location.reload();
 });