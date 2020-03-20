<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="scc/style.scc"> -->
  <title>Bootstrap</title>
  <style>
  /*   #carouselExampleIndicators {
    max-width: 300px;
  } */
   .carousel-item img {
     max-height: 300px;
   /*  object-fit: cover;
   object-position: 0 0; */
   }
  </style>
</head>
<body>
  <header>
   <!--  навигационная панель   -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>   
  </header>
  <main>
    <h2 class="text-center mt-5">Обо мне</h2>
    <hr class="mb-0">
    <p class="bg-info text-white p-3 text-justify border border-dark"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, modi, repellat, officia, asperiores totam aut est vitae quos facilis aspernatur iure dolor at labore error nemo ipsa esse. Animi, velit?</span>
    <span>Magnam, voluptate, hic, eum nam aperiam ex aspernatur maxime labore natus obcaecati quos itaque dignissimos cupiditate. Quo, esse, sapiente voluptatibus officia voluptas minima deleniti perferendis nam incidunt beatae rem ipsum.</span>
    <span>Ratione, sit nulla praesentium beatae reprehenderit natus architecto! Unde, ratione, vitae, beatae sunt dignissimos eius earum repellendus illo asperiores ipsa cum maxime explicabo dolor quae nam eligendi magni illum placeat.</span>
    <span>Numquam, facere, dicta, in expedita assumenda magni aut molestiae repellendus nihil corporis beatae eius enim sunt. Nobis, fuga voluptates aspernatur vero ratione beatae esse voluptatum cum porro! Culpa, temporibus, ducimus.</span>
    <span>Voluptas, laborum, veritatis soluta aperiam aliquam tempore debitis quibusdam consectetur corrupti mollitia. Doloremque, labore, at eveniet dolore explicabo distinctio cupiditate voluptas modi ipsum consequatur maiores impedit expedita quibusdam est voluptatum.</span>
    </p>
    <h2 class="text-center mt-5">Портфолио</h2>
    <!-- Карусель -->
    <div id="carouselExampleIndicators" class="carousel slide my-4 w-50 mx-auto" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://img3.goodfon.ru/original/1024x768/e/56/tigrica-tigrenok-hischnik.jpg" class="d-block w-100" alt="Pic1">
        </div>
        <div class="carousel-item">
          <img src="https://avatars.mds.yandex.net/get-pdb/1639477/4c54e1cb-43da-4fbe-bf41-edaa5fbb6071/s1200?webp=false" class="d-block w-100" alt="Pic2">
        </div>
        <div class="carousel-item">
          <img src="https://avatars.mds.yandex.net/get-pdb/1985244/040d1e95-91b4-4946-bc52-943339e98759/s1200" class="d-block w-100" alt="Pic3">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Предыдущий</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Следующий</span>
      </a>
    </div>
  </main>
  <footer>
  
  </footer>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>