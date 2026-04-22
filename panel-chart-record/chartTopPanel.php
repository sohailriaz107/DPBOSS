<h1 class="chart-h1" ><?php echo $game_name;?> PANEL CHART</h1>
<div class="para3">
<h2 style="font-size: 14px;margin: 0px;"> <?php echo $game_name;?> PANEL RESULT CHART RECORDS </h2>
<p style="margin: 0;font-size: 12px;line-height: 14px;">Dpboss <?php echo $game_name;?> panel chart, <?php echo $game_name;?> panel chart, old <?php echo $game_name;?> panel chart, 
<?php echo $game_name;?> pana patti chart, dpboss <?php echo $game_name;?>, <?php echo $game_name;?> panel record, <?php echo $game_name;?> panel record, <?php echo $game_name;?> panel chart 2015, 
<?php echo $game_name;?> panel chart 2012, <?php echo $game_name;?> panel chart 2012 to 2023, <?php echo $game_name;?> final ank, <?php echo $game_name;?> panel chart.co, 
<?php echo $game_name;?> panel chart matka, <?php echo $game_name;?> panel chart book, <?php echo $game_name;?> matka chart, matka panel chart <?php echo $game_name;?>, matka <?php echo $game_name;?> chart, 
satta <?php echo $game_name;?> chart panel, <?php echo $game_name;?> state chart, <?php echo $game_name;?> chart result, 
डीपी बॉस,  सट्टा चार्ट, सट्टा मटका पैनल चार्ट, सट्टा मटका पैनल चार्ट, <?php echo $game_name_hindi;?> मटका पैनल चार्ट, सट्टा मटका <?php echo $game_name_hindi;?> चार्ट पैनल, <?php echo $game_name_hindi;?> सट्टा चार्ट, <?php echo $game_name_hindi;?> पैनल चार्ट </p>
</div>


<?php
$url_self = basename($_SERVER['PHP_SELF']);
$theData=file("../txtdb/xzavierJoaquinosia.txt");
	natsort($theData);
	foreach ($theData as $line) {
		list($order, $gameName, $gameResult, $timeOpen, $timeClose, $gameBgcolor, $gameFontcolor, $gameLinecolor, $frequency, $liveTimeBefore, $liveTimeAfter, $updateDate, $status, $expiryDate, $jodiLink, $panelLink, $temp_last_updated_result)=explode("|", $line);

		if($gameName == $game_name)
		{
			$gresult = $gameResult;
		}
	}
	?>
<div class="chart-result">    
		<div><?php echo $game_name;?></div>
		<span><?php echo $gresult;?></span><br>
		<a href="<?php echo $url_self;?>">Refresh Result</a>
</div>
	
<div id="top"></div>
<a href="#bottom" class="button2"> Go to Bottom </a>