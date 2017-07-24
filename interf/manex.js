var lehena=0;
var unekoa=0;

function notaIdatzi (elem) {
  var elemb = elem.className.split('-');
  var te = document.getElementById("notak");
    
   // alert (unekoa+" "+elem.id);
  if (te.innerHTML == "") {
//    te.innerHTML = elemb[elemb.length-1];
      te.innerHTML = elem.id;
      unekoa=elem.id;
  }
  else {
//    te.innerHTML = te.innerHTML+"-"+elemb[elemb.length-1];
      var jartzekoa = elem.id-unekoa;
      unekoa = elem.id
    te.innerHTML = te.innerHTML+"_"+jartzekoa;
  }
}

function garbituNotak() {
  var te = document.getElementById("notak");
  te.innerHTML = "";
    lehena=0;
}

function bilatuNotak() {
	var te = document.getElementById("notak").innerHTML;
	te = te.replace(/[0-9]+\_/, "");
//	alert (te);
	
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {
		var jsonobj = eval ("(" + xmlhttp.responseText + ")");
		var emaitza = "";
		for (var key in jsonobj) {
		    emaitza = emaitza + "- "+key+"<br/>";
		}
		document.getElementById("emaitza").innerHTML="Emaitza posibleak:<br/>"+emaitza;
	    }
	  }
	xmlhttp.open("GET","http://localhost/search.py?intervals="+te,true);
	xmlhttp.send();
}
