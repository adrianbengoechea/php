<?php require_once 'config.php'; ?> 
<?php
    $pagination = filter_var((int) $_GET['page'], FILTER_SANITIZE_STRING);
    if(!isset($pagination) or trim($pagination) == ''){
        header('Location: index.php?page=1');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center mt-5 mb-5">My Pagination</h1>
                </div>
                <div class="col-12">
                    <div class="row">
                        <?php
                            $postperpage = 3;
                            $getelements = $pagination; 
                            if($pagination > 1){
                                $getelements = $pagination * $postperpage - $postperpage; 
                            }else{
                                $getelements = 0;
                            }
                            $result = $app->DBConnection("SELECT SQL_CALC_FOUND_ROWS * FROM elements LIMIT $getelements, $postperpage"); // print_r($result);
                            foreach($result as $element){
                                print_r($element[1]) ;echo '<br>';
                            }
                        ?>
                    </div>
                </div>
                <div class="col-12">
                    <ul class="list-inline text-center mt-5">
                        <li class="list-inline-item disabled">
                            <a href="#" >< Prev</a>
                        </li>
                        
                        <li class="list-inline-item">
                            <a href="#"> <?php ?> </a>
                        </li>


                        <li class="list-inline-item">
                            <a href="#">Next ></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>