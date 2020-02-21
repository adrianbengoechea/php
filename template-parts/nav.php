<!-- INCLUDE FILE -->

<nav class="navbar navbar-expand-md fixed-top navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a href="index.php">Home <span class="sr-only">(current)</span></a>
			</li>
		</ul>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item mr-3	">
				<a href="javascript:void(0)" class="no-hover"><?php echo $account_email ?></a>
			</li>
			<li class="nav-item">
				<a href="logout.php">Logout</a>
			</li>
		</ul>
  </div>
</nav>

<!-- INCLUDE FILE -->