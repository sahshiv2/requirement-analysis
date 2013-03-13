function loginvalidate()
{
	var error = false;
	var mail=document.login.email.value;
	var atpos=mail.indexOf("@");
	var dotpos=mail.lastIndexOf(".");
	if (mail==null || mail==""|| atpos<1 || dotpos<atpos+2 || dotpos+2>=mail.length)
	{
		document.getElementById("email-error").innerHTML = "Please type the valid Email";
		error = true;
	}
	var password = document.login.password.value;
	if (password == null || password == "")
	{
		document.getElementById("password-error").innerHTML = "invalid password";
		error = true;
	}
	/*do not submit the form if error*/
	if(error == true) 
	{
		return false;
	}
}

function clearfname()
{
	var firstname=document.form1.fname.value;
	if(firstname=="Firstname")
	document.form1.fname.value = "";
}
function getfname()
{
	var firstname=document.form1.fname.value;
	if(firstname==""){
		document.form1.fname.value = "Firstname";
	}
}
function clearlname()
{
	var firstname=document.form1.lname.value;
	if(firstname=="Lastname")
	document.form1.lname.value = "";
}
function getlname()
{
	var firstname=document.form1.lname.value;
	if(firstname==""){
		document.form1.lname.value = "Lastname";
	}
}	

function validateForm()
{
	var error = false;
	var form = document.form1;
	var firstname=form["fname"].value;					
	if (firstname == null || firstname == "" || firstname == "Firstname")
	{
		document.getElementById("firstname-error").innerHTML = "*Invalid Firstname";
		error = true;
	}
	var lastname=form["lname"].value;					
	if (lastname == null || lastname == "" || lastname=="Lastname")
	{
		document.getElementById("lastname-error").innerHTML = "*Invalid Lastname";
		error = true;
	}
	var password=form["password"].value;
	if (password == null || password == "")
	{
		document.getElementById("password-error").innerHTML = "*Please type the valid Password";
		error = true;
	}
	var mail=form.email.value;
	var atpos=mail.indexOf("@");
	var dotpos=mail.lastIndexOf(".");
	if (mail==null || mail==""|| atpos<1 || dotpos<atpos+2 || dotpos+2>=mail.length)
	{
		document.getElementById("email-error").innerHTML = "*Please type the valid Email";
		error = true;
	}
	/* Do not submit the form if error */
	if(error == true) 
	{
		return false;
	}
}
function clearproduct()
{
	var productname=document.search.select.value;
	if(productname=="search product")
	{
		document.search.select.value = "";
	}
}
function getproduct()
{
	var productname=document.search.select.value;
	if(productname=="")
	{
		document.search.select.value = "search product";
	}
}