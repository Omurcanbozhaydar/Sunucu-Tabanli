<?php 
if(isset($_GET["pid"]))
{
	include("urun.php");
	$sorgu=$vt->prepare('DELETE FROM urunler WHERE urun_id=?');
	$sonuc=$sorgu->execute([$_GET['pid']]);
	if($sonuc){
		header("Location:urunler.php");
	}
	else
		echo("Kayıt silinemedi.");
}
?>