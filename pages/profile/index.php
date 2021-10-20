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
  <scrip src="//cdn.jsdelivr.net/npm/sweetalert2@11">
    </script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/main.css">
    <link rel="stylesheet" href="../../assets/css/profile.css">
    <title>Profile ShopShop</title>
</head>

<body class="bg-light">
  <a id="BackToTop"><i class="fas fa-long-arrow-up text-white"></i></a>

  <?php include '../components/navbar.php'; ?>

  <section class="profile py-5">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../home/">หน้าหลัก</a></li>
          <li class="breadcrumb-item active" aria-current="page">โปรไฟล์ของฉัน</li>
        </ol>
      </nav>
      <div class="row justify-content-center">
        <h1 class="fw-normal display-5 text-center text-secondary"><i class="far fa-user-circle me-2"></i></i>โปรไฟล์ของฉัน</h1>
        <div class="col-lg-10 col-xl-9">
          <section class="profile_form card mt-4 p-3 p-md-5">

            <form action="" class="row g-3 justify-content-center">
              <div class="col-12 text-center d-flex justify-content-center">
                <div id="imgControl" class="d-none">
                  <img id="imgUpload" class="img-fluid rounded-circle mb-2 img-thumbnail shadow-sm">
                </div>
              </div>
              <div class="col-md-10 col-lg-8">
                <label for="exampleInputFile" class="form-label">Upload Image :</label>
                <div class="input-group mb-2">
                  <input type="file" name="image" class="form-control" id="exampleInputFile" onchange="readURL(this)">
                  <label class="input-group-text d-none d-sm-block" for="exampleInputFile">Image</label>
                </div>
              </div>
              <div class="col-md-6 mb-2">
                <label for="inputUsername" class="form-label">ชื่อผู้ใช้ : </label>
                <input type="text" class="form-control" id="inputUsername">
              </div>
              <div class="col-md-6 mb-2">
                <label for="inputEmail" class="form-label">อีเมล : </label>
                <input type="email" class="form-control" id="inputEmail">
              </div>
              <div class="col-md-6 mb-2">
                <label for="inputFirstName" class="form-label">ชื่อจริง : </label>
                <input type="text" class="form-control" id="inputFirstName">
              </div>
              <div class="col-md-6 mb-2">
                <label for="inputLastName" class="form-label">นามสกุล : </label>
                <input type="text" class="form-control" id="inputLastName">
              </div>

              <div class="col-md-6 mb-2">
                <label for="inputDate" class="form-label">วันเกิด : <small class="text-muted">เดือน / วัน / ปี ค.ศ.</small></label>
                <input type="text" id="inputDate" onfocus="(this.type='date')" onchange="showDate();" class="form-control" placeholder="เดือน / วัน / ปี ค.ศ." />
                <span id="showdate"></span>
              </div>
              <div class="col-md-6 mb-2 mt-md-5 d-flex align-items-center">
                <label for="inputGender" class="form-label me-2">เพศ : </label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">ชาย</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">หญิง</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 mb-2">
                <label for="input" class="form-label">บ้านเลขที่: </label>
                <input type="text" class="form-control" id="input">
              </div>
              <div class="col-sm-6 col-md-2 mb-2">
                <label for="input" class="form-label">หมู่ : </label>
                <input type="text" class="form-control" id="input">
              </div>
              <div class="col-sm-6 col-md-4 mb-2">
                <label for="input" class="form-label">ถนน : </label>
                <input type="text" class="form-control" id="input">
              </div>
              <div class="col-sm-6 col-md-3 mb-2">
                <label for="input" class="form-label">ตรอก / ซอย :</label>
                <input type="text" class="form-control" id="input">
              </div>
              <div class="col-sm-6 col-md-4 mb-2">
                <label for="input" class="form-label">จังหวัด : </label>
                <input type="text" class="form-control" id="input">
              </div>
              <div class="col-sm-6 col-md-4 mb-2">
                <label for="input" class="form-label">อำเภอ :</label>
                <input type="text" class="form-control" id="input">
              </div>
              <div class="col-sm-6 col-md-4 mb-2">
                <label for="input" class="form-label">ตำบล :</label>
                <input type="text" class="form-control" id="input">
              </div>
              <div class="col-sm-6 col-md-3 mb-2">
                <label for="input" class="form-label">รหัสไปรษณีย์ :</label>
                <input type="text" class="form-control" id="input">
              </div>
              <div class="col-sm-6 col-md-4 mb-2">
                <label for="input" class="form-label">เบอร์โทร :</label>
                <input type="text" class="form-control" id="input">
              </div>
              <div class="footer">
                <button type="button" class="btn btn-primary mt-2 px-3">บันทึกข้อมูล</button>
                <button type="button" class="btn btn-outline-secondary mt-2 me-2 px-1" onclick="goBack()">ย้อนกลับ</button>
              </div>
            </form>

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
  <script src="../../assets/js/profile.js"></script>
  <script>
    function showDate() {
      d = new Date(document.getElementById("inputDate").value);
      dt = d.getDate();
      mn = d.getMonth();
      mn++;
      yy = d.getFullYear();
      document.getElementById("showdate").innerText = "วันที่ " + dt + " เดือนที่ " + mn + " ปี " + yy;
    }
  </script>
</body>

</html>