$(document).ready(function(){
    $(".donate_btn").hover(function(){
        $(this).html("DONATE NOW");
        $(this).css({"background-color": "#FF7932","color":" white","font-family":"Raleway"});
        }, function(){
        $(this).html("83 DONATIONS")	
        $(this).css({"background-color": "white",color:"#000","font-family":"Montserrat_normal"});
    });
});