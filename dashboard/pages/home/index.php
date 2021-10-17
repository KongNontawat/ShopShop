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
  <title>Dashboard ShopShop</title>
</head>

<body class="bg-light">
  <!-- Loading -->
  <?php include '../components/loading.php'; ?>
  <!-- Navbar -->
  <?php include '../components/navbar.php'; ?>

  <!-- Sidebar OffCanvas -->
  <?php include '../components/sidebar.php'; ?>

  <!-- Main -->
  <main class="mt-5 pt-3">
    <div class="container-fluid px-2 px-sm-3 px-lg-4">

      <section class="content-header py-3">
        <div class="row mx-0 mb-2 justify-content-between">
          <div class="col-sm-6 px-lg-0">
            <h1 class="m-0 fw-normal">หน้าแรก</h1>
          </div><!-- /.col -->
          <div class="col-sm-6 px-lg-0">
            <ol class="breadcrumb float-sm-end mt-2">
              <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </section>

      <section class="content">
        <div class="row m-0">
          <div class="col-sm-6 col-md-3 px-lg-1">
            <!-- small box -->
            <div class="card text-white bg-primary mb-3 mx-auto">
              <div class="card-body d-flex justify-content-between">
                <div class="text ">
                  <h4 class="card-title">1,500</h4>
                  <p class="card-text">Order</p>
                </div>
                <div class="card-icon">
                  <i class="fas fa-cart-arrow-down display-4"></i>
                </div>
              </div>
              <div class="card-footer text-center">
                <a href="#!" class="text-white fw-light">
                  <span>ดูทั้งหมด</span>
                  <span><i class="fas fa-chevron-right"></i></span>
                </a>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-sm-6 col-md-3 px-lg-1">
            <!-- small box -->
            <div class="card text-white bg-success mb-3 mx-auto">
              <div class="card-body d-flex justify-content-between">
                <div class="text ">
                  <h4 class="card-title">1,500</h4>
                  <p class="card-text">Order</p>
                </div>
                <div class="card-icon">
                  <i class="fas fa-cart-arrow-down display-4"></i>
                </div>
              </div>
              <div class="card-footer text-center">
                <a href="#!" class="text-white fw-light">
                  <span>ดูทั้งหมด</span>
                  <span><i class="fas fa-chevron-right"></i></span>
                </a>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-sm-6 col-md-3 px-lg-1">
            <!-- small box -->
            <div class="card text-white bg-warning mb-3 mx-auto">
              <div class="card-body d-flex justify-content-between">
                <div class="text ">
                  <h4 class="card-title">1,500</h4>
                  <p class="card-text">Order</p>
                </div>
                <div class="card-icon">
                  <i class="fas fa-cart-arrow-down display-4"></i>
                </div>
              </div>
              <div class="card-footer text-center">
                <a href="#!" class="text-white fw-light">
                  <span>ดูทั้งหมด</span>
                  <span><i class="fas fa-chevron-right"></i></span>
                </a>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-sm-6 col-md-3 px-lg-1">
            <!-- small box -->
            <div class="card text-white bg-danger mb-3 mx-auto">
              <div class="card-body d-flex justify-content-between">
                <div class="text ">
                  <h4 class="card-title">1,500</h4>
                  <p class="card-text">Order</p>
                </div>
                <div class="card-icon">
                  <i class="fas fa-cart-arrow-down display-4"></i>
                </div>
              </div>
              <div class="card-footer text-center">
                <a href="#!" class="text-white fw-light">
                  <span>ดูทั้งหมด</span>
                  <span><i class="fas fa-chevron-right"></i></span>
                </a>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
    </section>
    </section>

  </main>



  <!-- Bootstrap 5 Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  <!-- Jquery 3.6.0 -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- My Script -->
  <script src="../../assets/js/global_function.js"></script>
  <script src="../../assets/js/index.js"></script>
  <script>
    $(function() {
      $('#home').addClass('active');
    })
  </script>
</body>

</html>