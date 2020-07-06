
jQuery(document).ready(function($) {
    
    var $toggleButton = $('.toggle-button');
      $toggleButton.on('click', function() {
        $(this).toggleClass('button-open');
        $('.menu-screen').toggleClass('show-menu', 500);
    });

      function toggleAttr() {
      if ($('.collapse-toggle').hasClass('active')) {
          $('.collapse-content').attr('aria-hidden', false);
      } else {
          $('.collapse-content').attr('aria-hidden', true);
      }
  }
  function toggleExpandCollapse() {
    $(this).toggleClass('active');
    $(this).next(".collapse-content").slideToggle();
    toggleAttr();
    return false;
  }
  $('.collapse-content').hide();
  $('.collapse-toggle').on('click', toggleExpandCollapse);


});
