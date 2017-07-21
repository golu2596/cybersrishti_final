<?php


if(isset($_SERVER['REQUEST_METHOD'])=="POST")
{

$conn=mysqli_connect("localhost","cyber_srishti","cyber2k17","cyber_srishti");

if(!$conn)
{
	echo "failure";
}

//$event_name=$_POST['event_name'];

$event_name=$_POST['abc'];
$password=$_POST['pass'];
// echo "<script>alert('$event_name,$password');</script>";
$query="Select Max_limit from events where event_name='$event_name' and password='$password';";

$result=mysqli_query($conn,$query);


if($result>0){


	$max1=mysqli_fetch_assoc($result);
	$max=$max1['Max_limit'];

// echo "<script>alert('$max1');</script>";

	$query1="Select * from registrations where event_name='$event_name';";
	$result1=mysqli_query($conn,$query1);

	if($result1){

echo '<!DOCTYPE html>
  <html>
    <head>
<meta charset="utf-8" />
<title>Admin</title>
<meta property="og:title" content="Cybersrishti"/>
<meta property="og:image" content="http://cybersrishti.org/images/logo.png"/>
<meta property="og:site_name" content="Cybersrishti Technical Festival JIIT  Noida"/>
<meta property="og:url" content="http://www.Cybersrishti.org"/>
<meta property="og:description" content="Official Website of the Cybersrishti"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="language" content="EN"/>
<meta name="document-type" content="PUBLIC"/>
<meta name="Keywords" content=""/>
<meta name="googlebot" content="index,follow,archive"/>
<meta name="msnbot" content="index,follow,archive"/>
<meta name="slurp" content="index,follow,archive"/>
<meta name="author" content="GDG" />
<meta name="robots" content="index,follow"/>
<meta name="robots" content="all"/>
<meta name="publisher" content="" />
<meta name="copyright" content="" />
<meta name="language" content="en" />
<meta name="revisit-after" content="1 days" />
<meta name="description" content="Cybersrishti Technical Festival of Jaypee Institute of Information Technology.">

<link rel="shortcut icon" type="image/x-icon" href="../../style/images/favicon.png" />

      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css"  media="screen,projection"/>
     <!-- <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/> -->

      <!--Let browser know website is optimized for mobile-->
    
	

    </head>';
// echo "<script>alert('sdfghjk');</script>";

			if($max==5){

				echo "<body class='#ede7f6 deep-purple lighten-5'>
				<div class='container1' style='padding:5%;'>
				<h5 class='purple-text'>All entries</h5>
			<div class='row'>
			  <table class='striped'>
			  <tr>
			  <th>Teamname</th>
			  <th>Member1_Name</th>
			  <th>Detail</th>
			  <th>Email</th>
			  <th>Mobile_no</th>
			  <th>year</th>
			  <th>Member2_Name</th>
			  <th>Detail</th>
			  <th>Member3_Name</th>
			  <th>Detail</th>
			  <th>Member4_Name</th>
			  <th>Detail</th>
			  <th>Member5_Name</th>
			  <th>Detail</th>
			  </tr>

			 ";
			}

			else if($max==4){

				echo "
			 <body class='#ede7f6 deep-purple lighten-5'>
				<div class='container1' style='padding:5%;'>
				<h5 class='purple-text'>All entries</h5>
			<div class='row'>
			  <table class='striped'>
			   <tr>
			  <th>Teamname</th>
			  <th>Member1_Name</th>
			  <th>Detail</th>
			  <th>Email</th>
			  <th>Mobile_no</th>
			  <th>year</th>
			  <th>Member2_Name</th>
			  <th>Detail</th>
			  <th>Member3_Name</th>
			  <th>Detail</th>
			  <th>Member4_Name</th>
			  <th>Detail</th>
			  </tr>

			 ";

			}
			else if($max==3){

				echo "<body class='#ede7f6 deep-purple lighten-5'>
				<div class='container1' style='padding:5%;'>
				<h5 class='purple-text'>All entries</h5>
			<div class='row'>
			  <table class='striped'>
			  <tr>
			  <th>Teamname</th>
			  <th>Member1_Name</th>
			  <th>Detail</th>
			  <th>Email</th>
			  <th>Mobile_no</th>
			  <th>year</th>
			  <th>Member2_Name</th>
			  <th>Detail</th>
			  <th>Member3_Name</th>
			  <th>Detail</th>
			
			  </tr>

			 ";

			}

			else if($max==2){

				echo "<body class='#ede7f6 deep-purple lighten-5'>
				<div class='container1' style='padding:5%;'>
				<h5 class='purple-text'>All entries</h5>
			<div class='row'>
			  <table class='striped'>
			  <tr>
			  <th>Teamname</th>
			  <th>Member1_Name</th>
			  <th>Detail</th>
			  <th>Email</th>
			  <th>Mobile_no</th>
			  <th>year</th>
			  <th>Member2_Name</th>
			  <th>Detail</th>
			
			
			  </tr>

			 ";

			}

			else if($max==1){

				echo "<body class='#ede7f6 deep-purple lighten-5'>
				<div class='container1' style='padding:5%;'>
				<h5 class='purple-text'>All entries</h5>
			<div class='row'>
			  <table class='striped'>
			  <tr>
			  <th>Teamname</th>
			  <th>Member1_Name</th>
			  <th>Detail</th>
			  <th>Email</th>
			  <th>Mobile_no</th>
			  <th>year</th>
			 
			
			
			  </tr>

			 ";

			}

		while ($row = $result1->fetch_assoc()) {
			 $temp1=$row['id'];
		     $temp2=$row['Event_name'];
			 $temp3=$row['Team_Name'];
			 // echo "<script>alert('$temp3');</script>";
			 $temp4=$row['Email'];
			 $temp5=$row['Mobile_no'];
			 $temp6=$row['year'];
			 $temp7=$row['member1_name'];
			 $temp8=$row['member1_detail'];
			 $temp9=$row['member2_name'];
			 $temp10=$row['member2_detail'];
			 $temp11=$row['member3_name'];
			 $temp12=$row['member3_detail'];
			 $temp13=$row['member4_name'];
			 $temp14=$row['member4_detail'];
			 $temp15=$row['member5_name'];
			 $temp16=$row['member5_detail'];

			  if($max==1){

				echo "
			 
			  <tr>
			  <td>$temp3</td>
			  <td>$temp7</td>
			  <td>$temp8</td>
			  <td>$temp4</td>
			  <td>$temp5</td>
			  <td>$temp6</td>
			
			
			
			  </tr>

			 ";

			}
			 else if($max==2){

				echo "
			 
			  <tr>
			  <td>$temp3</td>
			  <td>$temp7</td>
			  <td>$temp8</td>
			  <td>$temp4</td>
			  <td>$temp5</td>
			  <td>$temp6</td>
			  <td>$temp9</td>
			  <td>$temp10</td>
			
			
			  </tr>

			 ";

			}

			else if($max==3){

				echo "
			 
			  <tr>
			  <td>$temp3</td>
			  <td>$temp7</td>
			  <td>$temp8</td>
			  <td>$temp4</td>
			  <td>$temp5</td>
			  <td>$temp6</td>
			  <td>$temp9</td>
			  <td>$temp10</td>
			  <td>$temp11</td>
			  <td>$temp12</td>
			
			
			  </tr>

			 ";

			}

			else if($max==4){

				echo "
			 
			  <tr>
			  <td>$temp3</td>
			  <td>$temp7</td>
			  <td>$temp8</td>
			  <td>$temp4</td>
			  <td>$temp5</td>
			  <td>$temp6</td>
			  <td>$temp9</td>
			  <td>$temp10</td>
			  <td>$temp11</td>
			  <td>$temp12</td>
			  <td>$temp13</td>
			  <td>$temp14</td>
			
			
			  </tr>

			 ";

			}
			else if($max==5){

				echo "
			 
			  <tr>
			  <td>$temp3</td>
			  <td>$temp7</td>
			  <td>$temp8</td>
			  <td>$temp4</td>
			  <td>$temp5</td>
			  <td>$temp6</td>
			  <td>$temp9</td>
			  <td>$temp10</td>
			  <td>$temp11</td>
			  <td>$temp12</td>
			  <td>$temp13</td>
			  <td>$temp14</td>
			  <td>$temp15</td>
			  <td>$temp16</td>
			
			
			  </tr>

			 ";

			}



	}

	echo "
		</table>
		</div>
		</div>
		</body>
		</html>
	";


}
}
else {
	echo "<script>alert('Incorrect Event_name Or Password.Try Again.');
			window.location.href='admin.html';</script>";
}
}
?>

