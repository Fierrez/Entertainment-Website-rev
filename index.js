

if(localStorage.getItem("firstvisit") == null){
    
    localStorage.setItem("firstvisit", true)


}else if(localStorage.getItem("firstvisit") == "true" ){


    localStorage.setItem("firstvisit",false )

}

// const SignUpButton = document.getElementById("SignUpButton")
// const SignInButton = document.getElementById("LogInButton")
