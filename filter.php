jQuery(function($) {
  
    var $cache = $('.filterdropdown').find("a.fme_layered_attribute_selected");
	
	$cache.each(function(key , value){
				$(this).closest( ".filter-repeat" ).find(".fme_layered_dt").html(value.text + "<div class=\"filter-arrow\"></div>");
				
	});
  
  
});
