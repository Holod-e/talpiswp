jQuery(document).ready(function() {

      jQuery('a[href^="#modal-"]').on('click', function(event){
          event.preventDefault();
          var id=jQuery(this).attr("href");
          jQuery(id).fadeIn(300);
          var video_src = jQuery(this).data("srcvideo");
          if(jQuery(this).data("video") == "vimeo"){
            jQuery("#video-popup").replaceWith("<iframe src='https://player.vimeo.com/video/"+ video_src +"?autoplay=1&title=0&byline=0&portrait=0&badge=0' id='video-popup' width='100%' height='100%'' frameborder='0'></iframe>");
          }else if(jQuery(this).data('video') == 'youtube'){
            jQuery("#video-popup").replaceWith("<iframe id='video-popup' width='100%' height='100%' src='https://www.youtube.com/embed/"+ video_src +"?autoplay=1&title=0&byline=0&portrait=0&badge=0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>");
          }
      });

      jQuery('.modal-overlay').on("click",function(){
          jQuery(this).fadeOut(300);
          jQuery("#video-popup").replaceWith("<div id='video-popup'></div>");
      } );

      jQuery('div.close-button').on("click",function(){
          jQuery('[id ^= modal]').fadeOut(300);
          jQuery("#video-popup").replaceWith("<div id='video-popup'></div>");
      } );

      jQuery('.modal-content').on('click', function( e ) {
          e.stopPropagation();
      });

});
