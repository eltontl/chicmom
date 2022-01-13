<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Search</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->

    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/rd-mailform.css">


    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>

    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
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
  <main>
    <section id="content" class="content well3">
        <div class="container">
          <div class="search-form">
                    <form id="search" action="search.php" method="GET" accept-charset="utf-8">  
                        <label class="search-form_label" for="in">
                            <input id="in" class="search-form_input" type="text" name="s" placeholder="Type your search term here..."/>
                            <span class="search-form_liveout"></span>
                        </label>
                        <button type="submit" class="search-form_submit btn btn-primary">search </button>
                    </form>
            </div>   
            <h4 class="text-center">Search Results</h4>
            <div id="search-results"></div>
        </div>
    </section>
    

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
