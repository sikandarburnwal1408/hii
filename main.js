// Change the navigation bar on scroll

window.addEventListener('scroll', ()=>{
    document.querySelector('nav').classList.toggle('window-scroll', window.scrollY>0)
})

// // Show/ hide nav menu 

// const menu = document.querySelector("nav__menu");
// const menuBtn = document.querySelector("#open-menu-btn");
// const closeBtn = document.querySelector("#close-menu-btn");

// menuBtn.addEventListener('click', ()=>{
//     menu.style.display="flex";
//     close.style.display="inline-block";
//     menu.style.display="none";
// })

// // Close Nav menu

// const closeNav = () => {
//     menu.style.display="none";
//     closeBtn.style.display="none";
//     menuBtn.style.display="inline-block";
// }

// closeBtn.addEventListener('click', closeNav);