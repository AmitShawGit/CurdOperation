<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="check.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.css" integrity="sha512-CB+XYxRC7cXZqO/8cP3V+ve2+6g6ynOnvJD6p4E4y3+wwkScH9qEOla+BTHzcwB4xKgvWn816Iv0io5l3rAOBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <h1>Check Data</h1>
        <div class="row justify-content-center">
            
        <table>
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Mail</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Degree</th>
                <th>Password</th>
                <th colspan="2">Operations</th>
            </thead>
            <tbody>
                <?php
                include 'dbcon.php';
                $selectquery = " select * from reg ";
                $query = mysqli_query($con,$selectquery);
                while($result = mysqli_fetch_assoc($query)){
                ?>
                <tr>
                    <td><?php echo $result['id']; ?></td>
                    <td><?php echo $result['name']; ?></td>
                    <td><?php echo $result['mobile']; ?></td>
                    <td><?php echo $result['email']; ?></td>
                    <td><?php echo $result['gender']; ?></td>
                    <td><?php echo $result['dob']; ?></td>
                    <td><?php echo $result['degree']; ?></td>
                    <td><?php echo $result['password']; ?></td>

                    <td><a href="updating.php?id=<?php echo $result['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true" id="edit" data-toggle="tooltip" data-placement="bottom" title="Update"></i></a></td>

                    <td><a href="deleted.php?id=<?php echo $result['id']; ?>"><i class="fa fa-trash" aria-hidden="true"id="delete" data-toggle="tooltip" data-placement="bottom" title="Delete"></i></a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>
</body>
</html>