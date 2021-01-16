<!DOCTYPE html>
<html>
<head>
  <title>Ürünler</title>
  <meta charset="utf-8">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">
  </script>
<style>
   
body{
  display:flex;
  font-family:Verdana;
}
.sidebar{
  width:250px;
  background:#667272;
  height:5550px;
  align-items:center;
  text-align:center;
}
.content{
  flex:1;
  background:#ecf0f5;
}
.sidebar .title{
  width:80%;
  height:70px;
  background:#667272;
  font-size:20px;
  text-align:center;
  padding-top:15px;
  box-sizing:border-box;
}
.sidebar .title {
  text-decoration:none;
  color:#fff;
}
.sidebar .status{
  display:flex;
  color:#fff;
  font-size:12px;
}

.sidebar .status .info{
  display:flex;
  flex-direction:column;
  margin-top:30px;
  margin-left:20px;
}
.sidebar .status .info span{
  margin-bottom:10px;
  margin-top: -10px;
  margin-left: 30px;
}
.sidebar .anasayfa{
  width:100%;
  height:40px;
  color:#fff;
  margin-left:-10px;
  box-sizing:border-box;
  display:flex;
  align-items:center;
  justify-content:space-between;
  font-size:12px;
  margin-top:10px; 
}
.sidebar .anasayfa li a{
  color:#fff; 
  position:absolute;
  padding-left:25px;
}
.sidebar .urunler{
  background:#343a40; 
  width:100%;
  height:40px;
  color:#fff;
  padding:15px;
  box-sizing:border-box;
  display:flex;
  align-items:center;
  justify-content:space-between;
  font-size:12px;
}
.sidebar .urunler li a{
  color:#fff;
  position:absolute;
  padding-left:-2px;
}
.sidebar .telefon{
  width:100%;
  height:30px;
  color:#fff;
  font-size:12px;
  background:#667272;
  display:flex;
  padding:15px;
  padding-top:25px; 
  align-items:center;
}
.sidebar .telefon li a{
  color:#fff;
  padding-left:-2px;
}
.sidebar .tablet{
  background:#343a40;
  width:100%;
  height:30px;
  color:#fff;
  font-size:12px;
  background:#667272;
  display:flex;
  padding:15px;
  padding-top:25px; 
  align-items:center;
}
.sidebar .tablet li a{
  color:#fff;
  padding-left:-2px;
}
.sidebar .settings li a{
  color:#fff;
  padding-left:-2px;
}
.sidebar .settings{
  width:100%;
  height:30px;
  color:#fff;
  background:#667272;
  font-size:12px;
  display:flex;
  padding:15px;
  padding-top:25px;   
  align-items:center;
}
.sidebar .televizyon{
  width:100%;
  height:30px;
  color:#fff;
  background:#667272;
  font-size:12px;
  display:flex;
  padding:15px;
  padding-top:20px;  
  align-items:center;
}
.sidebar .televizyon li a{
  color:#fff;
  padding-left:-2px;
}
.content{
display:flex;
flex-direction:column;
}
.content .header{
width:100%;
height:50px;
background:#667272;
display:flex;
align-items:center;
padding-left:15px;
box-sizing:border-box;
color:#fff;
justify-content:space-between;
}
.content .main{
width:100%;
height:5000px;
}
.content .header img{
width:30px;
height:30px;
border-radius:20px;
}
.content .header .not{
margin-left:auto!important;
width:100px;
padding:20px;
display:flex;
justify-content:space-between;
}}
.content .header .headerinfo{
padding:20px;
width:110px;
display:flex;
justify-content:space-between;
align-items:center;
font-size:12px;
}
.content .main .nav{
display:flex;
width:100%;
align-items:center;
justify-content:space-between;
padding:20px;
box-sizing:border-box;
}
.content .main .nav .dash{
font-size:22px;
}
.content .main .nav .navigation{
font-size:12px; 
}
h1{
  font-size: 100%;
  font: inherit;
  margin-left:350px;
}
.clearFix {
  clear: both;
}
.mainChart {
  margin-top:-285px;
  margin-left:100px; 
  
}
.mainChart2 {
  margin-top:-155px;
  
}
.mainChart3 {
  margin-top:-155px;
  
}

  </style>
</head>
<body>
    <div class="sidebar">
    <div class="title">
      <i class="fas fa-th"></i>
      <span>Karar Destek Sistemi</span>
    </div>
    <div class="status">
      <div class="info">
        <i class="fas fa-align-justify"></i>
        <span>MENÜ</span>
      </div>
    </div>
    <div class="anasayfa">
      <li><a href="anasayfa.php">Anasayfa</a></li>
    </div>
    <div class="urunler">
      <li><a href="urunler.php">Ürünler</a></li>
    </div>
    <div class="telefon">
      <li><a href="akilli_telefon.php">Akıllı Telefon</a></li>
    </div>
    <div class="tablet">
      <li><a href="tablet.php">Tablet</a></li>
    </div>
    <div class="televizyon">
      <li><a href="tv.php">Televizyon</a></li>
    </div>
    <div class="settings">
      <li><a href="giris.php">Çıkış</a></li>
    </div>
  </div>
    <div class="content">
     <div class="header">
      <i class="fas fa-align-justify"></i>
     <div class="not">
     </div>
     </div>
      <div class="main">
     <div class="nav">
     <div>
     <span class="dash">Ürünler</span>
     </div>
     </div>
<?php
include("urun.php");
 
$sorgu=$vt->prepare('SELECT  urun_id,urun_ad,ulke_adi  FROM urunler WHERE ulke_adi="Almanya" ');
$sorgu->execute();
$urunler=$sorgu-> fetchAll(PDO::FETCH_OBJ);
 
?>
 
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <title>Ürünler</title>
	<h1>Almanya'ya Satışı Yapılan Ürünler</h1>
  </head>
  <body>
	  
	  <div class="container">
	  <div class="row justify-content-center">
		<div class="col">
		 <table class="table table-bordered table-striped table-dark">
			<tr>
			<td>Ürün No</td>
			 <td>Ürün Adı</td>
			 <td>Ülke Adı</td>
			 <td>Ürün Sil</td>
			 </tr>
			 
			 <?php
			 foreach($urunler as $urun){?>
			 
			 	<tr>
				<td><?= $urun->urun_id ?></td>
			 	<td><?= $urun->urun_ad ?></td>
				<td><?= $urun->ulke_adi ?></td>
			 	<td><a href="urun_sil.php?pid=<?= $urun->urun_id ?>" class="btn btn-danger">Sil</a></td>
			    </tr>
				 
			 <?php } ?>
 
			</table>  
		  </div>  
	  </div>
	  </div>
<?php
include("urun.php");
 
$sorgu=$vt->prepare('SELECT  urun_ad,ulke_adi  FROM urunler WHERE ulke_adi="Almanya" ');
$sorgu->execute();
$urunler=$sorgu-> fetchAll(PDO::FETCH_OBJ);
 
?>
 <br>
 <br>
 <br>
 <br>
 <?php
include("urun.php");
 
$sorgu=$vt->prepare('SELECT  urun_id,urun_ad,ulke_adi  FROM urunler WHERE ulke_adi="Hollanda" ');
$sorgu->execute();
$urunler=$sorgu-> fetchAll(PDO::FETCH_OBJ);
 
?>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <title>Ürünler</title>
	<h1>Hollanda'ya Satışı Yapılan Ürünler</h1>
  </head>
  <body>
	  
	  <div class="container">
	  <div class="row justify-content-center">
		<div class="col">
		 <table class="table table-bordered table-striped table-dark">
			<tr>
			 <td>Ürün No</td>
			 <td>Ürün Adı</td>
			 <td>Ülke Adı</td>
			 <td>Ürün Sil</td>
			 </tr>
			 
			 <?php
			 foreach($urunler as $urun){?>
			 
			 	<tr>
				<td><?= $urun->urun_id ?></td>
			 	<td><?= $urun->urun_ad ?></td>
				<td><?= $urun->ulke_adi ?></td>
			 	<td><a href="urun_sil.php?pid=<?= $urun->urun_id ?>" class="btn btn-danger">Sil</a></td>
			    </tr>
				 
			 <?php } ?>
 
			</table>  
		  </div>  
	  </div>
	  </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
  
   
