$('.owl-carousel').owlCarousel({
    loop:true,
    margin:60,
    nav:true,
    navText: ["<img src='http://127.0.0.1:5500/assets/images/home/icn-l.png' class='prev owl-prev'> ","<img src='http://127.0.0.1:5500/assets/images/home/icn-r.png' class='next owl-next'>"],
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        1000:{
            items:4,
        }
    }
})