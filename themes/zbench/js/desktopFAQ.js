;/**
 * Document Ready
 */
$(function(event){
	void MozillaFAQ.init();
});


/**
 * MozillaFAQ Class
 */
var MozillaFAQ = {
	init: function(){
		void MozillaFAQ.addEventListeners();
	},
	addEventListeners: function(){
		if ($(".js_accordion").length) {
			$(".js_accordion").each(function(index, elem){
				MozillaFAQ.initAccordion(elem);
			});
		}
		if($.browser.msie) {
			$('input[placeholder], textarea[placeholder]').placeholder();
		}
		$('#search-form').submit(function(e){
			if ($.trim($('#search-bar').val()) == '' || $('search-bar').val() == 'What do you need help with?'){
				alert('You must enter a search term.');
				return false;
			}
		});
	},
	initAccordion : function(elem){
		var ulAccordion = $(elem),
			lnkAction = $("h5 a", ulAccordion),
			liElement, answerElement;
		
		ulAccordion.children().removeClass().addClass('collapsed');
		lnkAction.each(function(){
			$(this).click(function(e){
				e.preventDefault();
				liElement = $(this).parents('li');
				answerElement = $('.answer', liElement);
				if (liElement.hasClass('collapsed')) {
					answerElement.slideDown('fast', function() {
						liElement.removeClass().addClass('expanded');
					});
				} else {
					answerElement.slideUp('fast', function() {
						liElement.removeClass().addClass('collapsed');
					});
				}
			});
		});
	}
};

