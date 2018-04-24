function ajax(gewicht, lengte){
    console.log("function worked.... atleast first part");
    var debug = true;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    var controlScript = "BMI.php";
    var httpString = controlScript + "?gewicht=" + gewicht + "&lengte=" + lengte;
    var httpResponse = "";
    if(debug) console.log(httpString);
    xmlhttp.open("GET", httpString, true);
    xmlhttp.send();
    xmlhttp.onreadystatechange = function () {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            if(debug) console.log("http resonse  = " + xmlhttp.responseText);
            httpResponse = xmlhttp.responseText;
            document.getElementById('Result').innerHTML = httpResponse;
        }
    }

}