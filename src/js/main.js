$(document).ready(function() {
    var button = $('#button');
    var modal = $('#modal');
    var close = $('#close')
    var totop = $('#totop');

    button.on('click', function() {
        modal.addClass('modal_active');
    });

    close.on('click', function() {
        modal.removeClass('modal_active');
    })

    setInterval(function() {
        modal.removeClass('modal_active')  
    }, 5000);


  $(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
      totop.addClass('show');
    } else {
      totop.removeClass('show');
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