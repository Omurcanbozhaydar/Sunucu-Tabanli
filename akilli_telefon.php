<?php 
  
  $db = new PDO("mysql:host=localhost;dbname=sirket;charset=utf8","root","");

  $query = $db->query("SELECT urunler.urun_ad as urun, SUM(satis.adet) AS satis_adedi, satis.satis_tarihi , ulkeler.ulke_adi
FROM urunler, satis, urun_turleri, magazalar ,ulkeler
WHERE urun_turleri.urun_tur_id=urunler.urun_tur_id AND urunler.urun_id=satis.urun_id AND satis.magaza_id=magazalar.magaza_id AND magazalar.ulke_id=ulkeler.ulke_id AND urun_turleri.urun_tur_adi='Akıllı Telefon' and satis.satis_tarihi='2016' AND ulkeler.ulke_adi='Almanya'
GROUP BY urunler.urun_id
ORDER BY urunler.urun_id");
  
  $query1 = $db->query("SELECT urunler.urun_ad as urun, SUM(satis.adet) AS satis_adedi, satis.satis_tarihi , ulkeler.ulke_adi
FROM urunler, satis, urun_turleri, magazalar ,ulkeler
WHERE urun_turleri.urun_tur_id=urunler.urun_tur_id AND urunler.urun_id=satis.urun_id AND satis.magaza_id=magazalar.magaza_id AND magazalar.ulke_id=ulkeler.ulke_id AND urun_turleri.urun_tur_adi='Akıllı Telefon' and satis.satis_tarihi='2017' AND ulkeler.ulke_adi='Almanya'
GROUP BY urunler.urun_id
ORDER BY urunler.urun_id");
  
  $query2 = $db->query("SELECT urunler.urun_ad as urun, SUM(satis.adet) AS satis_adedi, satis.satis_tarihi , ulkeler.ulke_adi
FROM urunler, satis, urun_turleri, magazalar ,ulkeler
WHERE urun_turleri.urun_tur_id=urunler.urun_tur_id AND urunler.urun_id=satis.urun_id AND satis.magaza_id=magazalar.magaza_id AND magazalar.ulke_id=ulkeler.ulke_id AND urun_turleri.urun_tur_adi='Akıllı Telefon' and satis.satis_tarihi='2018' AND ulkeler.ulke_adi='ALmanya'
GROUP BY urunler.urun_id
ORDER BY urunler.urun_id");
 
  $query3 = $db->query("SELECT urunler.urun_ad as urun, SUM(satis.adet) AS satis_adedi, satis.satis_tarihi , ulkeler.ulke_adi
FROM urunler, satis, urun_turleri, magazalar ,ulkeler
WHERE urun_turleri.urun_tur_id=urunler.urun_tur_id AND urunler.urun_id=satis.urun_id AND satis.magaza_id=magazalar.magaza_id AND magazalar.ulke_id=ulkeler.ulke_id AND urun_turleri.urun_tur_adi='Akıllı Telefon' and satis.satis_tarihi='2019' AND ulkeler.ulke_adi='ALmanya'
GROUP BY urunler.urun_id
ORDER BY urunler.urun_id");
	$query4 = $db->query("SELECT urunler.urun_ad as urun, SUM(satis.adet) AS satis_adedi, satis.satis_tarihi , ulkeler.ulke_adi
FROM urunler, satis, urun_turleri, magazalar ,ulkeler
WHERE urun_turleri.urun_tur_id=urunler.urun_tur_id AND urunler.urun_id=satis.urun_id AND satis.magaza_id=magazalar.magaza_id AND magazalar.ulke_id=ulkeler.ulke_id AND urun_turleri.urun_tur_adi='Akıllı Telefon' and satis.satis_tarihi='2020' AND ulkeler.ulke_adi='ALmanya'
GROUP BY urunler.urun_id
ORDER BY urunler.urun_id");
  $query5 = $db->query("SELECT urunler.urun_ad as urun, SUM(satis.adet) AS satis_adedi, satis.satis_tarihi , ulkeler.ulke_adi
FROM urunler, satis, urun_turleri, magazalar ,ulkeler
WHERE urun_turleri.urun_tur_id=urunler.urun_tur_id AND urunler.urun_id=satis.urun_id AND satis.magaza_id=magazalar.magaza_id AND magazalar.ulke_id=ulkeler.ulke_id AND urun_turleri.urun_tur_adi='Akıllı Telefon' and satis.satis_tarihi='2016' AND ulkeler.ulke_adi='Hollanda'
GROUP BY urunler.urun_id
ORDER BY urunler.urun_id");
  
  $query6 = $db->query("SELECT urunler.urun_ad as urun, SUM(satis.adet) AS satis_adedi, satis.satis_tarihi , ulkeler.ulke_adi
FROM urunler, satis, urun_turleri, magazalar ,ulkeler
WHERE urun_turleri.urun_tur_id=urunler.urun_tur_id AND urunler.urun_id=satis.urun_id AND satis.magaza_id=magazalar.magaza_id AND magazalar.ulke_id=ulkeler.ulke_id AND urun_turleri.urun_tur_adi='Akıllı Telefon' and satis.satis_tarihi='2017' AND ulkeler.ulke_adi='Hollanda'
GROUP BY urunler.urun_id
ORDER BY urunler.urun_id");
  
  $query7 = $db->query("SELECT urunler.urun_ad as urun, SUM(satis.adet) AS satis_adedi, satis.satis_tarihi , ulkeler.ulke_adi
FROM urunler, satis, urun_turleri, magazalar ,ulkeler
WHERE urun_turleri.urun_tur_id=urunler.urun_tur_id AND urunler.urun_id=satis.urun_id AND satis.magaza_id=magazalar.magaza_id AND magazalar.ulke_id=ulkeler.ulke_id AND urun_turleri.urun_tur_adi='Akıllı Telefon' and satis.satis_tarihi='2018' AND ulkeler.ulke_adi='Hollanda'
GROUP BY urunler.urun_id
ORDER BY urunler.urun_id");
 
  $query8 = $db->query("SELECT urunler.urun_ad as urun, SUM(satis.adet) AS satis_adedi, satis.satis_tarihi , ulkeler.ulke_adi
FROM urunler, satis, urun_turleri, magazalar ,ulkeler
WHERE urun_turleri.urun_tur_id=urunler.urun_tur_id AND urunler.urun_id=satis.urun_id AND satis.magaza_id=magazalar.magaza_id AND magazalar.ulke_id=ulkeler.ulke_id AND urun_turleri.urun_tur_adi='Akıllı Telefon' and satis.satis_tarihi='2019' AND ulkeler.ulke_adi='Hollanda'
GROUP BY urunler.urun_id
ORDER BY urunler.urun_id");
 $query9 = $db->query("SELECT urunler.urun_ad as urun, SUM(satis.adet) AS satis_adedi, satis.satis_tarihi , ulkeler.ulke_adi
FROM urunler, satis, urun_turleri, magazalar ,ulkeler
WHERE urun_turleri.urun_tur_id=urunler.urun_tur_id AND urunler.urun_id=satis.urun_id AND satis.magaza_id=magazalar.magaza_id AND magazalar.ulke_id=ulkeler.ulke_id AND urun_turleri.urun_tur_adi='Akıllı Telefon' and satis.satis_tarihi='2020' AND ulkeler.ulke_adi='Hollanda'
GROUP BY urunler.urun_id
ORDER BY urunler.urun_id")
?>
<!DOCTYPE html>
<html>
<head>
  <title>Akıllı Telefon</title>
  <meta charset="utf-8">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">
  </script>
  <style>
   
body{
  margin: 0;
  padding: 0;
  display:flex;
  font-family:Verdana;
}
.sidebar{
  width:250px;
  background:#667272;
  height:7550px;
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
  background:#667272;
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
  background:#343a40;
  height:30px;
  color:#fff;
  font-size:12px;
  display:flex;
  padding:15px;
  padding-top:5px; 
  align-items:center;
}
.sidebar .telefon li a{
  color:#fff;
  padding-left:-2px;
}
.sidebar .tablet{
  width:100%;
  height:30px;
  color:#fff;
  font-size:12px;
  background:#667272;
  display:flex;
  padding:15px;
  padding-top:5px; 
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
  padding-top:0px;   
  align-items:center;
}
.sidebar .televizyon{
  width:100%;
  height:30px;
  color:#fff;
  font-size:12px;
  display:flex;
  padding:15px;
  padding-top:0px;  
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
height:7000px;
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
.content .header{
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
.content .main .nav{
font-size:12px; 
}
h1{
  font-size: 100%;
  font: inherit;
  margin-left: 450px;
}
h2{
  margin-top: -150px;
  margin-left: 450px;
  font: inherit;
}
.clearFix {
  clear: both;
}
.mainChart{
  margin-top:-155px;
  margin-left:-120px; 
}
.mainChart2 {
  margin-top:-350px;
  margin-left:-120px;  
}
.mainChart3 {
 margin-top:-250px;
 margin-left:-120px;
}
.mainChart4 {
 margin-top:-230px;
 margin-left:-120px;
}
.mainChart5 {
 margin-top:-230px;
 margin-left:-120px;
}
.mainChart6 {
 margin-top:-230px;
 margin-left:-120px;
}
.mainChart7 {
 margin-top:-230px;
 margin-left:-120px;
}
.mainChart8 {
 margin-top:-230px;
 margin-left:-120px;
}
.mainChart9 {
 margin-top:-230px;
 margin-left:-120px;
}
.mainChart10 {
 margin-top:-230px;
 margin-left:-120px;
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
     <span class="dash">Akıllı Telefon Satışları</span>
     </div>
     </div>
     <h1>Almanya'daki Satışlar</h1>
     <br> 
     <br>
      <div class="mainChart">
      <canvas id="salesData2"></canvas>
    <div id="chart_div"></div>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">


     
      google.charts.load('current', {'packages':['corechart']});

      
      google.charts.setOnLoadCallback(drawChart);

     
      function drawChart() {

        
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          
            <?php 
            
            foreach($query as $row) {
            
                echo "['".$row["urun"]."',".$row["satis_adedi"]."],";
            
            }

            ?>
            
          
        ]);

        
        var options = {'title':'2016 Yılındaki Toplam Satış Adedi Dağılımı',
                       'width':800,
                       'height':700,
              backgroundColor: {fill: "" },
             titleTextStyle: { color: '#343a40'},
              titleColumnStyle: { color: '#343a40'},
              legend: {textStyle:{color: '#343a40'}},
               chartArea:{left:300,top:50},
             };

       
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </div>

   <div class="mainChart2">
      <canvas id="salesData"></canvas>
    <div id="chart_div2"></div>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">


     
      google.charts.load('current', {'packages':['corechart']});

      
      google.charts.setOnLoadCallback(drawChart);

     
      function drawChart() {

       
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          
            <?php 
            
            foreach($query1 as $row) {
            
                echo "['".$row["urun"]."',".$row["satis_adedi"]."],";
            
            }

            ?>
            
          
        ]);

      
        var options = {'title':'2017 Yılındaki Toplam Satış Adedi Dağılımı',
                       'width':800,
                       'height':700,
              backgroundColor: {fill: "" },
             titleTextStyle: { color: '#343a40'},
              titleColumnStyle: { color: '#343a40'},
              legend: {textStyle:{color: '#343a40'}},
               chartArea:{left:300,top:50},
             };

        
        var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
        chart.draw(data, options);
      }
    </script>
  </div>
 
  <div class="mainChart3">
      <canvas id="salesData3"></canvas>
    <div id="chart_div3"></div>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">


      
      google.charts.load('current', {'packages':['corechart']});

      
      google.charts.setOnLoadCallback(drawChart);

      
      function drawChart() {

       
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          
            <?php 
            
            foreach($query2 as $row) {
            
                echo "['".$row["urun"]."',".$row["satis_adedi"]."],";
            
            }

            ?>
            
          
        ]);

        
        var options = {'title':'2018 Yılındaki Toplam Satış Adedi Dağılımı',
                       'width':800,
                       'height':700,
              backgroundColor: {fill: "" },
             titleTextStyle: { color: '#343a40'},
              titleColumnStyle: { color: '#343a40'},
              legend: {textStyle:{color: '#343a40'}},
               chartArea:{left:300,top:50},
             };

        
        var chart = new google.visualization.PieChart(document.getElementById('chart_div3'));
        chart.draw(data, options);
      }
    </script>
  </div>
  
  <div class="mainChart4">
      <canvas id="salesData4"></canvas>
    <div id="chart_div4"></div>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">


      
      google.charts.load('current', {'packages':['corechart']});

      
      google.charts.setOnLoadCallback(drawChart);

     
      function drawChart() {

        
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          
            <?php 
            
            foreach($query3 as $row) {
            
                echo "['".$row["urun"]."',".$row["satis_adedi"]."],";
            
            }

            ?>
            
          
        ]);

        
        var options = {'title':'2019 Yılındaki Toplam Satış Adedi Dağılımı',
                       'width':800,
                       'height':700,
              backgroundColor: {fill: "" },
             titleTextStyle: { color: '#343a40'},
              titleColumnStyle: { color: '#343a40'},
              legend: {textStyle:{color: '#343a40'}},
               chartArea:{left:300,top:50},
             };

        
        var chart = new google.visualization.PieChart(document.getElementById('chart_div4'));
        chart.draw(data, options);
      }
    </script>
  </div>
  <div class="mainChart9">
      <canvas id="salesData9"></canvas>
    <div id="chart_div9"></div>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">


      
      google.charts.load('current', {'packages':['corechart']});

      
      google.charts.setOnLoadCallback(drawChart);

     
      function drawChart() {

        
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          
            <?php 
            
            foreach($query4 as $row) {
            
                echo "['".$row["urun"]."',".$row["satis_adedi"]."],";
            
            }

            ?>
            
          
        ]);

        
        var options = {'title':'2020 Yılındaki Toplam Satış Adedi Dağılımı',
                       'width':800,
                       'height':700,
              backgroundColor: {fill: "" },
             titleTextStyle: { color: '#343a40'},
              titleColumnStyle: { color: '#343a40'},
              legend: {textStyle:{color: '#343a40'}},
               chartArea:{left:300,top:50},
             };

        
        var chart = new google.visualization.PieChart(document.getElementById('chart_div9'));
        chart.draw(data, options);
      }
    </script>
  </div>
  <h2>Hollanda'daki Satışlar</h2>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  
  <div class="mainChart5">
      <canvas id="salesData5"></canvas>
    <div id="chart_div5"></div>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">


     
      google.charts.load('current', {'packages':['corechart']});

      
      google.charts.setOnLoadCallback(drawChart);

     
      function drawChart() {

        
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          
            <?php 
            
            foreach($query5 as $row) {
            
                echo "['".$row["urun"]."',".$row["satis_adedi"]."],";
            
            }

            ?>
            
          
        ]);

        
        var options = {'title':'2016 Yılındaki Toplam Satış Adedi Dağılımı',
                       'width':800,
                       'height':700,
              backgroundColor: {fill: "" },
             titleTextStyle: { color: '#343a40'},
              titleColumnStyle: { color: '#343a40'},
              legend: {textStyle:{color: '#343a40'}},
               chartArea:{left:300,top:50},
             };

       
        var chart = new google.visualization.PieChart(document.getElementById('chart_div5'));
        chart.draw(data, options);
      }
    </script>
  </div>

   <div class="mainChart6">
      <canvas id="salesData6"></canvas>
    <div id="chart_div6"></div>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">


     
      google.charts.load('current', {'packages':['corechart']});

      
      google.charts.setOnLoadCallback(drawChart);

     
      function drawChart() {

       
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          
            <?php 
            
            foreach($query6 as $row) {
            
                echo "['".$row["urun"]."',".$row["satis_adedi"]."],";
            
            }

            ?>
            
          
        ]);

      
        var options = {'title':'2017 Yılındaki Toplam Satış Adedi Dağılımı',
                       'width':800,
                       'height':700,
              backgroundColor: {fill: "" },
             titleTextStyle: { color: '#343a40'},
              titleColumnStyle: { color: '#343a40'},
              legend: {textStyle:{color: '#343a40'}},
               chartArea:{left:300,top:50},
             };

        
        var chart = new google.visualization.PieChart(document.getElementById('chart_div6'));
        chart.draw(data, options);
      }
    </script>
  </div>
 
  <div class="mainChart7">
      <canvas id="salesData7"></canvas>
    <div id="chart_div7"></div>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">


      
      google.charts.load('current', {'packages':['corechart']});

      
      google.charts.setOnLoadCallback(drawChart);

      
      function drawChart() {

       
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          
            <?php 
            
            foreach($query7 as $row) {
            
                echo "['".$row["urun"]."',".$row["satis_adedi"]."],";
            
            }

            ?>
            
          
        ]);

        
        var options = {'title':'2018 Yılındaki Toplam Satış Adedi Dağılımı',
                       'width':800,
                       'height':700,
              backgroundColor: {fill: "" },
             titleTextStyle: { color: '#343a40'},
              titleColumnStyle: { color: '#343a40'},
              legend: {textStyle:{color: '#343a40'}},
               chartArea:{left:300,top:50},
             };

        
        var chart = new google.visualization.PieChart(document.getElementById('chart_div7'));
        chart.draw(data, options);
      }
    </script>
  </div>
  
  <div class="mainChart8">
      <canvas id="salesData8"></canvas>
    <div id="chart_div8"></div>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">


      
      google.charts.load('current', {'packages':['corechart']});

      
      google.charts.setOnLoadCallback(drawChart);

     
      function drawChart() {

        
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          
            <?php 
            
            foreach($query8 as $row) {
            
                echo "['".$row["urun"]."',".$row["satis_adedi"]."],";
            
            }

            ?>
            
          
        ]);

        
        var options = {'title':'2019 Yılındaki Toplam Satış Adedi Dağılımı',
                       'width':800,
                       'height':700,
              backgroundColor: {fill: "" },
             titleTextStyle: { color: '#343a40'},
              titleColumnStyle: { color: '#343a40'},
              legend: {textStyle:{color: '#343a40'}},
               chartArea:{left:300,top:50},
             };

        
        var chart = new google.visualization.PieChart(document.getElementById('chart_div8'));
        chart.draw(data, options);
      }
    </script>
  </div>
    <div class="mainChart10">
      <canvas id="salesData10"></canvas>
    <div id="chart_div10"></div>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">


      
      google.charts.load('current', {'packages':['corechart']});

      
      google.charts.setOnLoadCallback(drawChart);

     
      function drawChart() {

        
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          
            <?php 
            
            foreach($query9 as $row) {
            
                echo "['".$row["urun"]."',".$row["satis_adedi"]."],";
            
            }

            ?>
            
          
        ]);

        
        var options = {'title':'2020 Yılındaki Toplam Satış Adedi Dağılımı',
                       'width':800,
                       'height':700,
              backgroundColor: {fill: "" },
             titleTextStyle: { color: '#343a40'},
              titleColumnStyle: { color: '#343a40'},
              legend: {textStyle:{color: '#343a40'}},
               chartArea:{left:300,top:50},
             };

        
        var chart = new google.visualization.PieChart(document.getElementById('chart_div10'));
        chart.draw(data, options);
      }
    </script>
  </div>
  
<br>
<br>
<br>

    
</body>
</html>







