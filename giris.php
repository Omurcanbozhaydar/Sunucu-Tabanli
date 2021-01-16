<?php include "login.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Yönetici Giriş Ekranı</title>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
body{
	font-family: 'Graphik', Helvetica;
	height: 1024px;
	flex-direction: column;
	align-items:center;
	justify-content:center;
	background-color: #4a8ac5;
}
.kds{
	font-size: 28px;
	margin-left: 450px;
	margin-top:100px;
}
.girisEkrani{
	display: flex;
	flex-direction: column;
	align-items: center;
	background-color:#d2d6de;
	width:360px;
	display: flex;
	flex-direction: column;
	margin-left: 450px;
	margin-top: 100px;
	padding-top:20px;
	padding-bottom: 80px;
	padding-left: 20px;
	padding-right: 20px; 
}
#kullanici{
	margin-top:30px;
	width: 80%;
	height: 25px;
}
#sifre{
	margin-top:30px;
	width: 80%;
	height: 25px;
}
#giris{
	margin-top:30px;
	width: 30%;
	height: 25px;
	background-color: #3c8dbc;
	color: white;
	border: 0;
}
</style>
<script>
$(document).ready(function(){
$("#giris").click(function(){

if($("#kullanici").val()=="" || $("#sifre").val()==""){
	alert("Lütfen bilgileri giriniz");
}
else{

$.post("login.php",
{
Kullanıcı:$("#kullanici").val(),
sifre:$("#sifre").val()
},
function(data,status){
if(data==1){
$(location).attr("href","anasayfa.php");
}else{
alert("Kullanıcı Adınız veya Şifreniz Yanlış");
}
}
);
}

});

});
</script>
</head>
<body>
	<label class="kds">Teknoloji Şirketi İçin Karar Destek Sistemi</label>
	<div class="girisEkrani">

	<input type="text" id="kullanici" placeholder="Kullanıcı adı">
	<input type="password" id="sifre" placeholder="Şifre">
	<button id="giris">Giriş</button>
	<br>
	<br>
	<a href=" "><label>Şifremi Unuttum</label></a>
	<br>
	<br>
	<a href=" "><label>Yeni üye olmak için tıklayınız</label></a>
	</div>
</body>
</html>