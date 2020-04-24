

<div class="block-section">
    <div id="searching-section">
        <div class="block-section-content">
            <div class="container">
                <div class="row">
                    <?php
                        $data = search_results();
                        if(!empty($data)):    
                            foreach($data as $el):
                        ?>
                                <div class="col-12">
                                    <article class="post-article post-searching-article">
                                        <div id="post-article-<?php echo $el['id']; ?>">
                                            <div class="post-article-content">
                                                <h3><a href="<?php echo URL; ?>article.php?id=<?php echo $el['id'];?>"><?php echo $el['title']; ?></a></h3>
                                                <small><?php echo date_to_string($el['date']); ?></small>
                                                <a href="<?php echo URL; ?>article.php?id=<?php echo $el['id'];?>">
                                                    <div class="thumbnail" style="background-image: url('<?php echo ROUTE . $folder_img; ?><?php echo $el['thumbnail']; ?>')">
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
                        else:
                            ?>
                                <div class="col-12">
                                    <article class="post-article">
                                        <div id="post-article-<?php echo $el['id']; ?>">
                                            <div class="post-article-content mt-5 text-center">
                                                <h3>Search Not Found.</h3>
                                            </div>
                                            <div class="mt-4">
                                                <a href="<?php echo ROUTE; ?>">Return To Home</a>
                                            </div>

                                        </div>
                                    </article>
                                </div>
                            <?php
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>