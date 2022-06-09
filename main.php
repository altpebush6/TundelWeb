<head>
  <meta charset="utf-8">
  <link rel="icon" href="images/login_logo.png" type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title></title>
  <base href="http://localhost/aybu/tundel/">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/croppie.css">
  <link rel="stylesheet" href="css/confetti.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jquery-3.5.1.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/913cc5242f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light py-0 px-2 w-100" style="background:#38444c !important;">
    <div class="container-fluid px-5">
      <a class="navbar-brand d-flex flex-row border-end px-4 my-1" href="#">
        <h2 class="text-light">Tun</h2>
        <h2 class="text-danger">del</h2>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
        <!-- SEARCH BAR -->
        <div class="w-30 ms-3 mb-2 mb-lg-0">
          <form class="d-flex w-100 my-auto">
            <span class="input-group-text bg-light" style="border:0px !important; border-top-right-radius:0px !important;border-bottom-right-radius:0px !important;" id="basic-addon1"><i class="fa-solid fa-magnifying-glass text-muted" style="font-size:14px"></i></span>
            <input type="text" class="form-control rounded-3 shadow-none w-100 bg-light px-2 py-1" style="border-radius:0px !important;border-left:0px !important;" placeholder="Search">
            <button class="bg-danger text-light btn rounded-3 shadow-none px-3 d-flex justify-content-center align-items-center fs-7" style="border:0px !important;border-top-left-radius:0px;border-bottom-left-radius:0px;font-size:13px">
              <span>Search</span>
            </button>
          </form>
        </div>
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item mx-3 fs-7">
            <a class="nav-link text-light" href="#">$ USD</a>
          </li>
          <li class="nav-item mx-3 fs-7">
            <a class="nav-link text-light" href="#">Become an Instructor</a>
          </li>
          <li class="nav-item mx-3 fs-7">
            <a class="nav-link text-light" href="#">Join us</a>
          </li>
          <li class="nav-item mx-3 fs-7">
            <a class="nav-link text-light" href="#">Sign In</a>
          </li>
          <li class="nav-item mx-3 fs-7">
            <a class="nav-link text-light" href="#"><i class="fa-solid fa-globe"></i> EN</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- SECTION 1 -->
  <div class="container px-4" style="padding-top: 150px;">
    <h4 class="text-gray"><b>Popular Lessons Categories</b></h4>
    <div class="row my-3 mx-2">
      <?php for ($i = 0; $i < 2; $i++) { ?>
        <div class="col-3 px-3 py-4">
          <div class="container cat-card d-flex flex-column w-90">
            <div class="row w-100 rounded-3 shadow rounded-3" style="height: 32vh;border-bottom-left-radius:0px !important;border-bottom-right-radius:0px !important;">
              <div class="cat-img" style="z-index:2;background-image: url('images/coffee.jpg');background-size:cover;background-position:center;"></div>
            </div>
            <div class="row w-100 rounded-3 shadow ps-2 py-1 rounded-3 bg-danger text-light" style="border-top-left-radius:0px !important;border-top-right-radius:0px !important;">
              <b>Coffee</b>
            </div>
          </div>
        </div>
        <div class="col-3 px-3 py-4">
          <div class="container d-flex flex-column w-90">
            <div class="row w-100 rounded-3 shadow" style="height: 32vh;background-image: url('images/computer.jpg');background-size:cover;background-position:center;border-bottom-left-radius:0px !important;border-bottom-right-radius:0px !important;"></div>
            <div class="row w-100 rounded-3 shadow ps-2 py-1 bg-danger text-light" style="border-top-left-radius:0px !important;border-top-right-radius:0px !important;">
              <b>Computer</b>
            </div>
          </div>
        </div>
        <div class="col-3 px-3 py-4">
          <div class="container d-flex flex-column w-90">
            <div class="row w-100 rounded-3 shadow" style="height: 32vh;background-image: url('images/music.jpg');background-size:cover;background-position:center;border-bottom-left-radius:0px !important;border-bottom-right-radius:0px !important;"></div>
            <div class="row w-100 rounded-3 shadow ps-2 py-1 bg-danger text-light" style="border-top-left-radius:0px !important;border-top-right-radius:0px !important;">
              <b>Music Studio</b>
            </div>
          </div>
        </div>
        <div class="col-3 px-3 py-4">
          <div class="container d-flex flex-column w-90">
            <div class="row w-100 rounded-3 shadow" style="height: 32vh;background-image: url('images/camera.jpg');background-size:cover;background-position:center;border-bottom-left-radius:0px !important;border-bottom-right-radius:0px !important;"></div>
            <div class="row w-100 rounded-3 shadow ps-2 py-1 bg-danger text-light" style="border-top-left-radius:0px !important;border-top-right-radius:0px !important;">
              <b>Camera</b>
            </div>
          </div>
        </div>
        <div class="col-3 px-3 py-4">
          <div class="container d-flex flex-column w-90">
            <div class="row w-100 rounded-3 shadow" style="height: 32vh;background-image: url('images/fitness.jpg');background-size:cover;background-position:center;border-bottom-left-radius:0px !important;border-bottom-right-radius:0px !important;"></div>
            <div class="row w-100 rounded-3 shadow ps-2 py-1 bg-danger text-light" style="border-top-left-radius:0px !important;border-top-right-radius:0px !important;">
              <b>Fitness</b>
            </div>
          </div>
        </div>
        <div class="col-3 px-3 py-4">
          <div class="container d-flex flex-column w-90">
            <div class="row w-100 rounded-3 shadow" style="height: 32vh;background-image: url('images/guitar.jpg');background-size:cover;background-position:center;border-bottom-left-radius:0px !important;border-bottom-right-radius:0px !important;"></div>
            <div class="row w-100 rounded-3 shadow ps-2 py-1 bg-danger text-light" style="border-top-left-radius:0px !important;border-top-right-radius:0px !important;">
              <b>Guitar</b>
            </div>
          </div>
        </div>
      <?php }

      ?>
    </div>
  </div>

</body>