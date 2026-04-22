<?php 
session_start();
$pageName='other-free-game';
require('sessions.php');
require "../config.php";
require "illegal.php";
require "functions.php";

$file='../txtdb/other-free-game.txt';
$lines= file($file);
if (isset($_POST['updateResult'])) {
  $id = $_GET['id'];
  $gName=$_POST['gName'];
  $open=$_POST['open'];
  $panna=$_POST['panna'];
  $jodi=$_POST['jodi'];
  $close=$_POST['close'];
  $data=$gName.'|'.$open.'|'.$panna.'|'.$jodi.'|'.$close.'|';

foreach($lines as $index => $line){
   if($index == $id){
       $lines[$index] = $data . "\n";
   }

}

$content = implode($lines);
$insert=file_put_contents('../txtdb/other-free-game.txt', strip_tags($content));
	$msg='<div class="alert alert-success">Update Successfully</div>';
}
else{
	$msg='<h2>Edit Result</h2>';
}
?>
<!DOCTYPE html>
<html lang="en-in">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="assets/images/favicon.ico">

	<title>Update Free Game</title>

	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/neon-core.css">
	<link rel="stylesheet" href="assets/css/neon-theme.css">
	<link rel="stylesheet" href="assets/css/neon-forms.css">
	<link rel="stylesheet" href="assets/css/custom.css">
	<link rel="stylesheet" href="assets/css/skins/red.css">

	<script src="assets/js/jquery-1.11.3.min.js"></script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body skin-red">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<?php include 'sidebar-menu.php'; ?>

	<div class="main-content">
				
		<div class="row">
		
			<!-- Profile Info and Notifications -->
			<?php include 'header.php'; ?>
		
		
			
		
		</div>
		
		<hr />
		
					
		<?php echo $msg; ?>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							Edit Result
						</div>
						
					</div>
					
					<div class="panel-body">
<?php 
foreach ($lines as $line_num => $line) {
  list($gameName, $open, $panna, $jodi, $close)=explode("|", $line);
  ?>
		<form role="form" class="form-horizontal form-groups-bordered" action="?id=<?php echo $line_num; ?>" method="post">

			<div class="row">
      <div class="col-md-2 col-sm-12">
          <label>Game Name</label>
          <input type="text" name="gName" class="form-control" id="inlineFormInput" value="<?php echo $gameName ?>">
      </div>
      <div class="col-md-2 col-sm-12">
          <label>Open</label>
          <input type="text" name="open" class="form-control" id="inlineFormInput" value="<?php echo $open ?>">
      </div>
      <div class="col-md-2 col-sm-12">
          <label>Panna</label>
          <input type="text" name="panna" class="form-control" id="inlineFormInput" value="<?php echo $panna ?>">
      </div>
      <div class="col-md-2 col-sm-12">
          <label>Jodi</label>
          <input type="text" name="jodi" class="form-control" id="inlineFormInput" value="<?php echo $jodi ?>">
      </div>
      <div class="col-md-2 col-sm-12">
          <label>Close</label>
          <input type="text" name="close" class="form-control" value="<?php echo $close ?>">
      </div>
      <div class="col-md-2 col-sm-12">
          <button type="submit" class="btn btn-primary" name="updateResult" style="margin-top: 25px">UPDATE</button>
      </div>
  </div>
		</form>
		<hr>
<?php
}
?>
					</div>
				
				</div>
			
			</div>
		</div>
		
		
<?php include 'footer.php' ?>
	</div>
	
</div>




	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/bootstrap-switch.min.js"></script>
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>