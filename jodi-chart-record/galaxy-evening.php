<!DOCTYPE html>
<html amp lang="en-in">
<head>
   <meta charset="utf-8">
   <script async src="https://cdn.ampproject.org/v0.js"></script>
   <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
   <title>GALAXY EVENING JODI CHART PAIR JODI PANNA PENAL PANEL CHART</title>
   <meta name="description"
      content="GALAXY EVENING Chart. GALAXY EVENING Record Night Bombay Rajshree Matka Record online Site By dpboss satta matka 143 night Bombay Rajshree bracket jodi chart free open close jodi chart record history free day by day update here " />
   <meta name="keywords"
      content="GALAXY EVENING chart, GALAXY EVENING Rajshree chart, GALAXY EVENING jodi chart, GALAXY EVENING Rajshree jodi record, GALAXY EVENING bracket, dpboss Bombay Rajshree chart" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php $canonical_url = "https://" . $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?'); ?>
   <link rel="canonical" href="<?php echo $canonical_url; ?>">
   <?php include_once('jodi_style_amp.php'); ?>
</head>
<body>
   <?php 
   if($_SERVER['HTTP_HOST'] == 'dpboss.boston' || $_SERVER['HTTP_HOST'] == 'spboss.in'){
      include_once('../name_amp.php'); 
   }else{
      include_once('name_amp.php');
   }?>
   <div class="container-fluid">
      <div>
         <div class="panel panel-info">
            <div class="panel-heading text-center" style="background: #3f51b5;">
               <h1 style="font-size: 22px;color:#fff; text-shadow: 0px 0px;"> GALAXY EVENING JODI CHART </h1>
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
                        <th>Sat</th>
                        <th>Sun</th>
                     </tr>
                  </thead>
                  <tbody>
                  <tr>
      <td class="">41</td>
      <td class="">67</td>
      <td class="">95</td>
      <td class="">18</td>
      <td class="">91</td>
      <td class="r">05</td>
      <td class="">98</td>
   </tr>
   <tr>
      <td class="">60</td>
      <td class="r">27</td>
      <td class="">98</td>
      <td class="">53</td>
      <td class="">34</td>
      <td class="">21</td>
      <td class="">95</td>
   </tr>
                     <?php
                     if($_SERVER['HTTP_HOST'] == 'dpboss.boston' || $_SERVER['HTTP_HOST'] == 'spboss.in'){
                     include '../config.php';
                     }else{
                        include 'config.php';
                     }
                     $gh = mysqli_query($con, "SELECT * FROM panel where gameName = 'GALAXY EVENING' ORDER BY id ");
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
   if($_SERVER['HTTP_HOST'] == 'dpboss.boston' || $_SERVER['HTTP_HOST'] == 'spboss.in'){
      include_once('../shortcut_amp.php'); 
   }else{
      include_once('shortcut_amp.php');
   }?>
</body>
</html>