<?php
  require_once("baglan.php");

?>
<!doctype html>
<html lang="tr-TR">
<head>
<meta  http-equiv="Content-Type" content="text/html;charset=utf-8"  charset="utf-8">
<meta  http-equiv="Content-Language" content="tr">
<title>Extra</title>
</head>

<body>
	<form action="coklu_kayit_silme_uygulamasi_sonuc.php" method="post">
		          <table width="500" align="center" border="0" cellpadding="0" cellspacing="0">

					<?php

					$sorgu=$veritabanibaglantisi->prepare("SELECT * From kisiler");
					$sorgu->Execute();

					$kayitsayisi=$sorgu->rowcount();
					$Kayitlar=$sorgu->fetchAll(PDO::FETCH_ASSOC);

					foreach($Kayitlar as $kayitsatirlari){
					?>
					 <tr>
						   <td width="25"height="30" align="left"><input type="checkbox" name="secim[]" value="<?php echo $kayitsatirlari["id"];  ?>"></td>
						 <td><?php echo $kayitsatirlari["ad"]." ".$kayitsatirlari["soyad"] ?></td>

					</tr>
					<?php
					}
					?>
					<tr>
					      <td colspan="2" align="left" height="50"><input type="submit" value="secilen  degerleri sil"></td>
						
					</tr>  
					  
					 
		</table>

			</form>
</body>
</html>