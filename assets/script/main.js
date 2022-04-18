// $(document).ready(function(){
//     $('.modal').modal();
// });

// function myFunction(){
//     var x = document.getElementById("myInput");
//     var y = document.getElementById("hide");
//     var z = document.getElementById("hide2");

//     if(x.type === 'password'){
//         x.type = "text";
//         y.style.display = "block";
//         z.style.display = "none";
//     }
//     else {
//         x.type = "text";
//         y.style.display = "none";
//         z.style.display = "block";
//     }
// }

/*===== MODAL =====*/ 

const open_masuk = document.getElementById('open-masuk')
const close_masuk = document.getElementById('close-masuk')
const modal_masuk = document.getElementById('modal-masuk')

const open_daftar = document.getElementById('open-daftar')
const close_daftar = document.getElementById('close-daftar')
const modal_daftar = document.getElementById('modal-daftar')

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

/*===== MENU SHOW =====*/ 
const showMenu = (toggleId, navId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)

    if(toggle && nav){
        toggle.addEventListener('click', ()=>{
            nav.classList.toggle('show')
        })
    }
}
showMenu('nav-toggle','nav-menu')


/*===== REMOVE MENU MOBILE =====*/
const navLink = document.querySelectorAll('.nav__item')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    navMenu.classList.remove('show')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

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
sr.reveal('.fix-img', {interval: 200})
sr.reveal('.home__subtitle', {})