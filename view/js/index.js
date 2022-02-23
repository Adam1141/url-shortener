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

function handleNavbarLinkOnclick(event) {
    localStorage.setItem("currentTab", event.target.innerText);
    console.log(event.target.innerText)
}

function addOnlickEventListenersForNavbarLinks() {
    const links = document.querySelectorAll(".navbar .links-container a");
    // console.log(links)
    if(!links) return;
    links.forEach(link => {
        if(link){
            link.removeEventListener('click', handleNavbarLinkOnclick);
            link.addEventListener('click', handleNavbarLinkOnclick);
        }
    }) 
}

function handleStartShorteningOnclick(event) {
    localStorage.setItem("currentTab", "shorten");
}

function addOnlickEventListenersStartShortening() {
    const link = document.querySelector(".start-shortening");
    // console.log(link)
    if(!link) return;
    link.removeEventListener('click', handleStartShorteningOnclick)
    link.addEventListener('click', handleStartShorteningOnclick)
}

(() => {
    window.onload = () => {
        // console.log(localStorage.getItem('currentTab'))
        window.currentTab = localStorage.getItem("currentTab") || "Home";
        highlightNavbarLinkByName(window.currentTab);
        addOnlickEventListenersForNavbarLinks();
        addOnlickEventListenersStartShortening();
    }
})()