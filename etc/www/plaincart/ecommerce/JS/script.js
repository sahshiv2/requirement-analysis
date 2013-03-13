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
		document.getElementById("firstname-error").innerHTML = "Invalid Firstname";
		error = true;
	}
	var lastname=form["lname"].value;					
	if (lastname == null || lastname == "" || lastname=="Lastname")
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


function setinfo(isChecked)
{
	var form=document.frmCheckout;
	if (isChecked) 
	{
		form.PaymentFirstName.value = form.ShippingFirstName.value;
		form.PaymentLastName.value = form.ShippingLastName.value;
		form.PaymentAddress.value = form.ShippingAddress.value;
		form.PaymentPhone.value = form.ShippingPhone.value;		
		form.PaymentCity.value = form.ShippingCity.value;
		form.PaymentPostalCode.value = form.ShippingPostalCode.value;
		
		form.PaymentFirstName.readOnly  = true;
		form.PaymentLastName.readOnly   = true;
		form.PaymentAddress.readOnly   = true;
		form.PaymentPhone.readOnly      = true;			
		form.PaymentCity.readOnly       = true;
		form.PaymentPostalCode.readOnly = true;			
	} 
	else 
	{
		form.PaymentFirstName.readOnly  = false;
		form.PaymentLastName.readOnly   = false;
		form.PaymentAddress.readOnly   = false;
		form.PaymentPhone.readOnly      = false;		
		form.PaymentCity.readOnly       = false;
		formPaymentPostalCode.readOnly = false;			
	}	
}