<?php

$cid= $_GET['cid'];


try{

$doc = simplexml_load_file('repository/cd_catalog.xml');

if(!$doc)
throw new Exception("Could not open the file!");


//$doc = new SimpleXMLElement($data);

$segarr = $doc->CD;

$count = count($segarr);

$j = 0;

for ($i = 0; $i < $count; $i++) {

    if ($segarr[$j]['cid'] == $cid) {
        unset($segarr[$j]);
        $j = $j - 1;
    }
    $j = $j + 1;
}


$x= $doc->asXml();



$myFile ="repository/cd_catalog.xml";
$fh = fopen($myFile, 'w+') or die("can't open file");
fwrite($fh, $x);
fclose($fh);

echo "Id :<b>".$cid."</b> is Deleted Successfully !"; 
}
catch(exception $e)
{
echo "Delete failed !!";
echo "Error (File: ".$e->getFile().", line ".
$e->getLine()."): ".$e->getMessage();

}

