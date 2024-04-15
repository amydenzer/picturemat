<?php
include("inc/data.php");
include("inc/functions.php");

$pageTitle = "Full Catalog";

$section = null;

if (isset($_GET["cat"])) {
        $section = $_GET["cat"];
        $pageTitle = ucwords($section);
}

?>

<!doctype html>
<html lang="en">
<head>
    <title>Picturemat</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="css/custom.css" rel="stylesheet">

</head>
<body>




<div class="container mt-3">
    <div class="row">
        <aside class="col-md-4">

                <header class="mb-3">
                    <img src="images/logo.png" class="img-fluid" width="253" height="104" alt="picturemat logo">
                </header>
                <p class="mb-3 d-none d-sm-none d-md-block">
                    DO MORE! with the new
                    GUNNAR F1 HYBRID.
                    The award-winning GUNNAR F1
                    HYBRID is the world first "hybrid" CMC,
                    and the result of GUNNAR's long
                    industry experience and track record
                    as "pioneers" of the framing industry.
                </p>
                <div class="mb-3 d-none d-sm-none d-md-block">
                    <img src="images/gunnar_cutter.jpg" class="img-fluid" width="220" height="176" alt="gunnar cutter">
                </div>
                <div class="mb-3 d-none d-sm-none d-md-block">
                    <img src="images/gunnar_logo.gif" class="img-fluid" width="207" height="45" alt="gunnar logo">
                </div>

        </aside>

        <main class="col-md-8">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Mats
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
<!--                                <a class="dropdown-item" href="#">Dark Blue</a>-->
<!--                                <a class="dropdown-item" href="items.html">Light Blue</a>-->
<!---->
<!--                                <a class="dropdown-item" href="#">White</a>-->
<!--                                <a class="dropdown-item" href="#">Dark Green</a>-->
        <?php
        $categories = array_nav_categories($catalog);
        foreach ($categories as $category) {
            echo get_nav_html($category);
        }

        ?>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Framing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-light my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
            <section>
                <?php
                echo "<h1 class='mt-3'>Mat Color > $pageTitle</h1>";
                ?>

                <?php

                $categories = array_category($catalog,$section);

                foreach ($categories as $id) {

                    echo get_item_html($id,$catalog[$id]);

                }


                ?>
<!--                <div class="mats">-->
<!--                    <img src="sm_images/1.gif" width="125" height="125" class="img-fluid float-right ml-2 mt-1">-->
<!--                    <strong>Product:</strong> Ocean Blue<br>-->
<!--                    <strong>Product No:</strong> lbob7475<br>-->
<!--                    <strong>Price:</strong> $12.00 sq/ft<br>-->
<!--                    <strong>Description:</strong>-->
<!--                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.-->
<!--                    <br>-->
<!--                    <a href="item.html" class="btn btn-light my-2 my-sm-0">more info</a>-->
<!--                </div>-->
<!--                <hr>-->


            </section>

            <footer class="my-4">
                <div class="mx-auto" style="width: 225px;">
                    <img src="images/mat_thumbs.png" width="238" height="47" alt="mat thumbs">
                    <div class="mt-3">
                        <span>PictureMat.com</span><br>

                        2000 E. University Ave., Minneapolis, MN 55413<br>

                        Call toll free 1-877-899-9000<br>

                        email demo@picturemat.com
                    </div>
                </div>
            </footer>

        </main>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>