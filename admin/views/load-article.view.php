<?php require_once 'parts/header.php'; ?>

    <main class="wrapper">

        <aside class="wrapper-aside container-fluid">
            
            <?php include_once 'parts/aside.php'; ?>

        </aside>

        <section class="wrapper-content container-fluid">
            <h2 class="mb-4">ALL ARTICLES</h2>
            <div class="container-fluid">
                <div class="row">
                    <?php
                        $data = get_all_posts($blog_config);

                        foreach($data as $el):
                    
                    
                    ?>

                    <div class="col-12 p-0">
                        <article class="admin-post">
                            <div id="post-article-<?php echo $el['id']; ?>">
                                <div class="post-article-content">
                                    <h4>- <a href="<?php echo ADMIN_URI; ?>edit-article.php?id=<?php echo $el['id'];?>"><?php echo $el['title']; ?></a></h4>
                                </div>
                            </div>
                        </article>
                    </div>

                        <?php endforeach; ?>
                </div>
            </div>
        </section>

    </main>

<?php require_once 'parts/footer.php'; ?>