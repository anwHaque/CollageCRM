function fun()
{
    alert(10);
    return false;
}

function registerButton()
{
	$.ajax({
    url:"signUp.php",
    type:'POST',
    // data:$('#signUpForm').serialize(),
    success:function(data, status){
      // $('#smsdo').html(data);
    },
  });
  return false;
	
}