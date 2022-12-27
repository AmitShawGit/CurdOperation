<?php
include 'dbcon.php';
$id = $_GET['id'];
$deletequery = " delete from reg where id=$id ";
$query = mysqli_query($con ,$deletequery);
if($query){
    ?>
    <script>
      alert("information Deletedd sucessfully");
    </script>
    <?php
  }
  else{
?>
<script>
  alert("information not deleted");
</script>
    <?php
}
header('location:check.php');

?>