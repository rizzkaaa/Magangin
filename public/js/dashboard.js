const toggleMenu = document.getElementById("toggle-menu");
toggleMenu.addEventListener("click", () => {
    document.getElementById("sidebar").classList.toggle("-translate-x-[100%]");
    
})

const navs = document.querySelectorAll("aside ul li a");
navs.forEach(nav => {
    nav.addEventListener("click", () => {
        navs.forEach(nav => nav.classList.remove("bg-[#455bd4]"))
        navs.forEach(nav => nav.classList.remove("text-white"))
        nav.classList.add("bg-[#455bd4]")
        nav.classList.add("text-white")
    })
})