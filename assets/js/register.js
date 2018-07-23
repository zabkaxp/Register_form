$(document).ready(function(){
    
   //on click hide login and show registration form
    $("#signup").click(function(){
        $("#first").slideUp("slow", function(){
            $("#second").slideDown("slow");
        });
    }); 
    
    //on click hide registration and show rlogin
    $("#signin").click(function(){
        $("#second").slideUp("slow", function(){
            $("#first").slideDown("slow");
        });
    }); 
    
});