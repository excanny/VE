<?php 

session_start();


if(!$_SESSION["email"])
{
    header('Location: ../dashboard/index.php/user/login');
}



include('header.php');
?>



<body class="" style="background:#C8E8D6;">		
       <br> 
	  
	<p style="background:#C8E8D6; margin:0;" class="text-center"><a href="http://veritygeo.com/demo/dashboard/" class=""><i class="fa fa-chevron-circle-right"></i> Dashboard</a></p>
		    
		<div class="chat">
		    
		    
		    		 
			<div id="frame">
			    		
				<div id="sidepanel">
				   
					<div id="profile">
					<?php
					include ('Chat.php');
					$chat = new Chat();
					//echo $_SESSION['id'];
					$loggedUser = $chat->getUserDetails($_SESSION['id']);
					//var_dump($loggedUser);
					echo '<div class="wrap">';
					$currentSession = '';
					foreach ($loggedUser as $user) {
						//echo $user['current_session'];
						   $currentSession = $user['current_session'];
						echo '<img id="profile-img" src="http://veritygeo.com/demo/dashboard/uploads/images/profile-photos/100/'.$user['photo'].'" class="online" alt="" />';
						echo  '<p>'.$user['first_name'].'</p>';
							echo '<i class="fa fa-chevron-down expand-button" aria-hidden="true" style="color:white;"></i>';
							echo '<div id="status-options">';
							echo '<ul>';
								echo '<li id="status-online" class="active"><span class="status-circle"></span> <p>Online</p></li>';
								echo '<li id="status-away"><span class="status-circle"></span> <p>Away</p></li>';
								echo '<li id="status-busy"><span class="status-circle"></span> <p>Busy</p></li>';
								echo '<li id="status-offline"><span class="status-circle"></span> <p>Offline</p></li>';
							echo '</ul>';
							echo '</div>';
							echo '<div id="expanded">';			
							echo '<a href="logout" style="color:white;"><i class="fa fa-power-off fa-lg"></i></a>';
							echo '</div>';
					}
					echo '</div>';
					?>
					</div>
					<hr style="border: 1px solid #003366;">
			
					<div id="contacts">	
					<?php
					echo '<ul>';
					$chatUsers = $chat->chatUsers($_SESSION['id']);
					foreach ($chatUsers as $user) {
						$status = 'offline';						
						if($user['online']) {
							$status = 'online';
						}
						$activeUser = '';
						if($user['id'] == $currentSession) {
							$activeUser = "active";
						}
						echo '<li id="'.$user['id'].'" class="contact '.$activeUser.'" data-touserid="'.$user['id'].'" data-tousername="'.$user['first_name'].'">';
						echo '<div class="wrap">';
						echo '<span id="status_'.$user['id'].'" class="contact-status '.$status.'"></span>';
						echo '<img src="http://veritygeo.com/demo/dashboard/uploads/images/profile-photos/100/'.$user['photo'].'" alt="" />';
						echo '<div class="meta">';
						echo '<p class="name">'.$user['first_name'].'<span id="unread_'.$user['id'].'" class="unread">'.$chat->getUnreadMessageCount($user['id'], $_SESSION['id']).'</span></p>';
						echo '<p class="preview"><span id="isTyping_'.$user['id'].'" class="isTyping"></span></p>';
						echo '</div>';
						echo '</div>';
						echo '</li>'; 
					}
					echo '</ul>';
					?>
					</div>
				</div>			
				<div class="content" id="content"> 
					<div class="contact-profile" id="userSection">	
					<?php
					$userDetails = $chat->getUserDetails($currentSession);
					//var_dump($userDetails);
					foreach ($userDetails as $user) {										
						echo '<img src="http://veritygeo.com/demo/dashboard/uploads/images/profile-photos/100/'.$user['photo'].'" alt="" />';
							echo '<p>'.$user['first_name'].'</p>';
					}	
					?>						
					</div>
					<div class="messages" id="conversation">		
					<?php
					echo $chat->getUserChat($_SESSION['id'], $currentSession);						
					?>
					</div>
					<div class="message-input" id="replySection">				
						<div class="message-input" id="replyContainer">
							<div class="wrap">
								<input type="text" class="chatMessage" id="chatMessage<?php echo $currentSession; ?>" placeholder="Write your message..." />
								<button class="submit chatButton" id="chatButton<?php echo $currentSession; ?>"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>	
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>

<?php include('footer.php');?>