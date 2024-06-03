const LightThemeToggle = document.getElementById("light-theme-button")

var toggle="false";
function LightMode(){    
    let root = document.documentElement
   

    console.log(toggle)
    if(toggle == "false"){

        root.style.setProperty('--font', 'rgb(230, 230, 230)')
        root.style.setProperty('--bg', 'black')
        root.style.setProperty('--border-color', 'rgb(44, 44, 44)')
        toggle="true";
        localStorage.setItem("prefferedTheme","black")
        
    }else if(toggle == "true" ){

        root.style.setProperty('--font', 'black')
        root.style.setProperty('--bg', 'white')
        root.style.setProperty('--border-color', 'rgb(44, 44, 44)')
      
        
        toggle="false"
        localStorage.setItem("prefferedTheme","white")

    }


}


LightThemeToggle.addEventListener("click", LightMode)

// // Get the root element
// var r = document.querySelector(':root');

// // Create a function for getting a variable value
// function myFunction_get() {
//   // Get the styles (properties and values) for the root
//   var rs = getComputedStyle(r);
//   // Alert the value of the --font variable
//   alert("The value of --font is: " + rs.getPropertyValue('--font'));
// }

// // Create a function for setting a variable value
// function myFunction_set() {
//   // Set the value of variable --font to another value (in this case "lightfont")
//   r.style.setProperty('--font', 'lightfont');
// }