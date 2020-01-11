const form = document.getElementById('form');

const EMAIL_REGEXP = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

form.addEventListener('submit', e => {
	let result = validateForm();
	if (!result)
		e.preventDefault();
});

function validateForm() {	
	let result = 1;

	if(form.first_name.value === '') {
		setErrorFor(form.first_name, 'First name is requird!');
		result = 0;
	} else {
		setSuccessFor(form.first_name);
    }
    
    if(form.last_name.value === '') {
		setErrorFor(form.last_name, 'Last name is required!');
		result = 0;
	} else {
		setSuccessFor(form.last_name);
	}
	
	if(form.email.value === '') {
		setErrorFor(form.email, 'Email is required!');
		result = 0;
	} else if (!isEmail(form.email.value)) {
		setErrorFor(form.email, 'Email is invalid!');
		result = 0;
	} else {
		setSuccessFor(form.email);
	}
	
    if(form.birth_date.value === '') {
		setErrorFor(form.birth_date, 'Birthday is requird!');
		result = 0;
	} else if(Date.now() < Date.parse(form.birth_date.value)) {
		setErrorFor(form.birth_date, 'Birthday is invalid!');
		result = 0;
	} 
	else {
		setSuccessFor(form.birth_date);
	}

	return result;
}

function setErrorFor(input, message) {
	input.style.border = "1px solid red";
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	small.innerText = message;
}

function setSuccessFor(input) {
	input.style.border = "1px solid green";
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	small.innerText = "";
}
	
function isEmail(email) {
	return EMAIL_REGEXP.test(email);
}
