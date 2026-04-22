<?php
	include_once("functions.class.php");
	include_once("imageResize.php");
	include_once('phpmailer/PHPMailerAutoload.php');
	
	class contentInterface extends functions {
		function getStaticPageContents($id) {
			$qry = "SELECT * FROM ".PREFIX."staticpages WHERE id=$id";
			$result = mysqli_query($this->connLink->conn, $qry);
			$record_count = mysqli_num_rows($result);

			if ($record_count) {
				while ($obj = mysqli_fetch_object($result)) {
					$row[] = $obj;
				}
			}
			$this->record_count   = $record_count;
			return $row;
		}
		
		public function fetchBanners($id="") {
			$qry = "SELECT * FROM ".PREFIX."banners";
		
			if($id != "") {
				$qry.= " WHERE id=$id";
			}			
			$result = mysqli_query($this->connLink->conn, $qry);
			$record_count = mysqli_num_rows($result);

			if ($record_count) {
				while ($obj = mysqli_fetch_object($result)) {
					$row[] = $obj;
				}
			}
			
			$this->record_count   = $record_count;
			return $row;
		}
		
		public function fetchCategories($array=NULL) {
			$qry = "SELECT * FROM ".PREFIX."categories WHERE 1=1";
			$qry .= " ORDER BY categoryName";
			$result = mysqli_query($this->connLink->conn, $qry);
			
			$record_count = mysqli_num_rows($result);

			if ($record_count) {
				while ($obj = mysqli_fetch_object($result)) {
					$row[] = $obj;
				}
			}
			$this->record_count   = $record_count;
			return $row;
		}
		
	
		
		public function processRegistration() {
			$username = functions::safeString($_REQUEST["txtUserName"]);
			$email = functions::safeString($_POST["txtEmail"]);
			$mobileNo = functions::safeString($_POST["txtMobileNo"]);
			$firstName = functions::safeString($_POST["txtFirstName"]);
			$lastName = functions::safeString($_POST["txtLastName"]);
			$password = functions::generateEncryptedPassword($_POST["txtPassword"]);
			$status = 0;
			$date_created = time();
			$confirmationKey = functions::randomPrefix(30);
			
			$isMobileExists = self::checkMobileExists($mobileNo);
			$isUserNameExists = self::checkUserNameExists($username);
			$isEmailExists = self::checkEmailExists(strtolower($email));
			
			if($isMobileExists == true) {
				return "mobileExists";
			} else if($isUserNameExists == true) {
				return "userNameExists";
			} else if($isEmailExists == true) {
				return "emailExists";
			} else {
				$qry = "INSERT INTO ".PREFIX."admin SET
						username='$username',
						email='".$email."',
						mobileNo='$mobileNo',
					   `password`='".$password."', 
						firstName='".$firstName."',
						lastName='".$lastName."',
						date_created='".$date_created."',
						confirmationKey='".$confirmationKey."',
						user_level='user',
						status='".$status."'";
				$rs = mysqli_query($this->connLink->conn,$qry);
				
				
			}
		}
		
		private function checkUserNameExists($username) {
			$username = strtolower($username);
			$qry = "SELECT * FROM ".PREFIX."admin WHERE LOWER(username)='$username'";
			$rs = mysqli_query($this->connLink->conn,$qry);
			
			if(mysqli_num_rows($rs) > 0) { return true; } else { return false; }
		}
		
		public function changePassword($userID) {
			$oldPass = functions::generateEncryptedPassword($_REQUEST["txtOldPassword"]);
			$newPass = functions::generateEncryptedPassword($_REQUEST["txtPassword"]);
						
			$qry = "SELECT * FROM ".PREFIX."admin WHERE `password`='$oldPass' and id='$userID'";
			$result = mysqli_query($this->connLink->conn, $qry);			
			$record_count = mysqli_num_rows($result);
			
			if($record_count) {
				$qryUpd = "UPDATE ".PREFIX."admin set `password`='$newPass' WHERE id='$userID'";
				$res = mysqli_query($this->connLink->conn, $qryUpd);
				
				if($res) {
					return "1";
				} else {
					return "0";
				}
			} else {
				return "2";
			}
			
			$this->record_count   = $record_count;
			return $row;
		}
		
		public function forgotPassword() {
			$mobileNo = functions::safeString($_REQUEST["txtMobileNo"]);
			$_SESSION['confirmationKey'] = functions::randomOTP(5);
			
			//******** CHECK IF EMAIL ADDRESS ENTERED EXISTS IN THE DATABASE OR NOT
			$isMobileExists = self::checkMobileExists($mobileNo);
			
			if($isMobileExists == true) {
				$userDetails = self::getUserDetailsByMobile($mobileNo);
				$userID = $userDetails["id"];
				
				if($arr['status'] == 2) {
					return "banned_user";
				}
				
				//Insert into password request table
				$qryIns = "INSERT INTO ".PREFIX."reset_password
						SET userID='$userID',
						confirmationKey='".$_SESSION['confirmationKey']."',
						dateAdded='".time()."',
						status='0'";
				$rs = mysqli_query($this->connLink->conn,$qryIns);
				$resetID = mysqli_insert_id($this->connLink->conn);				
			
				//For sending OTP
				$url="https://control.msg91.com/api/otp.php";
				$postData = array(
					'authkey' => SMS_AUTH_KEY	,
					'mobile' => "91".$mobileNo,
					'message' => urlencode("OTP for your username ".$userDetails["username"]." is ".$_SESSION['confirmationKey']),
					'sender' => SMS_SENDER_ID,
					'otp' => $_SESSION['confirmationKey']
				);
				$paramArr['url'] = $url;
				$paramArr['postData'] = $postData;
				functions::sendRequest($paramArr);
				//print_r($response);
				
				header('location:'.SITEURL."change-password.php?uid=$resetID");
				exit;
			} else {
				return "mobileErr";
			}
		}
		
		private function getUserDetailsByMobile($mobileNo) {
			$qry = "SELECT * FROM ".PREFIX."admin WHERE LOWER(mobileNo)='$mobileNo'";
			$rs = mysqli_query($this->connLink->conn,$qry);
			
			if(mysqli_num_rows($rs) > 0) { 
				return mysqli_fetch_array($rs);
			}
			else
				return false;
		}
		
		private function getUserDetails($email) {
			$qry = "SELECT * FROM ".PREFIX."admin WHERE LOWER(email)='$email'";
			$rs = mysqli_query($this->connLink->conn,$qry);
			
			if(mysqli_num_rows($rs) > 0) { 
				return mysqli_fetch_array($rs);
			}
			else
				return false;
		}
		
		private function checkMobileExists($mobile) {
			$qry = "SELECT * FROM ".PREFIX."admin WHERE LOWER(mobileNo)='$mobile'";
			$rs = mysqli_query($this->connLink->conn,$qry);
			
			if(mysqli_num_rows($rs) > 0)
				return true;
			else
				return false;
		}
		
		private function checkEmailExists($email) {
			$qry = "SELECT * FROM ".PREFIX."admin WHERE LOWER(email)='$email'";
			$rs = mysqli_query($this->connLink->conn,$qry);
			
			if(mysqli_num_rows($rs) > 0)
				return true;
			else
				return false;
		}
		
		private function checkUserExists($email) {
			$email = strtolower($email);
			$qry = "SELECT * FROM ".PREFIX."admin WHERE LOWER(email)='$email'";
			$rs = mysqli_query($this->connLink->conn,$qry);
			
			if(mysqli_num_rows($rs) > 0) { return true; } else { return false; }
		}
		
		public function checkLinkStatus($resetID) {
			$qry = "SELECT * FROM ".PREFIX."reset_password 
					WHERE id=$resetID
					AND DATEDIFF(NOW(),DATE(FROM_UNIXTIME(dateAdded))) < 1
					AND status=0";
			$rs = mysqli_query($this->connLink->conn,$qry);
			
			if(mysqli_num_rows($rs) <= 0) {
				return "recErr";
			} else {
				return "recSucc";
			}
		}
		
		public function resetPassword($resetID,$key) {
			$password = functions::generateEncryptedPassword($_REQUEST["txtPassword"]);
			$otp = functions::safeString($_POST["txtOTP"]);
			
			if($key != $otp) {
				return "optWrong";
			} else {			
				$qry = "UPDATE ".PREFIX."reset_password r
						LEFT JOIN ".PREFIX."admin m ON m.id=r.userID
						SET m.password='$password', r.status=1
						WHERE r.id='$resetID' AND r.confirmationKey='$otp'";
				$rs = mysqli_query($this->connLink->conn,$qry);
			
				if($rs) {
					return "resetSucc";
				} else {
					return "dbErr";
				}
			}
		}
		
		public function doLogin() {
			$ipAddress = $_SERVER['REMOTE_ADDR'];
			//CHECK IF THE IP ADDRESS IS BLOCKED OR NOT
			$res = $this->chkeckBlockedIP($ipAddress);
			
			if($res == 0) {
				if(!isset($_SESSION["lOgInCoUnT"]))
					$_SESSION["lOgInCoUnT"] = 1;
				else
					$_SESSION["lOgInCoUnT"] = ($_SESSION["lOgInCoUnT"]+1);
				
				//IF LOG TRIES ARE MORE THAN 5 THEN BLOCK THE IP ADDRESS
				if($_SESSION["lOgInCoUnT"] > 5) {
					//Log to Block user account from IP ADDRESS
					$qry = "INSERT INTO ".PREFIX."login_validation
							SET ipAddress='$ipAddress',
							timeAdded='".time()."'";
					mysqli_query($this->connLink->conn,$qry);
					
					$_SESSION["lOgInCoUnT"] = "";
					unset($_SESSION["lOgInCoUnT"]);
					
					return 5;
				} else {
					$username = strtolower(functions::safeString($_POST["txtUserName"]));
					$password = functions::generateEncryptedPassword($_POST["txtPassword"]);
				
					//$qry = "SELECT * FROM ".PREFIX."admin WHERE LOWER(username)='$username' AND password='$password' AND user_level='user'";
					$qry = "SELECT * FROM ".PREFIX."admin WHERE LOWER(username)='$username' AND password='$password'";
					
					$rs = mysqli_query($this->connLink->conn,$qry);
					
					if(mysqli_num_rows($rs) > 0) {
						$arr = mysqli_fetch_array($rs);		
						$status = $arr["status"];
						
						if($status == 0) {
							return 0;
						} else if($status == 2) {
							return 2;
						}
						else if($status == 1) {
							$_SESSION["lOgInCoUnT"] = "";
							unset($_SESSION["lOgInCoUnT"]);
							$_SESSION["uSeRiD"] = $arr["id"];
							$_SESSION["user_level"] = $arr["user_level"];
							$_SESSION["uSeRnAmE"] = $arr["username"];
							
							//set cookie to store login
							if(functions::safeString($_POST["chkRememberMe"]) != "") {
								$cookie_name = "uSeRiD";
								$cookie_value = $arr["id"];
								setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/"); // 86400 = 1 day
								setcookie('uSeRnAmE',$arr["username"], time() + (86400 * 7), "/"); // 86400 = 1 day
							}
							
							//set user online
							$qryOnline = "INSERT INTO ".PREFIX."online_users SET 
										userID='".$arr["id"]."',
										lastActivity='".time()."'";
							mysqli_query($this->connLink->conn,$qryOnline);
							
							header("location:".SITEURL.'kalyan-matka-guessing.php');
						}
					} else {
						return 4;
					}
				}
			} else {
				return 5;
			}		
		}
		
		
		public function doLogin1() {
			$ipAddress = $_SERVER['REMOTE_ADDR'];
			//CHECK IF THE IP ADDRESS IS BLOCKED OR NOT
			$res = $this->chkeckBlockedIP($ipAddress);
			
			if($res == 0) {
				if(!isset($_SESSION["lOgInCoUnT"]))
					$_SESSION["lOgInCoUnT"] = 1;
				else
					$_SESSION["lOgInCoUnT"] = ($_SESSION["lOgInCoUnT"]+1);
				
				//IF LOG TRIES ARE MORE THAN 5 THEN BLOCK THE IP ADDRESS
				if(0) {
					//Log to Block user account from IP ADDRESS
					$qry = "INSERT INTO ".PREFIX."login_validation
							SET ipAddress='$ipAddress',
							timeAdded='".time()."'";
					mysqli_query($this->connLink->conn,$qry);
					
					$_SESSION["lOgInCoUnT"] = "";
					unset($_SESSION["lOgInCoUnT"]);
					
					return 5;
				} else {
					$username = strtolower(functions::safeString($_POST["txtUserName"]));
					$password = $_POST["txtPassword"];
				
					//$qry = "SELECT * FROM ".PREFIX."admin WHERE LOWER(username)='$username' AND password='$password' AND user_level='user'";
					$qry = "SELECT * FROM ".PREFIX."admin1 WHERE LOWER(username)='$username' AND password='$password'";
					
					$rs = mysqli_query($this->connLink->conn,$qry);
					
					if(mysqli_num_rows($rs) > 0) {
						$arr = mysqli_fetch_array($rs);		
						$status = $arr["status"];
						
						if($status == 0) {
							return 0;
						} else if($status == 2) {
							return 2;
						}
						else if($status == 1) {
							$_SESSION["lOgInCoUnT"] = "";
							unset($_SESSION["lOgInCoUnT"]);
							$_SESSION["uSeRiD"] = $arr["id"];
							$_SESSION["uSeRiD1"] = $arr["id"];
							
							$_SESSION["user_level"] = $arr["user_level"];
							$_SESSION["uSeRnAmE"] = $arr["username"];
							
							//set cookie to store login
							if(functions::safeString($_POST["chkRememberMe"]) != "") {
								$cookie_name = "uSeRiD";
								$cookie_name = "uSeRiD1";
								$cookie_value = $arr["id"];
								setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/"); // 86400 = 1 day
								setcookie('uSeRnAmE',$arr["username"], time() + (86400 * 7), "/"); // 86400 = 1 day
							}
							
							
							
							header("location:".SITEURL.'satta-king-guessing.php');
						}
					} else {
						return 4;
					}
				}
			} else {
				return 5;
			}		
		}
		
		public function validateAccount($array=NULL) {
			$qry = "UPDATE ".PREFIX."admin SET status='1' WHERE mobileNo='".$array['mobile_no']."'";
			$result = mysqli_query($this->connLink->conn, $qry);
			
			$qry = "SELECT * FROM ".PREFIX."admin WHERE mobileNo='".$array['mobile_no']."'";
			$result = mysqli_query($this->connLink->conn, $qry);
			$arr = mysqli_fetch_array($result);
			
			if(mysqli_num_rows($result) > 0) {
				$_SESSION["uSeRiD"] = $arr['id'];
				$_SESSION["uSeRnAmE"] = $arr["username"];
				
				//set user online
				$qryOnline = "INSERT INTO ".PREFIX."online_users SET 
							userID='".$arr["id"]."',
							lastActivity='".time()."'";
				mysqli_query($this->connLink->conn,$qryOnline);
				
				$cookie_name = "uSeRiD";
				$cookie_value = $arr["id"];
				setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/"); // 86400 = 1 day
				setcookie('uSeRnAmE',$arr["username"], time() + (86400 * 7), "/"); // 86400 = 1 day
			}
		}
		
		private function chkeckBlockedIP($ipAddress) {
			$qry = "SELECT * FROM ".PREFIX."login_validation 
					WHERE ipAddress='$ipAddress'
					AND TIMESTAMPDIFF(MINUTE,FROM_UNIXTIME(timeAdded), now()) < 30";
			$rs = mysqli_query($this->connLink->conn,$qry);		

			if(mysqli_num_rows($rs) > 0) return 1; else return 0;
		}
		
		public function confirmRegsitration() {
			$email = functions::safeString($_REQUEST["uid"]);
			$confirmationKey = functions::safeString($_REQUEST["key"]);
			
			$qry = "SELECT * FROM ".PREFIX."admin WHERE email='$email' and confirmationKey='$confirmationKey'";
			$rs = mysqli_query($this->connLink->conn,$qry);
			
			if(mysqli_num_rows($rs) > 0) {
				$arr = mysqli_fetch_array($rs);		
				$status = $arr["status"];
				
				if($status == 0) {
					$qryUpd = "UPDATE ".PREFIX."admin SET status=1 where email='$email' and confirmationKey='$confirmationKey'";
					mysqli_query($this->connLink->conn,$qryUpd);
					return "succ";
				} else if($status == 1) {
					return 1;
				} else if($status == 2) {
					return 2;
				}
			} else {
				return 3;
			}
		}
		
		public function getUserDetailsByID() {
			$qry = "SELECT * FROM ".PREFIX."admin WHERE id='".functions::safeString($_SESSION["uSeRiD"])."'";
			$result = mysqli_query($this->connLink->conn, $qry);
			$record_count = mysqli_num_rows($result);

			if ($record_count) {
				while ($obj = mysqli_fetch_object($result)) {
					$row[] = $obj;
				}
			}
			
			$this->record_count   = $record_count;
			return $row;
		}
				
		public function updateUserProfile() {
			$firstName = functions::safeString($_POST['txtFirstName']);
			$lastName = functions::safeString($_POST['txtLastName']);
			
			if($_FILES["flImage"]['name'] != "") {
				$unique_id = uniqid("whc");
				$randomNumber = functions::randomPrefix(10);
				$file_extension = functions::getEXT($_FILES["flImage"]['name']);
				$main_image = $unique_id."_".$randomNumber.".".$file_extension;
				move_uploaded_file($_FILES["flImage"]['tmp_name'],"images/profiles/".$main_image);
				
				//************ IMAGE RESIZE START ************//
				$image = new SimpleImage();
				$image->load("images/profiles/".$main_image);
				
				if($image->getWidth() > 400)
					$image->resizeToWidth(400);
				if($image->getHeight() > 300)
					$image->resizeToHeight(300);
				
				$image->save("images/profiles/".$main_image);
			} else {
				$main_image = functions::safeString($_POST['txtHiddenProfileImage']);
			}
			
			$qry = "UPDATE ".PREFIX."admin SET
					firstName='$firstName',
					lastName='$lastName',
					profileImage='$main_image'
					WHERE id='".functions::safeString($_SESSION["uSeRiD"])."'";
			$result = mysqli_query($this->connLink->conn, $qry);
			
			if($result) return "success"; else return "dbError";
		}
		
		public function fetchTestimonials() {
			if(isset($_GET["page"]) && functions::safeString($_GET["page"]) != "" && is_numeric($_GET["page"]))
				$page = functions::safeString($_GET["page"]);
			else
				$page =1;
			
			$qry = "SELECT * FROM ".PREFIX."testimonials ORDER BY id DESC";			
			$this->totalPages = functions::totalPages($qry);
			return functions::paginationData($qry,$page);
		}
		
		public function fetchEmojis() {
			if(isset($_GET["page"]) && functions::safeString($_GET["page"]) != "" && is_numeric($_GET["page"]))
				$page = functions::safeString($_GET["page"]);
			else
				$page =1;
			
			$qry = "SELECT * FROM ".PREFIX."emojis ORDER BY id DESC";			
			$this->totalPages = functions::totalPages($qry);
			return functions::paginationData($qry,$page);
		}
		
		public function postGuessingForumMessage($array=NULL) {
			$userMessage=functions::safeString($_POST['taMessage']);
		
  
			$userID=0;
			$isActive=1;
			$date=date('Y-m-d');
			$full_name='';
			


			
			if(isset($_POST['txtFullName']) && functions::safeString($_POST['txtFullName']) != "") {
				$full_name = functions::safeString($_POST['txtFullName']);
			}
			
			if(!empty($array)) {
				if(array_key_exists("userID",$array)) {
					$userID = $array['userID'];
				}
				if(array_key_exists("isActive",$array)) {
					$isActive = $array['isActive'];
				}
			}
			
			if(isset($_GET['p1'])) {
				$postID = functions::safeString($_GET['p1']);
				$forumDetails = $this->fetchGuessingForum(array('id'=>$postID));
				
				//var_dump($forumDetails);
				//exit;
				
				if($forumDetails[0]->quoteText != '') {
					$quoteText .= '<div class="well well-sm">'.$forumDetails[0]->quoteText.'</div>';
					$quoteText .= '<div style="clear:both">&nbsp</div>';
				}
				
				if($forumDetails[0]->username == "")
					$quote_username = $forumDetails[0]->full_name;
				else
					$quote_username = $forumDetails[0]->username;
				
				$quoteText .= '<div class="well well-sm">original post by '.$quote_username.' on'.date('d M Y H:i:s',$forumDetails[0]->datePosted).' <br>'.$forumDetails[0]->userMessage.'</div>';
				$quoteText .= '<div style="clear:both">&nbsp</div>';
			} else {
				$quoteText = '';
			}
			
			$qry = "INSERT INTO ".PREFIX."guessing_forum SET
					userID='$userID',
					full_name='$full_name',
					quoteText='$quoteText',
					userMessage='$userMessage',
					ipAddress='".$_SERVER['REMOTE_ADDR']."',
					datePosted='".time()."',
					date='$date',
					forum_type='".$array['forum_type']."',
					isActive='$isActive'";
			$result = mysqli_query($this->connLink->conn, $qry);
			
			if($result) return "success"; else return "dbError";
		}
		
		public function postGuessingForumMessage1($array=NULL) {
			$userMessage=functions::safeString($_POST['taMessage']);
		
  
			$userID=0;
			$isActive=1;
			$date=date('Y-m-d');
			$full_name='';
			


			
			if(isset($_POST['txtFullName']) && functions::safeString($_POST['txtFullName']) != "") {
				$full_name = functions::safeString($_POST['txtFullName']);
			}
			
			if(!empty($array)) {
				if(array_key_exists("userID",$array)) {
					$userID = $array['userID'];
				}
				if(array_key_exists("isActive",$array)) {
					$isActive = $array['isActive'];
				}
			}
			
			if(isset($_GET['p1'])) {
				$postID = functions::safeString($_GET['p1']);
				$forumDetails = $this->fetchGuessingForum(array('id'=>$postID));
				
				//var_dump($forumDetails);
				//exit;
				
				if($forumDetails[0]->quoteText != '') {
					$quoteText .= '<div class="well well-sm">'.$forumDetails[0]->quoteText.'</div>';
					$quoteText .= '<div style="clear:both">&nbsp</div>';
				}
				
				if($forumDetails[0]->username == "")
					$quote_username = $forumDetails[0]->full_name;
				else
					$quote_username = $forumDetails[0]->username;
				
				$quoteText .= '<div class="well well-sm">original post by '.$quote_username.' on'.date('d M Y H:i:s',$forumDetails[0]->datePosted).' <br>'.$forumDetails[0]->userMessage.'</div>';
				$quoteText .= '<div style="clear:both">&nbsp</div>';
			} else {
				$quoteText = '';
			}
			
			$qry = "INSERT INTO ".PREFIX."guessing_forum1 SET
					userID='$userID',
					full_name='$full_name',
					quoteText='$quoteText',
					userMessage='$userMessage',
					ipAddress='".$_SERVER['REMOTE_ADDR']."',
					datePosted='".time()."',
					date='$date',
					website='dpboss.boston',
					forum_type='".$array['forum_type']."',
					isActive='$isActive'";
			$result = mysqli_query($this->connLink->conn, $qry);
			
			if($result) return "success"; else return "dbError";
		}
		
		public function fetchGuessingForum($array=NULL) {
			if(isset($_GET["page"]) && functions::safeString($_GET["page"]) != "" && is_numeric($_GET["page"]))
				$page = functions::safeString($_GET["page"]);
			else
				$page =1;
			
			$qry = "SELECT *, g.id as id FROM ".PREFIX."guessing_forum g
					LEFT JOIN ".PREFIX."admin a ON a.id=g.userID
					WHERE isActive='1'";
			
			if(!empty($array)) {
				if(array_key_exists("forum_type",$array)) {
					if($array['forum_type'] != 'magic_tricks') {
						$qry .= " AND forum_type='".$array['forum_type']."' AND a.status='1'";
					} else {
						$qry .= " AND forum_type='".$array['forum_type']."'";
					}
				}

				if(array_key_exists("id",$array)) {
					$qry .= " AND g.id='".$array['id']."'";
				}
				if(array_key_exists("originalPost",$array)) {
					if($array['originalPost'] == 1) {
						$qry .= " AND quoteText=''";
					}
				}
				if(array_key_exists("search_query",$array)) {
					$qry .= " AND username LIKE '%".$array['search_query']."%'";
				}
			}
			
			$qry .= " ORDER BY `datePosted` DESC";
			
			$this->totalPages = functions::totalPages($qry);
			return functions::paginationData($qry,$page);
		}
		
				public function fetchGuessingForum1($array=NULL) {
			if(isset($_GET["page"]) && functions::safeString($_GET["page"]) != "" && is_numeric($_GET["page"]))
				$page = functions::safeString($_GET["page"]);
			else
				$page =1;
			
			$qry = "SELECT *, g.id as id FROM ".PREFIX."guessing_forum1 g
					LEFT JOIN ".PREFIX."admin1 a ON a.id=g.userID
					WHERE isActive='1' and website='dpboss.boston'";
			
			if(!empty($array)) {
				if(array_key_exists("forum_type",$array)) {
					if($array['forum_type'] != 'magic_tricks') {
						$qry .= " AND forum_type='".$array['forum_type']."' AND a.status='1'";
					} else {
						$qry .= " AND forum_type='".$array['forum_type']."'";
					}
				}

				if(array_key_exists("id",$array)) {
					$qry .= " AND g.id='".$array['id']."'";
				}
				if(array_key_exists("originalPost",$array)) {
					if($array['originalPost'] == 1) {
						$qry .= " AND quoteText=''";
					}
				}
				if(array_key_exists("search_query",$array)) {
					$qry .= " AND username LIKE '%".$array['search_query']."%'";
				}
			}
			
			$qry .= " ORDER BY `datePosted` DESC";
			
			$this->totalPages = functions::totalPages($qry);
			return functions::paginationData($qry,$page);
		}
		
		public function editGuessingForumMessage($id) {
			$userMessage = functions::safeString($_POST['taMessage']);
			
			$qry = "UPDATE ".PREFIX."guessing_forum SET userMessage='$userMessage' WHERE id='$id'";
			$rs = mysqli_query($this->connLink->conn,$qry);
			
			if($rs) {
				return "success";
			} else {
				return "dbError";
			}
		}
		
		public function fetchDailyResults($array=NULL) {
			/*$qry = "SELECT * FROM ".PREFIX."games g 
					LEFT JOIN ".PREFIX."game_results r ON g.id=r.gameID
					WHERE gameStatus='1'";*/
			$qry = "SELECT *, g.id as id, LOWER(DATE_FORMAT(resultDate, '%a')) FROM ".PREFIX."games g 
					LEFT JOIN ".PREFIX."game_results r ON g.id=r.gameID
					WHERE gameStatus='1' and on_app_forum='1'";
			
			if(!empty($array)) {
				if(array_key_exists("is_late_result",$array)) {
					$qry .= " AND isLateResult='1' AND INSTR(openDays, LOWER(DATE_FORMAT(DATE_ADD(NOW(), INTERVAL -1 DAY), '%a')))";
				} else {
					$qry .= " AND INSTR(openDays, LOWER(DATE_FORMAT(now(), '%a')))";
				}
				if(array_key_exists("result_date",$array)) {
					//$qry .= " AND resultDate='".$array['result_date']."'";
				}
				if(array_key_exists("id",$array)) {
					$qry .= " AND g.id='".$array['id']."'";
				}
			}
			
			$qry .= " GROUP BY g.id ORDER BY g.orderOfDisplay DESC";
			
			$result = mysqli_query($this->connLink->conn, $qry);
			$record_count = mysqli_num_rows($result);

			if ($record_count) {
				while ($obj = mysqli_fetch_object($result)) {
					$row[] = $obj;
				}
			}
			
			$this->record_count   = $record_count;
			return $row;
		}
		
		public function fetchGames($array=NULL) {
			$qry = "SELECT * FROM ".PREFIX."games WHERE gameStatus='1' and on_app_forum='1'";
			
			if(!empty($array)) {
				if(array_key_exists("is_late_result",$array)) {
						$qry .= " AND isLateResult='1'";
				}
				if(array_key_exists("result_date",$array)) {
					$qry .= " AND resultDate='".$array['result_date']."'";
				}
				if(array_key_exists("id",$array)) {
					$qry .= " AND id='".$array['id']."'";
				}
			}
			
			$qry .= " ORDER BY orderOfDisplay DESC";
			
			$result = mysqli_query($this->connLink->conn, $qry);
			$record_count = mysqli_num_rows($result);

			if ($record_count) {
				while ($obj = mysqli_fetch_object($result)) {
					$row[] = $obj;
				}
			}
			
			$this->record_count   = $record_count;
			return $row;
		}
		
		public function fetchGamesWithDaysFiltered($array=NULL) {
			$qry = "SELECT * FROM ".PREFIX."games WHERE gameStatus='1' AND INSTR(openDays, LOWER(DATE_FORMAT(now(), '%a')))";
			
			if(!empty($array)) {
				if(array_key_exists("is_late_result",$array)) {
						$qry .= " AND isLateResult='1'";
				}
				if(array_key_exists("result_date",$array)) {
					$qry .= " AND resultDate='".$array['result_date']."'";
				}
				if(array_key_exists("id",$array)) {
					$qry .= " AND id='".$array['id']."'";
				}
			}
			
			$qry .= " ORDER BY orderOfDisplay DESC";
			
			$result = mysqli_query($this->connLink->conn, $qry);
			$record_count = mysqli_num_rows($result);

			if ($record_count) {
				while ($obj = mysqli_fetch_object($result)) {
					$row[] = $obj;
				}
			}
			
			$this->record_count   = $record_count;
			return $row;
		}
		
		public function fetchResultByGameID($gameID) {
			$qry = "SELECT * FROM ".PREFIX."game_results WHERE gameID='$gameID' ORDER BY resultDate DESC LIMIT 1";
			$result = mysqli_query($this->connLink->conn, $qry);
			
			if(mysqli_num_rows($result) > 0) {
				$arr = mysqli_fetch_array($result);
				
				return $arr['gameResult'];
			}
		}
		
		public function fetchGamesResult($array=NULL) {
			$qry = "SELECT * FROM ".PREFIX."game_results WHERE 1=1";
			
			if(!empty($array)) {
				if(array_key_exists("gameID",$array)) {
					$qry .= " AND gameID='".$array["gameID"]."'";
				}
				if(array_key_exists("bazaarID",$array)) {
					$qry .= " AND bazaarID='".$array["bazaarID"]."'";
				}
				if(array_key_exists("result_date",$array)) {
					$qry .= " AND resultDate<'".$array["result_date"]."'";
				}
			}
			
			$qry .= " ORDER BY resultDate DESC";
			
			$result = mysqli_query($this->connLink->conn, $qry);
			$record_count = mysqli_num_rows($result);

			if ($record_count) {
				while ($obj = mysqli_fetch_object($result)) {
					$row[] = $obj;
				}
			}
			$this->record_count   = $record_count;
			return $row;
		}
		
		public function like_unlike($array=NULL) {
			$like_count = rand(30,45);
			$qry = "SELECT * FROM ".PREFIX."likes 
					WHERE forumID='".$array['forumID']."'
					AND ipAddress='".$_SERVER['REMOTE_ADDR']."'";
			$result = mysqli_query($this->connLink->conn,$qry) or die(mysqli_error($this->connLink->conn));
			$record_count = mysqli_num_rows($result);
			
			if($record_count <= 0) {
				/*$qry_ins = "INSERT INTO ".PREFIX."likes SET 
							forumID='".$array['forumID']."',
							ipAddress='".$_SERVER['REMOTE_ADDR']."',
							like_count='$like_count'";
				$result = mysqli_query($this->connLink->conn,$qry_ins) or die(mysqli_error($this->connLink->conn));*/
				
				//old method. Doesn't allow to like second time based on IP Address
			}
			
			$qry_ins = "INSERT INTO ".PREFIX."likes SET 
						forumID='".$array['forumID']."',
						ipAddress='".$_SERVER['REMOTE_ADDR']."',
						like_count='$like_count'";
			$result = mysqli_query($this->connLink->conn,$qry_ins) or die(mysqli_error($this->connLink->conn));
			
			$like_start = $this->getValueWhereCond(PREFIX."likes","SUM(like_count)"," WHERE forumID='".$array['forumID']."'");
			
			if($like_start == "")
				return "(0)";
			else
				return "(".$like_start.")";
		}
		
		public function if_user_liked($array=NULL) {
			$qry = "SELECT * FROM ".PREFIX."likes 
					WHERE forumID='".$array['forumID']."'
					AND ipAddress='".$_SERVER['REMOTE_ADDR']."'";
			$result = mysqli_query($this->connLink->conn,$qry) or die(mysqli_error($this->connLink->conn));
			return $record_count = mysqli_num_rows($result);
		}
		
		public function fetchWeeklyLine($array=NULL) {
			if(isset($_GET["page"]) && functions::safeString($_GET["page"]) != "" && is_numeric($_GET["page"]))
				$page = functions::safeString($_GET["page"]);
			else
				$page =1;
			
			$qry = "SELECT * FROM ".PREFIX."weekly_main WHERE 1=1";
			
			if(!empty($array)) {
				if(array_key_exists("id",$array)) {
					$qry .= " AND id='".functions::safeString($array["id"])."'";
				}
			}
			
			$qry .= " ORDER BY `id` DESC";
			
			$this->totalPages = functions::totalPages($qry);
			return functions::paginationData($qry,$page);
		}
		
		public function fetchFreeGames($id=NULL) {
			$qry = "SELECT * FROM ".PREFIX."free_games WHERE isActive='1'";
			
			if(!empty($array)) {
				if(array_key_exists("id",$array)) {
					$qry .= " AND id='".functions::safeString($array["id"])."'";
				}
			}
			
			$qry .= " ORDER BY `id` DESC";
			
			$result = mysqli_query($this->connLink->conn, $qry);
			$record_count = mysqli_num_rows($result);

			if ($record_count) {
				while ($obj = mysqli_fetch_object($result)) {
					$row[] = $obj;
				}
			}
			$this->record_count   = $record_count;
			return $row;
		}
		
		public function fetchStarlineGames($array=NULL) {
			$qry = "SELECT * FROM ".PREFIX."starline_games WHERE isActive='1'";
				
				if(!empty($array)) {
					if(array_key_exists("id",$array)) {
						$qry .= " AND id='".functions::safeString($array["id"])."'";
					}
				}
				
				$qry .= " ORDER BY `id` DESC";
				
				$result = mysqli_query($this->connLink->conn, $qry);
				$record_count = mysqli_num_rows($result);

				if ($record_count) {
					while ($obj = mysqli_fetch_object($result)) {
						$row[] = $obj;
					}
				}
				$this->record_count   = $record_count;
				return $row;
		}
	
		public function fetchStarlineGamesResult($array=NULL) {
			$qry = "SELECT * FROM ".PREFIX."starline_games_result WHERE 1=1";
				
				if(!empty($array)) {
					if(array_key_exists("id",$array)) {
						$qry .= " AND id='".functions::safeString($array["id"])."'";
					}
					if(array_key_exists("gameID",$array)) {
						$qry .= " AND gameID='".functions::safeString($array["gameID"])."'";
					}
				}
				
				$qry .= " ORDER BY `id` DESC";
				
				$result = mysqli_query($this->connLink->conn, $qry);
				$record_count = mysqli_num_rows($result);

				if ($record_count) {
					while ($obj = mysqli_fetch_object($result)) {
						$row[] = $obj;
					}
				}
				$this->record_count   = $record_count;
				return $row;
		}
	}
?>