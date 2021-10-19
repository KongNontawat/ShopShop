<!-- Modal -->
<div class="modal fade mt-4" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">จัดการสินค้า</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form enctype="multipart/form-data" class="">
        <div class="modal-body">
          <div class="row gy-3 justify-content-center">
            <div class="col-12">
              <label for="input-title" class="form-label">ชื่อสินค้า</label>
              <input type="text" class="form-control" name="title" id="input-title" placeholder="ชื่อสินค้า" autofocus>
            </div>
            <div class="col-md-4">
              <label for="input-category" class="form-label">ประเภท</label>
              <select class="form-select" id="input-category" name="category">
                <option selected>เลือกประเภท</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="input-price" class="form-label">ราคา</label>
              <input type="number" class="form-control" name="price" id="input-price" placeholder="ราคา">
            </div>
            <div class="col-md-4">
              <label for="input-stock" class="form-label">สต๊อก</label>
              <input type="number" class="form-control" name="stock" id="input-stock" placeholder="จำนวนสินค้าในสต๊อก">
            </div>
            <div class="col-12">
              <label for="input-detail" class="form-label">คำอธิบาย</label>
              <textarea name="detail" id="input-detail" cols="30" rows="2" class="form-control" placeholder="ใส่คำอธิบายสินค้า"></textarea>
            </div>
            <div class="col-md-9">
              <label for="input-photo" class="form-label">รูปภาพ</label>
              <div class="input-group mb-2">
                <input type="file" class="form-control" id="input-photo" name="photo" onchange="readURL(this)">
                <label class="input-group-text" for="input-photo">เลือกรูป</label>
              </div>
            </div>
            <div class="col-12 text-center d-flex justify-content-center">
              <div id="imgControl" class="d-none">
                <img id="imgUpload" class="img-fluid mb-3 img-thumbnail shadow-sm">
              </div>
            </div>
            <div class="col-12">
              <label for="input-detail2" class="form-label">รายละเอียดสินค้า</label>
              <textarea name="detail2" id="input-detail2" cols="30" rows="4" class="form-control" placeholder="ใส่รายละเอียดสินค้า"></textarea>
            </div>
            <div class="col-12">
              <div class="form-check form-switch d-flex flex-row align-items-center justify-content-start">
                <input class="form-check-input me-2 p-0" type="checkbox" role="switch" id="input-status" name="status">
                <label class="form-check-label" for="input-status"><small class="text-success">เปิดใช้งาน</small></label>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
          <button type="submit" class="btn btn-primary" id="btn-submit-form">บันทึกข้อมูล</button>
        </div>
      </form>

    </div>
  </div>
</div>