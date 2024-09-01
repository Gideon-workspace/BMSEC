<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if the required fields are set in the $_POST array
    if (
        isset($_POST['Id']) && isset($_POST['firstname']) && isset($_POST['lastname']) &&
        isset($_POST['email']) && isset($_POST['phone_numbers']) && isset($_POST['guard_numbers']) && isset($_POST['skoolname']) && isset($_POST['address']) && isset($_POST['location']) && isset($_POST['password']) && isset($_POST['grade'])
    ) {
        $Id = $_POST['Id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone_numbers = $_POST['phone_numbers'];
        $guard_num =$_POST['guard_numbers'];
        $address = $_POST['address'];
        $Location = $_POST['location'];
        $password = $_POST['password'];
        $grade = $_POST['grade'];
        $skoolname =$_POST['skoolname'];

        try {
            require_once "dbconnection.php";
            
             if (empty($email) || empty($password) || empty($firstname) || empty($lastname) || empty($phone_numbers) || empty($guard_num) || empty($address) || empty($Location) || empty($password) || empty($grade) || empty($skoolname) ) {
                echo "<script>alert('Please enter all the required information');</script>";
                echo '<script>
                    setTimeout(function() {
                        window.location.href = "page3.php";
                    }, 0);
                </script>';
                exit(); // Stop further execution
            }

            $query = "INSERT INTO table1 (ID_num, firstname, lastname, email, phonenumbers,guard_phonenumbers,physical_address,Town,userpassword, Grade,school_name) VALUES (?, ?, ?, ?, ?, ?, ?,?,?,?,?);";
            $stmt = $pdo->prepare($query);

            $stmt->execute([$Id,$firstname,$lastname, $email, $phone_numbers,$guard_num,$address,$Location, $password, $grade,$skoolname]);

            $pdo = null;
            $stmt = null;

            echo "<script>alert('Successfully Registered!!!!!!');
                    </script>";

            // Redirect after 2 seconds
            echo '<script>
                    setTimeout(function() {
                        window.location.href = "index.php";
                    }, 0);
                  </script>';
            
            exit(); // Exit after the JavaScript redirect

        } catch (PDOException $e) {
            die("Query Failed : " . $e->getMessage());
        }
    } else {
        die("Error: Some required fields are missing.");
    }
} else {
    header("Location:index.php");
    exit(); // Exit after the header redirect
}
?>
