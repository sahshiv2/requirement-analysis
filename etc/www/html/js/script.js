//document.getElementsByTagName("body")[0].onload = changecolor;

function displayDate()
{
document.getElementById("demo").innerHTML=Date();
}


function loginvalidate()
{
	var error = false;
	var form = document.login;
	var username=form.username.value;
	if (username == null || username == "")
	{
		document.getElementById("username-error").innerHTML = "invalid username";
		error = true;
	}
	var password = form.pwd.value;
	if (username == null || username == "")
	{
		document.getElementById("pwd-error").innerHTML = "invalid password";
		error = true;
	}
	if(error == true) 
	{
		return false;
	}
}
function validateForm()
{
	var error = false;
	var form = document.form1;
		
	var firstname=form["fname"].value;					
	if (firstname == null || firstname == "" || firstname == "Enter Firstname")
	{
		document.getElementById("firstname-error").innerHTML = "Invalid Firstname";
		error = true;
						
	}
	var lastname=form["lname"].value;					
	if (lastname == null || lastname == "")
	{
		document.getElementById("lastname-error").innerHTML = "Invalid Lastname";
		error = true;
		
	}
	var password=form["password"].value;
	if (password == null || password == "")
	{
		document.getElementById("password-error").innerHTML = "Please type the valid Password";
		error = true;
		
	}
	var mail=form.email.value;
	var atpos=mail.indexOf("@");
	var dotpos=mail.lastIndexOf(".");
	if (mail==null || mail==""|| atpos<1 || dotpos<atpos+2 || dotpos+2>=mail.length)
	{
		document.getElementById("email-error").innerHTML = "Please type the valid Email";
		error = true;
	}
	/* Do not submit the form if error */
	if(error == true) 
	{
		return false;
	}
}
				

function makeEmailEmpty()
{
	var form = document.form1;
	var mail = form.email.value;
	if(mail != null)
	form.email.value = "";
}
function emptypassword()
{
	var form = document.login.pwd.value;
	if(form !=null)
		document.login.pwd.value="";
}
function emptyusername()
{
	var form = document.login.username.value;
	if(form !=null)
		document.login.username.value="";
}
function makePasswordEmpty()
{
	var form = document.form1;
	var pwd = form.password.value;
	if(pwd !=null)
		form.password.value = "";
}
function clearfname()
{
	var firstname=document.form1.fname.value;
	if(firstname=="Enter Firstname")
	document.form1.fname.value = "";
}
function getfname()
{
	var firstname=document.form1.fname.value;
	if(firstname==""){
		document.form1.fname.value = "Enter Firstname";
	}
}	
function clearlname()
{
	var firstname=document.form1.lname.value;
	if(firstname=="Enter Lastname")
	document.form1.lname.value = "";
}
function getlname()
{
	var firstname=document.form1.lname.value;
	if(firstname==""){
		document.form1.lname.value = "Enter Lastname";
	}
}	

function show(obj,obj1,obj2)
{
	document.getElementById(obj).style.display="block";
	document.getElementById(obj2).src=obj1.src;
	var x_coords=findPosX(obj1);
	var y_coords=findPosY(obj1);
	document.getElementById(obj).style.left=x_coords;
	document.getElementById(obj).style.top=y_coords;
 }
     
function hide(id)
{
 document.getElementById(id).style.display="none";
 }
 
function findPosX(obj)
{
	var curleft = 0;
	if (document.getElementById || document.all)
	{
		while (obj.offsetParent)
		{
			curleft += obj.offsetLeft
			obj = obj.offsetParent;
		}
	}
	else if (document.layers)
	curleft += obj.x;
	return curleft;
}
 
function findPosY(obj)
{
	var curtop = 0;
	if (document.getElementById || document.all)
	{
		while (obj.offsetParent)
		{
			curtop += obj.offsetTop
			obj = obj.offsetParent;
		}
	}
	else if (document.layers)
	curtop += obj.y;
	return curtop;
}