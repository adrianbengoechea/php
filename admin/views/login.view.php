<?php require_once 'parts/header.php'; ?>

    <main class="wrapper">

        <section class="wrapper-content container-fluid">

           <div class="container">

                <div class="row">

                    <div class="col-12">
                        <h1 class="mt-5 text-center">
                            LOGIN
                        </h1>
                    </div>

                    <div class="col-12">

                        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" id="admin_login" class="pt-5 max-600 mx-auto">
                            <div class="container pt-5">
                                <div class="row">
                                    <div class="col-12">
                                        <label>
                                            <span class="sr-only">Username:</span>
                                            <input type="text" name="admin_username" placeholder="Username" value="<?php echo $username_error; ?>">
                                        </label>
                                    </div>
                                    <div class="col-12">
                                        <label>
                                            <input type="password" name="admin_password" placeholder="Password">
                                        </label>
                                    </div>
                                    <?php if(!empty($admin_login_errors)): ?>
                                        <div class="col-12" class="admin_login_errors">
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                
                                                <?php print_r($admin_login_errors); ?>
                                                
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    <?php elseif(!empty($admin_login_success)): ?>
                                        <div class="col-12" class="admin_login_success">
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                
                                                <?php print_r($admin_login_success); ?>
                                                
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <div class="col-12">
                                        <input type="submit" value="LOGIN" name="submit" class="btn btn-primary" >
                                    </div>
                                    <div class="col-12 pt-5">
                                        <a href="<?php echo ROUTE; ?>">← Return to home</a>
                                    </div>
                                </div>
                            </div>
                        </form>  

                    </div>
                    

                </div>

           </div>

        </section>

    </main>

<?php require_once 'parts/footer.php'; ?>