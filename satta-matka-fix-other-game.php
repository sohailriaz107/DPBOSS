<!DOCTYPE html>
<html lang="en-in">
<head>
<meta charset="UTF-8">
<title>Dpboss Fix Matka Satta Number Final Ank Kalyan Fix Single Jodi Today</title>
<meta name="Description" content="Dpboss Fix matka number open to close kalyan fix single jodi today final ank kal night main ratan milan rajdhani time milan madhuri morning fix fix satta number satta matka guessing free public seva fix 2 ank 3 ank fix fix fix wap 143 100 net " />
<meta name="Keywords" content="Dpboss Fix, fix matka, satta number, final ank, kalyan single fix jodi today, fix fix fix satta number, matka guessing, free public seva, 2 ank fix, satta number," />
<link rel="canonical" href="https://dpboss.boston/satta-matka-fix-game.php" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="apple-touch-icon" sizes="57x57" href="https://dpboss.boston/newfev/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="https://dpboss.boston/newfev/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="https://dpboss.boston/newfev/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="https://dpboss.boston/newfev/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="https://dpboss.boston/newfev/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="https://dpboss.boston/newfev/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="https://dpboss.boston/newfev/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="https://dpboss.boston/newfev/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://dpboss.boston/newfev/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="https://dpboss.boston/newfev/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://dpboss.boston/newfev/newfevicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="https://dpboss.boston/newfev/newfevicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://dpboss.boston/newfev/newfevicon-16x16.png">
<link rel="icon" href="https://dpboss.boston/newfev/fevicon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- local style css -->
<link rel="stylesheet" href="style_fix_game.css">

</head>
<body>
  
<!-- header -->
	    <?php include_once('name.php'); ?>
<!-- open to close -->
<div class="open-close">
	<h3>Open To Close Free Game By Dpboss</h3>
</div>
<!-- 1st card  -->
<?php 
$theData=file("txtdb/other-free-game.txt");

foreach ($theData as $line) {
list($gameName, $open, $panna, $jodi, $close)=explode("|", $line);
?>
<div class="my-card headering-1">
	<h3><?php echo $gameName ?></h3>
	<h2>OPEN : <?php echo $open ?></h2>
	<h2>PANNA : <?php echo $panna ?></h2>
	<h2>JODI : <?php echo $jodi ?></h2>
	<h2>CLOSE : <?php echo $close ?></h2>
</div>
<?php } ?>
<?php
$adFile='txtdb/advertisement.txt';
if (!empty(file_get_contents($adFile))) {
?>
<div class="my-card">
	<h3 style="background-color: red">Ad</h3>
	<h2 class=""><?php echo file_get_contents($adFile); ?></h2>
</div>
<?php } ?>

<!-- footer  -->
<div class="my-footer">
<!-- 	<div class="top-div">
		<a href="#" class="aa1">Back</a>
		<a href="#" class="aa2">Home</a>
		<a href="#" class="aa3">Guessing Forum</a>
		<a href="#" class="aa4">Date Fix Game</a>
	</div> -->
	    <?php include_once('shortcut.php'); ?>
</div>
</body>
</html>