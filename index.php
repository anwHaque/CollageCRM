
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logine Page</title>
    <link href="css/indexStyle.css" rel="stylesheet">
    <link rel="stylesheet" href="sweetAlert/sweetalert2.min.css">
</head>
<body>
    <div id="mainDis">
    
<div class="login-page" >
<div class="form">
    <form class="register-form" method="POST" action="" id="signUpForm">
        <label for="fullName">Full Name</label>
        <input type="text" name="signUpFullName" id="signUpFullName" placeholder="Full Name">
        <label for="signUpUserName">User Name</label>
        <input type="text" name="signUpUserName" id="signUpUserName" placeholder="user name">
        <label for="signUpUserPass">Password</label>
        <input type="text" name="signUpUserPass" id="signUpUserPass" placeholder="password">
        
        <button  onclick="return registerButton()" name="registerBtn" id="registerBtn">Register</button>
        <p class="message">Already Registered?
        <a href="#">Login</a> 
        </p>
    </form>
    
    <form class="login-form" method="POST" action="" id="loginForm">
        <label for="loginUserName">User Name:</label>
        <input type="text" name="loginUserName" placeholder="user name" id="loginUserName">
        <label for="loginPass">Password:</label>
        <input type="text" name="loginPass" placeholder="password" id="loginPass">
        <button onclick="return loginButton()" name="loginBtn" id="loginBtn">login </button>
        <p class="message">Not Registered?
        <a href="#">register</a> 
        </p>  
    </form>
</div>    
</div>
<div id="sms">
    
</div>
</div>
<script src="jquery/jquery.min.js"></script>
<script src="sweetAlert/sweetalert2.all.min.js"></script>
<script src="script/index.js"></script>

   <script>
    $('.message').click(function()
	{
    $('form').animate({height:"toggle",opacity:"toggle",},"slow");    
    }
	)
    </script>
    
    
</div>
</body> 
</html>
