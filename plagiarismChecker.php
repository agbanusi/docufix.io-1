<?php
          session_start();
          if (!isset($_SESSION['loggedin'])) {
              header('Location: login.php');
              exit();
         }
   ?>

<!DOCTYPE html>
 <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Plagiarism Checker</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/plagiarism-checker.css">
        <link rel="stylesheet" type="text/css" href="css/header&footer.css">
        <link rel="icon" type="image/png" href="https://res.cloudinary.com/thecavemann/image/upload/v1571839870/logo_g4kuoa.png"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <!--Header-->
       <header>
          <nav class="navbar navbar-expand-lg navbar-light scrolling-navbar fixed-top">
            <a class="navbar-brand px-sm-5 ml-3" href="index.html"><img src="https://res.cloudinary.com/kuic/image/upload/v1572638901/docufix/Docufix_Logo_lnsgsr.svg" alt="DOCUFIX" id="image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto px-5">
                <li class="nav-item">
                  <a class="nav-link text-center" href="about_us.html">About</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tools
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-justify" href="fileUpload.html">Compare files</a>
                    <a class="dropdown-item text-justify" href="grammarChecker.php">Grammar Check</a>
                    <a class="dropdown-item text-justify" href="fileDuplicate.php">Duplicates Check</a>
                    <a class="dropdown-item text-justify" href="plagiarismChecker.php">Plagiarism Check</a>
                    <a class="dropdown-item text-justify" href="paraphrase.php">Paraphrasing tool</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Support
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-justify" href="faq.html">FAQ</a>
                    <a class="dropdown-item text-justify" href="contact.html">Contact Us</a>
                    <a class="dropdown-item text-justify" href="why-use-docufix.html">Why use Docufix</a>
                    <a class="dropdown-item text-justify" href="privacy.html">Privacy Policy</a>
                    <a class="dropdown-item text-justify" href="termsOfService.html">Terms of Service</a>
                  </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="teampage.html">Our Team</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-center" href="logout.php">Log Out</a>
                </li>
                
              </ul>
            </div>
          </nav>
    </header>
        <!--Main-->
        <div class="container-fluid content ">
          <div class="row ml-3 justify-content-between fc ">

              <div class="col-xs-6 col-md-6 col-sm-6 col-lg-8">

                <div class="row compare col-lg-12 ">
                  <div class="col-xs-12 mt-1 col-sm-12 col-lg-3">
                    <img src="ci.PNG" class="rounded-circle" width="160px" height="160px">
                  </div>
                    <div class="col-xs-12 mt-5 col-sm-12 col-md-12 col-lg-8 ">
                      <h3>Check For Plagiarism</h3>
                      <p>Docufix is one of the most innovative Technology of our age. Built solidly with the latest technical tools for file and data management.</p>
                    </div>
                  </div>
                </div>

              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 other mr-5 pt-5 px-4 align-items-end">
                  <h5>Other Tools:</h5>
                  <div class="row justify-content-around button mt-4">
                     <a href="grammarChecker.html" class="btn col-5 " role="button">Grammar check</a>
                    <a href="fileDuplicate.html" class="btn col-6 " role="button">Duplicates check</a>
                  </div>
              </div>
          </div>
        
          <div class="container pt-5 mt-3 folder mb-5">
            <div class="row no-gutters justify-content-center mx-n3">
                <div class="col-lg-12 col-sm-12 col-xs-12 text-start comp-txt">
                    <h6>Please enter your text below and Check! </h6>
                </div> 
                
                <form method="post" class="form-group col-11 mt-3" name="text">
                    <textarea type="text" name="text" class="form-control rounded-0" id="FormControlTextarea" rows="15" placeholder="Type or paste here.." maxlength="1000" ></textarea>
                    <div class="col-lg-2 col-xs-12 col-sm-12 btn-3 text-center mt-5 mb-5 justify-content-center">
                     <input type="submit" class="btn btn-primary" value="Check!">
                    </div>
                </form>
                <div class="row container mx-3 justify-content-between mt-4">
                    <div class="col-lg-5 col-xs-12 col-sm-12 upload">
                      <h6>Or Upload File (.tex, .txt, .doc, .docx, .odt, .pdf, .rtf):</h6>
                      <form method="post" class="custom-file" enctype="multipart/form-data" name="file">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="en" name="file">
                        <label class="custom-file-label" for="customFileLang"></label>
                        <div class="col-lg-2 col-xs-12 col-sm-12 btn-3 text-center mt-5 mb-5 justify-content-center">
                         <input type="submit" class="btn btn-primary" value="Check!">
                        </div>
                      </form>
                    </div>
                    <div class="col-lg-5 col-xs-12 col-sm-12 url">
                      <h6 class="url-txt">Check Plagiarism via Webpage URL</h6>
                      <form method="post" name="url">
                        <div class="input-group mb-3">
                          <input type="text" name="url" class="form-control rounded-0" id="FormControlTextarea" rows="1" placeholder="url" maxlength="100" ></textarea>
                          <div class="col-lg-2 col-xs-12 col-sm-12 btn-3 text-center mt-5 mb-5 justify-content-center">
                           <input type="submit" class="btn btn-primary" value="Check!">
                          </div>
                        </div>
                      </form>
                    </div>
                </div>

            </div>
                {%if text %}
                <p>The text extracted is> <b> {{text}} </b></p>
                {% else %}
                No text
                {% endif %}
    
                <script src="js/app.js" type=""></script>
            
          </div>
        </div> 
          
        <!--Footer-->
       <footer id="footer">
              <div class="container mt-3 mb-3">
                <div class="row">
                  <div class="col-sm-12 text-center">
                      <ul class="list-inline text-center">
                          <li class="list-inline-item">
                            <a class="text-center" href="#">&copy; 2019 Copyright Docufix</a>
                          </li>
                          <li class="list-inline-item">
                            <a class="text-center" href="faq.html">FAQ</a>
                          </li>
                          <li class="list-inline-item">
                            <a class="text-center" href="contact.html">Contact us</a>
                          </li>
                          <li class="list-inline-item">
                              <a class="text-center" href="privacy.html">Privacy Policy</a>
                          </li>
                          <li class="list-inline-item">
                            <a class="text-center" href="termsOfService.html">Terms of Service</a>
                          </li>
                        </ul>
                  </div>
                </div>
              </div>
              <p class="text-center">This app was built by <a href="https://hng.tech/" target="_blank">HNGi6</a> interns</p>
      </footer>
       
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
          var SCROLLING_NAVBAR_OFFSET_TOP = 50;
$(window).on("scroll", function() {
  var $navbar = $(".navbar");

  if ($navbar.length) {
    if ($navbar.offset().top > SCROLLING_NAVBAR_OFFSET_TOP) {
      $(".scrolling-navbar").addClass("top-nav-collapse");
    } else {
      $(".scrolling-navbar").removeClass("top-nav-collapse");
    }
  }
});
        </script>
      </body>
</html>
