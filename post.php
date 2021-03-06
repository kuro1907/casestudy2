<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title><?php
            echo $new->title;
            ?></title>
</head>

<body>
    <?php
    require 'header.php';
    ?>
    <div class="row">
        <img src="./img/R_BS_1920x510_pc.jpg" alt="" width="100%">
    </div>
    <div class="container content-bg">
        <div class="row category">
            <div class="category-left">
                <img src="./img/sub_nav_left.png" alt="" width="100%" height="100%">
            </div>
            <div class="category-1">
                <h4><?php switch ($new->category) {
                        case 'update':
                            echo 'Cập nhật >';
                            break;
                        case 'promotion':
                            echo 'Khuyến mãi >';
                            break;
                        case 'event';
                            echo 'Sự kiện >';
                            break;
                    }
                    ?></h4>
            </div>
            <div class="category-2">
                <span><?php echo $new->dayRelease ?></span>
            </div>
            <div class="category-right">
                <img src="./img/sub_nav_right.png" alt="" width="100%" height="100%">
            </div>
        </div>
        <div class="row">
            <h3><?php echo $new->title ?></h3>
        </div>
        <div class="row">
            <p><?php echo $new->info ?></p>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <img src="<?php echo $new->img ?>" alt="" width="100%">
            </div>
        </div>
        <?php
        echo $new->content;
        ?>
    </div>
    <?php
    require 'footer.php';
    ?>
    <p class="text"> Công ty Codegym VietNam - Huế</p>
    <p class="text">Địa chỉ : 28 Nguyễn Tri Phương, Phú Hội, Thành phố Huế, Thừa Thiên Huế</p>
    <p class="text">Case Study Module 2 - Nguyễn Nam Vũ - PHP</p>
    <div class="row logo-footer">
        <div class="col-md-2">
            <a href="http://vetv.vn/">
                <img src="./img/ved-logo.png" alt="" style="width:126px">
            </a>
        </div>
        <div class="col-md-2">
            <a href="https://garena.vn/">
                <img src="./img/logo-garena.png" alt="" style="width:100%">
            </a>
        </div>
        <div class="col-md-2">
            <a href="https://kr.ncsoft.com/kr/index.do">
                <img src="./img/logo-ncsoft-white.png" alt="" style="width:100%">
            </a>
        </div>

    </div>
</body>