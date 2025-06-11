
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css" />
  <style>
    .modal-body {
      text-align: center;
      overflow: hidden;
      padding: 0;
    }
    /* #image {
      max-width: 100%;
      max-height: 60vh;
      display: block;
      margin: auto;
    } */
    .cropper-container {
      max-width: 100% !important;
      width: 100% !important;
      margin: 0 auto !important;
      box-sizing: border-box;
    }
    .cropper-wrap-box,
    .cropper-canvas,
    .cropper-drag-box {
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box;
    }
  </style>

<div class="container mt-4 text-center">
  <h2>Upload dan Crop di Modal Bootstrap (Auto Open Fix)</h2>
  <input type="file" id="upload" class="form-control mb-3" accept="image/*" />
  <h4 class="mt-4">Hasil Crop:</h4>
  <img id="result" width="500" style="border: 1px solid #ddd;" />
</div>

<!-- Modal Bootstrap -->
<div class="modal fade" id="cropModal" tabindex="-1" aria-labelledby="cropModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" style="max-width: 600px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cropModalLabel">Crop Gambar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img id="image" width="500"/>
      </div>
      <div class="modal-footer">
        <button type="button" id="cropBtn" class="btn btn-success">Crop & Simpan</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>
