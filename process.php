<?php
$xml = simplexml_load_file('repository/cd_catalog.xml');
$names = $xml->xpath('//ARTIST');
$a=array();
$i=0;
foreach ($names as $name) {
$a[$i++]=$name;
}

//get the q parameter from URL
$q=$_GET["q"];

//lookup all hints from array if length of q>0
if (strlen($q) > 0)
  {
  $hint="";
  for($i=0; $i<count($a); $i++)
    {
    if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
      {
      if ($hint=="")
        {
        $hint=$a[$i];
        }
      else
        {
        $hint=$hint." , ".$a[$i];
        }
      }
    }
  }

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint == "")
  {
  $response="No Record Found !";
  }
else
  {
  $response=$hint;
  }

//output the response
echo $response;
?>

