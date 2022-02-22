"use strict";

function highlightNavbarLinkByName(linkName) {
    if(!linkName) return;
    const links = document.querySelectorAll(".navbar .links-container a");
    // console.log(links)
    // console.log(linkName)
    links.forEach(link => {
        if(link.innerText.trim().toLowerCase() === linkName.trim().toLowerCase() ) {
            link.classList.add("current-link")
        }else{
            link.classList.remove("current-link")
        }
    }) 
}



