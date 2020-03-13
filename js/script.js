$(function(){
    $("a.smooth-scroll").click(function(event){
        event.preventDefault();
        var section_id = $(this).attr("href");
        $("html,body").animate({
            scrollTop:$(section_id).offset().top
        },1250,"easeInOutExpo")
    });
});



$(function(){
    
    showHideNav();
$(window).scroll(function(){
    showHideNav();
})
function showHideNav(){
    if($(window).scrollTop()>50){
        $('.nav-wrapper').addClass('scrolled-navbar blue-nav-top');
        $('#navbar a').addClass('white');
        $('.navbar-brand img').attr('src',"img/logo/logo-dark.png");
        $("#back-to-top").fadeIn();
    }else{  
        
        $('#navbar a').removeClass('white');
        $('.navbar-brand img').attr('src',"img/logo/logo.png");
        $('.nav-wrapper').removeClass('scrolled-navbar blue-nav-top');
        $("#back-to-top").fadeOut();
    }
}

});

