// form dom formdata
// const email
// pevent druhoj

const form = document.getElementById('form');
const first_name = document.getElementById('first_name');
const last_name = document.getElementById('last_name');
const email = document.getElementById('email');
const birth_date = document.getElementById('birth_date');
const EMAIL_REGEXP = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


// function requarie d for kavicki string true 
const required = (value) => value !== '';
const isEmail = RegExp.prototype.test.bind(EMAIL_REGEXP);

const validationRules = {
	'first_name': [ required ],
	'email': [ required, isEmail ]
}

form.addEventListener('submit', e => {
	e.preventDefault();
	
	// let result = validateForm();
	// if (result) form.submit();
	const fd = new FormData(form);
	for (let option in validationRules) {
		let rules = validationRules[option];
		let result = rules.map(fn => fn.call(null, fd.get(option))).every(e => e.result);

		if (!result) {
			e.preventDefault();
			console.log('Form failed');
			return;
		}
	}
});

function validateForm() {	
	let result = 1;

	if(first_name.value === '') {
		setErrorFor(first_name, 'First name is requird!');
		result = 0;
	} else {
		setSuccessFor(first_name);
    }
    
    if(last_name.value === '') {
		setErrorFor(last_name, 'Last name is required!');
		result = 0;
	} else {
		setSuccessFor(last_name);
	}
	
	if(email.value === '') {
		setErrorFor(email, 'Email is required!');
		result = 0;
	} else if (!isEmail(email.value)) {
		setErrorFor(email, 'Email is invalid!');
		result = 0;
	} else {
		setSuccessFor(email);
	}
	
    if(birth_date.value === '') {
		setErrorFor(birth_date, 'Birthday is requird!');
		result = 0;
	} else if(Date.now() < Date.parse(birth_date.value)) {
		setErrorFor(birth_date, 'Birthday is invalid!');
		result = 0;
	} 
	else {
		setSuccessFor(birth_date);
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
	
// function isEmail(email) {
// 	return EMAIL_REGEXP.test(email);
// }