const inputs = document.querySelectorAll(".input");

const togglePassword = (button) => {
	button.classList.toggle("showing");
	const input = document.getElementById("password");
	input.type = input.type === "password" ? "text" : "password";
}

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
});
