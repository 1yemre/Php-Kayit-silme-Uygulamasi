<?php
try{
	   $veritabanibaglantisi=new PDO("mysql:host=localhost;dbname=extraegitim; charset :UTF-8","root","");
}catch(PDOException $hata){
	    echo "baglanti hatasi<br>". $hata->getmessage();
         die();
	
}



function filtrele($deger){
	  $bir=trim($deger);
	  $iki=strip_tags($bir);
	  $uc=htmlspecialchars($iki,ENT_QUOTES);
     $sonuc=$uc;
	
	return $sonuc;
}

?>