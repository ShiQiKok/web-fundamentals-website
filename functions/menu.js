function menu_show(){
    var menu = document.getElementById("nav_bar");
    
    if (menu.className === "links"){
        menu.className += "_change";
    }else{
        menu.className = "links";
    }
    
}