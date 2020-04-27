<?php require_once 'parts/header.php'; 

    if(isset($_POST) && !empty($_POST)){
        if(!empty(trim($_POST['site_title_field']))){

            $s_title = filter_var($_POST['site_title_field'], FILTER_SANITIZE_STRING);
            db("UPDATE settings SET instruction = :q1 WHERE name = 'site_name'", array(':q1'=>$s_title));
            refresh();
        }
    } 
    ?>

    <main class="wrapper">

        <aside class="wrapper-aside container-fluid">
            
            <?php include_once 'parts/aside.php'; ?>

        </aside>

        <section class="wrapper-content container-fluid">
            <h2 class="mb-4">SETTINGS</h2>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" class="mt-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <label>
                                <h6>Site Title: </h6>
                                <input type="text" value="<?php echo SITE_TITLE; ?>" placeholder="Title..." name="site_title_field">
                            </label>
                        </div>
                        <div class="col-12 mt-4">
                            <input type="submit" value="Update" class="btn btn-primary">
                        </div>
                    </div>
                </div>
            </form>

        </section>

    </main>

<?php require_once 'parts/footer.php'; ?>