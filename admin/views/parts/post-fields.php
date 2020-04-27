<?php 

$title_content = '';
$excerpt_content = '';
$text_content = '';
$thumb_content = '';

if(isset($_GET) && !empty($_GET)){
    if(isset($_GET['id']) && !empty(trim($_GET['id']))){
        $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
        $data = db("SELECT * FROM data WHERE id = :q1", array(':q1'=>$id));

        $title_content .= $data['title'];
        $excerpt_content .= $data['extract'];
        $text_content .= $data['text'];
        $thumb_content .= $data['thumbnail'];
    }  
}   

?>

<form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
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
                    <textarea placeholder="Article Excerpt..." name="article_extract" rows="3"  value="<?php echo $excerpt_content; ?>" required></textarea>
                </label>
            </div>
            <div class="col-12">
                <label>
                    <h6>Text:</h6>
                    <textarea placeholder="Article Content..." name="article_content" rows="10"  value="<?php echo $text_content; ?>" required></textarea>
                </label>
            </div>
            <div class="col-12">
                <label>
                    <h6>Thumbnail: </h6>
                    <input type="file" name="article_thumbnail" id="article_thumbnail"  value="<?php echo $thumb_content; ?>" required>
                </label>
                
            </div>

            <div class="col-12">
                <input type="submit" value="Create" class="btn btn-primary mt-4" name="submit">
            </div>
        </div>
    </div>
</form>