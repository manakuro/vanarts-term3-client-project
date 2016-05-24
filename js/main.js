$(function(){

    // Audio
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