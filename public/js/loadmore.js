
$("#showMore").click(function(){
    $("#boxs .box:hidden").slice(0,3).slideDown();
    if($("#boxs .box:hidden").length === 0){
        $("#showMore").fadeOut("slow");
    }
});

$(function(){
    $("img.lazy").lazyload();
});
