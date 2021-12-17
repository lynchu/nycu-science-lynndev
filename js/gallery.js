$(() => {

    var gallery = $('.owl-carousel');

    gallery.owlCarousel({
        loop: true,
        autoplay: true,
        autoplayHoverPause: true,
        dots: false,
        items: 1
    });

    $('.gallery_prev').click(() => {
        gallery.trigger('prev.owl.carousel');
    });

    $('.gallery_next').click(() => {
        gallery.trigger('next.owl.carousel');
    });
});