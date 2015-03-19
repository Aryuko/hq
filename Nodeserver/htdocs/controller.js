var io;

function init(ioModule){
    io = ioModule;
    
    io.on("connection", connection);
    
}

function connection(socket)
{
    console.log("User connected");
    io.emit("eventmessage", {"color":"green", "message":"Successfully connected!"});
	
	socket.on("input", input);
	socket.on("ping", function() {ping(socket);});
    socket.on("disconnect", disconnection);
}
function disconnection(socket)
{
    console.log("User disconnected");
    io.emit("eventmessage", {"color":"red", "message":"Disconnected"});
}
function input(data)
{
	io.emit("input", {"x1":data.x1, "y1":data.y1, "x2":data.x2, "y2":data.y2, "arm":data.arm});
}
function ping(socket)
{
	socket.emit("ping", {});
}

module.exports.init = init;