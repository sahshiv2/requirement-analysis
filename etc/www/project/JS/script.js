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
	if (firstname == null || firstname == "")
	{
		document.getElementById("firstname-error").innerHTML = "*Enter Firstname";
		error = true;
	}
	var lastname=form["lname"].value;					
	if (lastname == null || lastname == "")
	{
		document.getElementById("lastname-error").innerHTML = "*Enter Lastname";
		error = true;
	}
	var address=form["address"].value;
	if (address == null || address == "")
	{
		document.getElementById("address-error").innerHTML = "*Enter Address";
		error = true;
	}
	var city=form["city"].value;
	if (city == null || city == "")
	{
		document.getElementById("city-error").innerHTML = "*Enter Address city";
		error = true;
	}
	var phone=form["phone"].value;
	if (phone == null || address == "")
	{
		document.getElementById("phone-error").innerHTML = "*Enter Phone Number";
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
	if (form.PaymentFirstName.value==null || form.PaymentFirstName.value=="")
	{
		document.getElementById("Pfirstname-error").innerHTML="*Enter first name";
		error=true;
	}
	if (form.PaymentLastName.value==null || form.PaymentLastName.value=="")
	{
		document.getElementById("Plastname-error").innerHTML="*Enter last name";
		error=true;
	}
	if (form.PaymentAddress.value==null || form.PaymentAddress.value=="")
	{
		document.getElementById("Paddress-error").innerHTML="*Enter Payment address";
		error=true;
	}
	if (form.PaymentPhone.value==null || form.PaymentPhone.value=="")
	{
		document.getElementById("Pphone-error").innerHTML="*Enter phone number";
		error=true;
	}
	if (form.PaymentCity.value==null || form.PaymentCity.value=="")
	{
		document.getElementById("Pcity-error").innerHTML="*Enter Payment address city";
		error=true;
	}
	/* Do not submit the form if error */
	if(error == true) 
	{
		return false;
	}
}
function payment(isChecked)
{
	var form=document.form1;
	if (isChecked) 
	{
		form.PaymentFirstName.value = form.fname.value;
		form.PaymentLastName.value = form.lname.value;
		form.PaymentAddress.value = form.address.value;
		form.PaymentPhone.value = form.phone.value;		
		form.PaymentCity.value = form.city.value;
	
		form.PaymentFirstName.readOnly = true;
		form.PaymentLastName.readOnly = true;
		form.PaymentAddress.readOnly = true;
		form.PaymentPhone.readOnly = true;			
		form.PaymentCity.readOnly = true;	
	} 
	else 
	{
		form.PaymentFirstName.readOnly = false;
		form.PaymentLastName.readOnly = false;
		form.PaymentAddress.readOnly = false;
		form.PaymentPhone.readOnly = false;		
		form.PaymentCity.readOnly = false;			
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
function checkinfo()
{
	var error=false;
	var form=document.frmCheckout;
	if (form.ShippingFirstName.value==null || form.ShippingFirstName.value=="")
	{
		document.getElementById("Sfirstname-error").innerHTML="Enter first name";
		error=true;
	}
	if (form.ShippingLastName.value==null || form.ShippingLastName.value=="")
	{
		document.getElementById("Slastname-error").innerHTML="Enter last name";
		error=true;
	}
	if (form.ShippingAddress.value==null || form.ShippingAddress.value=="")
	{
		document.getElementById("Saddress-error").innerHTML="Enter Shipping Address";
		error=true;
	}
	if (form.ShippingPhone.value==null || form.ShippingPhone.value=="")
	{
		document.getElementById("Sphone-error").innerHTML="Enter phone number";
		error=true;
	}
	if (form.ShippingCity.value==null || form.ShippingCity.value=="")
	{
		document.getElementById("Scity-error").innerHTML="Enter Shipping Address City";
		error=true;
	}
	if (form.PaymentFirstName.value==null || form.PaymentFirstName.value=="")
	{
		document.getElementById("Pfirstname-error").innerHTML="Enter first name";
		error=true;
	}
	if (form.PaymentLastName.value==null || form.PaymentLastName.value=="")
	{
		document.getElementById("Plastname-error").innerHTML="Enter last name";
		error=true;
	}
	if (form.PaymentAddress.value==null || form.PaymentAddress.value=="")
	{
		document.getElementById("Paddress-error").innerHTML="Enter Payment address";
		error=true;
	}
	if (form.PaymentPhone.value==null || form.PaymentPhone.value=="")
	{
		document.getElementById("Pphone-error").innerHTML="Enter phone number";
		error=true;
	}
	if (form.PaymentCity.value==null || form.PaymentCity.value=="")
	{
		document.getElementById("Pcity-error").innerHTML="Enter Payment address city";
		error=true;
	}
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
		
		form.PaymentFirstName.readOnly  = true;
		form.PaymentLastName.readOnly   = true;
		form.PaymentAddress.readOnly   = true;
		form.PaymentPhone.readOnly      = true;			
		form.PaymentCity.readOnly       = true;
	} 
	else 
	{
		form.PaymentFirstName.readOnly  = false;
		form.PaymentLastName.readOnly   = false;
		form.PaymentAddress.readOnly   = false;
		form.PaymentPhone.readOnly      = false;		
		form.PaymentCity.readOnly       = false;
	}	
}

function checkinformation()
{
	var error=false;
	var form=document.frmCheckout;
	if (form.ShippingFirstName.value==null || form.ShippingFirstName.value=="")
	{
		document.getElementById("Sfirstname-error").innerHTML="Enter first name";
		error=true;
	}
	if (form.ShippingLastName.value==null || form.ShippingLastName.value=="")
	{
		document.getElementById("Slastname-error").innerHTML="Enter last name";
		error=true;
	}
	if (form.ShippingAddress.value==null || form.ShippingAddress.value=="")
	{
		document.getElementById("Saddress-error").innerHTML="Enter Shipping Address";
		error=true;
	}
	if (form.ShippingPhone.value==null || form.ShippingPhone.value=="")
	{
		document.getElementById("Sphone-error").innerHTML="Enter phone number";
		error=true;
	}
	if (form.ShippingCity.value==null || form.ShippingCity.value=="")
	{
		document.getElementById("Scity-error").innerHTML="Enter Shipping Address City";
		error=true;
	}
	if(error == true) 
	{
		return false;
	}
}