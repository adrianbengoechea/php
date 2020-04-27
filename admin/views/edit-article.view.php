<?php require_once 'parts/header.php'; 



   if(isset($_POST) && !empty($_POST)){
    $title = filter_var($_POST['article_title'], FILTER_SANITIZE_STRING);
    $extract = filter_var($_POST['article_extract'], FILTER_SANITIZE_STRING);
    $text = filter_var($_POST['article_content'], FILTER_SANITIZE_STRING);

    
    $fl = $_FILES['article_thumbnail'];
    $thumbnail = $fl['tmp_name'];
    $thumbnail_url = '../assets/img/' . $fl['name'];
    
    if(!empty(trim($title)) && !empty(trim($text)) ){
        if(!empty($fl)){
            if($fl['type'] == 'image/png' || $fl['type'] == 'image/jpeg'){
                move_uploaded_file($thumbnail, $thumbnail_url);
            }
        }
        if(isset($_FILES) && !empty($_FILES)){
            db('INSERT INTO `data` (`title`, `extract`, `date`, `text`, `thumbnail`, `author`) VALUES (:q1, :q2, :q3, :q4, :q5, :q6)', array(':q1'=>$title, ':q2'=>$extract, ':q3'=>$date, ':q4'=>$text, ':q5'=>$fl['name'], ':q6'=>$author));
        }else{
            db('INSERT INTO `data` (`title`, `extract`, `date`, `text`, `thumbnail`, `author`) VALUES (:q1, :q2, :q3, :q4, :q5, :q6)', array(':q1'=>$title, ':q2'=>$extract, ':q3'=>$date, ':q4'=>$text, ':q5'=>$fl['name'], ':q6'=>$author));
        }

    }
    

    
   } 
   ?>

    <main class="wrapper">

        <aside class="wrapper-aside container-fluid">
            
            <?php include_once 'parts/aside.php'; ?>

        </aside>

        <section class="wrapper-content container-fluid">
            <h2 class="mb-4">ADD NEW ARTICLE</h2>

            <?php 

                $title_content = '';
                $excerpt_content = '';
                $text_content = ''; 
                $thumb_content = '';

                if(isset($_GET) && !empty($_GET) && isset($_GET['id']) && !empty(trim($_GET['id'])) ){
                    
                        $delete_id = '?id=' . $_GET['id'];
                        $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
                        $data = db("SELECT * FROM data WHERE id = :q1", array(':q1'=>$id));

                        if(!empty($data)){

                            $title_content .= $data[0]['title'];
                            $excerpt_content .= $data[0]['extract'];
                            $text_content .= $data[0]['text'];
                            $thumb_content = $data[0]['thumbnail'];

                        }else{
                            return_admin();
                        }
                }else{
                    return_admin();
                }

                ?>

                <form enctype="multipart/form-data" id="edit-article-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <label>
                                    <h6>Title:</h6>
                                    <input type="text" placeholder="Article Title..." name="article_title" value="<?php echo $title_content; ?>" required>
                                </label>
                            </div>
                            <div class="col-12">
                                <label>
                                    <h6>Excerpt:</h6>
                                    <textarea placeholder="Article Excerpt..." name="article_extract" rows="3"><?php echo $excerpt_content; ?></textarea>
                                </label>
                            </div>
                            <div class="col-12">
                                <label>
                                    <h6>Text:</h6>
                                    <textarea placeholder="Article Content..." name="article_content" rows="10" required><?php echo $text_content; ?></textarea>
                                </label>
                            </div>
                            <div class="col-12">
                                <label>
                                    <h6>Thumbnail: </h6>
                                    <input type="file" name="article_thumbnail" id="article_thumbnail">
                                </label>
                                
                            </div>

                            <div class="col-12">
                                <input type="submit" value="Update" class="btn btn-primary mt-4" name="submit">
                                <a href="delete-article.php<?php echo $delete_id; ?>" class="btn btn-danger btn-delete-article mt-4">Delete Post</a>
                            </div>
                        </div>
                    </div>
                </form>

        </section>

    </main>

<?php require_once 'parts/footer.php'; ?>