<?php


if(isset($_SERVER['REQUEST_METHOD'])=="POST")
{

$conn=mysqli_connect("localhost","cyber_srishti","cyber2k17","cyber_srishti");

if(!$conn)
{
	echo "failure";
}

//$event_name=$_POST['event_name'];
$event_name=$_POST['ename'];
$team_name=$_POST['tname'];
// $college_name=$_POST['college_name'];
$email=$_POST['email1'];
$city=$_POST['city1'];
$mobile_no=$_POST['number1'];
$year=$_POST['year1'];
$member1_name=$_POST['fname1'];
$member2_name=$_POST['fname2'];
$member3_name=$_POST['fname3'];
$member4_name=$_POST['fname4'];
$member5_name=$_POST['fname5'];
$member1_detail=$_POST['enroll1'];
$member2_detail=$_POST['enroll2'];
$member3_detail=$_POST['enroll3'];
$member4_detail=$_POST['enroll4'];
$member5_detail=$_POST['enroll5'];


$query1="Select * from events where event_name='$event_name';";

$result1=mysqli_query($conn,$query1);

if($event_name=="Execute"){

	
		echo "Registrations are closed now.";
	
}	

else{

if(mysqli_num_rows($result1)>0){

$query="Insert into registrations(Event_Name,Team_Name,Email,Mobile_no,year,city,member1_name,member1_detail,member2_name,member2_detail,member3_name,member3_detail,member4_name,member4_detail,member5_name,member5_detail) values('$event_name','$team_name','$email','$mobile_no','$year','$city','$member1_name','$member1_detail','$member2_name','$member2_detail','$member3_name','$member3_detail','$member4_name','$member4_detail','$member5_detail','$member5_name');";
$result=mysqli_query($conn,$query);

if($result){
	echo "Your response has been recorded.";
}
else{
echo "Teamname Already Registered / Remove Special Characters and Try Again.";
}
}
else {

	echo "Try Again";

}

}
}
?>

