jQuery(function(){


	

	function fillParent(targetElem, parentElem){

		var parentHeight = parentElem.height();
 		targetElem.css("height", parentHeight);


	}

	if(jQuery(".cms-index-index .wtf-full-header").length !== 0){


		fillParent(jQuery("#wtf-header"), jQuery(window));		

		jQuery(window).on("resize", function(){

			fillParent(jQuery("#wtf-header"), jQuery(window));

		});

	}

});