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
                        <li role="presentation"><a href="index.php">Home </a></li>
                        <li role="presentation"><a href="About_Us.php"> About Us</a></li>
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
   
     <div class="container">
   <form class="form-horizontal" role="form" method="post" action="index.php">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
    </div>
  </div>
     <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
    </div>
  </div>

  <div class="form-group">
    <label for="message" class="col-sm-2 control-label">Message</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="4" name="message"></textarea>
    </div>
  </div>

<div class="form-group">
    <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
    </div>
  </div>
<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
    </div>
  </div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      <! Will be used to display an alert to the user>
    </div>
  </div>
</div>
</form

              

</body>
</html>