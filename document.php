<!DOCTYPE html>
<html>
    <head>
        <title>
            Documents
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <h2>Upload Proof of Payment</h2><br>
          ;
        <style>
           h2 {
            font-family:Georgia, 'Times New Roman', Times, serif;
            color: black;
            font-size: 100px;
            border: 1px solid black ;
            position: relative;
            text-align: center;
        
            }
            .form .btn {
                width: 247px;
                height: 40px;
                margin-top: 10px;
                font-size: 18px;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                cursor: pointer;
                background: blue;
                color: black;
                }
            .btn:hover{
                background-color: green;
            }

        </style>
    </head>
    <body>
        <br><p style="font-family: 'Arial', sans-serif; font-size: 16px; color: #333; line-height: 1.5;">
    Type in your name and surname in the box below - it is very important so your proof of payment doesn't get lost in the system.
</p>

        <form action="uploadfile.inc.php" method="post" enctype ="multipart/form-data">
        <div class ="container">
                <br><div class = "form">
                <label style="font-weight: bold; color: #333; display: block; margin-bottom: 5px;">Title</label>

                <input type="text" name="title" style="padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; width: 200px;">
                <br><input type ="file" name ="file" /><br>
                <br><button class="btn" name="submit"> Submit</button>
            </div>
        </form>
        </div>






    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>