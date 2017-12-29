 var socket = io.connect('http://localhost:3000/');
 socket.on("file-change-event", function (){
 window.location.reload();
 });