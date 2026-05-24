function initCarousel() {

    $('.owl-carousel').owlCarousel({
        loop: false,
        margin: 20,
        nav: true,
        dots: true,

        responsive:{
            0:{
                items:1
            },
            768:{
                items:2
            },
            1024:{
                items:4
            }
        }
    });

}