$(document).ready(function(){
    $(".dropdown-slider").hover(            
        function() {
            $('.dropdown-menu-slider', this).not('.in .dropdown-menu-slider').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu-slider', this).not('.in .dropdown-menu-slider').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});