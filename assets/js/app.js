$('img[data-enlargable]').addClass('img-enlargable').click(function(){
    var src = $(this).attr('src');
    $('<div class="item-details__image--size">').css({
        background: 'rgba(5, 11, 28, .5) url('+src+') no-repeat center',
        backgroundSize: 'contain',
        width:'100%', height:'100%',
        position:'fixed',
        zIndex:'10000',
        top:'0', left:'0',
        cursor: 'zoom-out'
    }).click(function(){
        $(this).remove();
    }).appendTo('body');
});

  $(document).ready(function() {
    $("#overflow-auto").mousemove(

        function(pos) {
            $("#floatingmes").show();
            $("#floatingmes").css('left', (pos.pageX + 10) + 'px').css('top', (pos.pageY + 10) + 'px');
        }

    ).mouseleave(function() {
        $("#floatingmes").hide();
    });
  });

    $('.minus').click(function() {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 100;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.plus').click(function() {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 100);
        $input.change();
        return false;
    });



$('.notable-slider, .category-slider, .create-slider').slick({
   dots: true,
   infinite: false,
   speed: 300,
   slidesToShow: 4.71,
   slidesToScroll: 2,
   responsive: [
     {
       breakpoint: 1500,
       settings: {
         slidesToShow: 4,
         slidesToScroll: 2,
         infinite: true,
         dots: true
       }
     },
     {
       breakpoint: 1280,
       settings: {
         slidesToShow: 3,
         slidesToScroll: 3,
         infinite: true,
         dots: true
       }
     },
     {
       breakpoint: 1024,
       settings: {
         slidesToShow: 2.4,
         slidesToScroll: 2
       }
     },
     {
       breakpoint: 768,
       settings: {
         slidesToShow: 1.5,
         slidesToScroll: 1
       }
     },
     {
       breakpoint: 500,
       settings: {
         slidesToShow: 1,
         slidesToScroll: 1,
         dots: true
       }
     }
     // You can unslick at a given breakpoint now by adding:
     // settings: "unslick"
     // instead of a settings object
   ]
   });
$(function () {
            $(document).click(function (event) {
                var clickover = $(event.target);
                var _opened = $(".navbar-collapse").hasClass("navbar-collapse collapse show");
                if (_opened === true && !clickover.hasClass("navbar-toggler")) {
                    $("button.navbar-toggler").click();
                }
            });
        });

(function() {
    function scrollHorizontally(e) {
        e = window.event || e;
        var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
        document.getElementById('mouseScroll').scrollLeft -= (delta*40); // Multiplied by 40
        e.preventDefault();
    }
    if (document.getElementById('mouseScroll').addEventListener) {
        // IE9, Chrome, Safari, Opera
        document.getElementById('mouseScroll').addEventListener("mousewheel", scrollHorizontally, false);
        // Firefox
        document.getElementById('').addEventListener("DOMMouseScroll", scrollHorizontally, false);
    } else {
        // IE 6/7/8
        document.getElementById('mouseScroll').attachEvent("onmousewheel", scrollHorizontally);
    }
})();


