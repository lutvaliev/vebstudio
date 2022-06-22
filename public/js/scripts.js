// Homepage Main Slider
var swiper = new Swiper(".mySwiper", {});

// Homepage portfolio slider
var swiperPortfolio = new Swiper(".mySwiperPortfolio", {
    slidesPerView: 3,
    spaceBetween: 40,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    }
});


// Homepage portfolio slider
var swiperTeam = new Swiper(".mySwiperTeam", {
    slidesPerView: 4,
    spaceBetween: 55,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    }
});

// Open FAQ
$('.faq_question-text').on('click',function(){
    $(this).closest('.faq_question').find('.faq_answer').fadeToggle();
}); 

// Home page portfolio tab
const tabs = document.querySelector(".portfolio-tabs");
const tabButton = document.querySelectorAll(".portfolio-tab");
const contents = document.querySelectorAll(".swiper");

tabs.onclick = e => {
const id = e.target.dataset.id;
if (id) {
    tabButton.forEach(btn => {
        btn.classList.remove("active-tab");
    });
    e.target.classList.add("active-tab");

    contents.forEach(content => {
        content.classList.remove("active-elements");
    });
    const element = document.getElementById(id);
    element.classList.add("active-elements");
}
};

// Portfolio tabs
// const filterBox = document.querySelectorAll('.box');

// document.querySelector('nav').addEventListener('click', (event) => {
//     if(event.target.tagName !== 'LI') return false;
//     let filterClass = event.target.dataset['f'];

//     filterBox.forEach(elem => {
//         elem.classList.remove('hide');
//         if(!elem.classList.contains(filterClass) && filterClass !== 'all'){
//             elem.classList.add('hide');
//         }
//     });
// })