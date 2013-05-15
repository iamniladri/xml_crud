// @method ::for getting Auto Hint

function showHint(str)
{
if (str.length==0)
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
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
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","process.php?q="+str,true);
xmlhttp.send();
}



// @method ::for getting total Records of based on artist name

function showdataBYName(){

val=document.getElementById("search_text").value;
for (temp=0;temp<x.length;temp++)
{
artist=(x[temp].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue);
if (artist == val){
artist=(x[temp].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue);
title=(x[temp].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue);
year=(x[temp].getElementsByTagName("YEAR")[0].childNodes[0].nodeValue);
txt="Artist: " + artist + "<br />Title: " + title + "<br />Year: "+ year;
document.getElementById("showCD").innerHTML=txt;
   }


}

}

