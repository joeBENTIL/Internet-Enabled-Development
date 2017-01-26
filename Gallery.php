<!DOCTYPE html>
<html>
<head>
<title>My Self</title>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="photo-gallery.js"></script>


<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script type="text/javascript" src="jquery.bsPhotoGallery.js"></script>
<script type="text/javascript" src="jquery.bsPhotoGallery"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

         <script type="text/javascript">
            $(document).ready(function(){
               $('li img').on('click',function(){
                    var src = $(this).attr('src');
                    var img = '<img src="' + src + '" class="img-responsive"/>';
                    $('#myModal').modal();
                    $('#myModal').on('shown.bs.modal', function(){
                        $('#myModal .modal-body').html(img);
                    });
                    $('#myModal').on('hidden.bs.modal', function(){
                        $('#myModal .modal-body').html('');
                    });
               });
            })
  </script>
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
        <ul class="row">
        
          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
        
            <img class="img-responsive" src="img/photodune-174908-rocking-the-night-away-xs.jpg">
        
          </li>
        
          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
        
            <img class="img-responsive" src="img/photodune-247190-secret-email-xs.jpg">
        
          </li>
        
         <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
        
            <img class="img-responsive" src="img/photodune-268693-businesswoman-using-laptop-outdoors-xs.jpg">
        
          </li>
        
          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
        
            <img class="img-responsive" src="img/photodune-514834-touchscreen-technology-xs.jpg">
      
          </li>
        
          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
      
            <img class="img-responsive" src="img/photodune-1471528-insant-camera-kid-xs.jpg">
        
          </li>
        
          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
        
            <img class="img-responsive" src="img/photodune-2361384-culture-for-business-xs.jpg">
        
          </li>


           <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
        
            <img class="img-responsive" src="img/photodune-2361384-culture-for-business-xs.jpg">
        
          </li>


           <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
        
            <img class="img-responsive" src="img/photodune-2361384-culture-for-business-xs.jpg">
        
          </li>


           <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
        
            <img class="img-responsive" src="img/beauty-of-nature-9.jpg">
        
          </li>


           <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
        
            <img class="img-responsive" src="img/photodune-2441670-spaghetti-with-tuna-fish-and-parsley-s.jpg">
        
          </li>



           <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
        
            <img class="img-responsive" src="img/photodune-3807845-food-s.jpg">
        
          </li>



           <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
        
            <img class="img-responsive" src="img/photodune-3444921-street-art-xs.jpg">
        
          </li>



           <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
        
            <img class="img-responsive" src="img/AAlMTBH.jpg">
        
          </li>



           <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
        
            <img class="img-responsive" src="img/photodune-682990-online-search-xs.jpg">
        
          </li>




           <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
        
            <img class="img-responsive" src="img/photodune-461673-retro-party-xs.jpg">
        
          </li>


           <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
        
            <img class="img-responsive" src="img/photodune-460760-colors-xs.jpg">
        
          </li>


           <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
        
            <img class="img-responsive" src="img/photodune-2441670-spaghetti-with-tuna-fish-and-parsley-s.jpg">
        
          </li>



           <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
        
            <img class="img-responsive" src="img/photodune-352207-search-of-code-s.jpg">
        
          </li>



          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
        
            <img class="img-responsive" src="img/ect.jpg">
        
          </li>



          
          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
        
            <img class="img-responsive" src="img/meme.jpg">
        
          </li>



          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
        
            <img class="img-responsive" src="img/photodune-2360571-jump-xs.jpg">
        
          </li>



          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
        
            <img class="img-responsive" src="img/photodune-2360379-colors-xs.jpg">
        
          </li>



           <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
        
            <img class="img-responsive" src="img/IMG-20161126-WA0011.jpg">
        
          </li>



           <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
        
            <img class="img-responsive" src="img/IMG-20161207-WA0013.jpg">
        
          </li>
  </ul>
</div>



                
        <div class="modal fade" id="my<a href="http://www.jqueryscript.net/tags.php?/Modal/">Modal</a>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        
          <div class="modal-dialog">
        
            <div class="modal-content">
        
              <div class="modal-body"> </div>
        
            </div>
        
          </div>
        
        </div>


                   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->






</body>
</html>