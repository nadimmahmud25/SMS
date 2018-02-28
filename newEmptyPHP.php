<script type="text/javascript">
//-------------for autosearch  with ajax---------------



//Create a boolean variable to check for a valid Internet Explorer instance.
var xmlhttp = false;
//Check if we are using IE.
try {
//If the Javascript version is greater than 5.
xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
//alert ("You are using Microsoft Internet Explorer.");
} catch (e) {
//If not, then use the older active x object.
try {
//If we are using Internet Explorer.
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//alert ("You are using Microsoft Internet Explorer");
} catch (E) {
//Else we must be using a non-IE browser.
xmlhttp = false;
}
}
//If we are using a non-IE browser, create a javascript instance of the object.
if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
xmlhttp = new XMLHttpRequest();
//alert ("You are not using Microsoft Internet Explorer");
}

            //for student selection by class
function test(str)
 {
	//var obj = document.getElementById(objID);
	xmlhttp.open("POST","http://localhost/school_management/school_admin_controller/SelectRollByClass/"+str);
	xmlhttp.onreadystatechange = function()
	 {
	//alert(xmlhttp.readyState);
//        alert(xmlhttp.responseText);
//	alert(xmlhttp.status);
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		 {
			document.getElementById(objID).innerHTML = xmlhttp.responseText;
		 }
	}
xmlhttp.send(null);
}

// -----------------for school exist check
</script>