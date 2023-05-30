<?php
  require_once("baglan.php");

$gelensecimdegerleri=$_POST["secim"];
/*
$idleribirlestir=implode(",",$gelensecimdegerleri);
$idler=filtrele($idleribirlestir);

*/


// dongu ile ikinci yol

foreach($gelensecimdegerleri as  $silincekdeger){
	$silincekid=filtrele($silincekdeger);
	$sil=$veritabanibaglantisi->prepare("DELETE FROM  kisiler where id= ?  limit 1 ");
	$sil->execute([$silincekid]);



	
}





/*
$sil=$veritabanibaglantisi->prepare("DELETE FROM  kisiler where id IN($idler)");

$sil->execute();

*/





header("Location:coklu_kayit_silme_uygulamasi.php");
exit();
	
	




?>