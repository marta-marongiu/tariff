<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>IMDb</title>

    <!-- Bootstrap--> 
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap-slider/dist/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">
    

    <!--additional fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="img/logo.jpg" class="img-responsive"></a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                  <li><a href="#">Movies</a></li>
                  <li><a href="#">Celebs & Photos</a></li>
                  <li><a href="#">Community</a></li>
                  <li><a href="#">News</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right settings">
                  <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i></a></li>
                  <li><a href="#"><img src="img/profpic.png" class="img-responsive"></a></li>
              </ul>  
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      <div id="carousel-example-vertical" class="carousel vertical slide" data-ride="carousel">
        <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
              <div class="item active" data-attribute="https://www.youtube.com/embed/Ue4PCI0NamI">
                <img class="img-responsive" src="img/martian.jpg" alt="The Martian">
                <div class="carousel-caption text-left main-selection">
                  <h1>The Martian</h1>
                  <ul class="film-category">
                      <li><a href="#">Adventure</a></li>
                      <li><a href="#">Sci-Fi</a></li>
                      <li><a href="#">Thriller</a></li>
                  </ul>
                  <button class="btn btn-default btn-trailer" data-toggle="modal" data-target="#myModal">Watch Trailer <i class="fa fa-play-circle-o" aria-hidden="true"></i></button>
                  <div class="save-the-date">
                      <h3>In theaters</h3>
                      <p>15 Oct, 2015 (USA)</p>
                  </div>
                </div>
              </div>
              <div class="item" data-attribute="https://www.youtube.com/embed/hEJnMQG9ev8">
                <img class="img-responsive" src="img/mad-max-landscape.jpg" alt="Mad Max">
                <div class="carousel-caption text-left main-selection">
                  <h1>Mad Max</h1>
                  <ul class="film-category">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Adventure</a></li>
                      <li><a href="#">Sci-Fi</a></li>
                  </ul>
                  <button class="btn btn-default btn-trailer" data-toggle="modal" data-target="#myModal">Watch Trailer <i class="fa fa-play-circle-o" aria-hidden="true"></i></button>
                  <div class="save-the-date">
                      <h3>In theaters</h3>
                      <p>26 Oct, 2015 (USA)</p>
                  </div>
                </div>
              </div>
              <div class="item" data-attribute="https://www.youtube.com/embed/3PkkHsuMrho">
                <img class="img-responsive" src="img/hunger-games-landscape.jpg" alt="The Hunger Games">
                <div class="carousel-caption text-left main-selection">
                  <h1>The Hunger Games: Mockingjay</h1>
                  <ul class="film-category">
                      <li><a href="#">Adventure</a></li>
                      <li><a href="#">Sci-Fi</a></li>
                      <li><a href="#">Thriller</a></li>
                  </ul>
                  <button class="btn btn-default btn-trailer" data-toggle="modal" data-target="#myModal">Watch Trailer <i class="fa fa-play-circle-o" aria-hidden="true"></i></button>
                  <div class="save-the-date">
                      <h3>In theaters</h3>
                      <p>20 Nov, 2015 (USA)</p>
                  </div>
                </div>
              </div>
              <div class="item" data-attribute="https://www.youtube.com/embed/RFinNxS5KN4">
                <img class="img-responsive" src="img/jurassic-landscape.jpg" alt="Jurassic World">
                <div class="carousel-caption text-left main-selection">
                  <h1>Jurassic World</h1>
                  <ul class="film-category">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Adventure</a></li>
                      <li><a href="#">Sci-Fi</a></li>
                  </ul>
                  <button class="btn btn-default btn-trailer" data-toggle="modal" data-target="#myModal">Watch Trailer <i class="fa fa-play-circle-o" aria-hidden="true"></i></button>
                  <div class="save-the-date">
                      <h3>In theaters</h3>
                      <p>26 Nov, 2015 (USA)</p>
                  </div>
                </div>
              </div>
              <div class="item" data-attribute="https://www.youtube.com/embed/79Q2rrQlPW4">
                <img class="img-responsive" src="img/everest-landscape.jpg" alt="Everest">
                <div class="carousel-caption text-left main-selection">
                  <h1>Everest</h1>
                  <ul class="film-category">
                      <li><a href="#">Adventure</a></li>
                      <li><a href="#">Drama</a></li>
                      <li><a href="#">Thriller</a></li>
                  </ul>
                  <button class="btn btn-default btn-trailer" data-toggle="modal" data-target="#myModal">Watch Trailer <i class="fa fa-play-circle-o" aria-hidden="true"></i></button>
                  <div class="save-the-date">
                      <h3>In theaters</h3>
                      <p>12 Dec, 2015 (USA)</p>
                  </div>
                </div>
              </div>
          </div>

          <!-- Indicators -->
          <ol class="carousel-indicators">
              <li data-target="#carousel-example-vertical" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-vertical" data-slide-to="1"></li>
              <li data-target="#carousel-example-vertical" data-slide-to="2"></li>
              <li data-target="#carousel-example-vertical" data-slide-to="3"></li>
              <li data-target="#carousel-example-vertical" data-slide-to="4"></li>
          </ol>

        <!-- Controls -->
          <a class="up carousel-control" href="#carousel-example-vertical" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="down carousel-control" href="#carousel-example-vertical" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a> 
      </div>

      <div id="myModal" class="modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <iframe class="iframe" width="560" height="315" src="https://www.youtube.com/embed/Ue4PCI0NamI" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="container options">
        <nav class="navbar navbar-default">
            <div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="#">In theaters</a></li>
                        <li><a href="#">Coming soon</a></li>
                        <li><a href="#">Charts</a></li>
                        <li><a href="#">TV series</a></li>
                        <li><a href="#">Trailers</a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
                          <ol class="dropdown-menu">
                            <li><a href="#">Details</a></li>
                            <li><a href="#">Storyline</a></li>
                            <li><a href="#">Photo & Video</a></li>
                            <li><a href="#">Opinions</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Related items</a></li>
                          </ol>
                        </li>
                        <li><button class="like"><i class="fa fa-star" aria-hidden="true"></i>179</button></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="row">
            <div class="hidden-xs col-sm-2 view-type">
                <a href="#" id="icon-list"><i class="fa fa-bars fa-lg" aria-hidden="true"></i></a>
                <a href="#" id="icon-grid"><i class="fa fa-th fa-lg" aria-hidden="true"></i></a>
            </div>
            <div class="col-xs-12 col-sm-6 filter-bar">
                <div class="bootstrap-slider">
                  <span class="filter-label">IMDb Rating <span class="filter-selection"></span></span>
                  <b class="filter-min"></b> <input id="filter-ranking" type="text" class="bootstrap-slider" value="" data-filter-group="ranking"> <b class="filter-max"></b>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 search-bar">
                <div class="input-group">
                  <input type="text" class="form-control">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </span>
                </div> <!-- /input-group -->
            </div>
        </div> 
          <!-- questa visible solo con visualizzazione grid -->
        <div class="grid">
            <div class="card item-grid" data-ranking="8">
                <a href="#"><img src="img/madmax.jpg" class="img-responsive"></a>
                <h4>Mad Max: Fury Road</h4>
                <ul>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Adventure</a></li>
                    <li><a href="#">Sci-Fi</a></li>
                </ul>
                <span><i class="fa fa-heart" aria-hidden="true"></i>8.3</span>
            </div>    
            <div class="card item-grid" data-ranking="6">
                <a href="#"><img src="img/hunger-games.jpg" class="img-responsive"></a>
                <h4>The Hunger Games</h4>
                <ul>
                    <li><a href="#">Adventure</a></li>
                    <li><a href="#">Sci-Fi</a></li>
                    <li><a href="#">Thriller</a></li>
                </ul>
                <span><i class="fa fa-heart" aria-hidden="true"></i>6.8</span>
            </div>    
            <div class="card item-grid" data-ranking="7">
                <a href="#"><img src="img/jurassic.png" class="img-responsive"></a>
                <h4>Jurassic World</h4>
                <ul>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Adventure</a></li>
                    <li><a href="#">Sci-Fi</a></li>
                </ul>
                <span><i class="fa fa-heart" aria-hidden="true"></i>7.2</span>
            </div>
            <div class="card item-grid" data-ranking="7">
                <a href="#"><img src="img/everest.jpg" class="img-responsive"></a>
                <h4>Everest</h4>
                <ul>
                    <li><a href="#">Adventure</a></li>
                    <li><a href="#">Drama</a></li>
                    <li><a href="#">Thriller</a></li>
                </ul>
                <span><i class="fa fa-heart" aria-hidden="true"></i>7.4</span>
            </div>
            <div class="card item-grid" data-ranking="6">
                <a href="#"><img src="img/insurgent.jpg" class="img-responsive"></a>
                <h4>Insurgent</h4>
                <ul>
                    <li><a href="#">Adventure</a></li>
                    <li><a href="#">Sci-Fi</a></li>
                    <li><a href="#">Thriller</a></li>
                </ul>
                <span><i class="fa fa-heart" aria-hidden="true"></i>6.4</span>
            </div>
            <div class="card item-grid" data-ranking="8">
                <a href="#"><img src="img/sicario.jpg" class="img-responsive"></a>
                <h4>Sicario</h4>
                <ul>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Crime</a></li>
                    <li><a href="#">Drama</a></li>
                </ul>
                <span><i class="fa fa-heart" aria-hidden="true"></i>8</span>
            </div>                 
        </div>
          <!-- questa visible solo con visualizzazione list -->
        <div class="list">
            <div class="item-list" data-ranking="8">
                <a href="#">
                  <img src="img/madmax.jpg" class="poster">
                </a>
                <div class="info">
                  <h4>Mad Max: Fury Road</h4>
                  <ul>
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Adventure</a></li>
                      <li><a href="#">Sci-Fi</a></li>
                  </ul>
                  <p>Donec egestas ligula sit amet auctor pharetra. Suspendisse semper velit a felis dictum, nec iaculis urna vestibulum. Sed rhoncus libero sed maximus molestie. Aliquam sem felis, consectetur tincidunt sapien non, egestas vulputate diam. Nunc iaculis, enim at malesuada ultrices, nulla mi convallis ipsum, sed maximus felis ex quis libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam felis metus, ornare nec gravida nec, porttitor ac risus. Proin varius velit sed ante suscipit tincidunt. Phasellus porta sapien id placerat placerat.</p>
                  <span><i class="fa fa-heart" aria-hidden="true"></i>8.3</span>
                </div>
            </div>    
            <div class="item-list" data-ranking="6">
                <a href="#">
                  <img src="img/hunger-games.jpg" class="poster">
                </a>
                <div class="info">
                  <h4>The Hunger Games</h4>
                  <ul>
                      <li><a href="#">Adventure</a></li>
                      <li><a href="#">Sci-Fi</a></li>
                      <li><a href="#">Thriller</a></li>
                  </ul>
                  <p>Donec egestas ligula sit amet auctor pharetra. Suspendisse semper velit a felis dictum, nec iaculis urna vestibulum. Sed rhoncus libero sed maximus molestie. Aliquam sem felis, consectetur tincidunt sapien non, egestas vulputate diam. Nunc iaculis, enim at malesuada ultrices, nulla mi convallis ipsum, sed maximus felis ex quis libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam felis metus, ornare nec gravida nec, porttitor ac risus. Proin varius velit sed ante suscipit tincidunt. Phasellus porta sapien id placerat placerat.</p>
                  <span><i class="fa fa-heart" aria-hidden="true"></i>6.8</span>
                </div>
            </div>    
            <div class="item-list" data-ranking="7">
                <a href="#">
                  <img src="img/jurassic.png" class="poster">
                </a>
                <div class="info">
                  <h4>Jurassic World</h4>
                  <ul>
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Adventure</a></li>
                      <li><a href="#">Sci-Fi</a></li>
                  </ul>
                  <p>Donec egestas ligula sit amet auctor pharetra. Suspendisse semper velit a felis dictum, nec iaculis urna vestibulum. Sed rhoncus libero sed maximus molestie. Aliquam sem felis, consectetur tincidunt sapien non, egestas vulputate diam. Nunc iaculis, enim at malesuada ultrices, nulla mi convallis ipsum, sed maximus felis ex quis libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam felis metus, ornare nec gravida nec, porttitor ac risus. Proin varius velit sed ante suscipit tincidunt. Phasellus porta sapien id placerat placerat.</p>
                  <span><i class="fa fa-heart" aria-hidden="true"></i>7.2</span>
                </div>
            </div>
            <div class="item-list" data-ranking="7">
                <a href="#">
                  <img src="img/everest.jpg" class="poster">
                </a>
                <div class="info">
                  <h4>Everest</h4>
                  <ul>
                      <li><a href="#">Adventure</a></li>
                      <li><a href="#">Drama</a></li>
                      <li><a href="#">Thriller</a></li>
                  </ul>
                  <p>Donec egestas ligula sit amet auctor pharetra. Suspendisse semper velit a felis dictum, nec iaculis urna vestibulum. Sed rhoncus libero sed maximus molestie. Aliquam sem felis, consectetur tincidunt sapien non, egestas vulputate diam. Nunc iaculis, enim at malesuada ultrices, nulla mi convallis ipsum, sed maximus felis ex quis libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam felis metus, ornare nec gravida nec, porttitor ac risus. Proin varius velit sed ante suscipit tincidunt. Phasellus porta sapien id placerat placerat.</p>
                  <span><i class="fa fa-heart" aria-hidden="true"></i>7.4</span>
                </div>
            </div>
            <div class="item-list" data-ranking="6">
                <a href="#">
                  <img src="img/insurgent.jpg" class="poster">
                </a>
                <div class="info">
                  <h4>Insurgent</h4>
                  <ul>
                      <li><a href="#">Adventure</a></li>
                      <li><a href="#">Sci-Fi</a></li>
                      <li><a href="#">Thriller</a></li>
                  </ul>
                  <p>Donec egestas ligula sit amet auctor pharetra. Suspendisse semper velit a felis dictum, nec iaculis urna vestibulum. Sed rhoncus libero sed maximus molestie. Aliquam sem felis, consectetur tincidunt sapien non, egestas vulputate diam. Nunc iaculis, enim at malesuada ultrices, nulla mi convallis ipsum, sed maximus felis ex quis libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam felis metus, ornare nec gravida nec, porttitor ac risus. Proin varius velit sed ante suscipit tincidunt. Phasellus porta sapien id placerat placerat.</p>
                  <span><i class="fa fa-heart" aria-hidden="true"></i>6.4</span>
                </div>
            </div>
            <div class="item-list" data-ranking="8">
                <a href="#">
                  <img src="img/sicario.jpg" class="poster">
                </a>
                <div class="info">
                  <h4>Sicario</h4>
                  <ul>
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Crime</a></li>
                      <li><a href="#">Drama</a></li>
                  </ul>
                  <p>Donec egestas ligula sit amet auctor pharetra. Suspendisse semper velit a felis dictum, nec iaculis urna vestibulum. Sed rhoncus libero sed maximus molestie. Aliquam sem felis, consectetur tincidunt sapien non, egestas vulputate diam. Nunc iaculis, enim at malesuada ultrices, nulla mi convallis ipsum, sed maximus felis ex quis libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam felis metus, ornare nec gravida nec, porttitor ac risus. Proin varius velit sed ante suscipit tincidunt. Phasellus porta sapien id placerat placerat.</p>
                  <span><i class="fa fa-heart" aria-hidden="true"></i>8</span>
                </div>  
            </div>                   
        </div>
            <div class="text-center scroll">
                <img src="img/scroll.png">
            </div>   
    </section>

    <footer class="container-fluid">
        <div class="row">
            <div class="col-xs-4 text-left logo-bottom">
               <img src="img/imdb.png"> 
            </div>
            <div class="col-xs-4 text-center social">
                <i class="fa fa-twitter fa-lg" aria-hidden="true"></i>
                <i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i>
                <i class="fa fa-instagram fa-lg" aria-hidden="true"></i>
            </div>
            <div class="col-xs-4 text-right copyright">
              <p>1990-2015 IMDB.COM, INC.</p>  
            </div>
        </div>
    </footer>


    <!--jQuery (necessary for Bootstrap's JavaScript plugins)-->
     <script src="node_modules/jquery/dist/jquery.min.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
<!--     <script src="http://code.jquery.com/jquery-latest.js"></script> -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/bootstrap-slider/dist/bootstrap-slider.js"></script>
    <script src="node_modules/isotope-layout/dist/isotope.pkgd.js"></script>
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>