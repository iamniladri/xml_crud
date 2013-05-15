<?php
$cid= $_GET['cid'];
$title= $_GET['title'];
$artist= $_GET['artist'];
$country= $_GET['country'];
$company= $_GET['company'];
$price= $_GET['price'];
$year= $_GET['year'];


try{
$xml = simplexml_load_file('repository/cd_catalog.xml');
if(!$xml)
throw new Exception("Could not open the file!");

$distributor = $xml->addChild('CD');
$distributor->addAttribute('cid', $cid);
$distributor->addChild('TITLE', $title);
$distributor->addChild('ARTIST', $artist);
$distributor->addChild('COUNTRY', $country);
$distributor->addChild('COMPANY', $company);
$distributor->addChild('PRICE', $price);
$distributor->addChild('YEAR',$year);
$xml->asXML('repository/cd_catalog.xml');
echo "Insert of".$title."done Successfully"; 
}
catch(exception $e)
{
echo "Insert failed !!";
echo "Error (File: ".$e->getFile().", line ".
$e->getLine()."): ".$e->getMessage();

}




?>
