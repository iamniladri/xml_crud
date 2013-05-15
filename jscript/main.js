

// region start:: Creating xmlhttp object for ajax calls

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }

else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
// region End

// region start:: ajax calls initiated 

xmlhttp.open("GET","repository/cd_catalog.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML; 

// region End 

// region start:: get an array of instance of all Element of 'CD' in repository of xml
x=xmlDoc.getElementsByTagName("CD");
// region End

// region start:: set a counter for Node manipulation
i=0;
// region End


// @method ::for getting total Records of CD Element in Repository
function totalrecord(){
document.getElementById("totalRecords").innerHTML=x.length;
}

// @method ::get Parent Node id

function provided(){
i=document.getElementById("cdinfo").value;
}

// @method:: Show Details of Elements by id in Search.php
 
function displayCD()
{
artist=(x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue);
title=(x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue);
year=(x[i].getElementsByTagName("YEAR")[0].childNodes[0].nodeValue);
txt="Artist: " + artist + "<br />Title: " + title + "<br />Year: "+ year;
document.getElementById("showCD").innerHTML=txt;
}


// @method::for creating Eelement node in a Exixsting Node in create.php 

function displayNode(){

newel=xmlDoc.createElement(document.getElementById("elementnode").value);
newtext=xmlDoc.createTextNode(document.getElementById("textnode").value);
newel.appendChild(newtext);
x=xmlDoc.getElementsByTagName("CD");
j=document.getElementById("nodeid").value;
x[j].appendChild(newel);


for (i=0;i<x[j].childNodes.length;i++)
{
if (x[j].childNodes[i].nodeType==1)
  { 
  document.write(x[j].childNodes[i].nodeName);
  document.write(": ");
  document.write(x[j].childNodes[i].childNodes[0].nodeValue);
  document.write("<br />");
  }
}

}

// @method:: Show all Details in a CD Element Used in index.php

function displayCDInfo(i)
{
artist=(x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue);
title=(x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue);
year=(x[i].getElementsByTagName("YEAR")[0].childNodes[0].nodeValue);
country=(x[i].getElementsByTagName("COUNTRY")[0].childNodes[0].nodeValue);
company=(x[i].getElementsByTagName("COMPANY")[0].childNodes[0].nodeValue);
price=(x[i].getElementsByTagName("PRICE")[0].childNodes[0].nodeValue);
txt="Artist: "+artist+"<br />Title: "+title+"<br />Year: "+year+"<br />Country: "+country+"<br />Company: "+company+"<br />Price: "+price  ;
document.getElementById("showCD").innerHTML=txt;
}

// @method:: Delete a Element Nod from XMLDOM in delete.php

function deleteNode(){

document.write("Number of CD nodes: ");
document.write(xmlDoc.getElementsByTagName('CD').length);
document.write("<br />");

y=xmlDoc.getElementsByTagName("CD")[0];
xmlDoc.documentElement.removeChild(y);

document.write("Number of CD nodes after removeChild(): ");
document.write(xmlDoc.getElementsByTagName('CD').length);
}


