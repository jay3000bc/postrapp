<?php
        $result="";
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(!$_POST['name']){
             $error='<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter your name</div>';
        }
        if(!$_POST['email']){
            $error.='<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter your email</div>';
        }
        if(!$_POST['message']){
            $error.='<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>Please write something</div>';
        }
        if(isset($error)){
            $result=$error;
        }
        else{
          $headers = "MIME-Version: 1.0" . "\r\n";
          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
          $headers .= 'From: <gforgenius3@gmail.com>' . "\r\n";
          // $headers .= 'Cc: myboss@example.com' . "\r\n";
            if ( mail("gforgenius2@gmail.com", "Message from website",
              $_POST['message'], $headers
            )) {
                $done="Thank you! We will contact you shortly.";
                $result='<div class="alert alert-success alert-dismissible">'.$done.'</div>';
            }
        }

    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PostrApp</title>
    <!-- <link rel="icon" href="./images/favicon.ico" type="image/x-icon"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/573ea8427a.js"></script>
  </head>
  <body>
        <!-- <div class="first-section" id="first-section">
          <div class="image">
            <img src="images/logo.png" alt="">
          </div>
          <div class="text-section">
            <p><span>Verlangen deine Kunden</span> </p>
            <p><span>eine Dokumentation wo du</span></p>
            <p><span>ihre Plakate aufgehangt hast</span></p>
          </div>
          <div class="btn-section">
          <a href="" class="btn">Probieren Sie es jetz</a>

        </div>

        </div> -->
        <div class="container-fluid h-100 for-tab">

          <div class="second-section row" id="second-section">
            <div class="col-md-4 col-sm-4 img-part">
              <div class="image-logo">
                <img src="images/logo.png" alt="">
              </div>
              <div class="diagram-img my-auto">
                <img src="images/diagram.png" alt="" class="img-responsive" width="100%">
              </div>
            </div>
            <div class="text-section-second col-md-4 col-sm-4 text-center">
              <div class="text-section-second-part">
                <p> Mit deinem Smartphone <br> deine Projekte, Protokolle <br> and Kundendateien verwalten </p>
                <h1> Easy! </h1>
              </div>

              <div class="btn-section">
              <a href="http://www.alegralabs.com:8995/" class="btn"><img src="images/demo-anim.gif" alt="" width="60%">  </a>


            </div>
            </div>
            <div class="image-section col-md-4 col-sm-4 ">
              <img src="images/pasting.jpg" alt="" id="img">
            </div>
          </div>
        </div>
          <h2 style="color:#555555; margin-left:40px" class="simple-h2" >- so funktioniert's</h2>

<div class="container-fluid h-100 third-for-mobile">
  <div class="third-section row " >
    <div class="col-md-4 col-sm-4 col-4">
      <div class="col-md-12">
        <div class="img-section">
          <h2><span class="badge badge-pill badge-danger">1</span></h2>
          <img src="images/admin-handy.png" alt="">

        </div>
        <div class="caption-section">
          <p>Mach ein Foto von jedem Projekt.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-4 col-4">
      <div class="col-md-12">
        <div class="img-section">
          <h2><span class="badge badge-pill badge-danger">2</span></h2>
          <img src="images/worker-handy.png" alt="">
        </div>
        <div class="caption-section">
          <p>Dene protokollieren mit Fotos.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-4 col-4">
      <div class="col-md-12">
        <div class="img-section">
          <h2><span class="badge badge-pill badge-danger">3</span></h2>
          <img src="images/folders.png" alt="">

        </div>
        <div class="caption-section">
          <p> Die Postrapp sortiert dir alle Fotos in Kundenordner und auf Wunsch in weitere Ordner. </p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="before-fourth-section">
    <p>Geld von Vater Staat?</p>
    <div class="loan-btn">
      <a href="#" class="btn">Ja, ich möchte mehr über die Förderung digitaler Massnahmen erfahren</a>
    </div>
  </div>
</div>
  <div class="container">
    <div class="fourth-section">
    <div class="header text-center row">
      <div class="col-md-8 offset-md-2">
        <h1>Get In Touch</h1>
        <p> Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo. </p>
      </div>
    </div>
    <div class="info row">
      <div class="col-md-4">
        <div class="col-md-12 my-auto">
          <p><i class="fa fa-map-marker" aria-hidden="true"></i></p>
          <p>Address</p>
          <p>Vordersteig 12</p>
          <p>76275 Ettlingen, Germany</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="col-md-12 my-auto">
          <p><i class="fa fa-phone" aria-hidden="true"></i></p>
          <p>Phone</p>
          <p>07243-7297157</p>
          <p>01734-526589</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="col-md-12 my-auto">
          <p><i class="fa fa-envelope" aria-hidden="true"></i></p>
          <p>Email</p>
          <p>hallo@postrapp.de</p>
          <p> &nbsp;</p>
          <!-- <p>hallo@postrapp.de</p> -->
        </div>
      </div>

    </div>

    <div class="contact-form row">
      <div class="col-md-6">
        <div class="col-md-12">
  <form method="post">
    <?php echo $result; ?>
    <div class="form-group">
      <input type="name" class="form-control" id="name" placeholder="Name" name="name">
    </div>
    <div class="form-group">
      <input type="email" class="form-control" id="email" placeholder="Email" name="email">
    </div>
    <div class="form-group">
      <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
    </div>

    <button type="submit" name="submit">Send Message</button>
  </form>
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-12 map">
          <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14324.069913691603!2d91.66948323113024!3d26.163560235293414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a44cd7e60901f%3A0x5773e4240c89c4ad!2sAdabari%2C%20Guwahati%2C%20Assam%20781012!5e0!3m2!1sen!2sin!4v1580210974949!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen=""></iframe> -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5241.049414531662!2d8.415636!3d48.943494!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479705876567e36b%3A0x90deaf82ac9cecd5!2sVordersteig%2012%2C%2076275%20Ettlingen%2C%20Germany!5e0!3m2!1sen!2sua!4v1580302880672!5m2!1sen!2sua" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- <div class="container-fluid"> -->
  <!-- <div class="footer text-center h-25" > -->
    <!-- <div class="img h-25">
      <img src="images/logo.png" alt="">

    </div> -->
        <!-- <p style="height:20vh">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci- didunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exe- rcitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <ul style="height:20vh">
          <li><a href="#">  <i class="fab fa-facebook-square" aria-hidden="true"></i></a> </li>
          <li> <a href="#"> <i class="fab fa-twitter-square"></i> </a> </li>
          <li> <a href="#"> <i class="fab fa-pinterest-square"></i> </a> </li>
          <li> <a href="#"> <i class="fab fa-linkedin-in"></i> </a> </li>
        </ul> -->
        <div class="copyright text-center container-fluid" >
          <p>Copyright © 2020. All rights reserved.</p>
        </div>
  <!-- </div> -->
<!-- </div> -->



  </body>
  <script type="text/javascript" src="./script.js"></script>
</html>
