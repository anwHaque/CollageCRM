//Register Button function
function registerButton()
{
  var registerBtn = document.getElementById('registerBtn').name;
  var signUpFullName =  document.getElementById('signUpFullName').value;
  var signUpUserName =  document.getElementById('signUpUserName').value;
  var signUpUserPass =  document.getElementById('signUpUserPass').value;

	$.ajax({
    url:"src/indexValidate.php",
    type:'POST',
    data: { 
      registerBtn: registerBtn,
      signUpFullName: signUpFullName,
      signUpUserName: signUpUserName,
      signUpUserPass: signUpUserPass
    },
    success:function(data, status){
      $('#sms').html(data);
    
    },
  });
 clearSingUpInput();
  return false;	
}

// Clear SignUp Form input field
function clearSingUpInput()
{
  document.getElementById('signUpFullName').value='';
  document.getElementById('signUpUserName').value='';
  document.getElementById('signUpUserPass').value='';
}

//Logine Button function
function loginButton()
{
  var loginBtn = document.getElementById('loginBtn').name;
  
  console.log(loginBtn);
  var loginUserName =  document.getElementById('loginUserName').value;
  var loginPass =  document.getElementById('loginPass').value;
  // console.log(loginUserName);
  // console.log(loginPass);

  $.ajax({
    url:"src/indexValidate.php",
    type:'POST',
    data: { 
      loginBtn: loginBtn,
      loginUserName: loginUserName,
      loginPass: loginPass
    },
    success:function(data, status){
      $('#sms').html(data);
    
    },
  });
 clearLoginInput()
  return false; 
}

// Clear SignUp Form input field
function clearLoginInput()
{
  document.getElementById('loginUserName').value='';
  document.getElementById('loginPass').value='';

}