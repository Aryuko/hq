<div id="gamepadPrompt"></div>
<div id="gamepadDisplay"></div>
<div id="stringOutput"></div>

<script src="jquery-2.1.1.min.js"> </script>
<script src="/socket.io/socket.io.js"></script>
<script>
var hasGP = false;
var repGP;
	
function SQLTest(x1, y1, x2, y2, arm){
	$.ajax({
		type: "POST",
		url: "includes/SQLPut.php",
		data: {
			x1: x1,
			y1: y1,
			x2: x2,
			y2: y2,
			arm: arm,
		}
	})
	.done(function(response){
		console.log("Values inserted, response: " + response);
	});
}
function canGame() {
    return "getGamepads" in navigator;
}

function reportOnGamepad() {
    var gp = navigator.getGamepads()[0];
    var html = "";
        html += "id: "+gp.id+"<br/>";

    for(var i=0;i<gp.buttons.length;i++) {
        html+= "Button "+(i+1)+": ";
        if(gp.buttons[i].pressed) html+= " pressed";
        html+= "<br/>";
    }
	html+= "Trigger 1: " + gp.buttons[6].value + "<br/>";
	html+= "Trigger 2: " + gp.buttons[7].value + "<br/>";
	html+= "Triggers combined: " + (gp.buttons[7].value - gp.buttons[6].value) + "<br/>";

    for(var i=0;i<gp.axes.length; i+=2) {
        html+= "Stick "+(Math.ceil(i/2)+1)+": "+gp.axes[i]+","+gp.axes[i+1]+"<br/>";
    }
	html += "Arm: "
	if (gp.buttons[8].pressed && gp.buttons[9].pressed)
		html += "1";
	else
		html += "0";
	
    $("#gamepadDisplay").html(html);	
	
	/*var inputString = "";
	for(var i = 0; i < 3; i++) {
        inputString += String.fromCharCode(map(gp.axes[i], -1, 1, 1, 65535));
    }
	inputString+= String.fromCharCode(map((gp.buttons[7].value - gp.buttons[6].value), -1, 1, 1, 65535));
	
	if (gp.buttons[8].pressed && gp.buttons[9].pressed)
		inputString += "1";
	else
		inputString += "0";
	
	console.log(inputString);
	//ajaxTest(inputString);
	SQLTest(inputString);
	*/
	if (gp.buttons[8].pressed && gp.buttons[9].pressed)
		arm = 1;
	else
		arm = 0;
	//SQLTest(gp.axes[0], gp.axes[1], gp.axes[2], gp.buttons[7].value - gp.buttons[6].value, arm);
}
	
function map(x, in_min, in_max, out_min, out_max) {
  return (x - in_min) * (out_max - out_min) / (in_max - in_min) + out_min;
}
	
$(document).ready(function() {
	
    if(canGame()) {
        var prompt = "To begin using your gamepad, connect it and press any button!";
        $("#gamepadPrompt").text(prompt);

        $(window).on("gamepadconnected", function() {
            hasGP = true;
            $("#gamepadPrompt").html("Gamepad connected!");
            console.log("connection event");
            repGP = window.setInterval(reportOnGamepad, 20);
        });

        $(window).on("gamepaddisconnected", function() {
            console.log("disconnection event");
            $("#gamepadPrompt").text(prompt);
            window.clearInterval(repGP);
        });

        //setup an interval for Chrome
        var checkGP = window.setInterval(function() {
            console.log('checkGP');
            if(navigator.getGamepads()[0]) {
                if(!hasGP) $(window).trigger("gamepadconnected");
                window.clearInterval(checkGP);
            }
        }, 500);
    }

});
</script>