<?php
//logout page
$email=$_GET['txtemail'];
if(isset($_POST['btn_log'])){
header('location:file1.php');	
	
}

?>

<h1>Welcome <?php echo $email ;?></h1>

<form method="post">
<input type="submit" name="btn_log" value="logout">
</form>