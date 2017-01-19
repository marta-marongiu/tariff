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
        <link rel="stylesheet" type="text/css" href="slick-1.6.0/slick/slick-theme.css"/>
        <link href="css/style.css" rel="stylesheet">

        <!--additional fonts
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <header>
            <div class="container-fluid">
                <div class="container">
                    <a href="#"><img class="img-responsive" src="img/logo.jpg"></a>
                </div>
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

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Link<span class="sr-only">(current)</span></a></li>
                            <li><a href="#">Link</a></li>
                            </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>

            <!-- <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="img/logo.jpg"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Movies <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">Celebs&Photos</a></li>                                    
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Community</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">News</a></li>
                        </ul>
                        <form class="navbar-form navbar-left">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Link</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <section class="slider single-item">
                <div>
                  <img src="img/martian.jpg">
                </div>
                <div>
                  <img src="img/martian.jpg">
                </div>
                <div>
                  <img src="img/martian.jpg">
                </div>
                <div>
                  <img src="img/martian.jpg">
                </div>
            </section>  -->

        </header>


        <main>
            <!-- <div class="container card-deck-wrapper">
                <div class="row card-deck">

                    <div class="card col-xs-12 col-sm-4">
                        <img class="card-img-top img-responsive" src="img/madmax.jpg" alt="Card image cap">
                        <div class="card-block">
                        <h4 class="card-title">Mad Max: Fury Road</h4>
                        <p class="card-text">Action, Adventure, Sci-Fi</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>

                    <div class="card col-xs-12 col-sm-4">
                        <img class="card-img-top img-responsive" src="img/madmax.jpg" alt="Card image cap">
                        <div class="card-block">
                        <h4 class="card-title">The Hunger Games: Mocki...</h4>
                        <p class="card-text">Adventure, Sci-Fi, Thriller</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>

                    <div class="card col-xs-12 col-sm-4">
                        <img class="card-img-top img-responsive" src="img/madmax.jpg" alt="Card image cap">
                        <div class="card-block">
                        <h4 class="card-title">Jurassic World</h4>
                        <p class="card-text">Action, Adventure, Sci-Fi</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>

                    <div class="card col-xs-12 col-sm-4">
                        <img class="card-img-top img-responsive" src="img/madmax.jpg" alt="Card image cap">
                        <div class="card-block">
                        <h4 class="card-title">Everest</h4>
                        <p class="card-text">Adventure, Drama, Thriller</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>

                    <div class="card col-xs-12 col-sm-4">
                        <img class="card-img-top img-responsive" src="img/madmax.jpg" alt="Card image cap">
                        <div class="card-block">
                        <h4 class="card-title">Insurgent</h4>
                        <p class="card-text">Adventure, Sci-Fi, Thriller</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>

                    <div class="card col-xs-12 col-sm-4">
                        <img class="card-img-top img-responsive" src="img/madmax.jpg" alt="Card image cap">
                        <div class="card-block">
                        <h4 class="card-title">Sicario</h4>
                        <p class="card-text">Action, Crime, Drama</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>

                </div>
            </div> -->
                    <!-- <div class="col-sm-4">
                        <div class="card">
                            <a href="#"><img class="img-responsive" src="img/madmax.jpg"></a>  
                        </div>
         
                    </div>
                    <div class="col-sm-4">
                        <a href="#"><img class="img-responsive" src="img/madmax.jpg"></a>           
                    </div>
                    <div class="col-sm-4">
                        <a href="#"><img class="img-responsive" src="img/madmax.jpg"></a>           
                    </div>
                    <div class="col-sm-4">
                        <a href="#"><img class="img-responsive" src="img/madmax.jpg"></a>           
                    </div>
                    <div class="col-sm-4">
                        <a href="#"><img class="img-responsive" src="img/madmax.jpg"></a>           
                    </div>
                    <div class="col-sm-4">
                        <a href="#"><img class="img-responsive" src="img/madmax.jpg"></a>           
                    </div> -->
<!--                 </div>
                
            </div> -->

        </main>

        <footer></footer>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src="node_modules/jquery/dist/jquery.min.js"></script> -->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
    </body>
</html>