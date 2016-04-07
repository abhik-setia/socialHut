$(document).ready(function(){
    $(".donate_btn").hover(function(){
        $(this).html("DONATE NOW");
        $(this).css({"background-color": "#FF7932","color":" white"});
        }, function(){
        $(this).html("83 DONATIONS")	
        $(this).css({"background-color": "white",color:"#000"});
    });
});