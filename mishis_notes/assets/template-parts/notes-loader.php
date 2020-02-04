<?php
define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/udemyphp/mishis_notes/');
require_once( SITE_ROOT . 'connection.php');


# Menu options
?>
<div class="col-12">
  <div class="notes-menu">
    <ul class="list-inline">
      <li class="list-inline-item">
        <a href="new-note.php" class="add-note-menu-item">
          Add note
          <span>
            +
          </span>
        </a>
      </li>
    </ul>
  </div>
</div>



<?php
# Here load the notes from userid
$query = 'SELECT * FROM notas WHERE USERID = 1';
$query_load = $connection->query($query);

$count = 1;
$activator = false;
$color = 'note-gray';
foreach($query_load as $note){
  ?>

  <?php
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
      <a href="#note_<?php echo $count; ?>" data-toggle="collapse" class="collapsed"><?php echo $note['TITLE']; ?> <span>⯆</span></a>
    </div>
    <div class="note-content collapse" id="note_<?php echo $count; ?>">
      <div class="content">
        <?php echo $note['CONTENT']; ?>
      </div>
    </div>
  </div>

  <?php
  $count++;
}



//
// <div class="col-12 note note-gray">
//   <div class="note-title">
//     <a href="#note_2" data-toggle="collapse" class="collapsed">My Second Note! <span>⯆</span></a>
//   </div>
//   <div class="note-content collapse" id="note_2">
//     <div class="content">
//         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
//     </div>
//   </div>
// </div>

?>
