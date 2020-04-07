jQuery( document ).ready(function($) {
    // $(".apply-button").click(function(){
    //     $(".apply-form").toggle();

    //   });
    // $('.slider').slick({
    //         infinite: true,
    //         slidesToShow: 2,
    //         slidesToScroll: 3,
    //         autoplay: true,
    //         autoplaySpeed: 2000,
    //       });
      $('.apply-button').on('click', function(e) {
        e.preventDefault();
        $('.modal').addClass('is-visible');

      });
      $('.modal-header .modal-close').on('click', function() {
        $('.modal').hide();
        window.location();
      });
});