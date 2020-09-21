/**
*
*Script do layout
*
*@author Code Universe
*
**/
(function($, URL, Helpers) {

	var hamburguer = function() {
		$('body').on('click', '.hamburguer', function() {
			$('.links').toggle()
		})
	}

	$( document ).ready(function() {
		hamburguer();
	})

})($, URL, Helpers);