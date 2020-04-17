<div class="block-section">
    <div id="section-posts">
        <div class="block-section-content">
            <div class="container">
                <div class="row">

                    <?php
                    
                        $data = get_posts($blog_config);
                        $number_of_pages = number_of_pages($posts_per_page);
                        
                        foreach($data as $el): ?>
                            <div class="col-12">
                                <article class="post-article">
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
                        ?>

                        <div class="col-12">
                            <div class="pagination">
                                
                                <ul class="list-inline">

                                    
                                    <?php if(actual_page() === 1): ?>
                                        <li class="list-inline-item disabled">
                                            <a href="javascript:void(0)">
                                                <span class="back">
                                                    <i class="fas fa-chevron-left"></i>
                                                </span>
                                            </a>
                                        </li>
                                    <?php else: ?>
                                        <li class="list-inline-item">
                                            <a href="<?php echo URL; ?>index.php?p=<?php echo actual_page() - 1 ?>">
                                                <span class="back">
                                                    <i class="fas fa-chevron-left"></i>
                                                </span>
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                    <?php for($i = 1; $i <= $number_of_pages; $i++): ?>

                                        <?php if(actual_page() === $i): ?>
                                            <li class="list-inline-item active">
                                                <a href="<?php echo URL; ?>index.php?p=<?php echo $i; ?>"><?php echo $i; ?></a>
                                            </li>
                                        <?php else: ?>
                                            <li class="list-inline-item">
                                                <a href="<?php echo URL; ?>index.php?p=<?php echo $i; ?>"><?php echo $i; ?></a>
                                            </li>
                                        <?php endif; ?>


                                    <?php endfor; ?>


                                    <?php if(actual_page() === $number_of_pages): ?>
                                        <li class="list-inline-item disabled">
                                            <a href="javascript:void(0)">
                                                <span class="next">
                                                    <i class="fas fa-chevron-right"></i>
                                                </span>
                                            </a>
                                        </li>
                                    <?php else: ?>
                                        <li class="list-inline-item">
                                            <a href="<?php echo URL; ?>index.php?p=<?php echo actual_page() + 1 ?>">
                                                <span class="back">
                                                    <i class="fas fa-chevron-right"></i>
                                                </span>
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                    
                                </ul>
                                
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>