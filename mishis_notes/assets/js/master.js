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



    console.log('OK!');
});
