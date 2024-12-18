const sideBar = document.getElementsByClassName("sidebar")[0];
const menuBtn = document.getElementsByClassName("menu")[0];

menuBtn.addEventListener("click",()=>{
    sideBar.classList.toggle("opened");
})