<?php
include("inc/conn.php");
$fname = $_POST['fname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
if($fname && $email && $pass != ""){
$sele = "SELECT * FROM signup WHERE email = '$email' and pass = '$pass'";
$ch = $conn->query($sele);
$data = $ch->fetch_assoc();
$numofrows = $ch->num_rows;
    if($numofrows == 1){ ?>
        <!doctype html>
        <html lang="en">
          <head>
              <title>Sign Up 10</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
            <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
        
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            
            <link rel="stylesheet" href="css/style.css">
        
            </head>
            
            <body>
            <section class="ftco-section">
                <div class="container">
                    <div class="row justify-content-center">
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="wrap d-md-flex">
                                <div class="text-wrap p-4 p-lg-5 d-flex img d-flex align-items-end" style="background-image: url(images/bg.jpg);">
                                    <div class="text w-100">
                                        <h2 class="mb-4">Welcome to login form</h2>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    </div>
                          </div>
                                <div class="login-wrap p-4 p-md-5">
                              <h1 class="mb-3">You Logged In Successfully</h1>
                              <a href="index.php"><button class="form-control btn btn-secondary submit p-3">GO BACK</button></a>

                          <div class="social-wrap">
                              <p class="or">
                                  <span>or</span>
                              </p>
                                  <p class="mb-3 text-center">Log In with this services</p>
                                  <p class="social-media d-flex justify-content-center">
                                      <a href="#" class="social-icon google d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a>
                                            <a href="#" class="social-icon facebook d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                            <a href="#" class="social-icon twitter d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                        </p>
                          </div>
                        </div>
                      </div>
                        </div>
                    </div>
                </div>
            </section>
        
            <script src="js/jquery.min.js"></script>
          <script src="js/popper.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/main.js"></script>
        
            </body>
        </html>
    <?php }
    else{
        echo "noooo";
    }
}
else{
    session_start();
    $_SESSION["error"] = "You Missed Something!";
    header("Location: login.php");
} ?>