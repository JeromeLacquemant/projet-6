window.onload = () => {
    // Management of buttons for suppression
    let links = document.querySelectorAll("[data-delete]")

    // We loop on links
    for(link of links){
        //We listent the click event
        link.addEventListener("click", function(e){
            // We prevent the navigation
            e.preventDefault()

            //We ask confirmation
            if(confirm("Voulez-vous supprimer cette image ?")){
                // We send an Ajax request into the href of the link with the method DELETE
                fetch(this.getAttribute("href"), {
                    method: "DELETE", 
                    headers: {
                        'X-Requested-With': "XMLHttpRequest",
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({"_token": this.dataset.token})
                }).then(
                    //We retrieve the response in JSON
                    response => response.json()
                ).then(data => {
                    if(data.success)
                        this.parentElement.remove()
                    else
                        alert(data.error)
                }).catch(e => alert(e))
            }
        })
    }
}