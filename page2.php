<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>
       Dashboard
    </title>
    
    <h1>BMSEC</h1>
    <style>
        h1 {
            font-family:Georgia, 'Times New Roman', Times, serif;
            color: white;
            font-size: 100px;
            border: 5px solid black ;
            position: relative;
            text-align: center;
            background-color: blue;
            }
        body{
            background-color:grey;
            background-attachment: fixed;
            margin: 0;
            justify-content: center;
            align-items: center;
            height: 100vh;
            }
        .clickable1, .clickable2, .clickable3, .clickable4 {
            border: 5px solid black;
            margin-top: 20px; /* Adjust the margin as needed */
            height: 200px;
            padding: 10px;
            border-radius: 15px;
            cursor: pointer;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
}
    </style>

</head>  

<body>
    <div class="container">
        <div class ="row"> 
            <div class="col-12 col-lg-6">
                <div class="clickable clickable1"><a href="document.php"><h3>Documents</h3></a></div>
                <div class="clickable clickable1"><a href="report.php"><h3>Academic Report</h3></a></div>
                <div class="clickable clickable3"><a href="about.php"><h3>About</h3></a></div>
                <div class="clickable clickable4"><a href="index.php"><h3>Log Out</h3></a></div>
            </div>
            

           
            <div class ="col-12 col-lg-6">
                <div id="picture"><img src ="R.jpeg" width = "750" height =" 880" alt="learning">
            </div>
        </div>
       
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password =$_POST['password'];


 try {
    require_once "dbconnection.php";
    if (empty($email) || empty($password)) {
        echo "<script>alert('Please enter both email and password');</script>";
        echo '<script>
            setTimeout(function() {
                window.location.href = "index.php";
            }, 0);
        </script>';
        exit(); // Stop further execution
    }
    $sql = "SELECT * FROM bmsecdatabase.table1 WHERE email = '$email'";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $resultpassword = $row['userpassword'];
        if($password == $resultpassword){ 
            header("Location:page2.php");
        }else{
            echo "<script>alert('Login unsuccessful');
            </script>";
            echo '<script>
            setTimeout(function() {
                window.location.href = "index.php";
            }, 0);
          </script>';
          exit();
            
        }
    }
 } catch (PDOException $e) {
    die("Failed to Connect " . $e->getMessage());
 }

}else{
    echo "<script>alert('ERROR!!');
            </script>";
            echo '<script>
            setTimeout(function() {
                window.location.href = "index.php";
            }, 0);
          </script>';
}

?>