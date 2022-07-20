<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../asset/js/app.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"
    integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="path/to/jquery-ui.min.js"></script>
<!-- danh gia -->
<script type="text/javascript">
        function remove_background(id_sanpham)
        {
            for(var count = 1; count <= 5 ; count++)    
            {
                $('#'+id_sanpham+'-'+count).css('color','#ccc');
            }
        }
        // hovor tang sao
        $(document).on('mouseenter','.rating',function(){
            var index = $(this).data("index");
            var id_sanpham = $(this).data('id_sanpham');
            
            remove_background(id_sanpham);
            for(var count = 1; count <= index; count++)
            {
                $('#'+id_sanpham+'-'+count).css('color','#ffcc00');
            }
        });

            // nha chuot
        $(document).on('mouseleave','.rating',function(){
            var index = $(this).data("index");
            var id_sanpham = $(this).data('id_sanpham');
            var rating = $(this).data("rating");
            remove_background(id_sanpham);
           
            for(var count = 1; count<=rating; count++)
            {
                $('#'+id_sanpham+'-'+count).css('color','#ffcc00');
            }
        });

        // danh gia
        $(document).on('click','.rating',function(){
            var index = $(this).data("index");
            var id_sanpham = $(this).data('id_sanpham');
            var _token = $('input[name="_token"]').val();
            var datauser = $('#datauser').val();
          
            $.ajax({
                url:"{{url('insert_rating')}}",
                method :"POST",
                data:{index:index, id_sanpham:id_sanpham, _token:_token, datauser:datauser},
                success:function(data)
                
                {
                    console.log(data);
                    if(data =='done')
                    {
                        alert("Bạn đã đánh giá "+index+" trên 5");
                    }else{
                        alert("Lỗi đánh giá");
                    }
                }
            });
        });
</script>
<!-- sort -->
<script type="text/javascript">
$(document).ready(function() {
    $('#sort').on('change', function() {

        var url = $(this).val();
        // alert(url);
        if (url) {
            window.location = url;
        }
        // $('.modalloading').modal('show');
        return false;
    });
});
</script>
<script>
const swiper = new Swiper('.swiper', {
    loop: true,
    slidesPerView: 1,
    autoplay: {
        delay: 3000,
    },
    pagination: {
        el: '.swiper-pagination',
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

});
</script>
<script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /*for each element, create a new DIV that will act as the selected item:*/
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /*for each element, create a new DIV that will contain the option list:*/
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < ll; j++) {
        /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function(e) {
            /*when an item is clicked, update the original select box,
            and the selected item:*/
            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            for (i = 0; i < sl; i++) {
                if (s.options[i].innerHTML == this.innerHTML) {
                    s.selectedIndex = i;
                    h.innerHTML = this.innerHTML;
                    y = this.parentNode.getElementsByClassName("same-as-selected");
                    yl = y.length;
                    for (k = 0; k < yl; k++) {
                        y[k].removeAttribute("class");
                    }
                    this.setAttribute("class", "same-as-selected");
                    break;
                }
            }
            h.click();
        });
        b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function(e) {
        /*when the select box is clicked, close any other select boxes,
        and open/close the current select box:*/
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
    });
}

function closeAllSelect(elmnt) {
    /*a function that will close all select boxes in the document,
    except the current select box:*/
    var x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
            arrNo.push(i)
        } else {
            y[i].classList.remove("select-arrow-active");
        }
    }
    for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
        }
    }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>
<script src="../asset/js/jquery.etalage.min.js"></script>
<script>
jQuery(document).ready(function($) {

    $('#etalage').etalage({
        thumb_image_width: 360,
        thumb_image_height: 360,
        source_image_width: 900,
        source_image_height: 900,
        show_hint: false,
        click_callback: function(image_anchor, instance_id) {
            alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor +
                '"\n(in Etalage instance: "' + instance_id + '")');
        }
    });
    // from right to left

});
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<meta name="csrf-token" content="{{csrf_token()}}">

<script type="text/javascript">
load_more_sanpham();

function load_more_sanpham(id = '') {
    $.ajax({
        url: '{{url('/load_more_sanpham')}}',
        method: "POST",

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            id: id
        },
        success: function(data) {
            $('#load_more_button').remove();
            $('#all_sanpham').append(data);
        }
    });
}
$(document).on('click', '#load_more_button', function() {
    var id = $(this).data('id');
    load_more_sanpham(id);
});
</script>



<script>
$(document).ready(function() {
    $(document).on('keyup', #keyword, function() {
        var keyword = $(this).val();
        $.ajax({
            type: "GET",
            url: "/timkiemsanpham",
            data: {
                keyword: keyword
            },
            dataType: "json",
            success: function(response) {}
        });
    });
});
</script>


<!-- <script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "113194961450846");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>


<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v14.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script> -->



</body>

</html>