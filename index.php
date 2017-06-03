<?php include 'validation.php';?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dovydas Tamulis - CV</title>
    <!-- Bootsrap 4 css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
        crossorigin="anonymous">
    <!-- Custom css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- ICONS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>

    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content"
            aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

        <!-- Brand -->
        <a class="navbar-brand" href="#">Dovydas Tamulis</a>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="nav-content">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 3</a>
                </li>
            </ul>
    </nav>

    <div class="container">

        <div class="main">
            <br>
           
          <h1 class="text-center">Dovydas Tamulis</h1>
          <!--
           <div class="text-center">
            <img class="rounded-circle pic" src="img/mee.jpg" height:100px; alt="Dovydas Tamulis">
            </div>
            -->
        </div>
        <!--Main -->
 <div class="page-header">
       
<a href="http://placeholder.com"><img src="http://via.placeholder.com/350x150"></a>
        <br>
    </div>
    <p>textttttt</p>
    <br>
    <p>textttttt</p>
    <br>
    <p>textttttt</p>
    <br>
    <p>textttttt</p>
    <br>
    <p>textttttt</p>
    <br>
    <p>textttttt</p>
    <br>
    <p>textttttt</p>

    </div>
    <!--Container -->
   







    


    <section>
        <div class="map-responsive">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2258.9352021175223!2d8.436227315925528!3d55.51607798049066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464b205eb7ed0697%3A0x94b2679914bc9652!2sThulevej+50%2C+6715+Esbjerg+N%2C+Danija!5e0!3m2!1slt!2slt!4v1496490722301"
                width="100%" height="350" style="border:0" allowfullscreen></iframe>
        </div>
    </section>



   

<section class="contactform">


            <form method="post" action="index.php">
                <div class="col-md-6 offset-md-3">
                <div class="form-group">
                <input class="input form-control" type="text" placeholder="Name" name="name" value="">
                <span class="error"><?php echo $nameError;?></span>
            </div>
            </div>
             <div class="col-md-6 offset-md-3">
            <div class="form-group">
                <input class="input form-control" type="text" placeholder="Email..." name="email" value="">
                <span class="error"><?php echo $emailError;?></span>
               </div>
               </div>
                <div class="col-md-6 offset-md-3">
                 <div class="form-group">
                <textarea class="form-control" name="message" val="" placeholder="Message..."></textarea>
                <span class="error"><?php echo $messageError;?></span>
                </div>
                </div>
                 <div class="col-md-6 offset-md-3">
                <input class="btn btn-outline-secondary btn-lg btn-block" type="submit" name="submit" value="Submit">
                <span class="success"><?php echo $successMessage;?></span>
                </div>
            </form>
           
    </section>

<section>
 <footer class="footer">
 
          <div class="text-center footer-text">
              <span class="space"><i class="fa fa-map-marker" aria-hidden="true"></i> Esbjerg</span>
              <span class="space"><i class="fa fa-envelope" aria-hidden="true"></i> dovydastt@gmail.com</span>
              <span class="space"><i class="fa fa-mobile" aria-hidden="true"></i> +45 5022 7737 - DK</span>
                 <span class="space"><i class="fa fa-mobile" aria-hidden="true"></i> +370 6381 8209 - LT</span>
              <div>
    
    </footer>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
</body>

</html>