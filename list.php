jQuery(function($) {
  function fixDiv() {
    var $cache = $('#catalog-filters');
    var $cache_1 = $('.toolbar:first').find('.sort-by');
    if ($(window).scrollTop() > 100){
      $cache.css({
        'position': 'fixed',
        'width': '100%',
        'left': '0',
        'z-index': '99999999',
        'top': '32px'
      });
	  $cache_1.css({
        'position': 'fixed',
        'background': '#EFEFEF',
        'right': '0',
        'z-index': '99999999',
        'padding': '27px  19px',
        'top': '5px'
      });
    }else{
      $cache.css({
        'position': '',
        'top': 'auto'
      });
	  $cache_1.css({
        'position': '',
		'background': '',
		'padding': '0',
        'top': 'auto'
      });
	}
  }
  $(window).scroll(fixDiv);
  fixDiv();
});
