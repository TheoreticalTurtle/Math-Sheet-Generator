<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Math Sheets</title>

    <!-- Bootstrap core CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style>
        :root {
          --jumbotron-padding-y: 3rem;
        }
        
        .jumbotron {
          padding-top: var(--jumbotron-padding-y);
          padding-bottom: var(--jumbotron-padding-y);
          margin-bottom: 0;
          background-color: #fff;
        }
        @media (min-width: 768px) {
          .jumbotron {
            padding-top: calc(var(--jumbotron-padding-y) * 2);
            padding-bottom: calc(var(--jumbotron-padding-y) * 2);
          }
        }
        
        .jumbotron p:last-child {
          margin-bottom: 0;
        }
        
        .jumbotron-heading {
          font-weight: 300;
        }
        
        .jumbotron .container {
          max-width: 40rem;
        }
        
        footer {
          padding-top: 3rem;
          padding-bottom: 3rem;
        }
        
        footer p {
          margin-bottom: .25rem;
        }
        
        .box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }
    </style>
  </head>

  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">Math Sheets</h4>
              <p class="text-muted">Information about this app that I will add later</p>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="index.php" class="navbar-brand d-flex align-items-center">
            <strong>Math Sheets</strong>
          </a>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Math Sheet Generator</h1>
          <p class="lead text-muted">This will generate math sheets according to some predefined presets below:</p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
              <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <img class="card-img-top" src="./images/AllNumsAllSyms.png" alt="Card image cap">
                  <h5 class="card-title">All Symbols All Numbers</h5>
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="math_sheet_all_numbers_all_symbols.php"><button type="button" class="btn btn-sm btn-outline-secondary btn-success text-white">Generate Sheet</button></a>
                      <a href="how_it_works.php#allall"><button type="button" class="btn btn-sm btn-outline-secondary btn-primary mx-2 text-white">How It Works</button></a>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <img class="card-img-top" src="./images/DoubleDigitAddition.png" alt="Card image cap">
                  <h5 class="card-title">Double Digit Addition</h5>
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="math_sheet_two_digit_addition.php"><button type="button" class="btn btn-sm btn-outline-secondary btn-success text-white">Generate Sheet</button></a>
                      <a href="how_it_works.php#twodigit"><button type="button" class="btn btn-sm btn-outline-secondary btn-primary mx-2 text-white">How It Works</button></a>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              <h3>All Numbers One Symbol</h3>
              <hr>
              <?php for($y = 0; $y < 4; $y++){ ?>
              <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <?php
                  switch($y){
                        case 0:
                            echo "<img class=\"card-img-top\" src=\"./images/AllNumsPlusSym.png\" alt=\"Card image cap\"><h5 class=\"card-title\">Addition";
                            break;
                        case 1:
                            echo "<img class=\"card-img-top\" src=\"./images/AllNumsMinusSym.png\" alt=\"Card image cap\"><h5 class=\"card-title\">Subtraction";
                            break;
                        case 2:
                            echo "<img class=\"card-img-top\" src=\"./images/AllNumsTimesSym.png\" alt=\"Card image cap\"><h5 class=\"card-title\">Multiplication";
                            break;
                        case 3:
                            echo "<img class=\"card-img-top\" src=\"./images/AllNumsDivideSym.png\" alt=\"Card image cap\"><h5 class=\"card-title\">Division";
                            break;
                  }
                  ?> with all numbers</h5>
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="math_sheet_all_numbers_one_symbol.php?symbol=<?php 
                  switch($y){
                        case 0:
                            echo "Addition";
                            break;
                        case 1:
                            echo "Subtraction";
                            break;
                        case 2:
                            echo "Multiplication";
                            break;
                        case 3:
                            echo "Division";
                            break;
                  }?>"><button type="button" class="btn btn-sm btn-outline-secondary btn-success text-white">Generate Sheet</button></a>
                  <a href="how_it_works.php#allone"><button type="button" class="btn btn-sm btn-outline-secondary btn-primary mx-2 text-white">How It Works</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php }?>
              <h3>One Number One Symbol</h3>
              <?php for($x = 0; $x < 10; $x++){?>
              <h4><?php echo $x; ?></h4>
              <hr>
              <?php
                for($y = 0; $y < 5; $y++){ ?>
            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <img class="card-img-top" src="./images/<?php echo "_".($y+1)."_".$x; ?>.png" alt="Card image cap">
                  <?php 
                  switch($y){
                        case 0:
                            echo "<h5 class=\"card-title\">Addition with ". $x ."'s";
                            break;
                        case 1:
                            echo "<h5 class=\"card-title\">Subtraction with ". $x ."'s";
                            break;
                        case 2:
                            echo "<h5 class=\"card-title\">Multiplication with ". $x ."'s";
                            break;
                        case 3:
                            echo "<h5 class=\"card-title\">Division with ". $x ."'s";
                            break;
                        case 4:
                            echo "<h5 class=\"card-title\">All Symbols with ". $x ."'s";
                            break;
                  }
                  ?></h5>
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <?php if($y == 4){
                            echo "<a href=\"math_sheet_one_number_all_symbols.php?number=".$x;
                        }else{
                            echo "<a href=\"math_sheet_one_number_one_symbol.php?number=".$x."&symbol=";
                            switch($y){
                                case 0:
                                    echo "Addition";
                                    break;
                                case 1:
                                    echo "Subtraction";
                                    break;
                                case 2:
                                    echo "Multiplication";
                                    break;
                                case 3:
                                    echo "Division";
                                    break;
                          }
                        }
                      ?>"><button type="button" class="btn btn-sm btn-outline-secondary btn-success text-white">Generate Sheet</button></a>
                      <a href="how_it_works.php<?php if($y == 4){echo '#oneall';}else{echo '#oneone';}?>"><button type="button" class="btn btn-sm btn-outline-secondary btn-primary mx-2 text-white">How It Works</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php }}?>
          </div>
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>