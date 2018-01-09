 var socket = io.connect('http://localhost:3030/');
 socket.on("file-change-event", function (){
 window.location.reload();
 });
