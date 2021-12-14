function submit(){

    if (document.getElementById("name").value=="") {
        alert("Name cannot be empty");
    }
	else if (document.getElementById("email").value== ""){
        alert("Email cannot be empty");
    }
	else if (document.getElementById("pass").value== ""){
        alert("Password cannot be empty");
    }
	else if (document.getElementById("zip").value== ""){
        alert("Zip code cannot be empty");
    }
	else if (document.getElementById("country").value== "-1"){
		alert("Country cannot be empty");
	}
	else
		alert("Sucess!");
}

