<?php
define("CSS_PATH", "css/");
?>

<!DOCTYPE html>
<html lang="en" class="wide">
<head>
    <title>Shortcodes</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/rd-mailform.css">

    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <style>

        main {
            /*color: #212121;*/
            /*background: #f7f7f7;*/
        }

        .icon-short-code {
            font-size: 16px;
        }

        .icon-short-code .box__left {
            padding-right: 10px;
            color: black;
        }

        h2 {
            font-size: 45px;
            line-height: 1.7;
        }

        h3 {
            font-weight: 700;
            text-transform: uppercase;
            font-size: 28px;
            line-height: 1.7;
        }

        h2 + h3 {
            margin-top: 30px;
        }

        h3 + .row {
            margin-top: 20px;
        }

        .row + h3 {
            margin-top: 60px;
        }

        .box .box__left,
        .box .box__right,
        .box .box__body {
            display: table-cell;
            vertical-align: top;
        }

        @media (max-width: 767px) {
            .icon-short-code.box .box__left,
            .icon-short-code.box .box__right,
            .icon-short-code.box .box__body {
                display: inline-block;
            }
        }

        div.row div.clear-shortcode-xs-6 {
            margin-top: 0;
            margin-bottom: 0;
        }

        @media (max-width: 600px) {
            div.row div.clear-shortcode-xs-6 {
                width: 100%;
            }
        }

        @media (min-width: 1200px) {
            div.row div.clear-shortcode-xs-6:nth-child(3n+4) {
                clear: left;
            }
        }

        @media (min-width: 992px) and (max-width: 1199px) {
            div.row div.clear-shortcode-xs-6:nth-child(3n+4) {
                clear: left;
            }
        }

        @media (min-width: 500px) and (max-width: 991px) {
            div.row div.clear-shortcode-xs-6:nth-child(2n+3) {
                clear: left;
            }
        }


    </style>

    <!--[if lt IE 10]>
    <div
        style='background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <script src='js/device.min.js'></script>
</head>
<body>
<div class="page">
    <!--========================================================
                            HEADER
    =========================================================-->
    <header class="header-1">

        <div id="stuck_container" class="stuck_container">
            <div class="container">

                <div class="navbar-header">
                    <h1 class="navbar-brand">
                        <a href="./">lookbook</a>
                    </h1>
                </div>

                <nav class="navbar navbar-default navbar-static-top ">

                    <ul class="navbar-nav sf-menu " data-type="navbar">
                        <li>
                            <a href="./">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="index-1.html">About</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Fashion and design</a>
                                </li>
                                <li>
                                    <a href="#">Production</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Latest</a>
                                        </li>
                                        <li>
                                            <a href="#">Archive</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Stores</a>
                                </li>
                                <li>
                                    <a href="#">Employees</a>
                                </li>
                                <li>
                                    <a href="#">From idea to store</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="index-2.html">Gallery</a>
                        </li>
                        <li>
                            <a href="index-3.html">News</a>
                        </li>

                        <li>
                            <a href="index-4.html">Contacts</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </header>


    <!--========================================================
                              CONTENT
    =========================================================-->
    <main class="content">
        <!-- Shortcodes -->
        <section class="well3">
            <div class="container">

                <!-- Icons -->
                <?php
                $packs = array(
                    "font-awesome", "material-icons", "hotel-pictograms", "material-design", "linecons", "fl-sympletts",
                    "fl-squared-ui", "fl-soft-icons", "fl-simpleicon-communication",
                    "fl-real-estate-3", "fl-puppets", "fl-outicons", "fl-line-ui",
                    "fl-line-icon-set", "fl-justicons", "fl-icon-works", "fl-great-icon-set",
                    "fl-glypho", "fl-free-chaos", "fl-flat-icons-set-2", "fl-fill-round-icons",
                    "fl-dripicons", "fl-drawing-tools", "fl-demo-icons", "fl-demo-icons", "fl-crisp-icons",
                    "fl-continuous", "fl-clear-icons", "fl-chapps", "fl-budicons-launch", "fl-budicons-free",
                    "fl-bigmug-line", "fl-36-slim-icons", "beach-icons", "arrows"
                );

                $di = new RecursiveDirectoryIterator(CSS_PATH);
                $files = array();


                $fa = 0;
                foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
                    if (in_array(basename($filename, ".css"), $packs)) {
                        if (basename($filename, ".css") != "font-awesome") {
                            array_push($files, $filename);
                            echo "<link rel='stylesheet' href='css/" . basename($filename) . "'>";
                        } else {
                            $fa = 1;
                        }

                    }
                }

                if ($fa) {
                    array_push($files, "css\\font-awesome.css");
                    echo "<link rel='stylesheet' href='css/" . basename($filename) . "'>";
                }

                if (count($files) > 0) {
                    echo '<h2>Icons</h2>';
                    foreach ($files as $i => $filename) {
                        echo '<h3>' . basename($filename, ".css") . '</h3>';
                        echo '<div class="row">';
                        $handle = fopen($filename, "r");
                        $icons = array();

                        while (($line = fgets($handle)) !== false) {
                            if (preg_match("/\.(" . ((basename($filename, ".css") == "material-design") || (basename($filename, ".css") == "hotel-pictograms") ? "(flaticon)|(material-design)" : basename($filename, ".css")) . "-[\w\d_-]+)\:before\s*\{/i", $line, $result)) {
                                array_push($icons, $result[1]);
                            }


                            switch (basename($filename, ".css")) {
                                case 'font-awesome':
                                    if (preg_match("/\.(fa-[\w\d_-]+)\:before\s*\{/i", $line, $result)) {
                                        array_push($icons, $result[1]);
                                    }
                                    break;

                            }
                        }


                        if (count($icons) <= 10) {
                            $bp = ceil(count($icons) / 5);
                        } else {
                            $bp = ceil(count($icons) / 10);
                        }

                        foreach ($icons as $i => $value) {
                            if (fmod($i + $bp, $bp) == 0) {
                                if ($i != 0) {
                                    echo '</div>';
                                }
                                echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 clear-shortcode-xs-6">';
                            }
                            echo '<div class="box icon-short-code">';
                            echo '<div class="box__left">';
                            echo '<div class="icon ' . $value . '"></div>';
                            echo '</div>';
                            echo '<div class="box__body"> .' . $value . '</div>';
                            echo '</div>';
                            if ($i == count($icons) - 1) {
                                echo '</div>';
                            }
                        }

                        echo '</div>';
                        fclose($handle);
                    }
                }
                ?>
                <!-- END Icons -->
            </div>
        </section>
        <!-- END Shortcodes -->
    </main>


    <!--========================================================
                            FOOTER
    =========================================================-->
    <footer class="footer1">

        <section class="well14 center991">
            <div class="container">

                <div class="row">

                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <ul class="list list-2">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="index-1.html">About</a>
                            </li>
                            <li>
                                <a href="index-2.html">Gallery</a>
                            </li>
                            <li>
                                <a href="index-3.html">News</a>
                            </li>
                            <li>
                                <a href="index-4.html">Contacts</a>
                            </li>
                        </ul>
                    </div>


                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <h6>
                            Newsletter
                        </h6>

                        <form class='rd-mailform subscribe' method="post" action="bat/rd-mailform.php">
                                                   <!-- RD Mailform Type -->
                                                   <input type="hidden" name="form-type" value="subscribe"/>
                                                   <!-- END RD Mailform Type -->

                                                   <div class="form-group">
                                                       <label class="form-label" data-add-placeholder for="mailform-input-email">E-mail</label>
                                                       <input id="mailform-input-email"
                                                              type="text"
                                                              name="email"
                                                              data-constraints="@NotEmpty @Email"/>
                                                   </div>

                                                   <div class="form-group btn-wr">
                                                       <button class="fa-angle-right" type="submit"></button>

                                                       <div class="mfInfo"></div>

                                                   </div>
                                               </form>

                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container center991">
                <div class="row">

                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <p class="rights">
                            LookBook&#169; <span id="copyright-year"></span>
                            <a href="index-5.html">Privacy Policy</a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <ul class="inline-list inline-list-2">
                            <li>
                                <a href="#" class="fa fa-facebook">facebook</a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-twitter">twitter</a>
                            </li>
                            <li>
                                <a href="#" class="fa  fa-google-plus">google-plus</a>
                            </li>
                        </ul>
                    </div>

                </div>


            </div>
        </section>


    </footer>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
<!-- </script> -->

</body>
</html>