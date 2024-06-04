const LightThemeToggle = document.getElementById("light-theme-button")

var toggle="false";
function LightMode(){    
    let root = document.documentElement
   

    console.log(toggle)
    if(toggle == "false"){
        
        root.style.setProperty('--font', 'rgb(230, 230, 230)')
        root.style.setProperty('--bg', 'black')
        root.style.setProperty('--bordercolor', 'rgb(44, 44, 44)')
        
        toggle="true";
        localStorage.setItem("prefferedTheme","black")
        
    }else if(toggle == "true" ){

        root.style.setProperty('--font', 'black')
        root.style.setProperty('--bg', 'white')
        root.style.setProperty('--bordercolor', 'rgb(44, 44, 44)')
      
        
        toggle="false"
        localStorage.setItem("prefferedTheme","white")

    }


}


LightThemeToggle.addEventListener("click", LightMode)