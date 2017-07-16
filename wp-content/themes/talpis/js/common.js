$(document).ready(function() {
	$('.review-slider').slick({
    dots: true
  });

  $('form.filter select.seminar-place').on('change', function(event) {
    event.preventDefault();
    var seminarPlace = $( ".seminar-place option:selected").val();
    if (seminarPlace != '') {
      $('.seminar.f1').removeClass('f1');
      $('input[value="'+ seminarPlace +'"]').closest('.seminar').addClass('f1');
    }
    else {
      $('.seminar').addClass('f1');
    }
  });

  $('form.filter select.seminar-name').on('change', function(event) {
    event.preventDefault();
    var seminarName = $( ".seminar-name option:selected").val();
    if (seminarName != '') {
      $('.seminar.f2').removeClass('f2');
      $('input[value="'+ seminarName +'"]').closest('.seminar').addClass('f2');
    }
    else {
      $('.seminar').addClass('f2');
    }
  });

  $('form.filter select.trainer-name').on('change', function(event) {
    event.preventDefault();
    var trainerName = $( ".trainer-name option:selected").val();
    if (trainerName != '') {
      $('.seminar.f3').removeClass('f3');
      $('input[value="'+ trainerName +'"]').closest('.seminar').addClass('f3');
    }
    else {
      $('.seminar').addClass('f3');
    }
  });

});

$('.rewiews-block .read-more').on('click', function(e) {
  e.preventDefault();
  $(this).css('display', 'none');
  $(this).closest('.rewiew-info').find('.rewiew-text').css('height', 'auto');
});

$('.teta-courses .btn-more').on('click', function(e) {
  if ($(this).hasClass('active')) {
    $('.seminar-plan.active').slideUp().removeClass('active');
    $(this).removeClass('active');
  }
  else {
    $('.teta-courses .btn-more.active').removeClass('active');
    $(this).addClass('active');
    var target=$(this).attr('data-target');
    $('.seminar-plan.active').slideUp().removeClass('active');
    $('.hidden-'+target).slideDown().addClass('active');
  }
});

$('.vseladd-additions .btn-more').on('click', function(e) {
  if ($(this).hasClass('active')) {
    $('.seminar-plan.active').slideUp().removeClass('active');
    $(this).removeClass('active');
  }
  else {
    $('.teta-courses .btn-more.active').removeClass('active');
    $(this).addClass('active');
    var target=$(this).attr('data-target');
    $('.seminar-plan.active').slideUp().removeClass('active');
    $('.hidden-'+target).slideDown().addClass('active');
  }
});

$('.cources .cource').hover(function(){
  var targetLink = $(this).attr('href');
  $('.cources-list a[href="'+targetLink+'"]').toggleClass('active');
});

$('.cources-list a').hover(function(){
  var targetLink = $(this).attr('href');
  $('.cources .cource[href="'+targetLink+'"]').toggleClass('active');
});




// Disable scroll zooming and bind back the click event
 var onMapMouseleaveHandler = function (event) {
   var that = $(this);

   that.on('click', onMapClickHandler);
   that.off('mouseleave', onMapMouseleaveHandler);
   that.find('iframe').css("pointer-events", "none");
 }

 var onMapClickHandler = function (event) {
   var that = $(this);

   // Disable the click handler until the user leaves the map area
   that.off('click', onMapClickHandler);

   // Enable scrolling zoom
   that.find('iframe').css("pointer-events", "auto");

   // Handle the mouse leave event
   that.on('mouseleave', onMapMouseleaveHandler);
 }

 // Enable map zooming with mouse scroll when the user clicks the map
 $('.map').on('click', onMapClickHandler);

$('.question').on('click', function(e){
  $(this).toggleClass('opened');
})

$('a.comment-form-open').on('click', function(e) {
  e.preventDefault();
  $(this).css('display', 'none');
  $('#respond').slideDown();
})


// cookie script
	 function getCookie(cname) {
          var name = cname + "=";
          var ca = document.cookie.split(';');
          for(var i=0; i<ca.length; i++) {
              var c = ca[i];
              while (c.charAt(0)==' ') c = c.substring(1);
              if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
          }
          return "";
      }

      function setCookie(cname, cvalue, exdays) {
          var d = new Date();
          d.setTime(d.getTime() + (exdays*24*60*60*1000));
          var expires = "expires="+d.toUTCString();
          document.cookie = cname + "=" + cvalue + "; " + expires + "; path=/";
      }


      function clearF1Cookie() {
          setCookie("name","",-1);
          setCookie("email","",-1);
          setCookie("last1","",-1);
      }
      $(window).load(function() {
          $("input.name").val(getCookie("name"));
          $("input.email").val(getCookie("email"));
          $("input.phone").val(getCookie("phone"));
          $("input.phone1").val(getCookie("phone1"));
          $("input.phone2").val(getCookie("phone2"));
          $("input.phone3").val(getCookie("phone3"));
      });

// var modal = new tingle.modal({
//     footer: false,
//     stickyFooter: false,
//     cssClass: ['custom-class-1', 'custom-class-2']

// });

//   $('a.modal-btn').on('click', function(event){
//    event.preventDefault();
//    var modalId = $(this).attr('href');
//    modal.setContent($(modalId).html());
//    modal.open();
//   });
