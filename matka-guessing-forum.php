<?php

	include_once("include/connect_forum.php");
	include_once("include/config.php");
	include_once("classes/contentInterface.php");
	$obj = new contentInterface();
	
	
	
	if (isset($_REQUEST['uid']) && functions::safeString($_REQUEST['act']) == 'block') {
		$user_id = $_REQUEST['uid'];
		mysqli_query($obj->connLink->conn,"update `".PREFIX."admin` set 
					status='2',
					is_block='1'
					WHERE id = '$user_id'");
		
		mysqli_query($obj->connLink->conn,"DELETE FROM `".PREFIX."guessing_forum` WHERE `userID`=" .functions::safeString($_REQUEST['uid']));
		
		
	    header("location:matka-guessing-forum.php");
	}
	
	
	if (isset($_REQUEST['uid']) && functions::safeString($_REQUEST['act']) == 'dont_post_till') {
		$user_id = $_REQUEST['uid'];
		$dont_post_till = strtotime(date('Y-m-d h:s A') . ' +1 day');
		mysqli_query($obj->connLink->conn,"update `".PREFIX."admin` set dont_post_till='$dont_post_till' WHERE id = '$user_id'");
		
	    header("location:matka-guessing-forum.php");
	}
	
	if(isset($_POST["btnSubmit"]) && functions::safeString($_POST["btnSubmit"]) != "") {
		
		if($_SESSION["user_level"] =='admin' || $_SESSION["user_level"] =='sub_admin'){
			//do not validate
		}
		elseif($_POST["game_name"] == '')
	    {
	        //header("location:".SITEURL."guessing-forum.php#login-area");
			//$message = "<div class='alert alert-danger alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> Please Select Market.</div>";
			echo "<script>alert('Please Select Market.');</script>";
			echo "<script>window.location = 'matka-guessing-forum.php?#login-area'</script>";
			exit;
			 
	    }elseif($_POST["taMessage"] == ''){
	        //header("location:".SITEURL."guessing-forum.php#login-area");
			//$message = "<div class='alert alert-danger alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> Please Insert Message.</div>";
			echo "<script>alert('Please Insert Message.');</script>";
			echo "<script>window.location = 'matka-guessing-forum.php?#login-area'</script>";
			exit;
	    }else{
	        //do not validate
	    }
		
		
		
		if(isset($_SESSION["uSeRiD"]) && $_SESSION["uSeRiD"] != ""){
			
		
		
		$res = $obj->postGuessingForumMessage(array('forum_type'=>'guessing','userID'=>functions::safeString($_SESSION["uSeRiD"])));
		
		if($res == "success") {
			$_SESSION["msg"] = "forumPostSuccess";
			header("location:matka-guessing-forum.php?forumPostSuccess");
			$message = "<div class='alert alert-success alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> Thank you! Your guess has been submitted.</div>";
			exit;
		}elseif($res == "temp_blocked"){
			
			
			$qry = "SELECT * FROM ".PREFIX."admin WHERE id='".$_SESSION["uSeRiD"]."'";
			$rs = mysqli_query($obj->connLink->conn,$qry);
			$arr = mysqli_fetch_array($rs);		
			$reason_of_block = $arr["reason_of_block"];
		
		
			$message = "<div class='alert alert-danger alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> Your Account is suspended for 24 hours. Reason - ".$reason_of_block."</div>";
		}elseif($res == "duplicate"){
			$message = "<div class='alert alert-danger alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> Duplicate Posting Not Allowed</div>";
		}elseif($res == "invalid"){
					
			header("location:".SITEURL."logout.php");
		}else {
			$message = "<div class='alert alert-danger alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> Something went wrong. Please try again later.</div>";
		}
		
		}else{
			header("location:".SITEURL."login.php");
		}
	}
	
	if(isset($_SESSION["uSeRiD"]) && $_SESSION["uSeRiD"] != "") {
		//delete forum entry
		if(isset($_GET['act']) && functions::safeString($_GET['act']) == "del") {
			if(isset($_GET['uid']) && functions::safeString($_GET['uid']) != "" && is_numeric($_GET['uid'])) {

				$id = functions::safeString($_GET['uid']);
				//echo "<script>alert('hi')</script>";
				
				//$qry = "SELECT *, g.id as id FROM ".PREFIX."guessing_forum g
					//	LEFT JOIN ".PREFIX."admin a ON a.id=g.userID
				//		WHERE g.id='$id'";
				//$result = mysqli_query($obj->connLink->conn, $qry);
				//$arr = mysqli_fetch_array($result);

				if($_SESSION["aDmInUsErTyPe"] == "admin") {
				 $qry = "DELETE FROM ".PREFIX."guessing_forum WHERE id='$id'";
				 
					$result = mysqli_query($obj->connLink->conn, $qry);
					$message = "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> Post deleted successfully.</div>";
				} else {
					$message = "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> Sorry! You cannot delete posts by other admin users.</div>";
				}
			}
		}
		
		$userDetails = $obj->getUserDetailsByID(functions::safeString($_SESSION["uSeRiD"]));
	}
	
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
if(isset($_SESSION["uSeRiD"]) || isset($_GET['s'])){}else{
	include("Top-cache.php");
}

?>

<!DOCTYPE html>
<html lang="en-in">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>kalyan Satta Matka Guessing Forum Dpboss Madhur 143 Satta Number <?php if($page_n >1){echo " Page ".$page_n ;}?></title>
<meta name="keywords" content="matka guessing, satta matka guessing, kalyan matka guessing, matka number, fix matka number, satta number, kalyan fix jodi, kalyan open , aaj ka satta, matka, kalyan, matka, satta, dpboss,dp boss <?php if($page_n >1){echo " Page ".$page_n ;}?>" />
<meta name="description" content="Dpboss Kalyan Matka Guessigng Forum Matka lucky Number Today kalyan Fix jodi 143 matka Dp Boss Madhur kalyan Matka main Mumbai Ratan Milan Night Rajdhani kalyan Night Open Close Fix Leak Game By Dpboss ratan Khatri.<?php if($page_n >1){echo " Page ".$page_n ;}?>" />
<link rel="canonical" href="https://dpboss.boston/matka-guessing-forum.php" />

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
   
   
   
</style>
</head>

<body id="bodyId">
    <?php include_once('include/header.php'); ?>
    <!-- Page Content -->
    <div class="container-fluid">
        
        <div class="para1">
		<h1> Dpboss - Guessign Forum</h1>
		<p>
		DpBoss Guesing | Satta Matka | Matka Result | Kalyan Matka | Dpboss | Sattamatka.Com | Satta Matka Guessing |
		<a href="#" title="Satta matka chart">
		Satta Matka Charts
		</a>
		| Kalyan Main Milan Matka Bazar| Matka Game |
		<a href="#" title="Free Game Open To Close">
		Fix Matka Number
		</a>
		| Free Open To Close 17 | Satta King | DpBoss Matka Guessing | Satta Matka 143 Guessing |
		</p>
		</div>
		
		
		
		<a class="btn-bb1 btn" style="background-color: #9c27b0;color:white;padding: 3px 10px;box-shadow: 0 0 10px -7px #000;font-size: 16px;"  href="forum-rules.php">Forum Rules</a>
		
		<div class="login-area" id="login-area">
		<div style="padding-bottom:5px;">

		<h4> <?php if(isset($_SESSION["uSeRiD"]) && $_SESSION["uSeRiD"] != ""){echo 'Hello '.$_SESSION["uSeRnAmE"] .' - ';}?>Post Your Guess</h4>

							<?php if(isset($_SESSION["uSeRiD"])){?>
							<form method="post" action="">

							<?php if($_SESSION["user_level"] =='admin' || $_SESSION["user_level"] =='sub_admin'){
								
							}else{?> 
							<div class="select-game-div">
							<select id="game_name" name="game_name" onchange="marketNameAppend()" style="width: 311px;" oninvalid="this.setCustomValidity('Please Select Game')" required=""> 							
							<option value=""> --- SELECT GAME ---</option>
							<?php 
								$json_data = file_get_contents('txtdb/games.txt');
								$array_r = json_decode($json_data, true);

								foreach ($array_r['games'] as $games_ar) {
									$start_time = date('Y-m-d').' '.$games_ar['start_time'];
									$market_time = date('Y-m-d').' '.$games_ar['time'];
									if(time() < strtotime($market_time) && time() > strtotime($start_time)){
									echo '<option value="'.$games_ar['game_name'].'">'.$games_ar['game_name'].'</option>';		
									}									
								}
								
							
							?> 
							</select>
							<p id="err_select_market_name" style="font-size:20px;margin: 0px;color: red;font-weight: 700;font-style: italic;color: red;margin: 0px 25px;"></p>
							</div>
							
							<?php } ?>
								
							<?php }else{?>
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
								
	                            <textarea name="taMessage" id="taMessage" class="form-control" rows="8" maxlength="600"></textarea> 
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
					<?php //if(isset($_SESSION["uSeRiD"]) && $_SESSION["uSeRiD"] != ""){?>
					<?php if(1){?>
					<a class=" btn"  style="margin-top: 5px;background-color: #9c27b0;color:white;padding: 3px 10px;box-shadow: 0 0 10px -7px #000;font-size: 15px;" href="<?php echo SITEURL; ?>emoji.php">Emoji</a>
					<a class=" btn "  style="margin-top: 5px;background-color: #9c27b0;color:white;padding: 3px 10px;box-shadow: 0 0 10px -7px #000;font-size: 15px;" data-toggle="pill" href="#one">Special Offer</a>
					<a class=" btn"  style="margin-top: 5px;background-color: #9c27b0;color:white;padding: 3px 10px;box-shadow: 0 0 10px -7px #000;font-size: 15px;" data-toggle="pill" href="#two">Search Users</a>
					
					
						<form method="POST" name="form3" id="form3" style="display: inline;">
						<input type="hidden" name="hideText" value="1" />
						
						<?php if($_SESSION['original_post'] == 1) {  ?>
						<input type="hidden" name="chkOP" value="" />
						<button type="submit" class=" btn" style="margin-top: 5px;background-color: #9c27b0;color:white;padding: 3px 10px;box-shadow: 0 0 10px -7px #000;font-size: 15px;">Show All Post</button>
						<?php }else{ ?>
						<input type="hidden" name="chkOP" value="1" />
						<button type="submit" class=" btn" style="margin-top: 5px;background-color: #9c27b0;color:white;padding: 3px 10px;box-shadow: 0 0 10px -7px #000;font-size: 15px;">Show Original Post</button>
						
						<?php } ?>
						
						</form>
					
					
					<?php } else{?>
					<a class="btn "  style="margin-top: 5px;background-color: #9c27b0;color:white;padding: 3px 10px;box-shadow: 0 0 10px -7px #000;font-size: 15px;" data-toggle="pill" href="#one">Special Offer</a>
					
					
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
								<?php if($listResult[$i]->user_level == "admin" || $listResult[$i]->user_level == "sub_admin") { ?><img src="images1/user.png" style="width: 25px;margin-left: 10px;box-shadow: 0px 0px 3px white;border-radius: 32px;" alt="Admin Account"><?php } ?> 
								
								</a>
								<h5><?php echo date('d M Y h:i A',$listResult[$i]->datePosted); ?></h5>
								</div>
								<div class="card-body">
								
								<?php if($listResult[$i]->quoteText != "") { ?>
								<p style="margin-top:10px;line-height: 2;" class="dddd"><?php echo str_replace($arrEmoji,$arrImg,$listResult[$i]->quoteText); ?> </p>
								<?php } ?>
								
								<p class="eeee"><?php echo str_replace($arrEmoji,$arrImg,$listResult[$i]->userMessage); ?></p> </div>
								
								
								<?php if(isset($_SESSION["aDmInUsErId"]) && $_SESSION["aDmInUsErId"] != "" || $_SESSION["user_level"] =='admin' || $_SESSION["user_level"] =='sub_admin') { ?>
								
								<div class="admin_block">
                            		<a href="<?php echo SITEURL; ?>forum_edit.php?p1=<?php echo $listResult[$i]->id; ?>" class="btn btn-sm btn-warning">Edit</a>
                            		
									
																	<a onClick="return confirm('Are you sure?');" href="<?php echo SITEURL; ?>matka-guessing-forum.php
								?act=del&uid=<?php echo $listResult[$i]->id; ?>" class="btn btn-sm btn-danger">Delete</a>



								<?php if($listResult[$i]->post_source !='telegram_post') { ?>
								<a onclick="return confirm('Are you sure?');" href="block.php?act=dont_post_till&uid=<?php echo $listResult[$i]->userID; ?>" class="btn btn-sm btn-warning">Block for 24 Hour</a>


								<a onclick="return confirm('Are you sure you want to Block this user?');" href="block.php?act=block&uid=<?php echo $listResult[$i]->userID; ?>" class="btn btn-sm btn-warning">Device Block</a>

								<?php }else echo '<a class="btn btn-sm btn-danger"> From T-Group </a>' ?>
								<br><br>
								</div>
                            <?php } ?>
			
							
								<div class="card-footer">
								<?php if(isset($_SESSION["uSeRiD"]) && $_SESSION["uSeRiD"] != ""){ ?>
								<a href="<?php echo SITEURL; ?>quote_message.php?p1=<?php echo $listResult[$i]->id; ?>" class="card-btn btn-11">[Quote]</a>
								<?php }else{ ?>
								<a href="<?php echo SITEURL; ?>login.php" class="card-btn btn-11">[Quote]</a>
								<?php } ?>
								<a href="#top" class="card-btn btn-22">[Top]</a>
								<a href="#bottom" class="card-btn btn-33">[Down]</a>
								</div>
								</div>
							</div>

				<?php $postID = $listResult[$i]->id; ?>
            	<?php } ?>

                    
					
				
				<?php if(0){ ?>
				<div class="show_more_main" id="show_more_main<?php echo $postID; ?>">
					<span id="<?php echo $postID; ?>" class="show_more" title="Load more posts">Show more</span>
					<span class="loding" style="display: none;"><span class="loding_txt">Loading...</span></span>
				</div>
				<?php } ?>
				
				<?php if(1){ ?>
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
		// When the browser is ready...
		$(function() {
			// Setup form validation on the #register-form element
			$("#form1").validate({
				// Specify the validation rules
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
if(isset($_SESSION["uSeRiD"]) || isset($_GET['s'])){}else{
	include("Bottom-cache.php");
}
?>
