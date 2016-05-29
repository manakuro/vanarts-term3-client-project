$(function(){

    // audo player
    var $jsPlayAudio = $('.js-play-audio');
    if ($jsPlayAudio.length > 0) {
        $('.js-play-audio').click(function(e){
            e.preventDefault();

            var $target = $(e.target),
                $parent = $target.parents('.js-play-audio'),
                $icon = $parent.find('.js-audio-icon');

            if ($parent.hasClass('playing')) {
                $parent.removeClass('playing');
                $icon.addClass('fa-play');
                $icon.removeClass('fa-pause');
            
            } else {
                $parent.addClass('playing');
                $icon.addClass('fa-pause');
                $icon.removeClass('fa-play');
            }
            
            // adjust icon positioning
            
        });

    }


    // video
    var $homeVideoTop = $('.js-home-video-top');
    if ($homeVideoTop.length > 0) {
        // adjust height of video list depending on hight of the top video
        $('.js-home-video-list').height($homeVideoTop.height());
    }


    var $videoContainer = $('.js-video-container');
    if ($videoContainer.length > 0) {
        $.extend(true, $.magnificPopup.defaults, {
          tClose: 'Close (Esc)', // Alt text on close button
          tLoading: 'Loading...', // Text that is displayed during loading. Can contain %curr% and %total% keys
          gallery: {
            tPrev: 'Previous (Left arrow key)', // Alt text on left arrow
            tNext: 'Next (Right arrow key)', // Alt text on right arrow
            tCounter: '%curr% of %total%' // Markup for "1 of 7" counter
          },
          image: {
            tError: '<a href="%url%">The image</a> could not be loaded.' // Error message when image could not be loaded
          },
          ajax: {
            tError: '<a href="%url%">The content</a> could not be loaded.' // Error message when ajax request failed
          }
        });

        $videoContainer.magnificPopup({
            delegate: '.js-popup-video',
            type: 'iframe',
            mainClass: 'mfp-fade',
            removeDelay: 200,
            preloader: false,
            fixedContentPos: false,
            gallery: {
              enabled:true
            },
        });

    }




/*---------------------------
    Utility
---------------------------*/

    /**
     * Get a random integer between `min` and `max`.
     * 
     * @param {number} min - min number
     * @param {number} max - max number
     * @return {int} a random integer
     */
    function getRandomInt(min, max) {
      return Math.floor(Math.random() * (max - min + 1) + min);
    }


    // Gallery fancybox
    // var fbox = $('.fbox');

    // if(fbox.length !== 0) {

    //     fbox.fancybox({
    //         scrolling: 'no',
    //         prevEffect      : 'none',
    //         nextEffect      : 'none',
    //         helpers     : {
    //             title   : { type : 'over' },
    //         }
    //     });

    // }

});