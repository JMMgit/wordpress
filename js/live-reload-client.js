 var socket = io.connect('http://localhost:10/');
 socket.on("file-change-event", function (){
 window.location.reload();
 });