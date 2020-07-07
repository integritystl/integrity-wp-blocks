
jQuery(document).ready(function($) {
    
    var $toggleButton = $('.toggle-button');
      $toggleButton.on('click', function() {
        $(this).toggleClass('button-open');
        $('.menu-screen').toggleClass('show-menu', 500);
    });


//Accordion Stuff
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

  //Tabs Stuff
  $('.tab-toggle').click(function(){
    var t = $(this).attr('id');

    if($(this).hasClass('inactive')){ //this is the start of our condition 
      $('tab-toggle').addClass('inactive');           
      $(this).removeClass('inactive');

      $('.tab-content').hide();
      $('#'+ t + 'C').fadeIn('slow');
   }
  });

  //tabs!
  $(".tab_content").hide();
  $(".tab_content:first").show();
  $(".tabs .tab-btn:first").addClass("active");

  $(".tabs .tab-btn").click(function() {
    $(".tabs .tab-btn").removeClass("active");
    $(this).addClass("active");
    $(".tab_content").hide();
    var activeTab = $(this).attr("rel");
    $("#"+activeTab).fadeIn('.tab_content');
  });

});
