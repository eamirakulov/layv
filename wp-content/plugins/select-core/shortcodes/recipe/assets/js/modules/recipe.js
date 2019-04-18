(function($) {
    'use strict';
	
	var recipes = {};
	qodef.modules.recipes = recipes;

    recipes.qodefInitRecipe = qodefInitRecipe;


    recipes.qodefOnDocumentReady = qodefOnDocumentReady;
	
	$(document).ready(qodefOnDocumentReady);
	
	/*
	 All functions to be called on $(document).ready() should be in this function
	 */
	function qodefOnDocumentReady() {
		qodefInitRecipe();
        qodefReInitRecipe();
	}
	
	/**
	 * Init accordions shortcode
	 */
	function qodefInitRecipe(){

        var recipe = $('.qodef-recipe');

        recipe.each(function () {
            var thisRecipe = $(this);
            var printButton = thisRecipe.find('.qodef-print-button');

            printButton.click(function (e) {
                e.preventDefault();
                $( document.body ).trigger( 'qodef_reciepe_printed' );
                thisRecipe.printElement({printMode: 'popup'});
            });
        })

	}

    function qodefReInitRecipe(){
        $( document.body ).on( 'qodef_reciepe_printed', function () {
            qodefInitRecipe();
        } );
    }

})(jQuery);