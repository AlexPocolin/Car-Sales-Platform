const toggleIcon =  document.getElementById('toggleNavbaIcon');
const closeNavbar =  document.getElementById('closeNavbar');
const navBar =  document.getElementById('navBar');
const navLinks =  document.querySelectorAll('.navLink');
const header =  document.querySelector('.header');


toggleIcon.onclick = function(){
    navBar.classList.add('show')
}

closeNavbar.onclick = function(){
    navBar.classList.remove('show')
}


navLinks.forEach((nav)=>{
    nav.addEventListener('click', ()=>{
        navBar.classList.remove('show')
    })
})


 
function addBg(){
    if(window.scrollY >= 10){
        header.classList.add('headerBg')
        
    }else{
        header.classList.remove('headerBg')

    }
}
window.addEventListener('scroll', addBg)


 //Review Section Function =======================>
 let featuredSwiper = new Swiper(".reviewContainer", {
    // cssMode: true,
    loop: true,
    autoplay: true,
    centeredSlide: true,
    spaceBetween: 20,
    mousewheel: true,
    keyboard: true,
    mausehold: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    slidePerView: 'auto',

    breakpoints: {
      480: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 40,
        autoplay: false,
      },
    },
   
  
  });

   //Review Section Function =======================>
 let imageSwiper = new Swiper(".mainImgSwiper", {
  cssMode: true,
  loop: true,
  autoplay: true,
  centeredSlide: true,
  spaceBetween: 20,
  pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  slidePerView: 'auto',

  mousewheel: true,
  keyboard: true,
  mausehold: true,

});

