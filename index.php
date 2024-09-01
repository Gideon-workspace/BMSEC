<!DOCTYPE html>
<html lang="en">
<head>
    <title>BMSEC'S website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <h1>BMSEC</h1>
    <style>
        *{
            margin : 0;
            padding:0;
        }
        h1 {
            font-family: cursive;
            color: blue;
            font-size: 550%;
            text-shadow: 15px 10px 20px white;
            position: relative;
            text-align: center;
        }
        body {
             background-image: url('IMG-20231122-WA0005.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-position: center center;
            background-repeat: no-repeat;
            height : 100%;
        }
        
        @media screen and (max-width: 988px) {
            body {
                background-size: 100% 100%;
            }
        }

        .container{
            width: 1200px;
            min-height: 100%;
            margin: auto;
            color:white;
            position: relative;
            max-height: 100%; /* Limit the height to viewport height */
        }

        .content.par{
            padding-left: 20px;
            padding-bottom: 25px;
            font-family: Arial, Helvetica, sans-serif;
            letter-spacing: 1.2px;
            line-height: 30px;
        }

        .content h2{
            font-family: 'Times New Roman', Times, serif;
            font-size: 40px;
            margin-top: 20%;
            letter-spacing: 2px;
        }

        .form {
            width: 100%;
            margin-top: 100px;
            position: relative;
            left: 30px;
            border: 1px solid white;
            border-radius: 10px;
        }
        
        

        .form h2{
            width: 100%;
            font-family: sans-serif;
            text-align: center;
            font-size: 22px;
            background-color: white;
            color:red;
            border-radius: 10px;
            margin: 2px;
            padding:5px
        }

        .form input {
            width: 100%;
            height: 35px;
            background-color: transparent;
            margin-top: 10px; /* Adjusted margin */
            font-size: 15px;
            border-top: none;
            color: white;
        }
        .row{
            overflow: 100px;
            padding-bottom: 100px;
        }

        .footer{
            background-color: skyblue;
            position:relative;
            
            
        }
    

        .info h4 {
            text-align: center;
            margin-bottom: 32px;
}

        .info div {
            
            text-align: center;
}

        .info p {
            margin: 0;
}

        ::placeholder{
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }

        .btn2{
            height: 40px;
            margin-top: 10px;
            font-size: 18px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            cursor: pointer;
            background: white;
            color: black;
        }

        .btn2:hover{
            background: red;
            color: black;
        }

        .content, .form {
            padding: 20px;
            text-align: center;
        }

        .btn2 {
            width: 100%;
        }

        .logo {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 150px; /* Adjusted the width */
            height: auto;
        }

        .info-box p {
            margin: 0;
            
        }

    </style>
</head>
<body>

    <img src="IMG-20231122-WA0029.jpg" alt="BMSEC Logo" class="logo">

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="content">
                    <h2>Welcome To Basic Math & <br> Science Enrichment Center</h2>
                    <p class="par">An environment where you are guaranteed an academic success and the best learning experience. A place where <br>you can meet learners from other schools and have the opportunity to learn from each other. JOIN<br>US and achieve those grades you desire each and every term.</p>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="form">
                    <form action="page2.php" method="post">
                        <h2>Login Here</h2>
                        <input type="email" name="email" placeholder="Enter your Email">
                        <input type="password" name="password" placeholder="Enter your Password">
                        <input type="submit" style="background-color: white; color: black; height:35px" class="btn" value="Login" name="loginbtn">
                    </form>
                    <p style="color: MediumSeaGreen;">If you are not registered yet, please click the link button below to register</p>
                    <button class="btn2"><a href="page3.php">Register Here</a></button>
                </div>
            </div>
        </div>
    </div>

   <footer class="footer">
        <div class="info">
            <h4>Fees:</h4>
            <div><p>Tuition Fee is R2500</p></div>
            <div><p>Registration Fee is R1000</p></div>
            <div><p>Outstanding balance should be paid before 30-April</p></div><br>
            <h4>Banking Details:</h4>
            <div><p>Bank Name: FNB</p></div>
            <div><p>Account Holder: BMSEC</p></div>
            <div><p>Account Number: 62895848681</p></div>
            <div><p>Reference: Learner's name</p></div><br>
            <h4>For more Information Contact:</h4>
            <div><p>0768871780</p></div>
            <div><p>0722667411</p></div>
            <div><p>0763459161</p></div>
            <div><p>0722754788</p></div><br>
            <br><h4>Register Now!!!</h4>
            <div><p>To attend Saturday Classes at Rebone Secondary School located in Jane Furse/Maleetse </p></div><br>
            <div><p>We offer lessons starting from the grade 8 to Grade 12 </p></div><br>
            <div><p>Lessons Starts on the 8th January(GRADE 12 ONLY)</p></div><br>
            <div><p>Then for GRADE 8-11 classes commence on the 29th January</p></div><br>
            <br><h4>Subjects Offered</h4>
            <div><p>MATHEMATICS GRADE 10-12 </p></div><br>
            <div><p>PHYSICAL SCIENCES GRADE 10-12 </p></div><br>
            <div><p>MATHEMATICS GRADE 8-9 </p></div><br>
            <div><p>NATURAL SCIENCES GRADE 8-9 </p></div><br><br>
            <br><h4>Materials</h4>
            <div><p>TEXTBOOKS WILL BE PROVIDED FOR EACH GRADE</p></div><br><br>
            <br><br>
                    <div class="picture3">
                        <img src="IMG-20231122-WA0016.jpg" width="980" height="1520" alt="teachers">
                    </div><br><br><br>
            <div><br><h2 style="font-size: 85px;">Basic Math & Science Enrichment Center</h2><div><br><br><br><br><br><br>
            <br><div><h4 style="color:blue;font-size:50px;">~ACADEMIC EXCELLENCE IS OUR FORTE~</h4></div><br>

        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
