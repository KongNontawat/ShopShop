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
  <link rel="stylesheet" href="../../assets/css/wishlist.css">
  <title>WishList ShopShop</title>
</head>

<body class="bg-light">
  <a id="BackToTop"><i class="fas fa-long-arrow-up text-white"></i></a>

  <?php include '../components/navbar.php'; ?>

  <section class="wishlist py-5">
    <div class="container">

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../home/">หน้าหลัก</a></li>
          <li class="breadcrumb-item active" aria-current="page">สินค้าที่ถูกใจ</li>
        </ol>
      </nav>

      <div class="row justify-content-center">
        <h1 class="fw-normal display-4 text-center text-secondary"><i class="far fa-heart me-2"></i></i>Wish List</h1>
        <div class="col-12">
          <section class="wishlist_list mt-5 bg-light">
            <div class="row">
              <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 mb-md-0">
                <div class="card p-2 pb-3 shadow-sm">
                  <a href="#!" class="position-relative">
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

              <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 mb-md-0">
                <div class="card p-2 pb-3 shadow-sm">
                  <a href="#!" class="position-relative">
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

              <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 mb-md-0">
                <div class="card p-2 pb-3 shadow-sm">
                  <a href="#!" class="position-relative">
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

              <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 mb-md-0">
                <div class="card p-2 pb-3 shadow-sm">
                  <a href="#!" class="position-relative">
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
          </section>
        </div>
      </div>
    </div>
  </section>

  <?php //include '../components/footer.php'; 
  ?>
  
  <?php include '../auth/modal_login.php';?>

  <!-- Bootstrap 5 Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  <!-- Jquery 3.6.0 -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- My Script -->
  <script src="../../assets/js/auth.js"></script>
  <script src="../../assets/js/global_function.js"></script>
  <script src="../../assets/js/wishlist.js"></script>
</body>

</html>