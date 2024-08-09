$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
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

$("#carousal-prev").on('click', function(e) {
    e.preventDefault();
     $(".owl-prev").click();
});

$("#carousal-next").on('click', function(e) {
    e.preventDefault();
     $(".owl-next").click();
});
