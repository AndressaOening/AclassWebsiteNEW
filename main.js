// javascript
// function called onLoad
function onLoad() {
    // select elements using querySelector
    const button = document.querySelector('.menu-button')
    const nav = document.querySelector('.main-navigation')
    // make the button listen for a click
    button.addEventListener("click", function() {
        if( nav.classList.contains("open") ) {
            nav.classList.remove("open")
        }
        else{
            nav.classList.add("open")
        }
    })
    const search = document.querySelector ("#search")
    search.addEventListener("submit", function )
}
window.addEventListener("load", onLoad )