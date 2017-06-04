<?php
if(isset($_GET['email'])) {


    $email_to = "trey@superfunparties.co.nz";
    $email_subject = "Website Enquiry";

    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }


    // validation expected data exists
    if(!isset($_GET['name']) ||
        !isset($_GET['email']) ||
        !isset($_GET['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }



    $name = $_GET['name']; // required
    $email_from = $_GET['email']; // required
    $comments = $_GET['comments']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }

    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }


  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }

  if(strlen($error_message) > 0) {
    died($error_message);
  }

    $email_message = "Form details below.\n\n";


    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }



    $email_message .= "Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
?>


<div class=text-center>
Thank you for contacting me, Ill be in touch very soon
</div>
<?php

}
?>


<html lang="en">

<head>
  <title>SuperFun Parties</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Baloo|Chewy|Gloria+Hallelujah" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Logo</a>
        <a class="navbar-brand" href="tel: 0064278737386">Call Now</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about">ABOUT</a></li>
          <li><a href="#services">SERVICES</a></li>
          <!--<li><a href="#portfolio">PORTFOLIO</a></li>-->
          <li><a href="#pricing">PRICING</a></li>
          <li><a href="#contact">CONTACT</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="jumbotron text-center">
    <h1>Welcome to SuperFunParties</h1>
    <p>Making Kids Parties Superfun!</p>
  </div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/image1.JPG" class="img-rounded" width="800">
      </div>

      <div class="item">
        <img src="images/park.jpg" class="picturescroll img-rounded" width="800">
      </div>

      <div class="item">
        <img src="images/image2.JPG" class="picture  img-rounded" width="800">
      </div>

      <div class="item">
        <img src="http://placehold.it/800x450" class="picture  img-rounded" width="800">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="container-fluid slideanim backgroundtwo topmargin" id="about">
    <div class="row">
      <div class="col-sm-8">
        <h2>About The Company</h2>
        <h4 class='fontone'>A bit about Trey, the company owner:</h4>
        <p>

          Hi there!<br>
          I grew up on Waiheke Island and have lived in Auckland my whole life. I love music, art, working out, comedy, creating crafty profects and being a dad to my 2 year old daughter!<br>
          I've been working in kids entertainment for over a year and have worked with various kids party companies.
          <br> I discovered early on that it's something I love to do and would like to turn it into a professional business of my own
          so I finished my full time job and focused on building my skills and working full time in the kids party industry (this was also motivated by my daughter being born and wanting more time to spend with her!)</p>
        <a href="#contact"><button class="btn btn-default btn-lg" >Get in Touch</button></a>
      </div>
      <div class="col-sm-4">
        <img src="images/aboutme.jpg" class="picture img-rounded" width="280">
      </div>
    </div>
  </div>


  <div class="container-fluid bg-grey slideanim backgroundtwo img-rounded">
    <div class="row">
      <div class="col-sm-4">
        <img src="images/balloon2.JPG" class="picture img-rounded rotateimg90 " height="280">
      </div>
      <div class="col-sm-8 values">
        <h2>Why Choose SuperFunParties</h2>
        <h4 class='fontone'> My ongoing aim is to have Superfunparties stand out as a one of a kind exceptional experience that can be relied on to provide the very best at kids parties!
</h4>
        <p>Being the sole entertainer in the company I guarantee a top quality level of service.<br>
          I am a real perfectionist and focus on getting the best costumes, equipment and providing the very best service for your kids party. <br>
          I am personally invested in each party I do and always consider it a special event that I hope to be a special memory for all the kids involved!<br>
           I make sure I have enough time for all the kids at each party and I love the work I do so you can be rest assured that I bring 100% every time!<br>

I am always innovating and looking for new things to provide at kids parties, from improving balloon and face paint designs, new activities and party ideas to new costumes and services!</p>
      </div>
    </div>
  </div>
  <div class="youtubevideowrap">

    <div class="video video-container slideanim">
      <iframe width="640" height="360" src="https://www.youtube.com/embed/OCWj5xgu5Ng" frameborder="50" allowfullscreen></iframe>
    </div>
  </div>

  <div class="container-fluid text-center slideanim  backgroundtwo" id="services">
    <h2>PARTY SERVICES:</h2>
    <h4>Most parties consists of a mix of games, music, prizes, balloon twisting and face painting. Of course each party is unique and it's often best to talk through what you're wanting and work it out from there.</h4>
    <br>
    <div class="row">
      <div class="col-sm-6">
        <img src="images/balloon1.jpg" class="picture img-rounded" width="350">
        <h4>Balloon Twisting</h4>
        <p>Always a hit at parties, balloon animals are a guaranteed way to break the ice and get kids involved! <br><a href="costumes.html#balloon">Read More</a></p>
      </div>
      <div class="col-sm-6">
        <img src="images/pexels-photo-225025.jpeg" class="picture img-rounded" height="200">
        <h4>Games and Activities</h4>
        <p>I always come prepared to be able to do a mix of age appropriate games and activities and theme them where possible.</p>
      </div>

    </div>
    <br><br>
    <div class="row">
      <div class="col-sm-6">
        <img src="images/super1.jpg" class="picture img-rounded" width="350">
        <h4>Superheroes!</h4>
        <p>I love superheroes, always have. I grew up dreaming of being Spiderman and Batman and now I get to live that dream!<br><a href="costumes.html#super">Read More</a>
        </p>
      </div>
      <div class="col-sm-6">
        <img src="images/face1.jpg" class="picture   img-rounded" width="350">
        <h4>Face Painting</h4>
        <p>I love face painting! I've created a very unique point of difference with my face painting which are character designs that go on the cheeks/forehead. <br><a href="costumes.html#face">Read More</a></p>
      </div>

    </div>
  </div>
  <!--<div class="container-fluid text-center bg-grey slideanim" id="portfolio">
    <h2>Gallery</h2>
    <a href="costumes.html"><h4>See More</h4></a>
    <div class="row">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="http://placehold.it/300x200" class="img-rounded">
          <p><strong>Batman</strong></p>
          <p>text about batman</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="http://placehold.it/300x200" class="img-rounded">
          <p><strong>Clown</strong></p>
          <p>text about clown</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="http://placehold.it/300x200" class="img-rounded">
          <p><strong>Other</strong></p>
          <p>Text about other </p>
        </div>
      </div>
    </div>
  </div>-->
  <div class="container-fluid" id="pricing">
    <div class="text-center">
      <h2>Pricing</h2>
      <h4>Prices are a flat rate and are inclusive of all party activities that we work out when booking the party (balloons, face paint, games, prizes, dress up costume, music etc)
</h4>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <h1>1 Hour</h1>
          </div>
          <div class="panel-body">
            <p>Up to 10 Kids recommended</p>
            <p>If more than 10 kids we will do more simple face paint and balloon designs</p>
          </div>
          <div class="panel-footer">
            <h3>$180</h3>
            <a href="#booking-placeholder"><button class="btn btn-lg">Book Now</button></a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <h1>1.5 Hours</h1>
          </div>
          <div class="panel-body">
            <p>Up to 15 Kids recommended</p>
            <p>If more than 15 kids we will do more simple face paint and balloon designs</p>

          </div>
          <div class="panel-footer">
            <h3>$220</h3>

            <a href="#booking-placeholder"><button class="btn btn-lg">Book Now</button></a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <h1>2 Hours</h1>
          </div>
          <div class="panel-body">
            <p>Up to 20 Kids recommended</p>
            <p>If more than 20 kids we will do more simple face paint and balloon designs</p>

          </div>
          <div class="panel-footer">
            <h3>$260</h3>

            <a href="#booking-placeholder"><button class="btn btn-lg">Book Now</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid bg-grey slideanim backgroundtwo" id="contact">
    <h2 class="text-center">BOOK NOW!</h2>
    <div class="row">
      <div class="col-sm-5">
        <p>Contact me and I'll get back to you as soon as I can.</p>
        <p><span class="glyphicon glyphicon-map-marker"></span> Auckland, New Zealand</p>
        <p><span class="glyphicon glyphicon-phone"></span> 02 SUPERFUN (0278737386)</p>
        <p><span class="glyphicon glyphicon-envelope"></span> trey@superfunparties.co.nz</p>
      </div>
      <div class="col-sm-7">
        <form name="contactform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Message" rows="5"></textarea><br>
        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-default pull-right" type="submit">Send</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="container-fluid text-center" id="booking-placeholder">
    <a href="#myPage" title="To Top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p class="foot">Superfunparties Limited&copy;<br>Website By <a href="http:daffron.co" title="Contact">Jack Daffron</a></p>
  </footer>
</body>

</html>
