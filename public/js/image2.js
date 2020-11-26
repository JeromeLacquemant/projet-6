// this variable is the list in the dom, it's initiliazed when the document is ready
var $collectionImage;
// the link which we click on to add new items
var $addNewImage = $('<a href="#" class="btn btn-info">Add new Image</a>');
// when the page is loaded and ready
$(document).ready(function () {
    // get the collectionHolder, initilize the var by getting the list;
    $collectionImage = $("#image_list");
    // append the add new item link to the collectionHolder
    $collectionImage.append($addNewImage);
    // add an index property to the collectionHolder which helps track the count of forms we have in the list
    $collectionImage.data("index", $collectionImage.find(".panel").length)
    // finds all the panels in the list and foreach one of them we add a remove button to it
    // add remove button to existing items
    $collectionImage.find(".panel").each(function () {
        // $(this) means the current panel that we are at
        // which means we pass the panel to the addRemoveButton function
        // inside the function we create a footer and remove link and append them to the panel
        // more informations in the function inside
        addRemoveButtonImage($(this));
    });
    // handle the click event for addNewItem
    $addNewImage.click(function (e) {
        // preventDefault() is your  homework if you don't know what it is
        // also look up preventPropagation both are usefull
        e.preventDefault();
        // create a new form and append it to the collectionHolder
        // and by form we mean a new panel which contains the form
        addNewFormImage();
    })
});
/*
 * creates a new form and appends it to the collectionHolder
 */
function addNewFormImage() {
    // getting the prototype
    // the prototype is the form itself, plain html
    var prototypeImage = $collectionImage.data("prototype");
    // get the index
    // this is the index we set when the document was ready, look above for more info
    var indexImage = $collectionImage.data("index");
    // create the form
    var newFormImage = prototypeImage;
    // replace the __name__ string in the html using a regular expression with the index value
    newFormImage = newFormImage.replace(/__name__/g, indexImage);
    // incrementing the index data and setting it again to the collectionHolder
    $collectionImage.data("index", indexImage+1);
    // create the panel
    // this is the panel that will be appending to the collectionHolder
    var $panelImage = $('<div class="panel panel-warning"><div class="panel-heading"></div></div>');
    // create the panel-body and append the form to it
    var $panelBodyImage = $('<div class="panel-body"></div>').append(newFormImage);
    // append the body to the panel
    $panelImage.append($panelBodyImage);
    // append the removebutton to the new panel
    addRemoveButton($panelImage);
    // append the panel to the addNewItem
    // we are doing it this way to that the link is always at the bottom of the collectionHolder
    $addNewImage.before($panelImage);
}

/**
 * adds a remove button to the panel that is passed in the parameter
 * @param $panelImage
 */
function addRemoveButtonImage ($panel) {
    // create remove button
    var $removeButtonImage = $('<a href="#" class="btn btn-danger">Remove Image</a>');
    // appending the removebutton to the panel footer
    var $panelFooterImage = $('<div class="panel-footer"></div>').append($removeButtonImage);
    // handle the click event of the remove button
    $removeButtonImage.click(function (e) {
        e.preventDefault();
        // gets the parent of the button that we clicked on "the panel" and animates it
        // after the animation is done the element (the panel) is removed from the html
        $(e.target).parents(".panel").slideUp(1000, function () {
            $(this).remove();
        })
    });
    // append the footer to the panel
    $panelImage.append($panelFooterImage);
}