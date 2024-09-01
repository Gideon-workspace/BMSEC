<?php
    $_email = $_POST['email'];
    $password = $_POST['password'];
    
    //Database Connection

    try {
        $conn = mysqli_connect("localhost","u993176877_bmsecowners","Bmsecowners3","u993176877_bmsecdatabase3");

        if(isset($_POST['loginbtn'])){
            $email = $_POST['email'];
            $password =$_POST['password'];
            if (empty($email) || empty($password)) {
                echo "<script>alert('Please enter both email and password');</script>";
                echo '<script>
                    setTimeout(function() {
                        window.location.href = "index.php";
                    }, 0);
                </script>';
                exit(); // Stop further execution
            }
            $sql = "SELECT * FROM u993176877_bmsecdatabase3.table1 WHERE email = '$email'";
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
                    
                }
            }
        }
        else{
            header("Location:index.php"); 
        }
    } catch (PDOException $e) {
        die("Failed to Connect " . $e->getMessage());
    }