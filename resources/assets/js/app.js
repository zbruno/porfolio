/* ================================
===  BACKGROUND SLIDER        ====
================================= */
$('body').vegas({
  slides:[
    { src:'/images/backgrounds/me.jpg' },
    { src:'/images/backgrounds/oxy.jpg' },
    { src:'/images/backgrounds/code.jpg' }
  ]
});

/* =================================
   LOADER                     
=================================== */
$(window).on('load', function() {
  $('.status').fadeOut();
  $('.preloader').delay(1000).fadeOut('slow');
});

/*=================================
===  OWL CROUSEL               ====
===================================*/
$(document).ready(function() {
  var owl = $('#client-feedbacks');
  owl.owlCarousel({
      items : 3, //10 items above 1000px browser width
      itemsDesktop : [1000,2], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,1], // betweem 900px and 601px
      itemsTablet: [600,1], //2 items between 600 and 0
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
  });
});

/* ================================
===  PROJECT LOADING           ====
================================= */

$(document).ready(function($) {
  $('.project-loader').on('click', function(event) {
    event.preventDefault();

    const target = $(`.${$(this).attr('data-target')}`);
    const portfolioList = $('#portfolio-list');
    const content = $('#loaded-content');

    portfolioList.animate({'marginLeft':'-120%'},{duration:400,queue:false});
    portfolioList.fadeOut(400);
    setTimeout(function(){
      $('#loader').hide();
      target.show();
      content.fadeIn(600);
      $('#back-button').fadeIn(600);
    },400);

  });

  $('#back-button').on('click', function(event) {
    event.preventDefault();

    const portfolioList = $('#portfolio-list');
    const content = $('#loaded-content');

    content.fadeOut(400);
    $('#back-button').fadeOut(400);
    setTimeout(function(){
      $('.single-project').hide();
      portfolioList.animate({'marginLeft':'0'},{duration:400,queue:false});
      portfolioList.fadeIn(600);
    },400);
  });
});

/* ================================
===  KNOB                      ====
================================= */
$(function() {
  $('.skill1').knob({
    'max':100,
    'width': 64,
    'readOnly':true,
    'inputColor':' #404040 ',
    'bgColor':' #FFFFFF ',
    'fgColor':' #b30000 '
  });

  $('.skill2').knob({
    'max':100,
    'width': 64,
    'readOnly':true,
    'inputColor':' #404040 ',
    'bgColor':' #FFFFFF ',
    'fgColor':' #00b300 '
  });

  $('.skill3').knob({
    'max': 100,
    'width': 64,
    'readOnly': true,
    'inputColor':' #404040 ',
    'bgColor':' #FFFFFF ',
    'fgColor':' #0000b3 '
  });

  $('.skill4').knob({
    'max': 100,
    'width': 64,
    'readOnly': true,
    'inputColor':' #404040 ',
    'bgColor':' #FFFFFF ',
    'fgColor':' #b3b300 '
  });
});

/* =================================
===  WOW ANIMATION             ====
=================================== */
new WOW().init();

/* =================================
===  COLORBOX                   ====
=================================== */
$('.resume').colorbox();

/* =================================
===  SMOOTHSCROLL               ====
=================================== */
smoothScroll.init({
  speed: 1000,
  offset: 75,
});

/* =================================
===  MAILER                     ====
=================================== */
$('.send-button').click(function(e) {
  e.preventDefault();

  $(this).html('Sending...').addClass('loading');

  const data = {
    name: $('input[name="name"]').val(),
    email: $('input[name="email"]').val(),
    subject: $('input[name="subject"]').val() || 'Message from porfolio site',
    message: $('textarea').val()
  }

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $.post('/', data, function(res) {
    showAlert(res, 'success');
  }).fail(function(res) {
    res.responseJSON.errors.forEach((error) => {
      showAlert(error, 'error');
    });
  }).always(function() {
    $('.send-button').html('Send Message').removeClass('loading');
  });
});

const showAlert = function(message, alertType) {
  const alert = `<div class="alert ${alertType} opened" role="alert">${message}</div>`;

  $('.alerts-container').append(alert);
  $('.my-alert').html(message).addClass(`${alertType} opened`);

  window.setTimeout(function() {
    $('.alert').remove();
  }, 5000);
}
