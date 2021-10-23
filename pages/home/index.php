<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- Sweet Alert2 -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <!-- Style -->
  <link rel="stylesheet" href="../../assets/css/main.css">
  <link rel="stylesheet" href="../../assets/css/index.css">
  <title>HOME ShopShop</title>
  <link rel="icon" href="../../assets/image/title_icon.svg" type="image/x-icon">
</head>

<body class="bg-light">
  <a id="BackToTop"><i class="fas fa-long-arrow-up text-white"></i></a>

  <?php include '../components/navbar.php'; ?>

  <!-- Banners -->
  <section class="banner">
    <div class="container-fluid">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://images.pexels.com/photos/9436715/pexels-photo-9436715.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://images.pexels.com/photos/163046/welcome-to-our-home-welcome-tablet-an-array-of-163046.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://images.pexels.com/photos/3806753/pexels-photo-3806753.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section class="service bg-white py-5">
    <div class="container">
      <div class="row g-0">
        <div class="col-6 col-md-3">
          <div class="card bg-white py-3 rounded-0">
            <div class="card-body d-flex flex-column justify-content-center align-items-center px-1">
              <i class="fal fa-truck fa-3x text-primary"></i>
              <p class="mt-3 mb-0">บริการส่งฟรี</p>
              <small class="text-muted">เมื่อซื้อขั้นต่ำ 100 บาท</small>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card bg-white py-3 rounded-0">
            <div class="card-body d-flex flex-column justify-content-center align-items-center px-1">
              <i class="fal fa-phone-volume fa-3x text-primary"></i>
              <p class="mt-3 mb-0">บริการ 24 ชั่วโมง</p>
              <small class="text-muted">พูดคุยผ่านแชทหรือโทรศัพท์</small>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card bg-white py-3 rounded-0">
            <div class="card-body d-flex flex-column justify-content-center align-items-center px-1">
              <i class="fal fa-wallet fa-3x text-primary"></i>
              <p class="mt-3 mb-0">ชำระเงินทางออนไลน์</p>
              <small class="text-muted">บริการชำระเงินแบบปลอดภัย</small>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card bg-white py-3 rounded-0">
            <div class="card-body d-flex flex-column justify-content-center align-items-center px-1">
              <i class="fal fa-sync fa-3x text-primary"></i>
              <p class="mt-3 mb-0">ใช้ง่าย บริการดี</p>
              <small class="text-muted">ช็อปปิ้งฟรี ไม่ยุ่งยาก</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Promotion Product -->
  <section class="promotion_product py-4 py-md-5 bg-light">
    <div class="container">
      <div class="header text-center py-0 py-md-4">
        <h2 class="mb-3">สินค้าโปรโมชั่น</h2>
        <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit, ducimus! Vitae adipisci
          quas dignissimos eveniet natus suscipit doloribus fugit quod.</p>
      </div>
      <div class="row py-3 py-md-4">

        <div class="col-sm-6 col-xl-3 mb-4 mb-md-0">
          <div class="card p-2 pb-3 shadow-sm">
            <a href="#!" class="position-relative">
              <span class="badge bg-primary position-absolute py-2">Promotion</span>
              <img src="https://images.pexels.com/photos/6603483/pexels-photo-6603483.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="card-img-top">
            </a>
            <div class="card-body">
              <small class="text-muted">Watches</small>
              <h5 class="card-title mt-1">Xiaomi Mi Band 5</h5>
              <p class="card-text mt-2 mb-4"><span class="text-muted text-decoration-line-through me-1">6,000</span> 5,000 บาท</p>
              <div class="footer d-flex justify-content-between">
                <a href="#" class="btn btn-outline-dark col-8">ดูเพิ่มเติม</a>
                <a href="#" class="btn btn-outline-dark col-3"><i class="fas fa-cart-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-md-0">
          <div class="card p-2 pb-3 shadow-sm">
            <a href="#!" class="position-relative">
              <span class="badge bg-primary position-absolute py-2">Promotion</span>
              <img src="https://images.pexels.com/photos/5185142/pexels-photo-5185142.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="card-img-top">
            </a>
            <div class="card-body">
              <small class="text-muted">Watches</small>
              <h5 class="card-title mt-1">Xiaomi Mi Band 5</h5>
              <p class="card-text mt-2 mb-4">5,000 บาท</p>
              <div class="footer d-flex justify-content-between">
                <a href="#" class="btn btn-outline-dark col-8">ดูเพิ่มเติม</a>
                <a href="#" class="btn btn-outline-dark col-3"><i class="fas fa-cart-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-md-0">
          <div class="card p-2 pb-3 shadow-sm">
            <a href="#!" class="position-relative">
              <span class="badge bg-primary position-absolute py-2">Promotion</span>
              <img src="https://images.pexels.com/photos/5083403/pexels-photo-5083403.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="card-img-top">
            </a>
            <div class="card-body">
              <small class="text-muted">Watches</small>
              <h5 class="card-title mt-1">Xiaomi Mi Band 5</h5>
              <p class="card-text mt-2 mb-4">5,000 บาท</p>
              <div class="footer d-flex justify-content-between">
                <a href="#" class="btn btn-outline-dark col-8">ดูเพิ่มเติม</a>
                <a href="#" class="btn btn-outline-dark col-3"><i class="fas fa-cart-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-md-0">
          <div class="card p-2 pb-3 shadow-sm">
            <a href="#!" class="position-relative">
              <span class="badge bg-primary position-absolute py-2">Promotion</span>
              <img src="https://images.pexels.com/photos/3315303/pexels-photo-3315303.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="card-img-top">
            </a>
            <div class="card-body">
              <small class="text-muted">Watches</small>
              <h5 class="card-title mt-1">Xiaomi Mi Band 5</h5>
              <p class="card-text mt-2 mb-4">5,000 บาท</p>
              <div class="footer d-flex justify-content-between">
                <a href="#" class="btn btn-outline-dark col-8">ดูเพิ่มเติม</a>
                <a href="#" class="btn btn-outline-dark col-3"><i class="fas fa-cart-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- best Product -->
  <section class="best_product py-4 py-md-5 bg-white">
    <div class="container">
      <div class="header text-center py-0 py-md-4">
        <h2 class="mb-3">สินค้ามาแรง / ยอดนิยม</h2>
        <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit, ducimus! Vitae adipisci
          quas dignissimos eveniet natus suscipit doloribus fugit quod.</p>
      </div>
      <div class="row py-3 py-md-4">

        <div class="col-sm-6 col-xl-3 mb-4 mb-md-0">
          <div class="card p-2 pb-3 shadow-sm">
            <a href="#!" class="position-relative">
              <span class="badge bg-dark position-absolute py-2">Best</span>
              <img src="https://images.pexels.com/photos/1181662/pexels-photo-1181662.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="card-img-top">
            </a>
            <div class="card-body">
              <small class="text-muted">Watches</small>
              <h5 class="card-title mt-1">Xiaomi Mi Band 5</h5>
              <p class="card-text mt-2 mb-4"><span class="text-muted text-decoration-line-through me-1">6,000</span> 5,000 บาท</p>
              <div class="footer d-flex justify-content-between">
                <a href="#" class="btn btn-outline-dark col-8">ดูเพิ่มเติม</a>
                <a href="#" class="btn btn-outline-dark col-3"><i class="fas fa-cart-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-md-0">
          <div class="card p-2 pb-3 shadow-sm">
            <a href="#!" class="position-relative">
              <span class="badge bg-dark position-absolute py-2">Best</span>
              <img src="https://images.pexels.com/photos/572056/pexels-photo-572056.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="card-img-top">
            </a>
            <div class="card-body">
              <small class="text-muted">Watches</small>
              <h5 class="card-title mt-1">Xiaomi Mi Band 5</h5>
              <p class="card-text mt-2 mb-4">5,000 บาท</p>
              <div class="footer d-flex justify-content-between">
                <a href="#" class="btn btn-outline-dark col-8">ดูเพิ่มเติม</a>
                <a href="#" class="btn btn-outline-dark col-3"><i class="fas fa-cart-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-md-0">
          <div class="card p-2 pb-3 shadow-sm">
            <a href="#!" class="position-relative">
              <span class="badge bg-dark position-absolute py-2">Best</span>
              <img src="https://images.pexels.com/photos/4929834/pexels-photo-4929834.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="card-img-top">
            </a>
            <div class="card-body">
              <small class="text-muted">Watches</small>
              <h5 class="card-title mt-1">Xiaomi Mi Band 5</h5>
              <p class="card-text mt-2 mb-4">5,000 บาท</p>
              <div class="footer d-flex justify-content-between">
                <a href="#" class="btn btn-outline-dark col-8">ดูเพิ่มเติม</a>
                <a href="#" class="btn btn-outline-dark col-3"><i class="fas fa-cart-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-md-0">
          <div class="card p-2 pb-3 shadow-sm">
            <a href="#!" class="position-relative">
              <span class="badge bg-dark position-absolute py-2">Best</span>
              <img src="https://images.pexels.com/photos/461082/pexels-photo-461082.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="card-img-top">
            </a>
            <div class="card-body">
              <small class="text-muted">Watches</small>
              <h5 class="card-title mt-1">Xiaomi Mi Band 5</h5>
              <p class="card-text mt-2 mb-4">5,000 บาท</p>
              <div class="footer d-flex justify-content-between">
                <a href="#" class="btn btn-outline-dark col-8">ดูเพิ่มเติม</a>
                <a href="#" class="btn btn-outline-dark col-3"><i class="fas fa-cart-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- New Product -->
  <section class="new_product py-4 py-md-5 bg-light">
    <div class="container">
      <div class="header text-center py-0 py-md-4">
        <h2 class="mb-3">สินค้ามาใหม่</h2>
        <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit, ducimus! Vitae adipisci
          quas dignissimos eveniet natus suscipit doloribus fugit quod.</p>
      </div>
      <div class="row py-3 py-md-4">

        <div class="col-sm-6 col-xl-3 mb-4 mb-md-0">
          <div class="card p-2 pb-3 shadow-sm">
            <a href="#!" class="position-relative">
              <span class="badge bg-danger position-absolute py-2">New</span>
              <img src="https://images.pexels.com/photos/303383/pexels-photo-303383.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="card-img-top">
            </a>
            <div class="card-body">
              <small class="text-muted">Watches</small>
              <h5 class="card-title mt-1">Xiaomi Mi Band 5</h5>
              <p class="card-text mt-2 mb-4"><span class="text-muted text-decoration-line-through me-1">6,000</span> 5,000 บาท</p>
              <div class="footer d-flex justify-content-between">
                <a href="#" class="btn btn-outline-dark col-8">ดูเพิ่มเติม</a>
                <a href="#" class="btn btn-outline-dark col-3"><i class="fas fa-cart-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-md-0">
          <div class="card p-2 pb-3 shadow-sm">
            <a href="#!" class="position-relative">
              <span class="badge bg-danger position-absolute py-2">New</span>
              <img src="https://images.pexels.com/photos/3521937/pexels-photo-3521937.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="card-img-top">
            </a>
            <div class="card-body">
              <small class="text-muted">Watches</small>
              <h5 class="card-title mt-1">Xiaomi Mi Band 5</h5>
              <p class="card-text mt-2 mb-4">5,000 บาท</p>
              <div class="footer d-flex justify-content-between">
                <a href="#" class="btn btn-outline-dark col-8">ดูเพิ่มเติม</a>
                <a href="#" class="btn btn-outline-dark col-3"><i class="fas fa-cart-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-md-0">
          <div class="card p-2 pb-3 shadow-sm">
            <a href="#!" class="position-relative">
              <span class="badge bg-danger position-absolute py-2">New</span>
              <img src="https://images.pexels.com/photos/1841142/pexels-photo-1841142.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="card-img-top">
            </a>
            <div class="card-body">
              <small class="text-muted">Watches</small>
              <h5 class="card-title mt-1">Xiaomi Mi Band 5</h5>
              <p class="card-text mt-2 mb-4">5,000 บาท</p>
              <div class="footer d-flex justify-content-between">
                <a href="#" class="btn btn-outline-dark col-8">ดูเพิ่มเติม</a>
                <a href="#" class="btn btn-outline-dark col-3"><i class="fas fa-cart-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-md-0">
          <div class="card p-2 pb-3 shadow-sm">
            <a href="#!" class="position-relative">
              <span class="badge bg-danger position-absolute py-2">New</span>
              <img src="https://images.pexels.com/photos/669228/pexels-photo-669228.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="card-img-top">
            </a>
            <div class="card-body">
              <small class="text-muted">Watches</small>
              <h5 class="card-title mt-1">Xiaomi Mi Band 5</h5>
              <p class="card-text mt-2 mb-4">5,000 บาท</p>
              <div class="footer d-flex justify-content-between">
                <a href="#" class="btn btn-outline-dark col-8">ดูเพิ่มเติม</a>
                <a href="#" class="btn btn-outline-dark col-3"><i class="fas fa-cart-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <?php include '../auth/modal_login.php'; ?>
  <?php include '../components/footer.php'; ?>

  <!-- Bootstrap 5 Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  <!-- Jquery 3.6.0 -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- My Script -->
  
  <script src="../../assets/js/global_function.js"></script>
  <script src="../../assets/js/auth.js"></script>
  <script src="../../assets/js/index.js"></script>
</body>

</html>