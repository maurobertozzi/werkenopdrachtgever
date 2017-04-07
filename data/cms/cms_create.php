<?php
include_once '../connect.php';
if(isset($_POST['submit']))
{

 // variables for input data
 $personal_hours = $_POST['personal_hours'];
 $hours_logged = $_POST['hours_logged'];
 $story_points = $_POST['story_points'];
 $user_id = $_POST['user'];
 $month_id = $_POST['month'];
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO personaldata(personalHours,hoursLogged,storyPoints) VALUES('$personal_hours','$hours_logged','$story_points')";
 		mysqli_query($mysqli,$sql_query);
        
        // sql query for inserting data into database
        echo "<script>alert('het aanmaken is gelukt');
    window.location='cms_show.php'</script>";
 
}else{
	echo "<script>alert('email of wachtwoord klopt niet!');
    window.location='logreg.html'</script>";
}

?>