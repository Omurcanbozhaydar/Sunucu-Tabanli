<?php 
try{
  $host='localhost';
  $vtadi='sirket';
  $kullanici='root';
  $sifre='';
  $vt=new PDO("mysql:host=$host;dbname=$vtadi;charset=UTF8","$kullanici",$sifre);
}
catch(PDOException $e){
  print $e->getMessage();
} 
