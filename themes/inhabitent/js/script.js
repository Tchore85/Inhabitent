(function($) {
  $(function() {
    const $iconSearch = $('.site-header .icon-search');
    const $searchField = $('.site-header .search-field');

    $iconSearch.on('click', function(event) {
      event.preventDefault();
      if (!$iconSearch.hasClass('search-opened')) {
        $searchField.toggle('fast').focus();

        $iconSearch.addClass('search-opened');
      }
    });

    $searchField.on('blur', function() {
      if ($iconSearch.hasClass('search-opened')) {
        $searchField.toggle('fast');
        $iconSearch.removeClass('search-opened');
      }
    });
  });
})(jQuery);
