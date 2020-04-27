<?php require_once 'parts/header.php'; 

   if(isset($_POST) && !empty($_POST)){

    $title = filter_var($_POST['article_title'], FILTER_SANITIZE_STRING);
    $extract = filter_var($_POST['article_extract'], FILTER_SANITIZE_STRING);
    $date = date("m/d/Y");
    $author = $_SESSION['admin'];
    $text = filter_var($_POST['article_content'], FILTER_SANITIZE_STRING);

    $fl = $_FILES['article_thumbnail'];
    $thumbnail = $fl['tmp_name'];
    $thumbnail_url = '../assets/img/' . $fl['name'];


    if(!empty(trim($title)) && !empty(trim($text)) && !empty(trim($fl['name'])) ){
        if(!empty($fl)){
            if($fl['type'] == 'image/png' || $fl['type'] == 'image/jpeg'){
                move_uploaded_file($thumbnail, $thumbnail_url);
            }
        }
        db('INSERT INTO `data` (`title`, `extract`, `date`, `text`, `thumbnail`, `author`) VALUES (:q1, :q2, :q3, :q4, :q5, :q6)', array(':q1'=>$title, ':q2'=>$extract, ':q3'=>$date, ':q4'=>$text, ':q5'=>$fl['name'], ':q6'=>$author));

    }
    

    
   } 
   ?>

    <main class="wrapper">

        <aside class="wrapper-aside container-fluid">
            
            <?php include_once 'parts/aside.php'; ?>

        </aside>

        <section class="wrapper-content container-fluid">
            <h2 class="mb-4">ADD NEW ARTICLE</h2>

            <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <label>
                                <h6>Title:</h6>
                                <input type="text" placeholder="Article Title..." name="article_title" required>
                            </label>
                        </div>
                        <div class="col-12">
                            <label>
                                <h6>Excerpt:</h6>
                                <textarea placeholder="Article Excerpt..." name="article_extract" rows="3"></textarea>
                            </label>
                        </div>
                        <div class="col-12">
                            <label>
                                <h6>Text:</h6>
                                <textarea placeholder="Article Content..." name="article_content" rows="10" required></textarea>
                            </label>
                        </div>
                        <div class="col-12">
                            <label>
                                <h6>Thumbnail: </h6>
                                <input type="file" name="article_thumbnail" id="article_thumbnail"  required>
                            </label>
                            
                        </div>

                        <div class="col-12">
                            <input type="submit" value="Create" class="btn btn-primary mt-4" name="submit">
                        </div>
                    </div>
                </div>
            </form>

        </section>

    </main>

<?php require_once 'parts/footer.php'; ?>