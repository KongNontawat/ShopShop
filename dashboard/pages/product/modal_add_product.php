<!-- Modal -->
<div class="modal fade mt-4" id="modal_save_product" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">จัดการสินค้า</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="form-add-product">
        <div class="modal-body">
          <div class="row gy-3 justify-content-center">
            <div class="col-12">
              <label for="input-title" class="form-label">ชื่อสินค้า</label>
              <input type="hidden" name="id_product" id="input-id-product">
              <input type="text" class="form-control" name="title" id="input-title" placeholder="ชื่อสินค้า" autofocus required>
            </div>
            <div class="col-md-4">
              <label for="input-category" class="form-label">ประเภท</label>
              <select class="form-select" id="input-category" name="id_category" required>

              </select>
            </div>
            <div class="col-md-4">
              <label for="input-price" class="form-label">ราคา</label>
              <input type="number" class="form-control" name="price" id="input-price" placeholder="ราคา" required>
            </div>
            <div class="col-md-4">
              <label for="input-stock" class="form-label">สต๊อก</label>
              <input type="number" class="form-control" name="stock" id="input-stock" placeholder="จำนวนสินค้าในสต๊อก" required>
            </div>
            <div class="col-12">
              <label for="input-detail" class="form-label">คำอธิบาย</label>
              <textarea name="detail" id="input-detail" cols="30" rows="3" class="form-control" placeholder="ใส่คำอธิบายสินค้า" required></textarea>
            </div>
            <div class="col-md-9">
              <label for="input-photo" class="form-label">รูปภาพ</label>
              <div class="input-group mb-2">
                <input type="hidden" name="photo_old" id="photo_old">
                <input type="file" class="form-control" id="input-photo" name="photo" accept="image/*" onchange="onFileSelected(this)">
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
            <div class="col-12 d-flex flex-row align-items-center justify-content-start">
              <label class="switch me-2">
                <input type="checkbox" id="input-status" name="status">
                <div class="slider round">
                  <!--ADDED HTML -->
                  <span class="on">ON</span>
                  <span class="off">OFF</span>
                  <!--END-->
                </div>
              </label>
              <span id="label-status">เปิดใช้งาน</span>

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