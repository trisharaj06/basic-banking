<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel =" stylesheet" href="style.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            background-color:#fadfcd;
        </style> 
    </head>
    <body>
        <u><h1 class="text-center">Customers List</h1></u><br>
        <?php
    $conn = mysqli_connect("localhost","root","","grip");
    $qry="select * from users";
    $resultset=mysqli_query($conn,$qry);
    if(mysqli_num_rows($resultset)>0){
        echo "<div class='table-responsive'>";
        echo "<table class='table table-bordered table-hover table-striped'>";
        echo "<tr style='color:black'>";
        echo "<th class='text-center'>customer Id</th><th class='text-center'>customer Name</th><th class='text-center'>customer Email</th><th class='text-center'>Balance</th> <th class='text-center'>Delete Customers</th>";
        echo "</tr>";
        while($r=mysqli_fetch_array($resultset))
        {
            echo "<tr style='color:black'>";
            echo "<td class='text-center'>$r[0]</td>";
            echo "<td class='text-center'>$r[1]</td>";
            echo "<td class='text-center'>$r[2]</td>";
            echo "<td class='text-center'>$r[3]</td>";
            echo "<td class='text-center'><a class='btn btn-danger' href='deletecustomer.php?id=$r[0]'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
    }
    else{
        echo "<h3 style='color:black;text-align:center;'>No Record Found</h3>";
        
    }
    
    mysqli_close($conn);
    ?>
        <a href="home.php" class="btn">Back</a>
    </body>
</html>
