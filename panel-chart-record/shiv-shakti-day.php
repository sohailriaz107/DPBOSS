<!DOCTYPE html>
<html amp lang="en-in">

<head>
   <meta charset="utf-8">
   <script async src="https://cdn.ampproject.org/v0.js"></script>
   <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
   <title>SHIV SHAKTI DAY PANEL CHART RECORD MATKA BAZAR</title>
   <meta name="description" content="SHIV SHAKTI DAY PANEL CHART RECORD PATTI PANNA BAZAR 
PATTA SHIV SHAKTI DAY I CHART SHIV SHAKTI DAY OLD CHART RECORD SHIV SHAKTI DAY RESULTS RECORD SHIV SHAKTI DAY MATKA RECORD SHIV SHAKTI DAY MATKA TIPS CHART SHIV SHAKTI DAY HISTORY CHART SHIV SHAKTI DAY PANNA CHART SHIV SHAKTI DAY PATTI PATTA CHART ONLINE LIVE 
FIX NUMBER SHIV SHAKTI DAY MATKA RECORD CHART BOOK" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php $canonical_url = "https://" . $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?'); ?>
   <link rel="canonical" href="<?php echo $canonical_url; ?>">
   <?php include_once('panel_style_amp.php'); ?>
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
               <h1 style="font-size: 22px;color:#fff; text-shadow: 0px 0px;">SHIV SHAKTI DAY PANEL CHART </h1>
            </div>
            <div class="panel-body">
               <table style="width: 100%; text-align:center;" class="panel-chart chart-table" cellpadding="2">
                  <thead>
                     <tr>
                        <th>Date</th>
                        <th colspan="3">Mon</th>
                        <th colspan="3">Tue</th>
                        <th colspan="3">Wed</th>
                        <th colspan="3">Thu</th>
                        <th colspan="3">Fri</th>
                        <th colspan="3">Sat</th>
                        <th colspan="3">Sun</th>
                     </tr>
                  </thead>
                  <tbody>
                 

                     <?php
                     if($_SERVER['HTTP_HOST'] == 'dpboss.boston' || $_SERVER['HTTP_HOST'] == 'spboss.mobi'){
                        include '../config.php';
                        }else{
                           include 'config.php';
                        }
                     $gh = mysqli_query($con, "SELECT * FROM panel where gameName = 'SHIV SHAKTI DAY' ORDER BY id ");
                     include 'panel-chart_amp.php';
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