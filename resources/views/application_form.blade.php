@extends("layouts.layout")

@section("content")
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Layout -->

    <div class="card mb-6">
      <h5 class="card-header">Application Form</h5>
      <form class="card-body" action="" method="post">
        @csrf
        <!-- <h6>1. Account Details</h6> -->
        <div class="row g-6">
          <div class="col-md-6">
            <label class="form-label" for="multicol-username">Applicant Name</label>
            <input type="text" id="applicant_name" name="applicant_name" class="form-control" placeholder="Enter applicant Name">
          </div>

          <div class="col-md-6">
            <label class="form-label" for="multicol-username">Father Name</label>
            <input type="text" id="applicant_name" name="father_name" class="form-control" placeholder="Enter Father Name">
          </div>

          <div class="col-md-6">
            <label class="form-label" for="multicol-username">Address</label>
            <input type="text" id="address" name="address" class="form-control" placeholder="Enter Address">
          </div>

          <div class="col-md-6">
            <label class="form-label" for="multicol-username">P.O. & P.S.</label>
            <input type="text" id="po_ps" name="po_ps" class="form-control" placeholder="Enter PO & PS">
          </div>

          <div class="col-md-6">
            <label class="form-label" for="multicol-username">District</label>
            <input type="text" id="district" name="district" class="form-control" placeholder="Enter District">
          </div>

          <div class="col-md-6">
            <label class="form-label" for="multicol-username">Date Of Birth (as per AADHAR Card)</label>
            <div>
              <input class="form-control" type="date" id="dob" name="dob" >
            </div>
          </div>

          <div class="col-md-6">
            <label class="form-label" for="multicol-username">Family Income</label>
            <input type="text" id="family_income" name="family_income" class="form-control" placeholder="Enter Family Income">
          </div>

          <div class="col-md-6">
            <label class="form-label" for="multicol-username">Cast</label>
            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="cast" id="cast">
              <option value="0">Open to select cast</option>
              <option value="1">General</option>
              <option value="2">SC</option>
              <option value="3">ST</option>
              <option value="4">OBC</option>
            </select>
          </div>

          <div class="col-md-6">
            <label class="form-label" for="multicol-username">Sub Cast</label>
            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="sub_cast" id="sub_cast">
              <option value="0">Open to select sub-cast</option>
              <option value="1">OBC-Type1</option>
              <option value="2">OBC-Type2</option>
              
            </select>
          </div>

          <div class="col-md-6">
            <label class="form-label" for="multicol-username">Ration Card No</label>
            <input type="text" id="ration_card_no" name="ration_card_no" class="form-control" placeholder="Enter Ration Card No">
          </div>

          <div class="col-md-6">
            <label class="form-label" for="multicol-username">Family Type</label>
            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="family_type" id="family_type">
              <option value="">Open to select family type</option>
              <option value="B">BPL</option>
              <option value="A">APL</option>
            </select>
          </div>

          
        </div>
        <!-- <hr class="my-6 mx-n6"> 
                <h6>2. Personal Info</h6>
                <div class="row g-6">
                  <div class="col-md-6">
                    <label class="form-label" for="multicol-first-name">First Name</label>
                    <input type="text" id="multicol-first-name" class="form-control" placeholder="John">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name">Last Name</label>
                    <input type="text" id="multicol-last-name" class="form-control" placeholder="Doe">
                  </div>-->

        <div class="pt-6">
          <button type="submit" name="submit" class="btn btn-primary me-3">Submit</button>
          <button type="reset" class="btn btn-label-secondary">Reset</button>
        </div>
      </form>
    </div>
  </div>
  <!-- / Content -->
</div>
<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl">
    <div
      class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
      <div class="text-body">
        ©
        <script>
          document.write(new Date().getFullYear());
        </script>
        , made with ❤️ by
        <a href="https://themeselection.com" target="_blank" class="footer-link">ThemeSelection</a>
      </div>
      <div class="d-none d-lg-inline-block">
        <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
        <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

        <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
          target="_blank" class="footer-link me-4">Documentation</a>

        <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank"
          class="footer-link">Support</a>
      </div>
    </div>
  </div>
</footer>
<!-- / Footer -->

<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->

<script src="assets/assets/vendor/libs/jquery/jquery.js"></script>
<script src="assets/assets/vendor/libs/popper/popper.js"></script>
<script src="assets/assets/vendor/js/bootstrap.js"></script>
<script src="assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="assets/assets/vendor/js/menu.js"></script>

<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
<script src="assets/assets/js/main.js"></script>

<!-- Page JS -->

<!-- Place this tag before closing body tag for github widget button. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>

@endsection