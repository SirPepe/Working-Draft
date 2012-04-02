var stylus  = require('stylus'),
    connect = require('connect'),
    nib     = require('nib');

var compile = function(str, path){
	console.log('Kompiliere...');
	return stylus(str)
		.set('filename', path)
		.set('warn', true)
		.set('compress', true)
		.define('url', stylus.url())
		.use(nib());
};

var server = connect.createServer(
	stylus.middleware({
		src: __dirname,
		dest: __dirname,
		compile: compile
	}),
	connect.static(__dirname)
).listen(23137);
