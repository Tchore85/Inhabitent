(function($) {
  $(function() {
    // $('#my-div').hide(200);

    $('.search-submit').on('click', function(event) {
      event.preventDefault();
      $('.search-field').toggle('fast');
    });

    //your code goes here
  }); //end of doc ready
})(jQuery);
