<?php
include_once '../connect.php';
if(isset($_POST['edit_id']))
{
	$sql_query="SELECT * FROM personaldata WHERE id=".$_GET['edit_id'];
 	$result_set=mysqli_query($mysqli,$sql_query);
  $fetched_row=mysqli_fetch_array($mysqli,$result_set);
}
if(isset($_POST['submit']))
{
 // variables for input data
 $personal_hours = $_POST['personal_hours'];
 $hours_logged = $_POST['hours_logged'];
 $story_points = $_POST['story_points'];
 $user_id = $_POST['user'];
 $month_id = $_POST['month'];
 // variables for input data
 
 // sql query for update data into database
 $sql_query = "UPDATE personaldata SET personalHours='$personal_hours', hoursLogged='$hours_logged', storyPoints='$story_points',User_id='$user_id', month_id='$month_id' WHERE id=".$_GET['edit_id'];
  mysqli_query($mysqli,$sql_query);
 // sql query for update data into database
  echo "<script>alert('updaten is gelukt');
    window.location='cms_show.php'</script>";
}

$sql_query="SELECT * FROM personaldata WHERE id=".$_GET['edit_id'];
 $result_set=mysqli_query($mysqli,$sql_query);
 while($row=mysqli_fetch_row($result_set));
 {
?>

<html>
<head>
  <link rel="stylesheet" href="../css/cms.css" type="text/css" />
</head>
<body>
  <form method="post">
          <h1>Edit data</h1>
          <label>Name</label>
          <select name="user">
            <option value="1">1.Steve</option>
            <option value="2">2.Shawn</option>
            <option value="3">3.Kim</option>
            <option value="4">4.Onika</option>
            <option value="5">5.Marie</option>
            <option value="6">6.Doutze</option>
            <option value="7">7.Zidedine</option>
            <option value="8">8.Bruce</option>
            <option value="9">9.LeBron</option>
          </select> <br>

		<label>Month</label>
		<select name="month">
		  <option value="1">1.January</option>
		  <option value="2">2.February</option>
		  <option value="3">3.Maart</option>
		  <option value="4">4.April</option>
		  <option value="5">5.Mei</option>
		  <option value="6">6.Juni</option>
		  <option value="7">7.Juli</option>
		  <option value="8">8.Augustus</option>
		  <option value="9">9.September</option>
		  <option value="10">10.Oktober</option>
		  <option value="11">11.November</option>
		  <option value="12">12.December</option>
		</select> <br>

    <label>Personal Hours</label>
    <input type="number" name="personal_hours" value="<?php echo $row['personalHours']; ?>" required/> <br>

    <label>Hours Logged</label>
    <input type="number" name="hours_logged" value="<?php echo $row[2]; ?>" required/> <br>

    <label>Story Points</label>
    <input type="number" name="story_points" value="<?php echo $row[3]; ?>" required/> <br>
    <button class="submit" type="submit" name="submit" value="submit">Submit</button>
  </form>
<?php
}
?>
    

</body>
</html>
