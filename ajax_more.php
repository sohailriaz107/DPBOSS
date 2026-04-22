<?php
if(!empty($_POST["id"])){
?>


        	<?php 
			
			$api_url = "https://app.dpbossx.net/guessing_forum_list.php?post_id=".$_POST["id"];
			$response = file_get_contents($api_url);
			if ($response !== false) {
				
				$data = json_decode($response, true);

				if ($data !== null) {
					foreach ($data as $post) {
						
					$postID = $post['id'];		
				?>
			
			
							<div class="quote-card-div">
								<div class="my-card">
								<div class="card-head">
								<?php if($post['user_level'] == 'fake'){?>
								<a href="#"> 
								<?php }else{ ?>
								
								<a href="#" > 	
									
								<?php }	?>
								
								<?php if($post['user_level'] == 'fake'){echo $post['full_name']; }else{ echo $post['username'];}?> 
								<?php if($post['user_level'] == "admin" || $post['user_level'] == "sub_admin") { ?>
								<img src="images1/user.png" class="admin-img" alt="Admin"><?php } ?> 
								</a>
								<h5><?php echo $post['datePosted']; ?></h5>
								</div>
								<div class="card-body">
								
								<?php if($post['quoteText'] != "") { ?>
								<p class="dddd"><?php echo $post['quoteText']; ?> </p>
								<?php } ?>
								<p class="eeee"><?php echo $post['userMessage']; ?></p> 
								</div>

								<div class="card-footer">
								<a href="#" class="card-btn btn-11">[Quote]</a>

								<a onClick="topFunction()" class="card-btn btn-22">[Top]</a>
								<a onClick="bottomFunction()" class="card-btn btn-33">[Down]</a>
								</div>
								</div>
							</div>

				<?php
					}
				} else {
					echo "Error decoding JSON response.";
				}
			} else {
				echo "Error making API request.";
			}
			?>

                    
					
				
				
				<div class="show_more_main" id="show_more_main<?php echo $postID; ?>">
					<span id="<?php echo $postID; ?>" class="show_more" title="Load more posts">Show more / Next Page</span>
					<span class="loding" style="display: none;"><span class="loding_txt">Loading...</span></span>
				</div>
				
        </div>
        
<?php } ?>