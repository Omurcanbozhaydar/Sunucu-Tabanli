<?php 
try{
  $host='localhost';
  $vtadi='sirket';
  $kullanici='root';
  $sifre='12345678';
  $vt=new PDO("mysql:host=$host;dbname=$vtadi;charset=UTF8","$kullanici",$sifre);
}
catch(PDOException $e){
  print $e->getMessage();
} 