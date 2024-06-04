const LightThemeToggle = document.getElementById("light-theme-button")

var toggle="false";
function LightMode(){    
    let root = document.documentElement
   

    console.log(toggle)
    if(toggle == "false"){
        
        root.style.setProperty('--font', 'white')
        root.style.setProperty('--bg', 'black')
        root.style.setProperty('--bordercolor', 'rgb(44, 44, 44)')
        root.style.setProperty('--popupfont', 'rgb(238, 238, 238)')
        root.style.setProperty('--popupbg', 'rgb(49, 54, 63)')
        root.style.setProperty('--popupbordercolor','rgb(118, 171, 174)')
        // root.style.setProperty('popupbordershadow','')
        root.style.setProperty('--popuplabelcolor','rgb(118, 171, 174)')

        toggle="true";
        localStorage.setItem("prefferedTheme","black")
        
    }else if(toggle == "true" ){

        root.style.setProperty('--font', 'black')
        root.style.setProperty('--bg', 'white')
        root.style.setProperty('--bordercolor', 'rgb(44, 44, 44)')
        root.style.setProperty('--popupfont', 'black')
        root.style.setProperty('--popupbg', 'rgb(247, 247, 247)')
        root.style.setProperty('--popupbordercolor','rgb(118, 171, 174)')
        root.style.setProperty('--popuplabelcolor','rgb(118, 171, 174)')
        toggle="false"
        localStorage.setItem("preferredTheme","white")

    }


}


LightThemeToggle.addEventListener("click", LightMode)

var LoginButton = $('#LogInButton');
var SignUpButton =$('#SignUpButton');

LoginButton.click(function(){
    console.log(LoginButton)

})