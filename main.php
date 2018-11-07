<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" href="css/addStudentForm.css">
    <link rel="stylesheet" href="sweetAlert/sweetalert2.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mainStyle.css">
    
</head>
<body>    
    <div class="container-fluid">
        <div class="row">
            <div class="header">
                <img src="assets/image/sirtLogo.gif" alt="SIRT LOGO" class="sirtLogo">
                <span>SIRT Collage Bhopal</span>
            </div>
            <div class="btnArea">

                <!-- <button class="btn btn-outline-primary bt" onclick="return searchButton()">Search</button> -->
                
                <button class="btn btn-outline-primary bt" onclick="return readData('Student')">Student</button>

                <button class="btn btn-outline-primary bt" onclick="return readData('Teacher')">Teacher</button>    
                
            </div>
            <div class="mainArea" id="mainArea">
                <h1>its the main page Area</h1>
            </div>
            <br>
              
            
            <!-- <div class="footer">
                <h1>Footer Area</h1>
            </div> -->
        </div>
    </div> 

    <script src="sweetAlert/sweetalert2.all.min.js"></script>
    <script src="jquery/jquery.min.js"></script>
    <script src="script/main.js"></script>
</body>
</html>