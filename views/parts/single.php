<div class="block-section">
    <div id="the-post-<?php echo $post_id; ?>-section" class="the-post-section">
        <div class="block-section-content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <img src="<?php echo URL; ?>assets/img/<?php echo $post_data[0]['thumbnail']; ?>" alt="Post Image">
                    </div>
                    <div class="col-12">
                        <small>
                        <span class="semi-bold">Date Created:</span> <?php echo date_to_string($post_data[0]['date']); ?>
                        </small>
                        <small>
                        <span class="semi-bold">Author:</span> <?php echo $post_data[0]['author']; ?>
                        </small>
                    </div>
                    <div class="col-12">
                        <p>
                            <?php echo nl2br($post_data[0]['text']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>