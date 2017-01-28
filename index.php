<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Fernando Parreira</title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>

<div class="container">
    <div class="row header">
        <div class="col-md-12">
            <div class="img-profile"></div>
            <div class="primaryText">
                Hi, I'm Fernando Parreira.
            </div>
            <span class="texthelp"></span>
            <div class="secondaryText">
                <a href="https://github.com/fparreira" role="link" target="_blank"><i
                            class="fa fa-github fa-lg"></i></a>
                <a href="https://twitter.com/fjparreira" role="link" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                <a href="mailto:fparreira@gmail.com" role="link" target="_blank"><i
                            class="fa fa-envelope fa-lg"></i></a>
                <a href="https://www.instagram.com/fjparreira" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>
                <a href="https://www.facebook.com/fernando.parreira" role="link" target="_blank"><i
                            class="fa fa-facebook fa-lg"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 article">
            <h2>Skills</h2>
            <p>
                I am a web developer for over 10 years. I live in São Paulo, Brazil. I've worked on projects involving
                infrastructure, backend and frontend. I am always researching what's current in the field of web
                development
                and can add quality in projects that work.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 article">
            <h2>Skillset</h2>
            <p>
                PHP, Laravel, JavaScript, jQuery, Bootstrap, WordPress (admin/themes), Nginx, Apache, Docker
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 article">
            <h2>Some Projects</h2>
            <?php

            $repos = array(
                array(
                    'name' => 'apimovie',
                    'url' => 'https://github.com/fparreira/apimovie',
                    'description' => 'Simple Laravel API Movie DB'
                ),
                array(
                    'name' => 'fparreira.com',
                    'url' => 'https://github.com/fparreira/fparreira.com',
                    'description' => 'Personal Website'
                ),
                array(
                    'name' => 'blob-laravel',
                    'url' => 'https://github.com/fparreira/blob-laravel',
                    'description' => 'Image blob example in Laravel (create and read)'
                ),
                array(
                    'name' => 'jquery-randomBG',
                    'url' => 'https://github.com/fparreira/jquery-randomBG',
                    'description' => 'Jquery plugin - Random Background Color'
                ),
                array(
                    'name' => 'ifspvtp-WP',
                    'url' => 'https://github.com/fparreira/ifspvtp-wp',
                    'description' => 'WordPress theme for Federal Institute São Paulo'
                ),

            );

            $len = count($repos);

            for ($i = 0; $i < $len; $i++) {

                ?>

                <h3><a href="<?php echo $repos[$i]['url']; ?>" target="_blank"><?php echo $repos[$i]['name']; ?></a></h3>
                <p><?php echo $repos[$i]['description']; ?></p>

                <?php

            }

            ?>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12 article footer"></div>
    </div>
</div>


<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/typed.js"></script>

<script>
    $("document").ready(function () {
        $(".texthelp").typed({
            strings: ["> I can help you in your web project"],
            typeSpeed: 0
        });
    });
</script>

</body>
</html>
