<?php
include "connect.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Bilan information</title>
</head>

<body>
    <?php include("header.php");?>
    <div id="parent">
        <div class="image d-lg-block d-none">
            <img src="./img/saladfruits.png" alt="" class="img-responsive" width="100%">
        </div>
        <div class="bilanbox shadow-sm" style="width:50%">
            <div class="container" style="width: 80%; ">
                <h3 class="text-center my-5" style="color: #707070;">Vos Informations</h3>
                <form action="bilan.php" method="POST">
                    <div class="row sexe mb-3 form-check-vertical justify-content-center">
                        <div class="form-check mr-sm-5" style="padding-left: inherit;">
                            <label class="radio-inline">
                                <input type="radio" name="optradio" checked>Homme
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="radio-inline">
                                <input type="radio" name="optradio">Femme
                            </label>
                        </div>

                    </div>
                    <div class="row">
                        <div class="taille py-3 col-12 shadow-sm">
                            <label for="#range" class="form-label col-12">Taille(cm)*:</label>
                            <div class="valeur">
                                <center class="">
                                    <div id="value"></div>
                                </center>
                            </div>
                            <div class="middle">
                                <div class="slider-container">
                                    <span class="bar"><span class="fill"></span></span>
                                    <input class="col-12" type="range" id="slider" name="slider" class="form-range" max="240">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row twoboxes my-3">
                        <div class="poidsbox col-6 py-4 shadow-sm">
                            <label class="mb-4">Poids(Kg):*</label>
                            <div class="input-group input-number-group" style="width:102%">
                                <div class="input-group-button">
                                    <span class="input-number-decrement">-</span>
                                </div>
                                <input class="input-number" name="poids" type="number" value="89" min="0" max="1000">
                                <div class="input-group-button">
                                    <span class="input-number-increment">+</span>
                                </div>
                            </div>
                        </div>
                        <div class="agebox col-6 py-4 shadow-sm">
                            <label class="mb-4">Age:*</label>
                            <div class="input-group input-number-group" style="width:102%">
                                <div class="input-group-button">
                                    <span class="input-number-decrement">-</span>
                                </div>
                                <input class="input-number" type="number" name="age" value="25" min="0" max="1000">
                                <div class="input-group-button">
                                    <span class="input-number-increment">+</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row imcbtn justify-content-center mb-5 mt-2">
                        <div class="btn-group align-items-center">
                            <button type="submit" class="btn">Voir mon IMC</button>
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- icons-->
    <link rel="stylesheet" media="screen" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
a{
  color:white;
}
footer{
    color:white;
    background-color:#706F6F;
    
}

.nav-light .nav-link {
    color: white !important;
}
.nav-light .nav-link:hover {
    color: #DEDC00 !important;
}
.d-inline-flex {
  display: grid !important;
}

@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap');
*{
font-family: 'Montserrat', sans-serif;
}
</style>

    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="css/bootstrap.css">
    <!-- Footer -->
    <footer class="cs-footer pt-sm-5 pt-4">
      
      <div class="container pt-3">


    
      
        <div class="row pb-sm-2">

        <div class="col-lg-4  col-md-3 d-inline-flex col-xl-3 mb-4 justify-content-center">
        <img src="img/logoblan.png" alt="" class="img-fluid">
            <div class="d-flex flex-wrap flex-sm-nowrap">
            <p class="justify-left">Ton meilleur guide </p>
             
            </div>
          </div>

          <div class="col-6 col-sm-3  col-md-3 col-lg-2 mb-4 ">
            <h3 class="h6 mb-2 pb-1 text-uppercase text-light">Pages</h3>
            <ul class="nav nav-light flex-column">
              <li class="nav-item mb-2">
                <a href="nosplats.php" class="nav-link mr-lg-0 mr-sm-4 p-0 font-weight-normal">Plats</a>
              </li>
              <li class="nav-item mb-2">
                <a href="objectifs.php" class="nav-link mr-lg-0 mr-sm-4 p-0 font-weight-normal">Objectifs</a>
              </li>
              <li class="nav-item mb-2">
                <a href="contact.php" class="nav-link mr-lg-0 mr-sm-4 p-0 font-weight-normal">Contacter nous</a>
              </li>
              <li class="nav-item mb-2">
                <a href="bilaninfo.php" class="nav-link mr-lg-0 mr-sm-4 p-0 font-weight-normal">Bilan</a>
              </li>
             
            </ul>
          </div>
          <div class="col-6 col-sm-3  col-md-3 col-lg-2 col-xl-3 mb-4">
            <h3 class="h6 mb-2 pb-1 text-uppercase text-light pl-xl-6">Objectifs</h3>
            <ul class="nav nav-light flex-column pl-xl-6">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link mr-lg-0 mr-sm-4 p-0 font-weight-normal">Perte du poids</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link mr-lg-0 mr-sm-4 p-0 font-weight-normal">Mantien du poids</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link mr-lg-0 mr-sm-4 p-0 font-weight-normal">Gain du poids</a>
              </li>
              
            </ul>
          </div>
          <div class="col-sm-6 col-lg-3  col-md-3 pb-2 pb-lg-0 mb-4">
            <h3 class="h6 mb-2 pb-1 text-uppercase text-light">Nous suivre sur</h3>
            
            <a href="#" class="social-btn sb-solid sb-light mr-2">
            <i class="fa fa-facebook"></i>
            </a>
            <a href="#" class="social-btn sb-solid sb-light mr-2">
            <i class="fa fa-instagram"></i>
            </a>
            <a href="#" class="social-btn sb-solid sb-light mr-2">
            <i class="fa fa-twitter"></i>
            </a>
            
          </div>
         
        </div>
         </div>
      <div class="border-top border-light">
        <div class="container py-4">
          <div class="font-size-xs text-dark">
            <span class="font-size-sm">&copy; </span>
            All rights reserved.
            
            
          </div>
        </div>
      </div>
    </footer>


    <!-- Back to top button-->
    <a class="btn-scroll-top" href="#top" data-scroll data-fixed-element>
      <span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span>
      <i class="btn-scroll-top-icon cxi-angle-up"></i>
    </a>


    




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-input-spinner@1.17.2/src/bootstrap-input-spinner.js"></script>
    <script>
        $('.input-number-increment').click(function() {
            var $input = $(this).parents('.input-number-group').find('.input-number');
            var val = parseInt($input.val(), 10);
            $input.val(val + 1);
        });

        $('.input-number-decrement').click(function() {
            var $input = $(this).parents('.input-number-group').find('.input-number');
            var val = parseInt($input.val(), 10);
            $input.val(val - 1);
        })
    </script>
    <script>
        var $slider = $("#slider");
        var $fill = $(".bar .fill");

        function setBar() {
            $fill.css("width", $slider.val() + "%");
        }

        $slider.on("input", setBar);

        setBar();
    </script>
    <!-- <script>
        $("input[type='number']").inputSpinner()
    </script>-->
    <script type="text/javascript">
        var slider = document.getElementById("slider");
        var val = document.getElementById("value");
        val.innerHTML = slider.value + ' <span>cm</span>';
        slider.oninput = function() {
            val.innerHTML = `${this.value} <span>cm</span>`;
        }
    </script>
</body>

</html>