var clink = document.getElementsByClassName('clink');
window.addEventListener('scroll', function () {

  var nav = document.getElementsByClassName('ournav');
  // console.log(clink)
  if (window.pageYOffset > 25) {
    console.log(nav)
    'use strict'

    nav[0].style.backgroundColor = "rgba(255,255,255,0.9)"
    for (var i = 0; i < clink.length; i++) {
      clink[i].style.color = "#000"
    }

  }
  else {
    nav[0].style.backgroundColor = "transparent"
    for (var i = 0; i < clink.length; i++) {
      clink[i].style.color = "#fff"
    }
  }





});




function validate() {

  const name = document.getElementById('name');
  const email = document.getElementById('email');


  if (name.value == '' || name.value == null) {
    event.preventDefault();
    document.getElementById('nameError').innerHTML = "Enter your name";
    name.focus();
    return false;
  }

  else if (email.value == '' || email.value == null) {
    event.preventDefault();
    document.getElementById('emailError').innerHTML = "Enter a valid E-mail";
    email.focus();
    return false;
  }

  else {


    return true;

  }


}



function showSuccess() {
  Swal.fire(
    'Success',
    'Your message has been sent',
    'success'
  )

}


function showError() {
  Swal.fire(
    'Error',
    'Message Couldn`t sent. Try again Later',
    'error'
  )

}



// BackToTop


var btn = $('#backbutton');


$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function (e) {
  e.preventDefault();
  $('html, body').animate({ scrollTop: 0 }, '400');
});





