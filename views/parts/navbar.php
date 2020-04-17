<nav class="navbar navbar-expand-md">

  <div class="container">

    <a class="navbar-brand" href="<?php echo URL; ?>">My Blog</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="main-navbar">

        <ul class="navbar-nav ml-auto">

            <li class="nav-item mr-4">
                <form class="form-inline search-form" action="<?php echo URL; ?>search.php" method="GET">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" name="s" aria-label="Search">
                    <button class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i><span class="sr-only">search</span></button>
                </form>
            </li>

            <li class="nav-item mr-4">
                <a class="nav-link nav-social-icon" href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                <a class="nav-link nav-social-icon" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-uppercase nav-contact" href="<?php echo URL; ?>contact.php">Contact <i class="fas fa-envelope ml-2"></i></a>
            </li>
            
        </ul>

    </div>

  </div>

</nav>