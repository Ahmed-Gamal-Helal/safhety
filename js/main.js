$(function() {
    'use strict';

    $("header ul.navbar-nav li").click(function (ee){
        // ee.preventDefault();
        $(this).addClass('active').siblings().removeClass('active');
    });

    $('.carousel-slider .owl-carousel').owlCarousel({
        rtl:true,
        dots: false,
        margin: 2,
        loop: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    $('.health .owl-carousel, .sports .owl-carousel, .programs .owl-carousel').owlCarousel({
        rtl:true,
        dots: false,
        margin: 1,
        nav: true,
        loop: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    $('.different-subjects .owl-carousel').owlCarousel({
        rtl:true,
        dots: false,
        margin: 30,
        // nav: true,
        loop: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });

    $('.owl-nav .owl-prev, .owl-nav .owl-next').empty();


    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
        $('.various').fancybox({
        padding : 10,
        openEffect  : 'fade'
    });

    $('.inputfile').on('change', function(){
        var fullPath = $(this).val();
        var filename = fullPath.replace(/^.*[\\\/]/, '');
        $('.label-span').html(filename);
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#upload_img, #upload_img-2').attr('src', e.target.result);
                $('.saloka').css('background-image',e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
        

        // alert($(this).val());
    });
});
// var inputs = document.querySelectorAll( '.inputfile' );
// Array.prototype.forEach.call( inputs, function( input )
// {
//     var label	 = input.nextElementSibling,
//         labelVal = label.innerHTML;

//     input.addEventListener( 'change', function( e )
//     {
//         var fileName = '';
//         if( this.files && this.files.length > 1 )
//             fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
//         else
//             fileName = e.target.value.split( '\\' ).pop();

//         if( fileName )
//             label.querySelector( 'span' ).innerHTML = fileName;
//         else
//             label.innerHTML = labelVal;
//     });
// });