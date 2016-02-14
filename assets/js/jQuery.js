$(document).ready(function(){
    $("p").click(function(){
        $(this).hide();
    });
});

$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideDown(5000);
    });
});