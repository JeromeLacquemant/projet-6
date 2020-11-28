
// Loading of comments for the page of one article and figures on the home page
$("#showMore").click(function(){
    $("#boxs .box:hidden").slice(0,3).slideDown();
    if($("#boxs .box:hidden").length === 0){
        $("#showMore").fadeOut("slow");
    }
});

$(function(){
    $("img.lazy").lazyload();
});


// Loading of photos and videos for a page of a figure
var buttonFiles = document.getElementById("showMoreFile") ;
var files = document.getElementById("files") ;

files.style.display = "none";

buttonFiles.addEventListener("click", () => {
    $("#showMoreFile").fadeOut("slow");
    files.style.display = "block";
}) ;