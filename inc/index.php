<?php 
$cuserID= $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id <>'$cuserID'";
$run = mysqli_query($conn,$sql);
while ($rows= mysqli_fetch_assoc($run)) {
	$id = p_s($rows['id']);
	$name = p_s($rows['name']);
	$email = p_s($rows['email']);
	$bio = p_s($rows['bio']);
	$lastactive = p_s($rows['lastactive']);
	echo'
<div class="col-md-3 col-sm-6 col-xs-12">
	<div class="panel panel-default">
		<div class="panel-heading">'.$name.'</div>
		<div class="panel-body">
			<div class="text-center">
				<img src="http://www.gravatar.com/avatar/'.md5($email).'fs=150" height="100" width="100" class="img-circle">
				<a  href="chat.php?id='.$id.'" class="btn btn-success">Chat Now</a>
			</div>
			
		</div>
		<div class="panel-footer">'.unseenMsgs($_SESSION['id'],$id).' New Messages</div>
	</div>
</div>
	';
}


?>
