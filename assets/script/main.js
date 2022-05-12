/*===== MODAL =====*/ 
const open_masuk = document.getElementById('open-masuk')
const close_masuk = document.getElementById('close-masuk')
const modal_masuk = document.getElementById('modal-masuk')

const open_daftar = document.getElementById('open-daftar')
const close_daftar = document.getElementById('close-daftar')
const modal_daftar = document.getElementById('modal-daftar')

if(!!open_masuk){
    open_masuk.addEventListener('click', () => {
        modal_masuk.classList.add('show-modal')
    });
    
    close_masuk.addEventListener('click', () => {
        modal_masuk.classList.remove('show-modal')
    });
    
    open_daftar.addEventListener('click', () => {
        modal_daftar.classList.add('show-modal')
    });
    
    close_daftar.addEventListener('click', () => {
        modal_daftar.classList.remove('show-modal')
    });
}

/*===== SHOW MOBILE MENU =====*/ 
const hamburger = document.querySelector('.hamburger');
const mobile_menu = document.querySelector('.mobile-nav');
hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('is-active');
    mobile_menu.classList.toggle('is-active');
})

/*===== SHOW DROPDOWN MENU =====*/ 
const nav_dropdown = document.querySelectorAll('.nav__dropdown');
nav_dropdown.forEach(n => n.addEventListener('click', function(){
    this.classList.toggle('is-active');
}))

/*===== REMOVE MOBILE MENU =====*/
const navLink = document.querySelectorAll('.nav__link')
navLink.forEach(n => n.addEventListener('click', function(){
    hamburger.classList.remove('is-active');
    mobile_menu.classList.remove('is-active');
}))

/*===== SHOW NOTIF =====*/ 
function showDropDown(){
    document.querySelector('.dropdown-content').classList.toggle('show');
}
/*===== SHOW PROFILE-NOTIF =====*/ 
function showProfileMenu(){
    document.querySelector('.profile-menu').classList.toggle('show');
}
// /*Add active class*/
// const beranda = document.getElementById('beranda')
// function beranda(){
//     beranda.add('active')
// }

/*===== SCROLL SECTIONS ACTIVE LINK =====*/
const sections = document.querySelectorAll('section[id]')

window.addEventListener('scroll', scrollActive)

function scrollActive(){
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight
        const sectionTop = current.offsetTop - 50;
        sectionId = current.getAttribute('id')

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active')
        }else{
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active')
        }
    })
}

/*===== SCROLL REVEAL ANIMATION =====*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '80px',
    duration: 2000,
    reset: true
})

/*SCROLL HOME*/
sr.reveal('.home__subtitle', {})
sr.reveal('.home__text', {delay: 200})
sr.reveal('.home__btn', {delay: 200})
sr.reveal('.home__img', {origin:'right', delay: 400})

/*SCROLL TENTANG BSF*/
sr.reveal('.section-title', {delay: 200})
sr.reveal('.tentang__img', {origin:'left', delay: 400})
sr.reveal('.tentang__subtitle', {})
sr.reveal('.tentang__text', {delay: 200})

/*SCROLL BEST SELLER*/
sr.reveal('#best-seller', {})
sr.reveal('.best-wrapper', {delay: 200})
sr.reveal('.product', {interval: 100})

// SCROLL DETAIL PRODUK
sr.reveal('.anim-left', {origin:'left', delay: 400})
sr.reveal('.anim-right', {origin:'right', delay: 400})

/*=====HIDE AND SHOW FORM=====*/
function show(){  
    var div = document.getElementById("form-pembelian");  
    div.style.display = "block";
}

function hide(){
    var hide = document.getElementById("form-pembelian");
    hide.style.display = "none";
}

/*=====NUMBER ONLY FORM INPUT=====*/
function onlyNumberKey(evt) {
    // Only ASCII character in that range allowed
    var ASCIICode = (evt.which) ? evt.which : evt.keyCode
    if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
        return false;
    return true;
}

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 20,
    maxSlidesPerGroup: 4,
    loop: false,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});