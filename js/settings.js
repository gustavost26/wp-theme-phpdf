$(function(){

    $(".tipsy_se").tipsy({gravity: 'se'});

    $(".leave_comment").click(function(){
        var btn = $(this);
        $("#comment_form").slideDown(500, function(){
            btn.animate({ 
                "height" : 0, 
                "padding" : 0, 
                "border" : "none",
                "opacity" : "0"
            }, 700);
        });
    });


    /*
    $("iframe[src^='http://www.youtube.com']").wrap('<div class="videoWrapper" />');

    // Find all YouTube videos
    var $allVideos = $("iframe[src^='http://www.youtube.com']"),

    // The element that is fluid width
    $fluidEl = $("body");

    // Figure out and save aspect ratio for each video
    $allVideos.each(function() {

        $(this).data('aspectRatio', this.height / this.width)

        // and remove the hard coded width/height
        .removeAttr('height')
        .removeAttr('width');

    });

    // When the window is resized
    $(window).resize(function() {

        var newWidth = $fluidEl.width();

        // Resize all videos according to their own aspect ratio
        $allVideos.each(function() {
            var $el = $(this);
            $el
            .width(newWidth)
            .height(newWidth * $el.data('aspectRatio'));
        });

    // Kick off one resize to fix all videos on page load
    }).resize();
*/
});