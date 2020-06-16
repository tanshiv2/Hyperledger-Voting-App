<?php
$flag = $_POST['flag'];
echo $flag;
if($flag[0] == "1")
{
	session_start();
	$voteID = substr($flag,1,strlen($flag)-1);
	// echo $voteID;
	$_SESSION['voteID'] = $voteID;
?>
	<script>
		// console.log(flag);
		window.location = "main.php";
	</script>
<?php
}
else if($flag[0]=="0")
{
	?>
	<script>
		alert('Incorrect username or password. Try again!');
	</script>
<?php
header("Refresh:0; url=login.php");
}
?>