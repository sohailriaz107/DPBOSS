<!DOCTYPE html>
<html amp lang="en-in">
<head>
   <meta charset="utf-8">
   <script async src="https://cdn.ampproject.org/v0.js"></script>
   <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
   <title>NIGHT KALYAN BAZAR JODI CHART PAIR JODI PANNA PENAL PANEL CHART</title>
   <meta name="description"
      content="NIGHT KALYAN BAZAR Chart. NIGHT KALYAN BAZAR Record Night Bombay Rajshree Matka Record online Site By dpboss satta matka 143 night Bombay Rajshree bracket jodi chart free open close jodi chart record history free day by day update here " />
   <meta name="keywords"
      content="NIGHT KALYAN BAZAR chart, NIGHT KALYAN BAZAR Rajshree chart, NIGHT KALYAN BAZAR jodi chart, NIGHT KALYAN BAZAR Rajshree jodi record, NIGHT KALYAN BAZAR bracket, dpboss Bombay Rajshree chart" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php $canonical_url = "https://" . $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?'); ?>
   <link rel="canonical" href="<?php echo $canonical_url; ?>">
   <?php include_once('jodi_style_amp.php'); ?>
</head>
<body>
   <?php 
   if($_SERVER['HTTP_HOST'] == 'dpboss.boston' || $_SERVER['HTTP_HOST'] == 'spboss.mobi'){
      include_once('../name_amp.php'); 
   }else{
      include_once('name_amp.php');
   }?>
   <div class="container-fluid">
      <div>
         <div class="panel panel-info">
            <div class="panel-heading text-center" style="background: #3f51b5;">
               <h1 style="font-size: 22px;color:#fff; text-shadow: 0px 0px;"> NIGHT KALYAN BAZAR JODI CHART </h1>
            </div>
            <div class="panel-body">
               <table style="width: 100%; text-align:center;" class="panel-chart chart-table" cellpadding="2">
                  <thead>
                     <tr>
                        <th>Mo</th>
                        <th>Tue</th>
                        <th>Wed</th>
                        <th>Thu</th>
                        <th>Fri</th>

                     </tr>
                  </thead>
                  <tbody>
               
                     <?php
                     if($_SERVER['HTTP_HOST'] == 'dpboss.boston' || $_SERVER['HTTP_HOST'] == 'spboss.mobi'){
                     include '../config.php';
                     }else{
                        include 'config.php';
                     }
                     $gh = mysqli_query($con, "SELECT * FROM panel where gameName = 'NIGHT KALYAN BAZAR' ORDER BY id ");
                     include 'jodi-chart_amp.php';
                     ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <div class="clear">&nbsp;</div>
   </div>
   <?php 
   if($_SERVER['HTTP_HOST'] == 'dpboss.boston' || $_SERVER['HTTP_HOST'] == 'spboss.mobi'){
      include_once('../shortcut_amp.php'); 
   }else{
      include_once('shortcut_amp.php');
   }?>
</body>
</html>