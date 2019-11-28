(function($) {
  $(function() {
    $('.site-header .icon-search').on('click', function(event) {
      event.preventDefault();
      if (!$('.site-header .icon-search').hasClass('search-opened')) {
        $('.site-header .search-field')
          .toggle('fast')
          .focus();

        $('.site-header .icon-search').addClass('search-opened');
      }
    });

    $('.site-header .search-field').on('blur', function() {
      if ($('.site-header .icon-search').hasClass('search-opened')) {
        $('.site-header .search-field').toggle('fast');
        $('.site-header .icon-search').removeClass('search-opened');
      }
    });
  });
})(jQuery);
