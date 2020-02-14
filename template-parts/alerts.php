<!-- INCLUDE FILE -->

<?php if(isset($_SESSION['alert_message'])): ?>
  <?php if(!trim($_SESSION['alert_message']) == ''): ?>
    <div class="alert-message">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="alert  <?php echo $_SESSION['alert_message_class']; ?> alert-dismissible custom-alert fade show" role="alert">
              <?php echo $_SESSION['alert_message']; ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

  <?php
      $_SESSION['alert_message'] = '';
      $_SESSION['alert_message_class'] = '';
    endif;
  ?>
<?php endif; ?>

<!-- INCLUDE FILE -->
