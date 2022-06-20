$(document).ready(function(){
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    items:2,
    dots:false,
})
$('.single-item').slick();
$('.multiple-items').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    arrows:false,
    autoplay:true,
    autoplaySpeed: 3000,
  });
});