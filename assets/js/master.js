jQuery(function(){


    jQuery(document).on('click', '.trash', function(){
      var note_title = jQuery(this).parent('.note-title').find('.single-note-title').html().replace('<span>⯆</span>', '');
      var confirmation = confirm('Are you sure you want to delete this note: ' + note_title );
      var url_delete = jQuery(this).data('trash');

      if(confirmation == true){
        location.replace(url_delete);
      }else if(confirmation == false){
        return false;
      }

		});
		if(typeof searchnotesloaded !== 'undefined'){
			if(searchnotesloaded == true){
				var search = phpsearch;
				var elements = jQuery('.note').length;

				if(jQuery('.search-results-title')){
					jQuery('.search-results-title').html(search);
				}
				if(jQuery('.search-results-number')){
					jQuery('.search-results-number').html(elements);
				}
			}
		}




    console.log('OK!');
});
