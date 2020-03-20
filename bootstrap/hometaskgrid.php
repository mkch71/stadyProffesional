<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>HomeTaskGridBootstrap</title>
    <style>
    /* Для наглядности сетки bootstrap */
      [class^="col"] {
        min-height: 100px;
        border: 1px solid black;
        box-sizing: border-box;
        }  
        .addtask {
          min-height:50px;
        }
        
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row flex-column flex-sm-row">
        <div class="col col-sm-12 col-md-4 col-lg-12">1</div>
        <div class="col col-md-5 col-lg-7 d-none d-md-block order-lg-2">2
          <div class="row d-none d-lg-flex align-bottom">
            <div class="col-2 addtask">2.1</div>
            <div class="col-6 addtask">2.2</div>
            <div class="col-4 addtask">2.3</div>
            <div class="col-2 addtask">2.4</div>
            <div class="col-10 addtask">2.5</div>
          </div>
        </div>
        <div class="col col-md-3 col-lg-5 d-sm-none d-md-flex order-lg-0">3</div>
        <div class="col col-sm-4 col-md-5 col-lg-4 d-none d-sm-flex order-lg-6 ">4</div>
        <div class="col col-sm-8 col-md-5 col-lg-2 offset-md-2 offset-lg-0 order-lg-2">5</div>
        <div class="col col-sm-8 col-md-7 col-lg-2 order-sm-0 order-lg-4">6</div>
        <div class="col col-md-2 col-lg-1 d-none d-md-flex offset-md-1 offset-lg-0 order-lg-8">7</div>
        <div class="col col-sm-2 col-md-1 col-lg-3 order-sm-last offset-sm-2 offset-md-1 offset-lg-0">8</div>
      </div>  
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>