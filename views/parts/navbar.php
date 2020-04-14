<nav class="navbar navbar-expand-md">

  <div class="container">

    <a class="navbar-brand" href="<?php echo URL; ?>">My Blog</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="main-navbar">

        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i><span class="sr-only">search</span></button>
                </form>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo URL; ?>contact.php">Contact <i class="fas fa-envelope"></i></a>
            </li>
            
        </ul>

    </div>

  </div>

</nav>