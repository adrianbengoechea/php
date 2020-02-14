<!-- INCLUDE FILE -->

<div class="modal fade" id="searcher-modal" tabindex="-1" role="dialog" aria-labelledby="#searcher-modal-label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="searcher">
          <div class="container">
            <div class="input-searcher">
              <form class="searcher-form" action="note-search.php" method="GET">
                  <input type="text" name="s" placeholder="Search here...">
                  <input type="submit">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php

  # Notes Area
?>
<div class="col-12">
  <div class="notes-menu">
    <ul class="list-inline">
      <li class="list-inline-item">
        <a href="note-add.php" class="add-note-menu-item note-menu-item">
          Add note
          <span>
            +
          </span>
        </a>

        <a href="#searcher-modal" data-toggle="modal" class="search-note-menu-item note-menu-item">
          Search Note
          <i class="material-icons">search</i>
        </a>

      </li>
    </ul>
  </div>
</div>



<?php
# Here load the notes from userid


if(isset(a) and !trim($_GET['s'] == '')):
    $to_search = filter_var($_GET['s'], FILTER_SANITIZE_STRING);
    $notes = db('SELECT * FROM `notas` WHERE `title` LIKE :filter AND `userid` = :uid ', array(':uid'=>1, ':filter'=>"%$to_search%"));
else:
  $notes = db('SELECT * FROM notas WHERE USERID = :id', array(':id'=>1));
endif;




$count = 1;
$activator = false;
$color = 'note-gray';

foreach($notes as $note){
  if($activator == false){
    $color = 'note-blue';
    $activator = true;
  }else{
    $color = 'note-gray';
    $activator = false;
  }
?>

  <div class="col-12 note <?php echo $color; ?>">
    <div class="note-title">
      <a href="#" data-target="#note_<?php echo $count; ?>" data-toggle="collapse" class="collapsed single-note-title"><?php echo $note['title']; ?>  <span>⯆</span></a>
      <a href="#" data-trash="app/delete-note-processor.php?eid=<?php echo $note['id']; ?>" class="trash"><i class="material-icons">delete</i></a>
      <a href="note-edit.php?eid=<?php echo $note['id']; ?>" class="edit"><i class="material-icons">edit</i></a>
    </div>
    <div class="note-content collapse" id="note_<?php echo $count; ?>">
      <div class="content">
        <?php echo $note['content']; ?>
      </div>
    </div>
  </div>

  <?php
  $count++;
}

?>

      <!-- <script>
        var s = '<?php echo strtolower($to_search); ?>';
        var notes_number = jQuery('.note').length;
        var notes_total_elements = 0;
        jQuery('.note').addClass('hidden');
        for(var i = 0; i < notes_number; i++){
          var search_title = jQuery('.note:eq(' + i + ')').find('.single-note-title').html().replace('<span>⯆</span>', '');
          if(search_title.toLowerCase().indexOf(s) >= 0){
            console.log(search_title);
            jQuery('.note:eq(' + i + ')').removeClass('hidden');
            notes_total_elements++;
          }
        }
        jQuery('.note.hidden').remove();
        if(jQuery('.search-results-number')){
          jQuery('.search-results-number').html(notes_total_elements);
        }
        if(jQuery('.search-results-title')){p0ñ''
          jQuery('.search-results-title').html(s);

        }
      </script> -->

<!-- INCLUDE FILE -->
