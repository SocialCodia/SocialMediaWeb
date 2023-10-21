let API_URL = 'http://socialcodia.net/api/public/';

function doRegister()
{
	let name = document.getElementById('name');
	let email = document.getElementById('email');
	let password = document.getElementById('password');
	let register = document.getElementById('register');
	let registerMessage = document.getElementById('registerMessage');
	registerMessage.classList.remove('grey-text');
	registerMessage.classList.add('red-text');
	if (name.value=='')
	{
		registerMessage.innerHTML = 'Enter Name';
		return;
	}
	if (email.value=='')
	{
		registerMessage.innerHTML = 'Enter Email';
		return;
	}
	if (password.value=='')
	{
		registerMessage.innerHTML = 'Enter Password';
		return;
	}
	if (name.value.length<4)
	{
		registerMessage.innerHTML = 'Name too Short';
		return;
	}
	if (name.value.length<10)
	{
		registerMessage.innerHTML = 'Invalid Email Address';
		return;
	}

	if (password.value.length<8)
	{
		registerMessage.innerHTML = 'Password too Short';
		return;
	}
	register.classList.add('disabled');
	$.ajax({
		url : API_URL+"register",
		type : 'POST',
		data : {
			'name' : name.value,
			'email' : email.value,
			'password' : password.value
		},
		success:function(resp)
		{
			registerMessage.innerHTML = resp.message;
			register.classList.remove('disabled');
		}
	})

}