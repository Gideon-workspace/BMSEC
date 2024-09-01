<?php

$conn = mysqli_connect("localhost","u993176877_bmsecowners","Bmsecowners3","u993176877_bmsecdatabase3");
if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}


//check if the file was uploaded
if(isset($_POST['submit'])){

    //retrieve file title
    $title = $_POST["title"];
    if (empty($title)) {
        echo "<script>alert('Please enter your name and surmame on the box provided');</script>";
        echo '<script>
            setTimeout(function() {
                window.location.href = "document.php";
            }, 0);
        </script>';
        exit(); // Stop further execution
        }

    //file name with randon number so that similar dont get replaced
    $pname = rand(1000,10000)."-".$_FILES["file"]["name"];

    //temporary file to store file
    $tname = $_FILES["file"]["tmp_name"];

    //upload directory file
    //target directory
    $targetDir = "Payments/";

    //to move the uploaded file to a specific loaction
    move_uploaded_file($tname ,$targetDir.'/'.$pname);

    //sql query to insert into the database
    $sql = "INSERT INTO documents (file_name , file_path) VALUES ('$title', '$pname')";

    if(mysqli_query($conn,$sql)){
        echo "<script>alert('Successfully Submitted!!!!!!');
        </script>";

        echo '<script>
                    setTimeout(function() {
                        window.location.href = "document.php";
                    }, 0);
                  </script>';

    }else{
        echo "File not submitted";
    }

}
$conn->close();
    