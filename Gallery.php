<!DOCTYPE html>
<html>
<head>
<title>My Self</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">My Self</a>
                </div>
            <div class="collapse navbar-collapse" id="#myNavbar">
              <div class="navbar-form navbar-left">
                 <form role="form" method="post" action="index.php">
                    <input type="text" class="form-control" placeholder="Search">
                    <input type="submit" class="btn btn-default" name="submit" value="Search">
                  </form>
              </div>
                <div class="navbar-right">
                    <ul class="nav navbar-nav"> 
                        <li role="presentation"><a href="index.php">HOME </a></li>
                        <li role="presentation"><a href="About_Us.php"> About_Us</a></li>
                        <li role="presentation"><a href="Contact_Us.php"> Contact Me</a></li>
                        <li role="presentation"><a href="Gallery.php"> Gallery</a></li>
                        
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    More
                     <span class="caret"></span>
                      </a>
           
                       </li>  

                    </ul>
                 </div><!--End of navbar-right-->
                </div><!--End of collapse-->
              </div>

              </nav>


                                                         <!--Slider-->
                <div class="">
                <div id="carousel-example-generic " class="carousel slide" data-ride="carousel" data-interval="4000">

                                                    <!-- Indicators --> 
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                </ol>
               
                                                            <!-- Wrapper for slides -->
              <div class="carousel-inner">
              <div class="item active">
              <img src=" img/water.jpg"alt="...">
              <div class="carousel-caption">
              <h3></h3>
              </div>
              </div>
              <div class="item">
              <img src="img/testimonial-mcphersons.jpg"alt="...">     
              <div class="carousel-caption">
              <h4> There Shall Be Ever Lasting Water</h4>
              </div>
              </div>
              <div class="item">
              <img src="img/sunshine.png" alt="...">        
              <div class="carousel-caption">
              <h3>  Manage Your Stats</h3>
              </div>
              </div>
              <div class="item">
              <img src="img/testimonial-janeh.png" alt="...">
              <div class="carousel-caption">
              <h3>God's loving Nature</h3>
              </div>
              </div>
              </div>
 
                                                       <!-- Controls -->
<a class="carousel-control left" href ="#carousel-example-generic" data-slide="prev">
<span class="icon-prev"></span>
</a>

<a class="carousel-control right" href ="#carousel-example-generic" data-slide="next">
<span class="icon-next"></span>
</a>
</div>                                              <!-- End Of Controls -->
</div>

             


</body>
</html>