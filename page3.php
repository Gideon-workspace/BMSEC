<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="stylep3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        /* Your custom CSS styles here */
        .btn {
            width: 100%;
            height: 40px;
            margin-top: 10px;
            font-size: 18px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            cursor: pointer;
            background: white;
        }
        .btn:hover {
            background: green;
        }
        .heading {
            color: red;
            font-size: 50px;
        }
        body {
            background-color: lightblue;
        }
        .form input {
            width: 100%;
            height: 35px;
            background: snow;
            margin-top: 20px;
            font-size: 15px;
            border-top: none;
            color: black;
        }
    </style>
</head>
<body>

    <h1 class="heading">
        <div class="alert alert-secondary" role="alert">
            --------------------------------------<br>
            *REGISTRATIONS*<br>
            -------------------------------------
        </div>
    </h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="form">
                    <form action="formhandler.inc.php" method="post" id="registrationForm">
                        <p>ID No:</p> 
                        <input type="text" name="Id" placeholder=""><br>
                        <p>First Name:</p>
                        <input type="text" name="firstname" placeholder=""><br>
                        <p>Last Name:</p> 
                        <input type="text" name="lastname" placeholder=""><br>
                        <p>Email:</p> 
                        <input type="email" name="email" placeholder="Enter your Email"><br>
                        <p>Phone Number:</p>
                        <input type="text" id="phone" name="phone_numbers" placeholder="123-456-7890"><br>
                        <p>Parents/Guardian Phone Number:</p>
                        <input type="text" id="phone" name="guard_numbers" placeholder="123-456-7890"><br>
                        <p>physical_address:</p> 
                        <input type="text" name="address" placeholder="47 Jamaica street Stand no 1023"><br>
                        <p>Town:</p> 
                        <input type="text" name="location" placeholder="Ga-Moloi"><br>
                        <p>Password:</p> 
                        <input type="password" name="password" placeholder="Enter your Password"><br>
                        <p>Enter your grade:</p>
                        <input type="text" name="grade" placeholder=""><br>
                        <p>Name of your school:</p> 
                        <input type="text" name="skoolname" placeholder=""><br>
                        <br>
                        <input type="submit" class="btn" value="Submit">
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div id="picture">
                    <img src="cartoon-boy-holding-a-pile-of-books-vector-5140232.jpg" class="img-fluid" alt="School kid holding books">
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
