// Login

const inputs = document.querySelectorAll(".input");

function addcl(){	
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}

inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
})

// Password Toogle (Login & Register)

const togglePasswordLogin = (button) => {
	button.classList.toggle("showing");
	const input = document.getElementById("password-login");
	input.type = input.type === "password" ? "text" : "password";
}

const togglePasswordRegister = (button) => {
	button.classList.toggle("showing");
	const input = document.getElementById("password-register");
	input.type = input.type === "password" ? "text" : "password";
}

// Hide Login and Show Register

const hidelogin = document.querySelectorAll(".to-register");

hidelogin.forEach((hidelogin) => {
    hidelogin.addEventListener("click", function() {
    const logincontainer = this.closest(".login-container");
    const registercontainer = document.querySelector(".register-container");

    logincontainer.style.display = "none";
    registercontainer.style.display = "flex";
	});
})

// Hide Register and Show Login

const hideregister = document.querySelectorAll(".to-login");

hideregister.forEach((hideregister) => {
    hideregister.addEventListener("click", function() {
    const registercontainer = this.closest(".register-container");
    const logincontainer = document.querySelector(".login-container");

    registercontainer.style.display = "none";
    logincontainer.style.display = "flex";
	});
});


  





;