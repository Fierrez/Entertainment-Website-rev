const LightThemeToggle = document.getElementById("light-theme-button")

var toggle= localStorage.getItem("isPreferredTheme");
LightMode()





console.log(toggle)
console.log(localStorage.getItem("isPreferredTheme"));

function LightMode(){    
    let root = document.documentElement
   

    console.log(toggle)
    console.log(localStorage.getItem("isPreferredTheme"));

    if(toggle == "black"){
        
        root.style.setProperty('--font', 'white')
        root.style.setProperty('--bg', 'black')
        root.style.setProperty('--bordercolor', 'rgb(44, 44, 44)')
        root.style.setProperty('--popupfont', 'rgb(238, 238, 238)')
        root.style.setProperty('--popupbg', 'rgb(49, 54, 63)')
        root.style.setProperty('--popupbordercolor','rgb(118, 171, 174)')
        // root.style.setProperty('popupbordershadow','')
        root.style.setProperty('--popuplabelcolor','rgb(118, 171, 174)')

        toggle="white";
        localStorage.setItem("isPreferredTheme","black")
        
    }else if(toggle == "white" || toggle== null ){

        root.style.setProperty('--font', 'black')
        root.style.setProperty('--bg', 'white')
        root.style.setProperty('--bordercolor', 'rgb(44, 44, 44)')
        root.style.setProperty('--popupfont', 'black')
        root.style.setProperty('--popupbg', 'rgb(247, 247, 247)')
        root.style.setProperty('--popupbordercolor','rgb(118, 171, 174)')
        root.style.setProperty('--popuplabelcolor','rgb(118, 171, 174)')
        toggle="black"
        localStorage.setItem("isPreferredTheme","white")

    }


}

LightThemeToggle.addEventListener("click", LightMode) ;








// LogInForm Validation and Authentication

var onlyLetter = /^[a-zA-Z]+$/;
var ifcontainSymbol = /[.*+?^${}()|[\]\\]/m;
var numberLetter = /^[a-zA-Z0-9]+$/
var isGmailAddress = /[@]+/;



// $('#LogInButton').click(function(){
//     $("#LogInForm").submit(function(e){
//         e.preventDefault();

//     })
// })



// $("#passwordLogIn").keyup(function(){
//     console.log("key press");
    
//     if( $("#passwordLogIn").val().length < 8  ){
//         $("#errorMessagePasswordLogIn").html("Password should have minimum of 8 characters")
        


//     }else{
//         $("#errorMessagePasswordLogIn").html("")
        
//     }

        // if( !numberLetter.test( $("#passwordLogIn").val() ) ){
        //     $("#errorMessagePasswordLogIn").html("Password should not contain illegal character")
    
        // }else if( $("#passwordLogIn").val()  == ""){
        //     $("#errorMessagePasswordLogIn").html(" ")
    
        // }else{
        //     $("#errorMessagePasswordLogIn").html(" ")
        // }

// })



// SignUpForm Validation and Authentication

$('#SignUpButton').click(function(){
    $("#SignUpForm").submit(function(e){
        e.preventDefault();
        
    })
    console.log("signup click")



    if( $("#usernameSignUp").val().length == 0 ){

        $("#errorMessageUsernameSignUp").html("Please enter a username")
        $("#usernameSignUp").css("box-shadow","0 0 1rem red")
        
    }else{
        $("#errorMessageUsernameSignUp").html(" ")
        $("#usernameSignUp").css("box-shadow","")
    }
})


$("#emailSignUp").keyup(function(){
   
    if( isGmailAddress.test($("#emailSignUp").val()) || $("#emailSignUp").val() == ""  ){
        
        $("#errorMessageEmailSignUp").html(" ")
        $("#emailSignUp").css("box-shadow","")
    }else {
        
        $("#errorMessageEmailSignUp").html("Please enter a valid email address")
        $("#emailSignUp").css("box-shadow","0 0 1rem red")
    }

})




$("#passwordSignUp").keyup(function(){
    console.log("key press");
    
    if( $("#passwordSignUp").val().length < 8  && $("#passwordSignUp").val().length > 0 ){

        $("#errorMessagePasswordSignUp").html("Password should have minimum of 8 characters")
        $("#passwordSignUp").css("box-shadow","0 0 1rem red")
        
    }else if( $("#passwordSignUp").val() == "" ) {

        $("#errorMessagePasswordSignUp").html(" ")
        $("#passwordSignUp").css("box-shadow","")
    }else{
        $("#errorMessagePasswordSignUp").html(" ") 
        $("#passwordSignUp").css("box-shadow","")
    }

})

$("#usernameSignUp").keyup(function(){
    console.log("key press");
    if( $("#usernameSignUp").val().length > 0 ){

        $("#errorMessageUsernameSignUp").html(" ")
        $("#usernameSignUp").css("box-shadow","")
    }


})