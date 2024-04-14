let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}
const showPopupBtn = document.querySelector("#login-btn");
const formPopup = document.querySelector(".form-popup");
const hidePopupBtn = document.querySelector(".form-popup .close-btn");
const loginSignupLink = document.querySelectorAll(".form-box .bottom-link a");

showPopupBtn.addEventListener("click", () => {
  document.body.classList.toggle("show-popup")  
})
hidePopupBtn.addEventListener("click", () => showPopupBtn.click());
document.querySelector('#login-btn').onclick = () =>{

}
loginSignupLink.forEach(link => {
  link.addEventListener("click",(e) => {
    e.preventDefault();
    formPopup.classList[link.id === "signup-link" ? 'add' : 'remove']("show-signup");
    
});
});


let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
    
}
window.onscroll = () =>{
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}
var swiper = new Swiper(".plant-slider", {
    loop:true, 
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableInteraction: false,

    },
    centeredSlides: false,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 2,
      },
    },
  });
  var swiper = new Swiper(".review-slider", {
    loop:true, 
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableInteraction: false,

    },
    centeredSlides: false,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 2,
      },
    },
  });