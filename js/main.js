$(document).ready(function(){

    $(".nav-icon").click(function(){
        $(".full-nav").addClass("open");
    });

    $(".nav-close").click(function(){
        $(".full-nav").removeClass("open");
    });

    $(".nav-click-close").click(function(){
        $(".full-nav").removeClass("open");
    });

    $(window).scroll(function(){
        var sc = $(window).scrollTop();
        if (sc > 100){
            $(".nav").addClass("sticky");
        }
        else{
            $(".nav").removeClass("sticky");
        }
    });

    $("#work").magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery:{
            enabled:true
        },

        
    });



    
});


new WOW().init();




