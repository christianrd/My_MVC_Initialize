<?php
/**
 * Created by PhpStorm.
 * User: ChristianDevCode
 * Date: 7/29/2016
 * Time: 6:19 PM
 */
?>

<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My MVC Initialize</title>
<!--    STYLES
       ==========-->
    <link rel="stylesheet" href="<?= SITE_URL ?>/public/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= SITE_URL ?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= SITE_URL ?>/public/css/main.css">
    <style>
        html,body{
            height: 100%;
            width: 100%;
        }
        body{
            padding-top: 20px;
        }
    </style>


    <script src="<?= SITE_URL ?>/public/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="<?= SITE_URL ?>/public/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <h1 class="text-center">Welcome to MVC Initialize.</h1>
        <h2 class="text-center">Feel free to develop your project with this <strong>MVC</strong>.</h2><br>
        <hr>
        <br><br>
        <p class="text-center">This <strong>MVC FRAMEWORK</strong> was created with <i class="fa fa-heart"></i> by <a href="https://www.christiandr.com">Christian D. Rodriguez</a></p>

        <div id="contributorsList">
        </div>
    </div>
</div>

<!--    JS
       =====-->
    <script src="<?= SITE_URL ?>/public/js/vendor/bootstrap.min.js"></script>
    <script src="<?= SITE_URL ?>/public/js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $.getJSON("https://api.github.com/users/christianrd", function(data) {
                $(data).each( function(i, e) {
//                    if ($.isNumeric(i)) {
                        var contributorDiv = "<div class='col-sm-6 col-md-4 col-md-offset-4'>";
                        contributorDiv += "<div class='thumbnail'>";
                        contributorDiv += '<img data-toggle="tooltip" data-placement="top" title="' + e.name + '" class="img-responsive" src="' + e.avatar_url + '"  height="150"/>';
                        contributorDiv += "<div class='caption'>";
                        contributorDiv += "<h3 class='text-center'>" + e.name + "</h3>";
                        contributorDiv += "<p class='text-center'>" + e.bio + ".<br> In my github profile I have "+ e.public_repos +" repository.</p>";
                        contributorDiv += "<p class='text-center'><a href='" + e.html_url + "' target='_blank'><i class='fa fa-github fa-3x'></i></a>  <a href='" + e.blog + "' style='margin-left: 5px' target='_blank'><i class='fa fa-globe fa-3x'></i></a>  <a href='mailto:"+ e.email +"?subject=Hi Christian' style='margin-left: 5px' target='_blank'><i class='fa fa-envelope fa-3x'></i></a> </p>";
                        contributorDiv += "</div>";
                        contributorDiv += "</div>";
                        contributorDiv += "</div>";
                        $("#contributorsList").append(contributorDiv);
//                    }
                });
            });
        });
    </script>
</body>
</html>
