<?php
session_start();
$baglanti=mysqli_connect("localhost","root","12345678","sirket");
if($baglanti){
if($_POST){
if(strip_tags(trim(isset($_POST["Kullanıcı"])))){
$Kullanıcı=$_POST["Kullanıcı"];
}
if(strip_tags(trim(isset($_POST["sifre"])))){
$sifre=$_POST["sifre"];
}
$sorgu=mysqli_query($baglanti,"SELECT * FROM yonetici WHERE kullanici='".$Kullanıcı."' AND sifre='".$sifre."'");

if(mysqli_num_rows($sorgu)>0){
$row=mysqli_fetch_assoc($sorgu);
session_regenerate_id();
$_SESSION['loggedin'] = FALSE;
$_SESSION['ad'] = $row["kullanici"];
$_SESSION['soyad'] = $row["sifre"];
echo 1;
}else{
echo 0;
}
mysqli_close($baglanti);
}else{
}

}else {
die("Bağlantı Sağlanamadı");
};

?>