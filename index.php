<?php
include "./lib/connect.php";

$query_emali1 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='emali' && species='cattle'");
$query_emali2 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='emali' && species='sheep/Goat'");
$query_kimana1 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='kimana' && species='cattle'" );
$query_kimana2 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='kimana' && species='sheep/Goat'" );
$query_sulatan1 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='Sultan_hamud' && species='cattle'");
$query_sulatan2 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='Sultan_hamud' && species='sheep/Goat'");
$query_kedong1 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='Ewuaso_Kedong' && species='cattle'");
$query_kedong2 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='Ewuaso_Kedong' && species='sheep/Goat'");
$query_illibilis1 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='illibilis' && species='cattle'");
$query_illibilis2 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='illibilis' && species='sheep/Goat'");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kilimonet</title>
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/main.css">
<script src="./js/script.js" defer></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Year', 'cattle', 'sheep/goat'],
      ['mon nov,7/2022',  8000,      3200],
      ['fri nov,11/2022',  9200,      3000],
      ['mon nov,14/2022',  8700,       3375],
      ['fri nov,18/2022',  10000,      3200],
      ['mon nov,21/2022',  10700,      3500]
    ]);

    var options = {
      title: 'Illbisil market Performance',
      curveType: 'function',
      legend: { position: 'bottom' }
    };

    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

    chart.draw(data, options);

    var data2 = google.visualization.arrayToDataTable([
    ['Year', 'cattle', 'sheep/goat'],
      ['fri nov,5/2022',  8750,      3330],
      ['fri nov,12/2022',  9000,      3400],
      ['fri nov,19/2022',  10500,       3600]
    ]);

    var options2 = {
      title: 'Emali market performance',
      curveType: 'function',
      legend: { position: 'bottom' }
    };

    var chart2 = new google.visualization.LineChart(document.getElementById('curve_chart2'));

    chart2.draw(data2, options2); 

    var data3 = google.visualization.arrayToDataTable([
    ['Year', 'cattle', 'sheep/goat'],
    ['thu nov,3/2022',  8000,      3400],
    ['thu nov,10/2022',  9500,      3600],
    ['thu nov,17/2022',  9000,       4300]
    ]);

    var options3 = {
    title: 'Sultan Hamud market performance',
    curveType: 'function',
    legend: { position: 'bottom' }
    };

    var chart3 = new google.visualization.LineChart(document.getElementById('curve_chart3'));

    chart3.draw(data3, options3); 

    var data4 = google.visualization.arrayToDataTable([
    ['Year', 'cattle', 'sheep/goat'],
    ['thu nov,3/2022',  1900,      3900],
    ['thu nov,10/2022',  1170,      4335],
    ['thu nov,17/2022',  660,       4000]
    ]);

    var options4 = {
    title: 'Ewuaso Kedong market performance',
    curveType: 'function',
    legend: { position: 'bottom' }
    };

    var chart4 = new google.visualization.LineChart(document.getElementById('curve_chart4'));

    chart4.draw(data4, options4);
    
    var data5 = google.visualization.arrayToDataTable([
    ['Year', 'cattle', 'sheep/goat'],
    ['tue nov,8/2022',  8000,      2850],
    ['tue nov,15/2022',  8500,      2700],
    ['tue nov,22/2022',  9900,       3400]
    ]);

    var options5 = {
    title: 'kimana market performance',
    curveType: 'function',
    legend: { position: 'bottom' }
    };

    var chart5 = new google.visualization.LineChart(document.getElementById('curve_chart5'));

    chart5.draw(data5, options5);
  }
</script>
</head>
<body>
<article class="topnav" id="myTopnav">
    <article class="logo">
        <img class="Mylogo" src="./images/jpg.webp">
  <a href="#" class="active">Home</a> 
  <a href="./home/resource.php">Resource</a>
  <a href="./home/blog.php">Blog</a>
  <a href="./users/survey.php">Survey</a>
  <a href="javascript:void(0);"  onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</article>
</article>
<article class="container">
    <article class="section"> 
            <!-- <h1>Welcome<span></span></h1>
                <h1 style="padding-left:30%;">To</h1>
            <a href="./users/survey.php"><h1>Kilimonet</h1></a> -->
        </article>
    </article>
    <!--livestock prices at various livestock yards displaced in tabular format-->
              <!--Illbisil market-->
              <div>
             <h2> Welcome To Kilimonet <hr></h2>
            
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, perspiciatis. 
                Veritatis repellendus rem vero Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Facilis officia suscipit voluptate, nihil neque rerum quos incidunt dicta, 
                mollitia pariatur non asperiores totam ex esse veritatis? Placeat harum mollitia 
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis quisquam, maxime natus rem incidunt
                 in distinctio.
                 Numquam dolor iste molestiae ullam possimus, est quasi impedit? Quae odio recusandae cum suscipit.
                  architecto.
                 cum soluta nam labore recusandae, mollitia ut neque id quidem. Iusto rerum molestias nobis 
                 beatae dolor.</p>
                 </div>
          <div class="textimage">
            <div class="founderimage">
            <img src="./images/Founder.webp" alt="" class="founder" style="width: 250px;
  height: 100%;">
            </div>
                 <div class="toptext">
                   <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati dolor unde, 
                    nemo ducimus aut facere debitis numquam, 
                    ipsum perspiciatis, eveniet Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit ducimus 
                    voluptatibus ipsa necessitatibus at aliquam minima inventore tenetur, vero, porro cumque explicabo. 
                    Ad asperiores quisquam, magnam consequuntur eaque tenetur ipsa.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam ab quisquam asperiores nostrum 
                    reiciendis cumque quis iste 
                    corrupti voluptatibus commodi in consequatur vitae animi eius, ullam rerum aperiam dolores aut.
                    accusantium non eum consectetur modi dicta incidunt quis atque laborum!
                  </p>
                    </div>
              </div>
                  
            <h1 class="title">Illbisil Market</h1>
            <hr>
             
            <div class="textimage1">
         <div class="toptext1" id="toptext">
             <p>Illbisil market is  One of the biggest livestock markets in East Africa, which takes place 
                every Monday and Friday.
                This market is accredited by county government of kajiado 
                 People come from far and wide to sell and buy animals here, an incredible sight above
                
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim fugit cumque veniam in, 
                officiis unde, rerum odit deleniti recusandae 
                laudantium libero beatae praesentium corrupti quod doloribus sapiente numquam neque? Maiores.
                </p>
                 </div>
                 <div class="founderimage1">
            <img src="./images/cows.jpg" alt="" class="founder1" style="width: 250px; height: 100%;">
            </div>
              </div>

                 <table class="market-price">

                    <thead>
                        <tr>
                            <td colspan="4"><H1>CATTLE</H1></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>live weight</td>
                            <td>price(ksh)</td>                    
                        </tr>
                    <?php
                      if(mysqli_num_rows($query_illibilis1) > 0){
                      ?>
                      <?php
                        while($data = mysqli_fetch_assoc($query_illibilis1)){    
                      ?>
                        
                        <tr>
                       
                            <td> <?php  echo($data['weight']); ?> </td>
                            <td><?php  echo($data['price']); ?></td>
                        </tr>
                        <?php
                        }

                      }
                      else  if(mysqli_num_rows($query_illibilis1) <= 0){
                        ?>
                        <tr>
                            <td>live weight</td>
                            <td>price(ksh)</td>
                           
                        </tr>
                        <tr>
                       
                        <td> 'empty set'</td>
                        <td>'empty set'</td>
                       </tr>
                       <?php

                      }
                      ?>
                    </tbody>
                </table>
                <table class="market-price">

                    <thead>
                        <tr>
                            <td colspan="4"><H1>sheep / Goat</H1></td>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                            <td>live weight</td>
                            <td>price(ksh)</td>
                           
                        </tr>
                    <?php
                      if(mysqli_num_rows($query_illibilis2) > 0){
                      ?>
                      <?php
                        while($data = mysqli_fetch_assoc($query_illibilis2)){    
                      ?>
                        
                        <tr>
                       
                            <td> <?php  echo($data['weight']); ?> </td>
                            <td><?php  echo($data['price']); ?></td>
                        </tr>
                        <?php
                        }

                      }
                      else  if(mysqli_num_rows($query_illibilis2) <= 0){
                        ?>
                        <tr>
                            <td>live weight</td>
                            <td>price(ksh)</td>
                           
                        </tr>
                        <tr>
                       
                        <td> 'empty set'</td>
                        <td>'empty set'</td>
                       </tr>
                       <?php

                      }
                      ?>
                    </tbody>
                </table>
            <div id="curve_chart" style="width: 900px; height: 500px"></div>
            <!--Emali market-->
                <h1 class="title">Emali Market</h1>
                <hr>
                <div class="textimage">
                  <div class="founderimage">
                <img src="./images/FB_IMG_1663505990336.jpg" class="founder" style="width: 350px; height: 100%;">
                </div>
                <div class="toptext">
                <p>Emali market is accredited livestock saleyard by county government of Kajiado.
                    It is situated along mombasa-nairobi highway,4kms from emali town.It can hold up two thousand heads of cattles.
                    it attract traders from kajiado ,makueni county Tanzania and other regions.It is usually 
                    held every Friday. </p>
                    </div>
                    </div>

                    <table class="market-price">
<thead>
    <tr>
                                <td colspan="2"><h1>CATTLE</h1></td>
                                <td colspan="2"><H1>SHEEP&GOAT</H1></td>
    </tr>
</thead>
<tbody>
<tr>
        <td>live weight</td>
        <td>price(ksh)</td>
       
    </tr>
<?php
  if(mysqli_num_rows($query_emali1) > 0){
  ?>
  <?php
    while($data = mysqli_fetch_assoc($query_emali1)){    
  ?>
    
    <tr>
   
        <td> <?php  echo($data['weight']); ?> </td>
        <td><?php  echo($data['price']); ?></td>
    </tr>
    <?php
    }

  }
  else  if(mysqli_num_rows($query_emali1) <= 0){
    ?>
    <tr>
        <td>live weight</td>
        <td>price(ksh)</td>
       
    </tr>
    <tr>
   
    <td> 'empty set'</td>
    <td>'empty set'</td>
   </tr>
   <?php

  }
  ?>
</tbody>
</table>
<table class="market-price">

<thead>
    <tr>
        <td colspan="4"><H1>sheep / Goat</H1></td>
    </tr>
</thead>
<tbody>
<tr>
        <td>live weight</td>
        <td>price(ksh)</td>
    </tr>
<?php
  if(mysqli_num_rows($query_emali2) > 0){
  ?>
  <?php
    while($data = mysqli_fetch_assoc($query_emali2)){    
  ?>
    
    <tr>
   
        <td> <?php  echo($data['weight']); ?> </td>
        <td><?php  echo($data['price']); ?></td>
    </tr>
    <?php
    }

  }
  else  if(mysqli_num_rows($query_emali2) <= 0){
    ?>
    <tr>
        <td>live weight</td>
        <td>price(ksh)</td>
       
    </tr>
    <tr>
   
    <td> 'empty set'</td>
    <td>'empty set'</td>
   </tr>
   <?php

  }
  ?>
</tbody>
</table>
                    <div id="curve_chart2" style="width: 900px; height: 500px"></div>
                    <!--sultan hamud market-->
                    <h1 class="title">Sultan Hamud Market</h1>
                    <hr>
                    <div class="textimage1">
                      <div class="toptext1">
                    <p>Sultan hamud livestock market is accredited salesyard by county government of Kajiado.
                        It is situated at the heart of sultan hamud town near standard gauge railway line.
                        It can hold up to two thousand sheep and goats.
                        It servers mainly residents of kajiado east, south,central and makueni.
                        It is usually held every Thursday.</p>
                        </div>
                        <div class="founderimage1">
                        <img src="./images/FB_IMG_1663089655445.jpg" class="founder1" style="width: 350px; height: 100%;">
                        </div>
                        </div>
                        <br>
                        <div class="textimage">
                          <div class="founderimage">
                          <img src="./images/FB_IMG_1663089696248.jpg" class="founder" style="width: 350px; height: 100%;">
                          </div>
                          <div class="toptext">
                        <p>
                          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo sunt magnam 
                          consectetur ea fugiat beatae harum eius reprehenderit aliquam, 
                          corrupti itaque, expedita quisquam at quibusdam minima numquam nemo doloribus voluptatibus.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium unde similique tenetur 
                        dolor recusandae enim quasi
                         autem quibusdam eum. Culpa voluptas nemo deserunt dolorum vitae natus nisi, fugiat eius non.
                        </p>
                          </div>
                         </div>
                        
                        
                        <table class="market-price">
<thead>
    <tr>
                                    <td colspan="2"><h1>CATTLE</h1></td>
                                    <td colspan="2"><H1>SHEEP&GOAT</H1></td>
    </tr>
</thead>
<tbody>
<tr>
        <td>live weight</td>
        <td>price(ksh)</td>
    </tr>
<?php
  if(mysqli_num_rows($query_sulatan1) > 0){
  ?>
  <?php
    while($data = mysqli_fetch_assoc($query_sulatan1)){    
  ?>
    
    <tr>
   
        <td> <?php  echo($data['weight']); ?> </td>
        <td><?php  echo($data['price']); ?></td>
    </tr>
    <?php
    }

  }
  else  if(mysqli_num_rows($query_sulatan1) <= 0){
    ?>
    <tr>
        <td>live weight</td>
        <td>price(ksh)</td>
       
    </tr>
    <tr>
   
    <td> 'empty set'</td>
    <td>'empty set'</td>
   </tr>
   <?php

  }
  ?>
</tbody>
</table>
<table class="market-price">

<thead>
    <tr>
        <td colspan="4"><H1>sheep / Goat</H1></td>
    </tr>
</thead>
<tbody>
<tr>
        <td>live weight</td>
        <td>price(ksh)</td>
    </tr>
<?php
  if(mysqli_num_rows($query_sulatan2) > 0){
  ?>
  <?php
    while($data = mysqli_fetch_assoc($query_sulatan2)){    
  ?>
    
    <tr>
   
        <td> <?php  echo($data['weight']); ?> </td>
        <td><?php  echo($data['price']); ?></td>
    </tr>
    <?php
    }

  }
  else  if(mysqli_num_rows($query_sulatan2) <= 0){
    ?>
    <tr>
        <td>live weight</td>
        <td>price(ksh)</td>
       
    </tr>
    <tr>
   
    <td> 'empty set'</td>
    <td>'empty set'</td>
   </tr>
   <?php

  }
  ?>
</tbody>
</table>
                        <div id="curve_chart3" style="width: 900px; height: 500px"></div>
                        <!--Ewuaso Kedong Livestock Market-->
                            <h1 class="title">Ewuaso Kedong Livestock Market</h1>
                            <hr>

                            <div class="textimage1">
                            <div class="toptext1">
                        <p>
                          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo sunt magnam 
                          consectetur ea fugiat beatae harum eius reprehenderit aliquam, 
                          corrupti itaque, expedita quisquam at quibusdam minima numquam nemo doloribus voluptatibus.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium unde similique tenetur 
                        dolor recusandae enim quasi
                         autem quibusdam eum. Culpa voluptas nemo deserunt dolorum vitae natus nisi, fugiat eius non.
                        </p>
                          </div>
                          <div class="founderimage1">
                            <img src="./images/FB_IMG_1663505907187.jpg" class="founder1" style="width: 350px; height: 100%;">
                            </div>
                            </div>
                            
                            <div class="textimage">
                            <div class="founderimage">
                            <img src=" ./images/FB_IMG_1663161101546.jpg" class="founder" style="width: 350px; height: 100%;">
                            </div>
                            <div class="toptext">
                        <p>
                          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo sunt magnam 
                          consectetur ea fugiat beatae harum eius reprehenderit aliquam, 
                          corrupti itaque, expedita quisquam at quibusdam minima numquam nemo doloribus voluptatibus.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium unde similique tenetur 
                        dolor recusandae enim quasi
                         autem quibusdam eum. Culpa voluptas nemo deserunt dolorum vitae natus nisi, fugiat eius non.
                        </p>
                          </div>
                          
                            </div>

                            <!-- <img src="./images/image.jpg">
                            <img src="./images/FB_IMG_1663161101546.jpg">
                            <p>This market is located near Ewuaso Kedong shopping center. </p> -->
                            <table class="market-price">
<thead>
    <tr>
                                        <td colspan="2"><h1>CATTLE</h1></td>
                                        <td colspan="2"><H1>SHEEP&GOAT</H1></td>
    </tr>
</thead>
<tbody>
<?php
  if(mysqli_num_rows($query_kedong1) > 0){
  ?>
  <?php
    while($data = mysqli_fetch_assoc($query_kedong1)){    
  ?>
    <tr>
        <td>live weight</td>
        <td>price(ksh)</td>
       
    </tr>
    <tr>
   
        <td> <?php  echo($data['weight']); ?> </td>
        <td><?php  echo($data['price']); ?></td>
    </tr>
    <?php
    }

  }
  else  if(mysqli_num_rows($query_kedong1) <= 0){
    ?>
    <tr>
        <td>live weight</td>
        <td>price(ksh)</td>
       
    </tr>
    <tr>
   
    <td> 'empty set'</td>
    <td>'empty set'</td>
   </tr>
   <?php

  }
  ?>
</tbody>
</table>
<table class="market-price">

<thead>
    <tr>
        <td colspan="4"><H1>sheep / Goat</H1></td>
    </tr>
</thead>
<tbody>
<tr>
        <td>live weight</td>
        <td>price(ksh)</td>
       
    </tr>
<?php
  if(mysqli_num_rows($query_kedong2) > 0){
  ?>
  <?php
    while($data = mysqli_fetch_assoc($query_kedong2)){    
  ?>
    
    <tr>
   
        <td> <?php  echo($data['weight']); ?> </td>
        <td><?php  echo($data['price']); ?></td>
    </tr>
    <?php
    }

  }
  else  if(mysqli_num_rows($query_kedong2) <= 0){
    ?>
    <tr>
        <td>live weight</td>
        <td>price(ksh)</td>
       
    </tr>
    <tr>
   
    <td> 'empty set'</td>
    <td>'empty set'</td>
   </tr>
   <?php

  }
  ?>
</tbody>
</table>
                            <div id="curve_chart4" style="width: 900px; height: 500px"></div>
                    <!--kimana market-->
                    <h1 class="title" >Kimana Market</h1>
                    <hr>
                    <div class="textimage1">
                    <div class="toptext1">
                        <p>
                          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo sunt magnam 
                          consectetur ea fugiat beatae harum eius reprehenderit aliquam, 
                          corrupti itaque, expedita quisquam at quibusdam minima numquam nemo doloribus voluptatibus.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium unde similique tenetur 
                        dolor recusandae enim quasi
                         autem quibusdam eum. Culpa voluptas nemo deserunt dolorum vitae natus nisi, fugiat eius non.
                        </p>
                          </div>
                          <div class="founderimage1">
                            <img src="./images/img6.jpg" class="founder1" style="width: 350px; height: 100%;">
                            </div>
                            </div>

                            <div class="textimage">
                            <div class="founderimage">
                            <img src=" ./images/img4.jpg" class="founder1" style="width: 350px; height: 100%;">
                            </div>
                    <div class="toptext">
                        <p>
                          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo sunt magnam 
                          consectetur ea fugiat beatae harum eius reprehenderit aliquam, 
                          corrupti itaque, expedita quisquam at quibusdam minima numquam nemo doloribus voluptatibus.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium unde similique tenetur 
                        dolor recusandae enim quasi
                         autem quibusdam eum. Culpa voluptas nemo deserunt dolorum vitae natus nisi, fugiat eius non.
                        </p>
                          </div>
                            </div>
                    <!-- <img src="./images/img5.jpg"> -->
                    <!-- <p>traders selling their livestock in Kimana livestock market,kajiado county.Hundreds of Maasai people gather at Kimana town every Tuesday,forming one of the largest Maasai livestock markets in Kenya. Maasai people mainly live in southern Kenya and northern Tanzania. As a nomadic ethnic group in eastern Africa,
                        Maasai people rely on livestock breeding as their main source of livelihood.</p> -->
                        <table class="market-price">
<thead>
    <tr>
                                    <td colspan="2"><h1>CATTLE</h1></td>
                                    <td colspan="2"><H1>SHEEP&GOAT</H1></td>
    </tr>
</thead>
<tbody>
<tr>
        <td>live weight</td>
        <td>price(ksh)</td>
       
    </tr>
<?php
  if(mysqli_num_rows($query_kimana1) > 0){
  ?>
  <?php
    while($data = mysqli_fetch_assoc($query_kimana1)){    
  ?>
    
    <tr>
   
        <td> <?php  echo($data['weight']); ?> </td>
        <td><?php  echo($data['price']); ?></td>
    </tr>
    <?php
    }

  }
  else  if(mysqli_num_rows($query_kimana1) <= 0){
    ?>
    <tr>
        <td>live weight</td>
        <td>price(ksh)</td>
       
    </tr>
    <tr>
   
    <td> 'empty set'</td>
    <td>'empty set'</td>
   </tr>
   <?php

  }
  ?>
</tbody>
</table>
<table class="market-price">

<thead>
    <tr>
        <td colspan="4"><H1>sheep / Goat</H1></td>
    </tr>
</thead>
<tbody>
<?php
  if(mysqli_num_rows($query_kimana2) > 0){
  ?>
  <?php
    while($data = mysqli_fetch_assoc($query_kimana2)){    
  ?>
    <tr>
        <td>live weight</td>
        <td>price(ksh)</td>
       
    </tr>
    <tr>
   
        <td> <?php  echo($data['weight']); ?> </td>
        <td><?php  echo($data['price']); ?></td>
    </tr>
    <?php
    }

  }
  else  if(mysqli_num_rows($query_kimana2) <= 0){
    ?>
    <tr>
        <td>live weight</td>
        <td>price(ksh)</td>
       
    </tr>
    <tr>
   
    <td> 'empty set'</td>
    <td>'empty set'</td>
   </tr>
   <?php

  }
  ?>
</tbody>
</table>
                        <div id="curve_chart5" style="width: 900px; height: 500px"></div>
                    <h2 class="furtherresearch">Further Research <hr> </h2>
                        <div class="research">
                        <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed laudantium doloribus labore, 
                          omnis deleniti, ad ipsum  
                        similique minus enim, animi ut <a href="https://www.kalro.org/">Kenya Agricultural and Livestock Research Organization</a>sit quaerat sequi assumenda sint dolorem debitis? Velit, eius?Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia libero laboriosam expedita natus ipsa architecto consectetur nobis quod voluptatem deserunt, 
                        quasi perspiciatis laborum asperiores? Deleniti animi dicta eius veritatis 
                        exercitationem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore amet doloribus provident odio magnam dolor obcaecati soluta accusamus assumenda qui. 
                        Blanditiis maxime hic reiciendis, dignissimos earum sunt ratione quasi quo.
                         <a href="https://meteo.go.ke/">Kenya Meteorological Department</a>
                                          </p>
                        </div>

                   
                        <!-- <article class="last-container">
                            <div> -->
                                <!-- <p class="footertext">Contact Us: Email:deyasaitabau@gmail.com</p> -->
                                <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
                                <!-- <a href="#" class="fa fa-facebook"></a> -->
                                <!-- <a href="https://web.facebook.com/profile.php?id=100072257630546" class="fa fa-facebook" style="color:white;"></a> -->
                                <!-- <p class="footertext"> Direct-helpline:+254729533373</p>
                                </div>
                                
                        </article>   -->
                        <article class="last-container">
                        <div class="footer">
                        <div class="social-buttons">
  <a href="#" class="social-button social-button--facebook" aria-label="Facebook" >
    <i id="icon"id="icon" class="fab fa-facebook-f" ></i>
  </a>
  <a href="#" class="social-button social-button--linkedin" aria-label="LinkedIn" >
    <i id="icon"id="icon" class="fab fa-linkedin-in"></i>
  </a>
  <a href="#" class="social-button social-button--snapchat" aria-label="Snapchat" >
    <i id="icon"id="icon" class="fab fa-snapchat-ghost"></i>
  </a>
  <a href="#" class="social-button social-button--github" aria-label="GitHub"     >
    <i id="icon"id="icon" class="fab fa-github"></i>
  </a>
  <a href="#" class="social-button social-button--codepen" aria-label="CodePen" >
    <i id="icon"id="icon" class="fab fa-codepen"></i>
  </a>
</div>
</div>
<div>
<p class="footertext">Contact Us: Email:deyasaitabau@gmail.com</p>
<p class="footertext"> Direct-helpline:+254729533373</p>

</div>
</article>
</body>
</html>