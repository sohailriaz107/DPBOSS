<h1 class="chart-h1" ><?php echo $game_name;?> JODI CHART</h1>
<div class="para3">
<h2 style="font-size: 14px;margin: 0px;"> <?php echo $game_name;?> JODI RESULT CHART RECORDS </h2>
<p style="margin: 0;font-size: 12px;line-height: 14px;">Dpboss <?php echo $game_name;?> jodi chart, <?php echo $game_name;?> jodi chart, old <?php echo $game_name;?> jodi chart, dpboss <?php echo $game_name;?> chart, <?php echo $game_name;?> jodi record, <?php echo $game_name;?>jodi record, <?php echo $game_name;?> jodi chart 2015,
<?php echo $game_name;?> jodi chart 2012, <?php echo $game_name;?> jodi chart 2012 to 2023, <?php echo $game_name;?> final ank, <?php echo $game_name;?> jodi chart.co,
<?php echo $game_name;?> jodi chart matka, <?php echo $game_name;?> jodi chart book, <?php echo $game_name;?> matka chart, matka jodi chart <?php echo $game_name;?>, matka <?php echo $game_name;?> chart,
satta <?php echo $game_name;?> chart jodi, <?php echo $game_name;?> state chart, <?php echo $game_name;?> chart result,
डीपी बॉस,  सट्टा चार्ट, सट्टा मटका जोड़ी चार्ट, सट्टा मटका जोड़ी चार्ट, <?php echo $game_name_hindi;?> मटका जोड़ी चार्ट, सट्टा मटका <?php echo $game_name_hindi;?> चार्ट जोड़ी, <?php echo $game_name_hindi;?> सट्टा चार्ट, <?php echo $game_name_hindi;?> जोड़ी चार्ट </p>
</div>

<?php
$url_self = basename($_SERVER['PHP_SELF']);
$theData=file("../txtdb/xzavierJoaquinosia.txt");
	natsort($theData);
	foreach ($theData as $line) {
		list($order, $gameName, $gameResult, $timeOpen, $timeClose, $gameBgcolor, $gameFontcolor, $gameLinecolor, $frequency, $liveTimeBefore, $liveTimeAfter, $updateDate, $status, $expiryDate, $jodiLink, $jodiLink, $temp_last_updated_result)=explode("|", $line);

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