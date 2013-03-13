
function loginvalidateForm()
	{
		var error = false;
		var form = document.forms["login"];

		var username=form["username"].value;					
					if (username == null || username == "")
						{
							document.getElementById("username-error").innerHTML = "Invalid Username";
							error = true;
						}
			
					
		var password=form["password"].value;
					if (password == null || password == "")
					{
						document.getElementById("password-error").innerHTML = "Please type the valid Password";
						error = true;
					}
	
		if(error === true) {
									return false;
								}
	}
	
	
	
	
	
	
					
function makeUsernameEmpty()
				{
					var form = document.forms["login"];
					
					var username=form["username"].value;
					if(username == "Username")
					form["username"].value = "";
				}
				

				

function makePasswordEmpty()
{
	var form = document.forms["login"];
	var password=form["password"].value;
	if(password == "password")
	form["password"].value = "";
}
function clearuname()
{
	var uname=document.login.username.value;
	if(uname=="Username")
	document.login.username.value='';
}
function getuname()
{
	var uname=document.login.username.value;
	if(uname=='')
	document.login.username.value="Username";
}
				


/*sign up new account*/

/*function SignUpvalidateForm()
	{
	var error = false;
		var form = document.forms["signup"];

		var firstname=form["firstname"].value;					
		if (firstname == null || firstname == "")
			{
				document.getElementById("firstname-error").innerHTML = "Invalid Firstname";
				error = true;
			}
	
		if(error === true) 
					{
						return false;
					}
					
		var lastname=form["lastname"].value;					
		if (lastname == null || lastname == "")
			{
				document.getElementById("lastname-error").innerHTML = "Invalid Lastname";
				error = true;
			}
	
		if(error === true) 
					{
						return false;
					}
			
	var password=form["password"].value;
					if (password == null || password == "")
					{
						document.getElementById("password-error").innerHTML = "Please type the valid Password";
						error = true;
					}

		if(error === true) 
					{
						return false;
					}
			
	var email=form["email"].value;
					if (email == null || email == "")
					{
						document.getElementById("email-error").innerHTML = "Please type the valid Email";
						error = true;
					}

}
		
	
function makeFirstnameEmpty()
				{
					var form = document.forms["signup"];
					
					var firstname = form["firstname"].value;
					if(firstname == "Firstname")
					form["firstname"].value = "";
				}
				
function makeLastnameEmpty()
				{
					var form = document.forms["signup"];
					
					var lastname=form["lastname"].value;
					if(lastname == "Lastname")
					form["lastname"].value = "";
				}

function makeEmailEmpty()
				{
					var form = document.forms["signup"];
					
					var email = form["email"].value;
					if(email == "email")
					form["email"].value = "";

				}
				

function makePasswordEmpty()
{
	var form = document.forms["signup"];
	var password=form["password"].value;
	if(password == "Password")
	form["password"].value = "";
}

function clearfirstname()
{
	var firstname = document.signup.firstname.value;
	if(firstname=="Firstname")
	document.signup.firstname.value='';
}


function clearlastname()
{
	var lastname = document.signup.lastname.value;
	if(lastname == "Lastname")
	document.signup.lastname.value='';
}

function getfirstname()
{
	var firstname=document.login.username.value;
	if(firstname=='')
	document.signup.firstname.value="Firstname";
}
			
function getlastname()
{
	var lastname=document.signup.lastname.value;
	if(lastname=='')
	document.signup.lastname.value="Lastname";
}
*/


/* mouse hover for image*/

/*
$(document).ready(function(){
       $('#imgSmile').width(200);
       $('#imgSmile').mouseover(function()
       {
          $(this).css("cursor","pointer");
          $(this).animate({width: "500px"}, 'slow');
       });
    
    $('#imgSmile').mouseout(function()
      {   
          $(this).animate({width: "200px"}, 'slow');
       });
   });
   */