<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>

</head>

<body>
    
       
        <form action =" " method="POST">
            <div class="container">
            <?php
include 'dbcon.php';
$id = $_GET['id'];
$selectquery = " select * from reg where id = $id ";
$query = mysqli_query($con,$selectquery);
$result = mysqli_fetch_assoc($query);



if(isset($_POST['submit'])){
    $uname = $_POST['uname'];
    $mobile = $_POST['number'];
    $email = $_POST['mail'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $degree = $_POST['degree'];
    $pass = $_POST['pass'];


$updatequery = " update reg set id=$id, name='$uname', mobile='$mobile', email='$email', gender='$gender', dob='$dob', degree='$degree', password='$pass' where id = $id ";
$query = mysqli_query($con ,$updatequery);

if($query){
    ?>
    <script>
      alert("information Updated sucessfully");
    </script>
    <?php
  }
  else{
?>
<script>
  alert("information Updation failed");
</script>
    <?php
}
}
?>
            <p class="heading">Update Data</p>

           <label> Name:<span style="color: red;">*</span></label><br><input type="text" name="uname" id="uname" class="field" value="<?php echo $result['name']; ?>">
           <p id="una" style="color:red ;"></p>

            
            <label>Mobile No:<span style="color: red;">*</span></label><br><input type="number" name="number" id="number" class="field" value="<?php echo $result['mobile']; ?>">
            <p id="num" style="color:red ;"></p>

            <label>Email:<span style="color: red;">*</span></label><br><input type="email" name="mail" id="mail"  class="field" value="<?php echo $result['email']; ?>">
            <p id="gmal" style="color:red ;"></p>

            <label>Gender :<span style="color: red;">*</span></label> 
            Male<input type="radio" name="gender" id="gender" value="<?php echo $result['gender']; ?>">
            Female<input type="radio" name="gender" id="gen"  value="<?php echo $result['gender']; ?>">
            <p id="select" style="color:red ;"></p>
         
           <label>D.O.B :<span style="color: red;">*</span></label><br> <input type="date" name="dob" id="dob" class="field" value="<?php echo $result['dob']; ?>">
           <p id="dobs" style="color:red ;"></p>
            
            <label>Degree:<span style="color: red;">*</span></label><br><input type="text" name="degree" id="degree" class="field" value="<?php echo $result['degree']; ?>">

           <br>
            <label>Password:<span style="color: red;">*</span></label><br><input type="password" name="pass" id="pass" class="field" value="<?php echo $result['password']; ?>" >
            <p id="password" style="color:red ;"></p>
            
            <button type="submit" name="submit" id="submit" class="submit" >Update</button>

            <a href="check.php">Check Data</a>
        </div>
        </form>
<script src="rscript.js"></script>
</body>

</html>
