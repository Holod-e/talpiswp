jQuery(document).ready(function() {
	jQuery('.review-slider').slick({
    dots: true
  });

  jQuery('.awards-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
      responsive: [
        {
          breakpoint: 720,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        }
      ]
  });


  jQuery('form.filter select.seminar-place').on('change', function(event) {
    event.preventDefault();
    var seminarPlace = jQuery( ".seminar-place option:selected").val();
    if (seminarPlace != '') {
      jQuery('.seminar.f1').removeClass('f1');
      jQuery('input[value="'+ seminarPlace +'"]').closest('.seminar').addClass('f1');
    }
    else {
      jQuery('.seminar').addClass('f1');
    }
  });

  jQuery('form.filter select.seminar-name').on('change', function(event) {
    event.preventDefault();
    var seminarName = jQuery( ".seminar-name option:selected").val();
    if (seminarName != '') {
      jQuery('.seminar.f2').removeClass('f2');
      jQuery('input[value="'+ seminarName +'"]').closest('.seminar').addClass('f2');
    }
    else {
      jQuery('.seminar').addClass('f2');
    }
  });

  jQuery('form.filter select.trainer-name').on('change', function(event) {
    event.preventDefault();
    var trainerName = jQuery( ".trainer-name option:selected").val();
    if (trainerName != '') {
      jQuery('.seminar.f3').removeClass('f3');
      jQuery('input[value="'+ trainerName +'"]').closest('.seminar').addClass('f3');
    }
    else {
      jQuery('.seminar').addClass('f3');
    }
  });

});

jQuery('.rewiews-block .read-more').on('click', function(e) {
  e.preventDefault();
  jQuery(this).css('display', 'none');
  jQuery(this).closest('.rewiew-info').find('.rewiew-text').css('height', 'auto');
});

jQuery('.teta-courses .btn-more').on('click', function(e) {
  if (jQuery(this).hasClass('active')) {
    jQuery('.seminar-plan.active').slideUp().removeClass('active');
    jQuery(this).removeClass('active');
  }
  else {
    jQuery('.teta-courses .btn-more.active').removeClass('active');
    jQuery(this).addClass('active');
    var target=jQuery(this).attr('data-target');
    jQuery('.seminar-plan.active').slideUp().removeClass('active');
    jQuery('.hidden-'+target).slideDown().addClass('active');
  }
});

jQuery('.vseladd-additions .btn-more').on('click', function(e) {
  if (jQuery(this).hasClass('active')) {
    jQuery('.seminar-plan.active').slideUp().removeClass('active');
    jQuery(this).removeClass('active');
  }
  else {
    jQuery('.teta-courses .btn-more.active').removeClass('active');
    jQuery(this).addClass('active');
    var target=jQuery(this).attr('data-target');
    jQuery('.seminar-plan.active').slideUp().removeClass('active');
    jQuery('.hidden-'+target).slideDown().addClass('active');
  }
});

jQuery('.cources .cource').hover(function(){
  var targetLink = jQuery(this).attr('href');
  jQuery('.cources-list a[href="'+targetLink+'"]').toggleClass('active');
});

jQuery('.cources-list a').hover(function(){
  var targetLink = jQuery(this).attr('href');
  jQuery('.cources .cource[href="'+targetLink+'"]').toggleClass('active');
});

jQuery('.form-control').on('focus', function() {
  jQuery('#searchform').addClass('active');
});

jQuery('.form-control').on('focusout', function() {
  jQuery('#searchform').removeClass('active');
});

jQuery('.close-mob-menu').on('click', function (e) {
  jQuery('.mob-menu').fadeOut();
});

jQuery('#menu-item-138 > a').on('click', function(e) {
  e.preventDefault();
  jQuery(this).toggleClass('active');
  jQuery('.mob-menu .sub-menu').slideToggle();
});

jQuery('.mob-menu-icon').on('click', function(e) {
  e.preventDefault();
  jQuery('.mob-menu').fadeIn();
})




// Disable scroll zooming and bind back the click event
 var onMapMouseleaveHandler = function (event) {
   var that = jQuery(this);

   that.on('click', onMapClickHandler);
   that.off('mouseleave', onMapMouseleaveHandler);
   that.find('iframe').css("pointer-events", "none");
 }

 var onMapClickHandler = function (event) {
   var that = jQuery(this);

   // Disable the click handler until the user leaves the map area
   that.off('click', onMapClickHandler);

   // Enable scrolling zoom
   that.find('iframe').css("pointer-events", "auto");

   // Handle the mouse leave event
   that.on('mouseleave', onMapMouseleaveHandler);
 }

 // Enable map zooming with mouse scroll when the user clicks the map
 jQuery('.map').on('click', onMapClickHandler);

jQuery('.question').on('click', function(e){
  jQuery(this).toggleClass('opened');
})

jQuery('a.comment-form-open').on('click', function(e) {
  e.preventDefault();
  jQuery(this).css('display', 'none');
  jQuery('#respond').slideDown();
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
      jQuery(window).load(function() {
          jQuery("input.name").val(getCookie("name"));
          jQuery("input.email").val(getCookie("email"));
          jQuery("input.phone").val(getCookie("phone"));
          jQuery("input.phone1").val(getCookie("phone1"));
          jQuery("input.phone2").val(getCookie("phone2"));
          jQuery("input.phone3").val(getCookie("phone3"));
      });

// var modal = new tingle.modal({
//     footer: false,
//     stickyFooter: false,
//     cssClass: ['custom-class-1', 'custom-class-2']

// });

//   jQuery('a.modal-btn').on('click', function(event){
//    event.preventDefault();
//    var modalId = jQuery(this).attr('href');
//    modal.setContent(jQuery(modalId).html());
//    modal.open();
//   });
// custom scripts