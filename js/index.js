var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);
var path= require('path');
var fs = require('fs');

fs.watch(__dirname, { recursive:true }, function () {
  io.emit('file-change-event');
});

app.get('/', function(req, res){
  res.sendFile(path.join(__dirname + '/../index.html'));
});

io.on('connection', function(socket){
  console.log('a user connected');

  socket.on('disconnect', function(){
    console.log('user disconnected');
  });
});

http.listen(3000, function(){
  console.log('listening on *:3000');
});