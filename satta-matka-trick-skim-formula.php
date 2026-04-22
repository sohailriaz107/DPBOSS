<?php
	include_once("include/connect.php");
	include_once("include/config.php");
	include_once("classes/contentInterface.php");
	$obj = new contentInterface();
	
	
	if(isset($_POST["btnSubmit"]) && functions::safeString($_POST["btnSubmit"]) != "") {
		if($_SESSION['security_code'] == $_POST['txtSecurityCode'] && !empty($_SESSION['security_code']))  {
			$res = $obj->postGuessingForumMessage(array('forum_type'=>'magic_tricks','isActive'=>0));
			
			if($res == "success") {
				$_SESSION["msg"] = "forumPostSuccess";
				header("location:".SITEURL."satta-matka-trick-skim-formula.php");
				exit;
			} else {
				$message = "<div class='alert alert-danger'><p>Something went wrong. Please try again later.</p></div>";
			}
		} else {
			$message = '<div class="alert alert-danger">Sorry, you have provided an invalid security code. Please try Again.</div>';
		}
	}
	
	if(isset($_SESSION["uSeRiD"]) && $_SESSION["uSeRiD"] != "") {
		//delete forum entry
		if(isset($_GET['act']) && functions::safeString($_GET['act']) == "del") {
			if(isset($_GET['uid']) && functions::safeString($_GET['uid']) != "" && is_numeric($_GET['uid'])) {
				$id = functions::safeString($_GET['uid']);
				
				$qry = "SELECT *, g.id as id FROM ".PREFIX."guessing_forum g
						LEFT JOIN ".PREFIX."admin a ON a.id=g.userID
						WHERE g.id='$id'";
				$result = mysqli_query($obj->connLink->conn, $qry);
				$arr = mysqli_fetch_array($result);
				
				if($arr['user_level'] == "admin" && $arr['id'] != functions::safeString($_SESSION["uSeRiD"])) {
					$qry = "DELETE FROM ".PREFIX."guessing_forum WHERE id='$id'";
					$result = mysqli_query($obj->connLink->conn, $qry);
					$message = "<div class='alert alert-success'><p>Post deleted successfully.</p></div>";
				} else {
					$message = "<div class='alert alert-danger'><p>Sorry! You cannot delete posts by other admin users.</p></div>";
				}
			}
		}
		
		$userDetails = $obj->getUserDetailsByID(functions::safeString($_SESSION["uSeRiD"]));
	}
	
	$page_n = 0;
	if(isset($_GET['page']))
	{ $page_n = $_GET['page'];}
?>

<!DOCTYPE html>
<html lang="en-in"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<title><?php if($page_n >1){echo " Page ".$page_n ;}?> DPBOSS SATTA MATKA GUESSING TRICKS FORMULA SKIMS KALYAN MUMBAI MILAN </title>
<meta name="description" content="<?php if($page_n >1){echo " Page ".$page_n ;}?> Satta matka guessing tricks formula  skimas kalyan mumbai milan rajdhani time bazar tara mumbai single ank weekly daily parfect jodi tips with tricks if you satta king matka guessing so post your formula skim here free">
<meta http-equiv="refresh" content="900">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="1 Week">
<meta name="language" content="EN">
<meta name="language" content="HI">
<meta name="rating" content="general">
<meta forua="true" http-equiv="Cache-Control" content="max-age=0" />

    <?php include_once('include/styles.php'); ?>
    <style>
    i.fa.fa-user.icon {
    padding-left: 14px;
    position: absolute;
    padding-top: 10px;
}
i.fa.fa-envelope.icon {
    padding-left: 14px;
    position: absolute;
    padding-top: 10px;
}

.panel-heading {
    color: #000 !important;
}
.white {
    color: #000;
}
</style>
</head>

<body id="bodyId">
    <?php //include_once('include/header.php'); ?>
    <!-- Page Content -->
    
    <div class="container-fluid">


        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="">
				
				
				<div align="center">
				<div style="background-color: #FFCC99; color: black; font-size: x-small; border-width:3px;border-color:red;border-style:solid;font-weight:bold;margin-top:1px;margin-bottom:1px;padding-top:6px;padding-bottom:6px;padding-left:5px;padding-right:5px;border-radius:5px;"><h1>dpboss.boston Tricks Skims Forum</h1></div>
				</div>
				


				
	           
            </div>
        </div>
		
		
<div class="fr" style="background-color:#FFCC99; color: black; font-weight: bold; font-style: none; font-size: small; text-decoration: none; border-width: 1px; border-color:blue; border-style: solid; margin: 1px; padding: 12px; border-radius: 0px; text-align: center;font-family:Times;"><big><span style="color: navy;">Forum Rules</span></big><hr><small><p class="postrule_head2">
Welcome To Dpboss Tricks Forum Kalyan<br>
Main Mumbai Matka Time bazar, Milan Day &amp; Night<br>
Rajdhani Day &amp; Night<br>Skims Formula Zone <br>
Post Your Sure ShotTrick Here Dely<br>
If Like Any Tricks On This Page<br>
Please Hit Like Button.<br>
</p></small></div>


        
        <div style="clear: both"></div>
        
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading text-center"><h2> Post Your Guess</h2></div>
                
                <div class="panel-body">
                	<div class="col-md-12">
                    	<div style="clear:both"></div>
                        <?php if($message) { echo $message; } ?>
                        <form name="form1" id="form1" method="post" action="">
                        <div class="form-group">
                        	<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                               <i class="fa fa-user icon"></i>
                                <input type="text" class="form-control" name="txtFullName" id="txtFullName" placeholder="Your Name">
                            </div>
                            <div style="clear:both">&nbsp;</div>
                            
                            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                                <i class="fa fa-envelope icon"></i>
                                <textarea name="taMessage" id="taMessage" class="form-control" rows="8"  placeholder="Message" required style="padding-top: 8px;"></textarea>
                            </div>
                            <div style="clear:both">&nbsp;</div>
                            
                            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                                <img src="<?php echo SITEURL; ?>include/CaptchaSecurityImages.php?width=140&height=60&characters=5" />
                            </div>
                            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                                <label>Please enter the security code</label>
                                <input id="txtSecurityCode" name="txtSecurityCode"  maxlength="5" type="text" placeholder="Please enter the Security Code." class="form-control" />
                            </div>
                            <div style="clear:both">&nbsp;</div>
                            
                            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                                <input type="submit" class="btn btn-lg btn-success" value="Submit" name="btnSubmit" id="btnSubmit">
                            </div>
                        </div>
						 </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-10 col-md-offset-1">
        	<?php 
				$listResult = $obj->fetchGuessingForum(array('forum_type'=>'magic_tricks')); 
				
				if(count($listResult) > 0) {
					for($i=0; $i<count($listResult); $i++) {
			?>
                    <div class="panel panel-success">
                        <div class="panel-heading" style="background:#00edff;color:black;">
                        	<div class="row">
                                <div class="col-sm-12 col-xs-12 no-padding">
                                	<i class="fa fa-user"></i> <?php echo $listResult[$i]->full_name; ?>
                                    <?php if($listResult[$i]->user_level == "admin") { ?>(Admin)<?php } ?>
									<br>
									<?php echo date('d M Y h:i:s A',$listResult[0]->datePosted); ?>
                                </div>
                              
                            </div>
                        </div>
                        
                        <div class="panel-body text-center">
                            <?php if($listResult[$i]->quoteText != "") { ?>
								<div class="col-md-12">
                                	<?php echo str_replace($arrEmoji,$arrImg,$listResult[$i]->quoteText); ?>
                            	</div>
							<?php } ?>
                            
                            <div class="col-md-12">
                                <?php echo str_replace($arrEmoji,$arrImg,$listResult[$i]->userMessage); ?>
                            </div>
                        </div>
                        
                        <?php
                        	$tot_likes = $obj->getValueWhereCond(PREFIX."likes","SUM(like_count)"," WHERE forumID='".$listResult[$i]->id."'");
                        	
                        	if($tot_likes == "") {
								$tot_likes=0;
							}
                        ?>
                        
						
						<div class="panel-footer" style="padding: 0;background:#00edff;">
                        	<div class="row">
	                        	<div class="col-md-3 col-xs-3" >
									
	                        		<span class="like_unlike" onclick="like_unlike_forum(<?php echo $listResult[$i]->id; ?>)" 
	                        			id="like-unlike-<?php echo $listResult[$i]->id; ?>" style="color:#000; cursor: pointer;text-align:center;"> [Like] </span>
	                        		<span style="color:#000;text-align:center;" id='response-data-<?php echo $listResult[$i]->id; ?>'>(<?php echo $tot_likes; ?>)</span> 
	                        	</div>
	                        	<div class="col-md-3 col-xs-3" >
								
	                        		<a style="color: #000;text-align:center;" href="<?php echo SITEURL; ?>quote_message_magic_tricks.php?p1=<?php echo $listResult[$i]->id; ?>"> [Quote]</a>
									
	                        	</div>
	                       	
	                        	<div class="col-md-3 col-xs-3" >
									
	                        		<span onClick="topFunction()" style="margin-right:20px;text-align:center;"> [Top]</span>
									
	                        	</div>
	                        	<div class="col-md-3 col-xs-3" >
							
	                        		<span onClick="bottomFunction()" style="text-align:center;"> [Down]</span>
									
	                        	</div>
	                       	</div>
                           
                        </div>
						
                    </div>
            	<?php } ?>
            	<div style="clear:both">&nbsp;</div>
                    
                <ul style="list-style:none; float:left" class="pagination">
                    <?php $obj->pagesBreadcrumb($obj->totalPages, $query_string); ?>
                </ul>
            <?php } else { ?>
            	<div class='alert alert-danger'><p>No guesses yet.</p></div>
            <?php } ?>
        </div>
        <div class="clear">&nbsp;</div>
    </div>
   
    
    <?php if(isset($_SESSION["msg"])) { ?>
    		<?php if($_SESSION['msg'] == "forumPostSuccess") { ?>
    			<!-- Modal -->
			    <div class="modal show" id="errModal">
			        <div class="modal-dialog">
			            <!-- Modal content-->
			            <div class="modal-content">
			                <div class="modal-header">
			                    <button type="button" class="close" onclick="hideMe()" data-dismiss="modal">&times;</button>
			                    <h4 class="modal-title">Thank you!</h4>
			                </div>
			                <div class="modal-body">
			    				<div class="alert alert-success"><p>Your guess has been submitted. Your post will be published after admin approval.</p></div>
			                </div>
			            </div>
			        </div>
			    </div>
    		<?php } ?>
    	<?php } ?>
    <?php include_once('include/footer.php'); ?>
    
    <?php 
		$_SESSION["msg"] = "";
        unset($_SESSION["msg"]);
	?>
    

    
    <script type="text/javascript">window.onscroll = function() {scrollFunction()};
		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				document.getElementsByClassName("topScrollBtn")[0].style.display = "block";
				document.getElementsByClassName("bottomScrollBtn")[0].style.display = "none";
				document.getElementsByClassName("topScrollBtnForum")[0].style.display = "block";
				document.getElementsByClassName("bottomScrollBtnForum")[0].style.display = "block";
			} else {
				document.getElementsByClassName("topScrollBtn")[0].style.display = "none";
				document.getElementsByClassName("bottomScrollBtn")[0].style.display = "block";
				document.getElementsByClassName("topScrollBtnForum")[0].style.display = "block";
				document.getElementsByClassName("bottomScrollBtnForum")[0].style.display = "block";
			}
		}
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
		function bottomFunction(){
			var elmnt = document.getElementById("bodyId");
			var y = elmnt.scrollHeight;
			document.body.scrollTop = y;
			document.documentElement.scrollTop = y;
			document.getElementsByClassName("bottomScrollBtn")[0].style.display = "none";
		}
	</script>
    
    <script>
		function like_unlike_forum(id) {
			$.ajax({
		        url: '<?php echo SITEURL; ?>like_unlike.php?id='+id,
		        type: 'post',
		        data: $(this).serialize(),
		        success: function(data) {
		        	//alert(data);
		        	if(data == 'login_required') {
		        		$('.modal-body').html('<div class="text-center" style="margin:50px auto"><a href="<?php echo SITEURL; ?>do-login.html">Please Log in</a><div>');
						$('#myModal').modal({show:true});
		        	} else {
						$('#response-data-'+id).html(data);
					}
		        }
		    });
		    
		    is_user_liked(id);
		}
		
		function is_user_liked(id) {
			$.ajax({
		        url: '<?php echo SITEURL; ?>user_liked.php?id='+id,
		        type: 'post',
		        data: $(this).serialize(),
		        success: function(data) {
		        	if(data > 0) {
						$("#like-unlike-"+id).addClass("text-info");
					} else {
						$("#like-unlike-"+id).removeClass("text-info");
					}
		        }
		    });
		}
				
		<?php 
			if(!empty($listResult)) {
				for($i=0; $i<count($listResult); $i++) { 
		?>
			    is_user_liked(<?php echo $listResult[$i]->id; ?>);
	    	<?php } ?>
	    <?php } ?>
    </script>
    
    <script type="text/javascript">
    	function hideMe() {
			$('#errModal').removeClass('show');
			$('#errModal').addClass('hide');
		}
</script>
</body>
</html>