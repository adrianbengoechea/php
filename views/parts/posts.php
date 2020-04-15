<div class="block-section">
    <div id="section-posts">
        <div class="block-section-content">
            <div class="container">
                <div class="row">

                    <?php
                    
                        $data = db('SELECT * FROM data', array());

                   
                    foreach($data as $el): ?>


                        <div class="col-12">
                            <article class="post-article">
                                <div id="post-article-<?php echo $el['id']; ?>">
                                    <div class="post-article-content">
                                        <h3><a href="#"><?php echo $el['title']; ?></a></h3>
                                        <small><?php echo $el['date']; ?></small>
                                        <a href="#">
                                            <div class="thumbnail" style="background-image: url('<?php echo ROUTE; ?>assets/img/<?php echo $el['thumbnail']; ?>')">
                                            </div>
                                        </a>
                                        <p>
                                            <?php echo $el['extract']; ?>
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div>

                    <?php 
                    endforeach;
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>