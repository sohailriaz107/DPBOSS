<?php
//ini_set('display_errors',1);
//error_reporting(E_ALL); 
	include_once("include/connect_forum.php");
	include_once("include/config.php");
	include_once("classes/contentInterface.php");
	$obj = new contentInterface();
	
	
	if(isset($_POST['hideText'])) {
		if(functions::safeString($_POST['chkOP']) != "") {
			$_SESSION['original_post'] = 1;
		} else {
			$_SESSION['original_post'] = 0;
		}
		header('location:'.functions::selfURL());
	}
	
	//Get All Smiley and Emoticons
	$qry = "SELECT * FROM ".PREFIX."emojis";
	$rs = mysqli_query($obj->connLink->conn, $qry);
	while($objEmoji = mysqli_fetch_object($rs)) {
		$arrEmoji[] = $objEmoji->emojiCode;
		$arrImg[] = '<img src="'.SITEURL.'images1/emoji/'.$objEmoji->emoji_image.'">';
	}
	
	$query_string = "";
	foreach ($_GET as $key => $value) {
		if($key != "btnSearch" && $key != "page")
			$query_string .= "$key=$value&";
	}
	
	
	$page_n = 0;
	if(isset($_GET['page']))
	{ $page_n = $_GET['page'];}

?>

<?php
//enable 20 sec cache for non logged in user
if(isset($_SESSION["uSeRiD"]) || isset($_GET['s'])){
	//include("Top-cache-login-user.php");
}else{
	include("Top-cache.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>Dpboss Satta Matka Guessing Kalyan Fix Number 143 Madhur Matka<?php if($page_n >1){echo " Page ".$page_n ;}?></title>
<meta name="description" content="Dpboss guru Satta Matka Guessing Forum For Kalyan Matka Result Main Bazar Madhur Matka Milan Rajdhani Time Bazar Morning Night Fix Satta Number All Satta King Matka Guessing 143 Satta Batta Pakka Matka 143 24 Guessing Tricks For Today Lucky Number Top Matka Professor Post Your SattaMatka Leak Jodi Fix Ank Matka Games Online Matka Play Website App Trusted Dp boss Matka Net<?php if($page_n >1){echo " Page ".$page_n ;}?>" />
<meta name="keywords" content="satta matka, matka guessing, fix satta number, madhur matka. matka result, satta, matka, sattamatka, matka lucky number, today satta number, kalyan fix jodi, kalyan matka guessing, matka guessing 143, matka 24, dpboss guessing, dp boss, online matka play, online matka,<?php if($page_n >1){echo " Page ".$page_n ;}?>" />
<link rel="canonical" href="https://dpboss.boston/guessing-forum.php" />

    <?php include_once('include/styles.php'); ?>
<Style>
.admin_block a {
    background: white;
}

.form-group {
    margin-bottom: 0px;
}

.show_more_main {
    margin: 30px 0px 0px 0px;
}
.show_more {
    background-color: #f8f8f8;
    background-image: -webkit-linear-gradient(top,#fcfcfc 0,#f8f8f8 100%);
    background-image: linear-gradient(top,#fcfcfc 0,#f8f8f8 100%);
    border: 1px solid;
    border-color: #fff;
	cursor: pointer;
padding: 10px;
background: #900031;
color: white;
font-size: 15px;
}
   
   
.admin-img{width: 25px;margin-left: 10px;box-shadow: 0px 0px 3px white;border-radius: 32px;}
.ex-feature{margin-top: 5px;background-color: #9c27b0;color:white;padding: 3px 10px;box-shadow: 0 0 10px -7px #000;font-size: 15px;}
.card-footer a{cursor:pointer;}
.dddd{margin-top:10px;line-height: 2;}
.qcd{margin-top: 20px;}
.wwh {
  padding: 0;
  margin: 0 0 !important;
  background: yellow;
  color: #730000;
  border-radius: 3px;
  border: 0 !important;
  box-shadow: none !important;
  font-weight: 600;
}

.notlogged {
  height: 100px !important;
}
</style>
</head>

<body id="bodyId">
    <?php include_once('include/header.php'); ?>

<?php 
$server_ip_array = explode(".",$_SERVER['SERVER_ADDR']);?>

    <!-- Page Content -->
    <div class="container-fluid">
        <div class="para1">
    <div style="line-height: 1.4;border: 2px solid #eb008b;font-size: 12px;margin-top: 5px;margin-bottom: 5px;font-weight: 600;padding: 5px 10px;">
    <h1 style="font-size: 20px;font-weight: bold;">Dpboss Satta Matka Guessing Kalyan Main Bazar Madhur Matka</h1>Dpboss Satta Matka Guessing Forum For Kalyan Milan Main Bazar Rajdhani Madhur Matka Time Bazar Morning Madhur Sridevi All Matka Guessing Open To Close Free Ank Kalyan Fix Jodi Aaj Ke Liye Today Locky Fix Matka Satta Number Satta Matka 143 24 <?php echo $server_ip_array[3];?>Games satta king Matta Batta Online Matka Play Trusted Best सात्त मटका कल्याण मधुर मटका रेसुल्ट ऑनलाइन प्ले<br>
<a style="
      background: yellow;
padding: 6px 5px 5px;
color: #0c0c0c;
display: block;
font-size: 14px;
margin: 10px 0 10px;
border: 2px solid #fff;
box-shadow: 0 0 10px -5px #000;
      ">Duniya Ko Dikhao Apni Guessing Ka Jalwa, Guessing Post Karne Ke Liye Application Download Kare<br></a><a href="https://app.dpboss.boston/apk/com.dpbosss.forum.main_303.apk" style="font-size: 10px;padding: 6px 5px 5px;color: #fff;background-color: #080808;box-shadow: 0 0 10px -7px #000;display: inline;font-size: 14px;margin: 10px 0 15px;border: 2px solid #fff;border-radius: 6px;box-shadow: 0 0 10px -5px #000;"><big><b>Click Here to Downlod App</b></big>
    
    </a></div>
    </div>
		<div style="line-height: 1.4;border: 2px solid #eb008b;font-size: 13px;margin-top: 5px;margin-bottom: 5px;font-weight: 600;padding: 5px 10px;padding: 5px 0px 0px 0px;">
				<b>-:Posting Rules:-</b>
				<br>
				3 OPEN YA CLOSE<br>
				6 JODI<br>
				AUR 8 PANNA<br>
				AUR RESULT TIME SE 15 MIN PHELE GAME POST KARNA HOGA....!!!!<br>
				Dont Mention Date Or Time In Your Post.<br>
		<a style="background-color: #0d0d0d;color:white;padding: 3px 10px;box-shadow: 0 0 10px -7px #000;font-size: 16px;width: 100%;display: inline-block;"  href="forum-rules.php">Click Here To Read Full Guessing Forum Rules</a>		
		</div>
		<div style="line-height: 1.4;border: 2px solid #eb008b;font-size: 15px;margin-top: 5px;margin-bottom: 5px;font-weight: 600;padding: 5px 0px 0px 0px;color: navy;">
				Play Matka Online <br>
				101% Trusted - Fast Withdrawl<br>
				<a href="https://dpbossfix.net/apk/com.dpbossplay_1016.apk" target="_blank"  style="color: red;"> Download Now </a>		
		</div>
		
		
	<?php if(0){?> 
		<div class="login-area" id="login-area">
		<div style="padding-bottom:5px;">

		<h4> <?php if(isset($_SESSION["uSeRiD"]) && $_SESSION["uSeRiD"] != ""){echo 'Hello '.$_SESSION["uSeRnAmE"] .' - ';}?>Post Your Guess</h4>
		
		

							<?php if(isset($_SESSION["uSeRiD"])){?>
							<form method="post" action="guessing-forum-post.php">

							<?php if($_SESSION["user_level"] =='admin' || $_SESSION["user_level"] =='sub_admin'){
								
							}else{?> 
							<div class="select-game-div">
							<select id="game_name" name="game_name" onchange="marketNameAppend()" style="width: 311px;" > 							
							<option value=""> --- SELECT GAME ---</option>
							<?php 
								$json_data = file_get_contents('games.txt');
								$array_r = json_decode($json_data, true);
								
								if(substr(date('h:i:s'), 0, 2) =='12' && date('A') =='AM')
								  {
									$temp_Date= date('Y-m-d', strtotime(date('Y-m-d') . ' -1 day'));
								  }else{
									$temp_Date = date('Y-m-d');
								  }
						  
								$day_number = date('N', strtotime($temp_Date));

								foreach ($array_r['games'] as $games_ar) {
									$start_time = date('Y-m-d').' '.$games_ar['start_time'];
									$market_time = date('Y-m-d').' '.$games_ar['time'];

									$game_days = explode(",", $games_ar['day']);
									
									if(time() < strtotime($market_time) && time() > strtotime($start_time) && in_array($day_number, $game_days)){
									echo '<option value="'.$games_ar['game_name'].'">'.$games_ar['game_name'].'</option>';		
									}									
								}
								
							
							?> 
							</select>
							<p id="err_select_market_name" style="font-size:20px;margin: 0px;color: red;font-weight: 700;font-style: italic;color: red;margin: 0px 25px;"></p>
							</div>
							
							<?php $not_logged_class =''; } ?>
								
							<?php }else{ $not_logged_class ='notlogged'; ?>
							<form method="get" action="login.php">
							<input type="hidden" name="redirectTo" value="<?php echo $actual_link = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>">
							<?php } ?>
	                        <?php if($message) { echo $message; } ?>
						
	                        <div class="form-group">
							
							<?php if($_SESSION["user_level"] =='fake'){ ?>
							
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                               <i class="fa fa-user icon"></i>
                                <input type="text" class="form-control" name="txtFullName" id="txtFullName" placeholder="Your Name">
                            </div>
							
							
							<?php } ?>
	                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-top: 1px solid;margin: 10px 0px;padding: 5px;border-radius: 10px;">
	                            <div id="market_name_div" class="market-name-print"></div>
								
	                            <textarea name="taMessage" id="taMessage" class="form-control <?php echo $not_logged_class;?>" rows="8" maxlength="1100"></textarea> 
	                            </div>
	                            
	                            
	                            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
	                                <input type="submit" class="btn-mahi" value="Submit" name="btnSubmit" id="btnSubmit">
	                            </div>
	                        </div>
							</form>

		</div>
		</div>
	
		

        <div class="extra-feature forum-rules1">
		<div style="padding-bottom:0px;">
		
		<h4>Extra feature</h4>
					<?php if(1){?>
					<a class="btn ex-feature" href="<?php echo SITEURL; ?>emoji.php">Emoji</a>
					<a class="btn ex-feature" data-toggle="pill" href="#one">Special Offer</a>
					<a class="btn ex-feature" data-toggle="pill" href="#two">Search Users</a>
					
					
						<form method="POST" name="form3" id="form3" style="display: inline;">
						<input type="hidden" name="hideText" value="1" />
						
						<?php if($_SESSION['original_post'] == 1) {  ?>
						<input type="hidden" name="chkOP" value="" />
						<button type="submit" class="btn ex-feature">Show All Post</button>
						<?php }else{ ?>
						<input type="hidden" name="chkOP" value="1" />
						<button type="submit" class="btn ex-feature">Show Original Post</button>
						
						<?php } ?>
						
						</form>
					
					
					<?php } else{?>
					<a class="btn ex-feature" data-toggle="pill" href="#one">Special Offer</a>
					
					
					<?php } ?>
					
					<div class="tab-content" style="margin: 5px 0px;">
						<div id="one" class="tab-pane fade in">
							<div class="forum-special-offer"><?php echo $obj->special_offer; ?></div>
						</div>
						<div id="two" class="tab-pane fade in">
							
							<form id="signup-form" action="" method="get" class="form col-12">
							
							<h2>Search Users</h2>
							<div >
							<label for="username">Username</label>
							<input type="text" name="s" id="s" value="<?php echo $_GET['s']; ?>" placeholder="Enter username" >
							</div>
							
							<div >
							<button type="submit" name="submit">Search</button>
							</div>


							</form>


						</div>
					</div>
		</div>
		</div>
		
<?php } ?>		
			
		<div style="clear: both">&nbsp;</div>
			
			

        
        <div class="col-md-12 forum-post-list">



        	<?php 
        		$arrForum = array();
        		$arrForum['forum_type'] = 'guessing';
        		$arrForum['originalPost'] = 0;
        		
        		if(isset($_GET['s']) && functions::safeString($_GET['s']) != "") {
					$arrForum['search_query'] = functions::safeString($_GET['s']);
				}
        		
        		if(isset($_SESSION['original_post'])) {
					if($_SESSION['original_post'] == 1) {
						$arrForum['originalPost'] = 1;
					}
				}
        		
				$listResult = $obj->fetchGuessingForum($arrForum);
				
				if(count($listResult) > 0) {
					for($i=0; $i<count($listResult); $i++) {
			?>
			
			
							<div class="quote-card-div">
								<div class="my-card">
								<div class="card-head">
								<?php if($listResult[$i]->user_level == 'fake'){?>
								<a href="#"> 
								<?php }else{ ?>
								
								<a href="#" > 	
									
								<?php }	?>
								
								<?php if($listResult[$i]->user_level == 'fake'){echo $listResult[$i]->full_name; }else{ echo $listResult[$i]->username;}?> 
								<?php if($listResult[$i]->user_level == "admin" || $listResult[$i]->user_level == "sub_admin") { ?>
								<img src="images1/user.png" class="admin-img" alt="Admin"><?php } ?> 
								</a>
								<h5><?php echo date('d M Y h:i A',$listResult[$i]->datePosted); ?></h5>
								</div>
								<div class="card-body">
								
								<?php if($listResult[$i]->quoteText != "") { ?>
								<p class="dddd"><?php echo str_replace($arrEmoji,$arrImg,$listResult[$i]->quoteText); ?> </p>
								<?php } ?>
								<p class="eeee"><?php echo str_replace($arrEmoji,$arrImg,$listResult[$i]->userMessage); ?></p> 
								</div>
								
								
								<?php if(isset($_SESSION["aDmInUsErId"]) && $_SESSION["aDmInUsErId"] != "" || $_SESSION["user_level"] =='admin' || $_SESSION["user_level"] =='sub_admin') { ?>
								
								<div class="admin_block">
                            		<a href="<?php echo SITEURL; ?>forum_edit.php?p1=<?php echo $listResult[$i]->id; ?>" class="btn btn-sm btn-warning">Edit</a>
                            		<a href="<?php echo SITEURL; ?>guessing-forum.php
								?act=del&uid=<?php echo $listResult[$i]->id; ?>" class="btn btn-sm btn-danger">Delete</a>



								<?php if($listResult[$i]->post_source !='telegram_post') { ?>
								<a href="block.php?act=dont_post_till&uid=<?php echo $listResult[$i]->userID; ?>" class="btn btn-sm btn-warning">Block for 24 Hour</a>


								<a href="block.php?act=block&uid=<?php echo $listResult[$i]->userID; ?>" class="btn btn-sm btn-warning">Device Block</a>

								<?php }else echo '<a class="btn btn-sm btn-danger"> From T-Group </a>' ?>
								<br><br>
								</div>
                            <?php } ?>
			
							
								<div class="card-footer">
								<?php if(isset($_SESSION["uSeRiD"]) && $_SESSION["uSeRiD"] != ""){ ?>
								<a rel="nofollow" href="<?php echo SITEURL; ?>quote_message.php?p1=<?php echo $listResult[$i]->id; ?>" class="card-btn btn-11">[Quote]</a>
								<?php }else{ ?>
								<a href="<?php echo SITEURL; ?>login.php" class="card-btn btn-11">[Quote]</a>
								<?php } ?>
								<a onClick="topFunction()" class="card-btn btn-22">[Top]</a>
								<a onClick="bottomFunction()" class="card-btn btn-33">[Down]</a>
								</div>
								</div>
							</div>

				<?php $postID = $listResult[$i]->id; ?>
            	<?php } ?>

                    
					
				
				<!--
				 <ul style="list-style:none; float:left" class="pagination">
    <li <?php if($page_n == 0 || $page_n==1)echo 'class="active"';?>><a class="nicdark_btn nicdark_bg_red medium nicdark_shadow nicdark_radius white nicdark_press" href="/guessing-forum.php?page=1"> 1</a></li>
					<li <?php if($page_n == 2)echo 'class="active"';?>><a class="nicdark_btn nicdark_bg_green medium nicdark_shadow nicdark_radius white nicdark_press" href="/guessing-forum.php?page=2"> 2</a></li>
					<li <?php if($page_n == 3)echo 'class="active"';?>><a class="nicdark_btn nicdark_bg_green medium nicdark_shadow nicdark_radius white nicdark_press" href="/guessing-forum.php?page=3"> 3</a></li>
					<li<?php if($page_n == 4)echo 'class="active"';?>><a class="nicdark_btn nicdark_bg_green medium nicdark_shadow nicdark_radius white nicdark_press" href="/guessing-forum.php?page=4"> 4</a></li>
					<li<?php if($page_n == 5)echo 'class="active"';?>><a class="nicdark_btn nicdark_bg_green medium nicdark_shadow nicdark_radius white nicdark_press" href="/guessing-forum.php?page=5"> 5</a></li>
					<li <?php if($page_n == 6)echo 'class="active"';?>><a class="nicdark_btn nicdark_bg_green medium nicdark_shadow nicdark_radius white nicdark_press" href="/guessing-forum.php?page=6"> 6</a></li>
					<li <?php if($page_n == 7)echo 'class="active"';?>><a class="nicdark_btn nicdark_bg_green medium nicdark_shadow nicdark_radius white nicdark_press" href="/guessing-forum.php?page=7"> 7</a></li>
					<li <?php if($page_n == 8)echo 'class="active"';?>><a class="nicdark_btn nicdark_bg_green medium nicdark_shadow nicdark_radius white nicdark_press" href="/guessing-forum.php?page=8"> 8</a></li>
					<li <?php if($page_n == 9)echo 'class="active"';?>><a class="nicdark_btn nicdark_bg_green medium nicdark_shadow nicdark_radius white nicdark_press" href="/guessing-forum.php?page=9"> 9</a></li>
					<li <?php if($page_n == 10)echo 'class="active"';?>><a class="nicdark_btn nicdark_bg_green medium nicdark_shadow nicdark_radius white nicdark_press" href="/guessing-forum.php?page=10"> 10</a></li>
				     </ul>
					 
					 -->
					 
					 
				<?php if(1){ ?>
				<div class="show_more_main" id="show_more_main<?php echo $postID; ?>">
					<span id="<?php echo $postID; ?>" class="show_more" title="Load more posts">Show more / Next Page</span>
					<span class="loding" style="display: none;"><span class="loding_txt">Loading...</span></span>
				</div>
				<?php } ?>
				
				<?php if(0){ ?>
				<!-- stop paginaton -->
                <ul style="list-style:none; float:left" class="pagination">
                    <?php $obj->pagesBreadcrumb($obj->totalPages, $query_string); ?>
                </ul>
				<!-- stop paginaton -->
				<?php } ?>
				
            <?php } else { ?>
            	<div class='alert alert-danger'><p>No Record Found.</p></div>
            <?php } ?>
        </div>
       
    </div>
    <?php include_once('include/footer.php'); ?>
	
	<?php if(isset($_GET['game_name_not_selected'])){ ?>
	<script>
	swal("SORRY!", "Please select market name!", "error");
    </script>
	
	<?php } ?>
	
	
	<?php if(isset($_GET['empty_post'])){ ?>
	<script>
	swal("SORRY!", "Please enter your message !", "error");
    </script>

	<?php } ?>
	
	
    <?php 
		$_SESSION["msg"] = "";
        unset($_SESSION["msg"]);
	?>
	
	
<script type="text/javascript">

<?php if($_SESSION["user_level"] =='admin' || $_SESSION["user_level"] =='sub_admin'){
}else{ ?>
	        $('#taMessage').bind('keydown', function(event) {
            var market_name_str = $("#game_name").val();
            if (market_name_str !== '') {
                $("#err_select_market_name").html("");
            } else {
                $("#err_select_market_name").html("Please Select Market First");
                $("#taMessage").val('');
            }
        });
        $('#taMessage').on('blur', function(event) {
            var market_name_str = $("#game_name").val();
            if (market_name_str !== '') {
                $("#err_select_market_name").html("");
            } else {
                $("#err_select_market_name").html("Please Select Market First");
                $("#taMessage").val('');
            }
        });
	
<?php } ?>


function marketNameAppend(){
	
	
	var e = document.getElementById("game_name");
	document.getElementById("market_name_div").innerHTML = e.value;
}


$(document).ready(function(){
    $(document).on('click','.show_more',function(){
        var ID = $(this).attr('id');
        $('.show_more').hide();
        $('.loding').show();
        $.ajax({
            type:'POST',
            url:'ajax_more.php',
            data:'id='+ID,
            success:function(html){
                $('#show_more_main'+ID).remove();
                $('.forum-post-list').append(html);
            }
        });
    });
});
</script>
    
    <script src="<?php echo SITEURL; ?>js/jquery.validate.min.js"></script>
    <script>
		$(function() {
			$("#form1").validate({
				rules: {
					taMessage: 'required',
				},				
				submitHandler: function(form) {
					form.submit();
				}
			});
		});
	</script>
	
</body>
</html>


<?php 
//enable 4 sec cache for non logged in user
if(isset($_SESSION["uSeRiD"]) || isset($_GET['s'])){
	//include("Bottom-cache.php");
}else{
	include("Bottom-cache.php");
}
?>
