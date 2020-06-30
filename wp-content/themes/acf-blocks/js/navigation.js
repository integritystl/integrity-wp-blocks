
jQuery(document).ready(function($) {
    
    var $toggleButton = $('.toggle-button');
      $toggleButton.on('click', function() {
        $(this).toggleClass('button-open');
        $('.menu-screen').toggleClass('show-menu', 500);
    });


});
