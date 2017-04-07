<?php
include_once('../connect.php');
?>
<html>
<head>
<title>CMS Show</title>
<link rel="stylesheet" href="../css/style.css" type="text/css" />
<link rel="stylesheet" href="../css/tablestyle.css" type="text/css" />
</head>
<body>
<span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../charts/home.html">Home</a>
  <a href="../charts/personalcharts.html">Persoonlijk </a>
  <a href="../werknemers.html">Werknemers</a>
  <a href="#">Account</a>
  <a href="../cms/cms_show.php">cms</a>
  <a href="../index.html">Logout</a>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

<table>

    <tr>
    <th colspan="5"><a href="cms_create.html">Insert data here.</a></th>
    </tr>
    <th>Personal hours.</th>
    <th>Hours logged.</th>
    <th>Story points.</th>
    <th>User id</th>
    <th>Month id</th>
    <th colspan="2">Operations</th>
    </tr>

<?php
 $sql_query="SELECT * FROM personaldata";
 $result_set=mysqli_query($mysqli,$sql_query);
 while($row=$result_set->fetch_assoc())
 {
  ?>
        <tr>
        <td><?php echo $row['personalHours']; ?></td>
        <td><?php echo $row['hoursLogged']; ?></td>
        <td><?php echo $row['storyPoints']; ?></td>
        <td><?php echo $row['User_id']; ?></td>
        <td><?php echo $row['month_id']; ?></td>
        
  		<td><a href="cms_update.php?edit_id=<?php echo $row['id']; ?>">Edit</a></td>
        <td><a href="cms_delete.php?delete_id=<?php echo $row['id']; ?>">Delete</a></td>
        </tr>
        <?php
 }
 ?>

 </table>
 </body>
 </html>
