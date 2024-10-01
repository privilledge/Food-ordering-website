<?php

include './includes/config.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>FoodiePal</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets//css/style.css">

</head>

<body>
    <div class="home">
        <?php
        include './includes/header.php';
        ?>
        <div class="container col-xxl-8 px-2 py-5 text-white">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5 mt-0 mb-5">
                <div class="col-10 col-sm-8 col-lg-4">
                </div>
                <div class="col-lg-8">
                    <h1 class="display-5 fw-bold lh-1 mb-5 ">Responsive left-aligned hero with image</h1>
                    <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Order now</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>