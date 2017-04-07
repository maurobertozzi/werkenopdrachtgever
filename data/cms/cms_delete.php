<?php
include_once '../connect.php';
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM personaldata WHERE id=".$_GET['delete_id'];
 mysqli_query($mysqli,$sql_query);
 echo "<script>alert('het is nu verwijderd');
    window.location='cms_show.php'</script>";
}


?>

