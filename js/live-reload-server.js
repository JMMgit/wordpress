var express = require('express');
var app = express();
var http = require('http').Server(app);
http.listen(10,()=>console.log('listening on port 10'));
var chokidar = require('chokidar');
var io = require('socket.io')(http);

// One-liner for current directory, ignores .dotfiles
chokidar.watch(require('path').join(__dirname, '/../'), {ignored: /(^|[\/\\])\../}).on('all', () => {
  io.emit('file-change-event');
});