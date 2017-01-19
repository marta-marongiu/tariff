$('.btn-trailer').click(function() {
	var video = $(this).closest('.active').attr('data-attribute');
	$('.modal iframe').attr('src', video);
});



// External js: jquery, isotope.pkgd.js, bootstrap.min.js, bootstrap-slider.js
$(document).ready( function() {

	// Create object to store filter for each group
	var buttonFilters = {};
	var buttonFilter = '*';
	// Create new object for the range filters and set default values,
	// The default values should correspond to the default values from the slider
	var rangeFilters = {
		'ranking': {'min': 1, 'max': 10}
	};

	// Initialise Isotope
	// Set the item selector
	var $grid = $('.grid').isotope({
		itemSelector: '.item-grid',
		layout: 'masonry',
		// use filter function
		filter: function() {
			var $this = $(this);
			var ranking = $this.attr('data-ranking');
			var isInRankingRange = (rangeFilters['ranking'].min <= ranking && rangeFilters['ranking'].max >= ranking);
	//console.log(rangeFilters['ranking']);
	// Debug to check whether an item is within the ranking range
	//console.log('isInHeightRange:' +isInHeightRange + '\nisInWeightRange: ' + isInRankingRange );
			return $this.is( buttonFilter ) && ( isInRankingRange);
		}
	});


	// Initialise Sliders
	// Set min/max range on sliders as well as default values
	var $rankingSlider = $('#filter-ranking').slider({ tooltip_split: true, min: 1,  max: 10, range: true, value: [4, 9] });


   function updateRangeSlider(slider, slideEvt) {
     console.log('Current slider:' + slider);
     var sldmin = +slideEvt.value[0],
         sldmax = +slideEvt.value[1],
         // Find which filter group this slider is in (in this case it will be either height or weight)
         // This can be changed by modifying the data-filter-group="age" attribute on the slider HTML
         filterGroup = slider.attr('data-filter-group'),
         // Set current selection in variable that can be pass to the label
         currentSelection = sldmin + ' - ' + sldmax;

       // Update filter label with new range selection
       // slider.siblings('.filter-label').find('.filter-selection').text(currentSelection);
       // Set min and max values for current selection to current selection
       // If no values are found set min to 0 and max to 100000
       // Store min/max values in rangeFilters array in the relevant filter group
       // E.g. rangeFilters['height'].min and rangeFilters['height'].max
       console.log('Filtergroup: '+ filterGroup);
       rangeFilters[filterGroup] = {
         min: sldmin || 0,
         max: sldmax || 100000
       };
       // Trigger isotope again to refresh layout
       $grid.isotope();
  }

   // Trigger Isotope Filter when slider drag has stopped
   $rankingSlider.on('slideStop', function(slideEvt){
     var $this =$(this);
     updateRangeSlider($this, slideEvt);
   });

   	// Trigger isotope again to refresh layout
    $grid.isotope();

});
   // Look inside element with .filters class for any clicks on elements with .btn
   // $('.filters').on( 'click', '.btn', function() {
   //   var $this = $(this);
   //   // Get group key from parent btn-group (e.g. data-filter-group="color")
   //   var $buttonGroup = $this.parents('.btn-group');
   //   var filterGroup = $buttonGroup.attr('data-filter-group');
   //   // set filter for group
   //   buttonFilters[ filterGroup ] = $this.attr('data-filter');
   //   // Combine filters or set the value to * if buttonFilters
   //   buttonFilter = concatValues( buttonFilters ) || '*';
   //   // Log out current filter to check that it's working when clicked
   //   console.log( buttonFilter )
   //   // Trigger isotope again to refresh layout
   //   $grid.isotope();
   // });


   // change is-checked class on btn-filter to toggle which one is active
 //   $('.btn-group').each( function( i, buttonGroup ) {
 //       var $buttonGroup = $( buttonGroup );
 //       $buttonGroup.on( 'click', '.btn-filter', function() {
 //           $buttonGroup.find('.is-checked').removeClass('is-checked');
 //           $(this).addClass('is-checked');
 //       });
 //   });
 // });

 // Flatten object by concatting values
//  function concatValues( obj ) {
//    var value = '';
//    for ( var prop in obj ) {
//      value += obj[ prop ];
//    }
//    return value;
// }

// External js: jquery, isotope.pkgd.js, bootstrap.min.js, bootstrap-slider.js
$(document).ready( function() {

  // Create object to store filter for each group
  var buttonFilters = {};
  var buttonFilter = '*';
  // Create new object for the range filters and set default values,
  // The default values should correspond to the default values from the slider
  var rangeFilters = {
    'ranking': {'min': 1, 'max': 10}
  };

  // Initialise Isotope
  // Set the item selector
  var $list = $('.list').isotope({
    itemSelector: '.item-list',
    layout: 'masonry',
    // use filter function
    filter: function() {
      var $this = $(this);
      var ranking = $this.attr('data-ranking');
      var isInRankingRange = (rangeFilters['ranking'].min <= ranking && rangeFilters['ranking'].max >= ranking);
  //console.log(rangeFilters['ranking']);
  // Debug to check whether an item is within the ranking range
  //console.log('isInHeightRange:' +isInHeightRange + '\nisInWeightRange: ' + isInRankingRange );
      return $this.is( buttonFilter ) && ( isInRankingRange);
    }
  });


  // Initialise Sliders
  // Set min/max range on sliders as well as default values
  var $rankingSlider = $('#filter-ranking').slider({ tooltip_split: true, min: 1,  max: 10, range: true, value: [4, 9] });


   function updateRangeSlider(slider, slideEvt) {
     console.log('Current slider:' + slider);
     var sldmin = +slideEvt.value[0],
         sldmax = +slideEvt.value[1],
         // Find which filter group this slider is in (in this case it will be either height or weight)
         // This can be changed by modifying the data-filter-group="age" attribute on the slider HTML
         filterGroup = slider.attr('data-filter-group'),
         // Set current selection in variable that can be pass to the label
         currentSelection = sldmin + ' - ' + sldmax;

       // Update filter label with new range selection
       // slider.siblings('.filter-label').find('.filter-selection').text(currentSelection);
       // Set min and max values for current selection to current selection
       // If no values are found set min to 0 and max to 100000
       // Store min/max values in rangeFilters array in the relevant filter group
       // E.g. rangeFilters['height'].min and rangeFilters['height'].max
       console.log('Filtergroup: '+ filterGroup);
       rangeFilters[filterGroup] = {
         min: sldmin || 0,
         max: sldmax || 100000
       };
       // Trigger isotope again to refresh layout
       $list.isotope();
  }

   // Trigger Isotope Filter when slider drag has stopped
   $rankingSlider.on('slideStop', function(slideEvt){
     var $this =$(this);
     updateRangeSlider($this, slideEvt);
   });

    // Trigger isotope again to refresh layout
    $list.isotope();

});

$("#icon-list").click(function() {
  $(".grid").hide();
  $(".list").show();

  $(".list").isotope();
});
 
$("#icon-grid").click(function() {
  $(".list").hide();
  $(".grid").show();

  $(".grid").isotope();
});
