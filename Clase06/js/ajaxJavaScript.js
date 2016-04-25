function testAjax(){

	var xhttp = new XMLHttpRequest(); 
	
	xhttp.open("GET", "AJAX/ajax_test.php", true);

	xhttp.send();

	xhttp.onreadystatechange = function() {
//		alert(xhttp.readyState);
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			alert(xhttp.responseText);
		}
	}
}
function testAjaxGET(){

	var xhttp = new XMLHttpRequest(); 
	
	xhttp.open("GET", "AJAX/ajax_test.php?valor="+Math.random()*100, true);

	xhttp.send();

	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			alert(xhttp.responseText);
		}
	}	
}
function testAjaxPOST(){

	var xhttp = new XMLHttpRequest(); 
	
	xhttp.open("POST", "AJAX/ajax_test.php", true);
	
	xhttp.setRequestHeader("content-type","application/x-www-form-urlencoded");
	
	xhttp.send("valor="+Math.random()*100);

	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			alert(xhttp.responseText);
		}
	}
}

function ActualizarGET(){

	var xhttp = new XMLHttpRequest(); 
	
	xhttp.open("GET", "AJAX/ajax_test.php?valor="+Math.random()*100, true);

	xhttp.send();

	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			document.getElementById("divResultado").innerHTML = xhttp.responseText;
		}
	}
}
function ActualizarPOST(){

	var xhttp = new XMLHttpRequest(); 
	
	xhttp.open("POST", "AJAX/ajax_test.php", true);
	
	xhttp.setRequestHeader("content-type","application/x-www-form-urlencoded");
	
	xhttp.send("valor="+Math.random()*100);

	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			document.getElementById("divResultado").innerHTML = xhttp.responseText;
		}
	}
}
