<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Discovering Bootstrap 5.1</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css" />
</head>
<!----------------------------------------------------------------------------------------->

<body>
  <!----------------------------------------------------------------------------------------->
  <!-- NavBar -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2354a1 ;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Discovering Bootstrap 5.1</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorie</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Photos</a></li>
              <li><a class="dropdown-item" href="#">Articles</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Projects</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!----------------------------------------------------------------------------------------->
  <header>
    <h1>Journey Into Bootstrap Classes</h1>
  </header>
  <!----------------------------------------------------------------------------------------->

  <div class="container mt-4 mb-4">
    <!-- Card 1  -->
    <div class="row g-3 ">
      <div class="col-12 col-md-6 col-lg-3 ">
        <div class="card h-100 ">
          <img src="Assets/img/pexels-asad-photo-maldives-1591373.jpg" class="card-img-top" alt="Test">
          <div class="card-body d-flex flex-column ">
            <h5 class="card-title">Visit Components Lake</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="align-self-start btn btn-outline-light mt-auto" style="background-color: #2354a1 ;">Read more</a>
          </div>
        </div>
      </div>
      <!-- Card 2  -->
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card h-100">
          <img src="Assets/img/pexels-freestocksorg-839462.jpg" class="card-img-top" alt="Test">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Facing Cascade style Sheet</h5>
            <p class="card-text">Some quick example text</p>
            <a href="#" class="align-self-start btn btn-outline-light mt-auto" style="background-color: #2354a1 ;">Read more</a>
          </div>
        </div>
      </div>
      <!-- Card 3  -->
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card h-100">
          <img src="Assets/img/pexels-jaime-reimer-2662116.jpg" class="card-img-top" alt="Test">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Comptemplate form inputs river</h5>
            <p class="card-text">Make up the bulk of the card's content </p>
            <a href="#" class="align-self-start btn btn-outline-light mt-auto" style="background-color: #2354a1 ;">Read more</a>
          </div>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card h-100">
          <img src="Assets/img/pexels-martin-damboldt-814499.jpg" class="card-img-top" alt="Test">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Enjoy responsive Layout land</h5>
            <p class="card-text">Build on the card title and make up the bulk of the card's content </p>
            <a href="#" class="align-self-start btn btn-outline-light mt-auto" style="background-color: #2354a1 ;">Read more</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!----------------------------------------------------------------------------------------->
  <!-- Texte  -->
  <div class="text">
    <div class="container mt-4">
      <p class="fs-2 fw-bolder text-center">The css frameworks are very useful</p>
      <a href="#" class="text-center">Learning with them comes with practice</a>
    </div>
  </div>
  <!----------------------------------------------------------------------------------------->

  <div class="container-fluid blue" style="background-color: #2354a1 ;"">
    <div class="container">
      <p class="text-center">2022 wilders | images <a href="#" class="text-center">@picsum</a></p>
    </div>
  </div>


  <!----------------------------------------------------------------------------------------->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>