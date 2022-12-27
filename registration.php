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
    <link rel="stylesheet" href="registration.css">
</head>

<body>
    
       
        <form action =" " method="POST">
            <div class="container">
            <p class="heading">Register Yourself</p>

           <label> Name:<span style="color: red;">*</span></label><br><input type="text" name="uname" id="uname" class="field">
           <p id="una" style="color:red ;"></p>

            
            <label>Mobile No:<span style="color: red;">*</span></label><br><input type="number" name="number" id="number" class="field">
            <p id="num" style="color:red ;"></p>

            <label>Email:<span style="color: red;">*</span></label><br><input type="email" name="mail" id="mail"  class="field">
            <p id="gmal" style="color:red ;"></p>

            <label>Gender :<span style="color: red;">*</span></label> 
            Male<input type="radio" name="gender" id="gender">
            Female<input type="radio" name="gender" id="gen" >
            <p id="select" style="color:red ;"></p>
         
           <label>D.O.B :<span style="color: red;">*</span></label><br> <input type="date" name="dob" id="dob" class="field" >
           <p id="dobs" style="color:red ;"></p>
            
            <label>Degree:<span style="color: red;">*</span></label><br><input type="text" name="degree" id="degree" class="field">

           <br>
            <label>Password:<span style="color: red;">*</span></label><br><input type="password" name="pass" id="pass" class="field" >
            <p id="password" style="color:red ;"></p>
            
            <button type="submit" name="submit" id="submit" class="submit" >Submit</button>

            <a href="check.php">Check Data</a>
        </div>
        </form>
<script src="rscript.js"></script>
</body>

</html>
<?php
include 'dbcon.php';
if(isset($_POST['submit'])){
    $uname = $_POST['uname'];
    $mobile = $_POST['number'];
    $email = $_POST['mail'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $degree = $_POST['degree'];
    $pass = $_POST['pass'];


$insertquery = " insert into reg(name , mobile ,email , gender , dob , degree , password) values('$uname','$mobile','$email', '$gender','$dob','$degree','$pass') ";

$query = mysqli_query($con,$insertquery);

if($query){
    ?>
    <script>
      alert("information send sucessfully");
    </script>
    <?php
  }
  else{
?>
<script>
  alert("information send failed");
</script>
    <?php
}
}
?>