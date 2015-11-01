var XMLHttpRequestObject = false;
if (window.XMLHttpRequest) {
	XMLHttpRequestObject = new XMLHttpRequest();
} else if (window.ActiveXObject) {
	XMLHttpRequestObject = new
	ActiveXObject("Microsoft.XMLHTTP");
}
function load_script(js_load){
	var e = document.createElement("script");
      e.src = js_load;
      e.type="text/javascript";
      document.getElementsByTagName("head")[0].appendChild(e);
}

function getData(dataSource, divID, js_load){
	if(XMLHttpRequestObject) {
		var obj = document.getElementById(divID);
		XMLHttpRequestObject.open("GET", dataSource);
		XMLHttpRequestObject.onreadystatechange = function(){
													if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200) {
														obj.innerHTML = XMLHttpRequestObject.responseText;
														load_script(js_load);
													}
												}
	XMLHttpRequestObject.send(null);
	}
}