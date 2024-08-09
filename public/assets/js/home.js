$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay: true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        1200:{
            items:3
        },
        1600: {
            items: 4
        },
    }
});
