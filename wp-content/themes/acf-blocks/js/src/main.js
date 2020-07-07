  jQuery(document).ready(function($) {
  // Header jQuery

  //Expand Collapse Logic!!

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