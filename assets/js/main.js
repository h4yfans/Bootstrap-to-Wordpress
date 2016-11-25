/**
 * Created by Kaan on 11/20/2016.
 */

$(function () {
    //Cache the window object
    var $window = $(window);
    console.log($window)

    //Parallax background efect
    $('section[data-type="background"]').each(function () {
        var $bgobj = $(this); // assigning the object
        $window.scroll(function () {
            // scroll the background at var speed
            // the yPOS is a negative value because we're scrolling UP!

            var yPos = -($window.scrollTop() / $bgobj.data('speed'));

            //Put together out final background position
            var coords = '50% ' + yPos + 'px';

            //Move the background
            $bgobj.css({
                backgroundPosition: coords
            }); // end window scroll
        })
    });
});