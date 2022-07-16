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
  $('.add-to-cart').click(function(){ 
    var $data= $('.id_user').val();
    if($data==null){
      swal("Chưa đăng nhập!", "Hãy đăng nhập để thực hiện!", "error");
    }
    else{
    swal("Thành công!", "Đã thêm sản phẩm vào giỏ hàng!", "success");
    }

});
$('.minus').click(function () {
  var $input = $(this).parent().find('input');
  var count = parseInt($input.val()) - 1;
  count = count < 1 ? 1 : count;
  $input.val(count);
  $input.change();
  return false;
});
$('.plus').click(function () {
  var $input = $(this).parent().find('input');
  $input.val(parseInt($input.val()) + 1);
  $input.change();
  return false;
}); 
  

});


