$(function(){

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

    var max = 4;

    // Home / Gallery section
    var gallerySecImg = $('.gallery-section-img');
    if (gallerySecImg.length > 0) {
        setInterval(function(){
            var num = getRandomInt(1, max);
            gallerySecImg
                .find('img')
                .fadeOut(2000, function(){
                    $(this).attr('src', 'img/galleries/gallery-' + num + '.jpg');
                })
                .fadeIn(2000);
        }, 4000);
    }

    // Gallery fancybox
    var fbox = $('.fbox');

    if(fbox.length !== 0) {

        fbox.fancybox({
            scrolling: 'no',
            prevEffect      : 'none',
            nextEffect      : 'none',
            helpers     : {
                title   : { type : 'over' },
            }
        });

    }

    // Hover effect
    $('.gallery-img').on("mouseover", function(){

        $('.gallery-img').not($(this)).css("opacity", "0.5");

    }).on("mouseout", function(){

        $('.gallery-img').each(function(){
            $(this).css("opacity", "1"); 
        });

    });

});