(function($) {
  $(function() {
    // $('#my-div').hide(200);

    $('.search-submit').on('click', function(event) {
      if (!$('.search-submit').hasClass('search-opened')) {
        event.preventDefault();
        $('.search-field').toggle('fast');
      }

      $('.search-submit').toggleClass('search-opened');
    });

    //your code goes here
  }); //end of doc ready
})(jQuery);
