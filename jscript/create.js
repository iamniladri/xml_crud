

function create_process()
{

 cid=document.getElementById("cid").value;
 title=document.getElementById("title").value;
 artist=document.getElementById("artist").value;
 country=document.getElementById("country").value;
 company=document.getElementById("company").value;
 price=document.getElementById("price").value;
 year=document.getElementById("year").value;
 

 if (cid.length==0 && title.length==0 && artist.length==0 && country.length==0 && company.length==0  )
  {
  document.getElementById("txtHint").innerHTML="Check Values";
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
xmlhttp.open("GET","pro.php?artist="+artist+"&title="+title+"&country="+country+"&company="+company+"&price="+price+"&year="+year+"&cid="+cid,true);

xmlhttp.send();
}

