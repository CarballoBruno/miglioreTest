const boutonResponsive = document.querySelector(".btnMenuResponsive");
const menuNav = document.querySelector(".menuNavigation");

const ajoutClassOpen = e => {
    boutonResponsive.classList.toggle("open");
    menuNav.classList.toggle("openNav");
    if (boutonResponsive.getAttribute("aria-expanded") === "false") {
        boutonResponsive.setAttribute("aria-expanded","true")       
    }
    else {
        boutonResponsive.setAttribute("aria-expanded", "false")
    }  
}
boutonResponsive.addEventListener("click", ajoutClassOpen);

new ResizeObserver(entries => {
    if (entries[0].contentRect.width <= 1200) {
        menuNav.style.transition ="transform 0.3s ease-out"
    } else {
        menuNav.style.transition ="none"

    }
}).observe(document.body)
