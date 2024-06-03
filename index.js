

if(localStorage.getItem("firstvisit") == null){
    
    localStorage.setItem("firstvisit", true)


}else if(localStorage.getItem("firstvisit") == "true" ){


    localStorage.setItem("firstvisit",false )

}
