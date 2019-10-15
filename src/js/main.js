$(document).ready(function() {
    var button = $('#button');
    var modal = $('#modal');
    var close = $('#close');
    var totop = $('#totop');
    // // var element = $('.element').offset().top;
  
    $("#brif-form").validate({
      rules: {
        username: {
          required: true,
          minlength: 2,
          maxlength: 15
        },
        email: {
          required: true,
          email: true
        },
        phone: {
          required: true
        }
      },
      messages: {
        username: "",
        email: "",
        phone: ""
      },
      errorClass: "invalid",
      errorElement: "em"
    });

    $("#offer-form").validate({
      rules: {
        username: {
          required: true,
          minlength: 2,
          maxlength: 15
        },
        phone: {
          required: true
        }
      },
      messages: {
        username: "",
        phone: ""
      },
      errorClass: "invalid",
      errorElement: "span"
    });

    $("#modal-form").validate({
      rules: {
        username: {
          required: true,
          minlength: 2,
          maxlength: 15
        },
        phone: {
          required: true
        }
      },
      messages: {
        username: "",
        phone: ""
      },
      errorClass: "invalid",
      errorElement: "span"
    });

    jQuery(function($){
      $(".phone").mask("+375 (99) 999-99-99");
    });


    $(window).scroll(function() {
      var element = $('.element').offset().top;

      if ($(window).scrollTop() > 1400) {
        element.addClass('slideUp');
      }
      // else {
      //   element.removeClass('slideUp');
      // }
    });

    button.on('click', function() {
        modal.addClass('modal_active');
    });

    close.on('click', function() {
        modal.removeClass('modal_active');
    })

    setInterval(function() {
        modal.removeClass('modal_active')  
    }, 15000);


  $(window).scroll(function() {
    if ($(window).scrollTop() > 600) {
      totop.removeClass('show');
    } 
    else {
      totop.addClass('show');
    }
  });

  totop.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
  });
    
//   $(window).scroll(function() {
//     if ($(window).scrollTop() > 300) {
//       totop.addClass('show');
//     } else {
//       totop.removeClass('show');
//     }
//  });

});




// var button = document.querySelector('#button');
// var modal = document.querySelector('#modal');
// var close = document.querySelector('#close')

// button.addEventListener('click', function() {
//     modal.classList.add('modal_active');
// });

// close.addEventListener('click', function() {
//     modal.classList.remove('modal_active')
// })

// // setTimeout(function(){
// //     modal.classList.remove('modal_active')
// //     setTimeout(arguments.callee, 5000);
// //   }, 10);

// setInterval(function(){
//     modal.classList.remove('modal_active')
//   }, 5000);