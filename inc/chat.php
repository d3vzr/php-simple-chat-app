<?php 
		$touser = p_s($_GET['id']);
		$fromuser = $_SESSION['id'];
	if (isset($_POST['sendmsg'])) {
		$msg= p_s($_POST['msg']);

		if ($conv_id = start_conv($fromuser, $touser)) {
			$sql = "INSERT INTO conv_reply (conv_id,user_id,content) VALUES('$conv_id','$fromuser','$msg')";
			if (mysqli_query($conn,$sql)) {
				header('Location: chat.php?id='.$touser);
			}
		}
	}

 ?>
<div class="container">
	<div class="msgs" style="height: 60vh; overflow-y: auto">
		<?php 
		if (!empty(getMsgs($fromuser,$touser))) {
			foreach (getMsgs($fromuser,$touser) as $msg) {
				if ($msg['user_id'] == $_SESSION['id']) {
					echo '<div>
						<div  class="alert alert-info" style="width:80%;float:right">'.$msg['content'].'</div>
					</div>';
				}else{
					if (msgSeen($msg['id'])) {
						
					}
					echo '<div><div class="alert alert-success" style="width:80%;float:left">'.$msg['content'].'</div></div>';
				}
			}
		}

		 ?>
	</div>
	<div class="sendmsg">
		<form action="" method="POST">
			<textarea class="form-control" rows="3" name="msg"></textarea>
			<button class="btn  btn-success" name="sendmsg">Send</button>			
		</form>

	</div>
</div>