
// the WAMP session we'll be using
//
var session = null;

var ip = "192.168.240.1";

function controlLed(turnOn) {
	session.call("com.myapp.mcu.control_led", [turnOn]);
}

window.onload = function ()
{
	// the URL of the WAMP Router (e.g. Crossbar.io)
	//
	var wsuri;
	if (document.location.origin == "file://") {
	   wsuri = "ws://localhost:8080/ws";
} else {
   wsuri = "ws://" + ip + ":8080" + "/AutobahnDemo";
}

// connect to WAMP server
//
var connection = new autobahn.Connection({
   url: wsuri,
   realm: 'realm1'
});

connection.onopen = function (new_session) {
   console.log("connected to " + wsuri);

   session = new_session;

};

connection.open();
};