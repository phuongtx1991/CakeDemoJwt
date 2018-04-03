$(document).ready(function () {
    $( ".detail-title" ).click(function() {
        // $( ".detail-info" ).slideToggle( "slow" );
        $( this ).next(".detail-info").slideToggle( "fast" );
        var collection = $( this ).find( "i.fa-plus-square" );
        if(collection.length > 0) {
            collection.addClass('fa-minus-square');
            collection.removeClass('fa-plus-square');
        }else{
            $( this ).find("i.fa-minus-square").addClass('fa-plus-square');
            $( this ).find("i.fa-minus-square").removeClass('fa-minus-square');
        }
    });

    var $navi = $("#navigation"), scrollTop = 0;
    $(window).scroll(function () {
        var y = $(this).scrollTop(), speed = 0.05, pos = y * speed, maxPos = 100;
        if (y > scrollTop) {
            pos = maxPos;
        } else {
            pos = 0;
        }
        scrollTop = y;
        $navi.css({
            "-webkit-transform": "translateY(-" + pos + "%)",
            "-moz-transform": "translateY(-" + pos + "%)",
            "-o-transform": "translateY(-" + pos + "%)",
            "transform": "translateY(-" + pos + "%)"
        });
    });
});
