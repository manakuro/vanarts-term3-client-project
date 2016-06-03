$(function(){

    /*---------------------------
        Audio Player
    ---------------------------*/
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


    /*---------------------------
        Video
    ---------------------------*/
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
        Comments
    ---------------------------*/
    var $commentForm = $('.js-comment-form');
    if ($commentForm.length > 0) {
      $commentForm.submit(function(e) {
        e.preventDefault();

        var inputData = objectize($(this).serializeArray());
        
        $.ajax({
          url: $(this).attr('action'),
          type: 'post',
          data: inputData,
          success: function(res) {
            res = JSON.parse(res);
            $('.js-comments-lists').html(res.data.comment_lists);
          },
          error: function(err) {
            console.log('Error!');
          }
        });


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
    
     function objectize(inputs, options) {

        var self = this,
            result = {};
        
        options = options || {};

        _.each( inputs, function(input){

            if ( options.escape ) {
                input.value = self.escape( input.value );
            }

            if ( options.trim ) {
                input.value = self.trim( input.value );
            }

            if ( input.name.indexOf(".") !== -1 ) {

                input.name = input.name.split(".");

                if ( result[input.name[0]] === undefined ) {
                    result[input.name[0]] = {};
                }

                result[input.name[0]][input.name[1]] = input.value;

            } else {
                result[input.name] = input.value;
            }
        });
        return result;
    }

});