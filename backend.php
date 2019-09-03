<?php
include('connect.php');
if(isset($_POST['request'])){
	$request=$_POST['request'];
	
	$result = mysqli_query($con,"SELECT * FROM chatted where request='$request'");
	if(mysqli_affected_rows($con)>0){
			while($row = mysqli_fetch_array($result))
				{
					sleep(2);
				echo $row['response'];	
					
}}
else{
	sleep(2);
	echo "i did not understand";
}}

if(isset($_POST['feedback'])){
	$request=$_POST['feedback'];
	$sender=$_SERVER['REMOTE_ADDR'];
	$result = mysqli_query($con,"insert into feedback(feedback,sender) values('$request','$sender')");
	if(mysqli_affected_rows($con)>0){
			
					sleep(2);
	echo 'Thanks for Your Feedback';	
					
}
else{
	sleep(2);
	echo "error occured";
}}
?>