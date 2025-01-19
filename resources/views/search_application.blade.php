@extends("layouts.layout")


@section("content")

@php

@endphp

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">

    <div class="card mb-6">
      <form class="card-body" method="post" >
        @csrf
        <div class="row g-6">
          <div class="col-md-6">
            <label class="form-label" for="multicol-username">Applicant Name</label>
            <input type="text" id="applicant_name" name="applicant_name" class="form-control" placeholder="Enter applicant Name" value="{{ old('applicant_name') }}">
          </div>
          <div class="col-md-6">
            <label class="form-label" for="multicol-username">Date Of Birth (as per AADHAR Card)</label>
            <div>
              <input class="form-control" type="date" id="dob" name="dob" value="{{ old('dob') }}"> 
            </div>
          </div>

          <!-- <div class="col-md-6">
            <label class="form-label" for="multicol-username">Certificate No</label>
            <input type="text" id="po_ps" name="po_ps" class="form-control" placeholder="Enter Certificate No">
          </div> -->

          <div class="pt-6">
            <button type="submit" class="btn btn-primary me-3">Search</button>
            <button type="reset" class="btn btn-label-secondary">Reset</button>
          </div>

        </div>

      </form>
    </div>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Application Form Details</h5>
      <div class="table-responsive text-nowrap">
        <table class="table table-bordered table-hover" id="example">
          <thead>
            <tr>
              <th>Applicant Name</th>
              <th>Father Name</th>
              <th>DOB</th>
              <th>Address</th>
              <th>PO/PS</th>
              <th>Family Income</th>
              <th>Cast</th>
              <th>Sub cast</th>
              <th>Ration card No</th>
              <th>Family Type</th>
            </tr>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <!-- <tr>
              <td><i class="bx bxl-angular bx-md text-danger me-4"></i> <span>Angular Project</span></td>
              <td>Albert Cook</td>
              <td>
                <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                    class="avatar avatar-xs pull-up" title="Lilian Fuller">
                    <img src="assets/assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                    class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                    <img src="assets/assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                    class="avatar avatar-xs pull-up" title="Christina Parker">
                    <img src="assets/assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                  </li>
                </ul>
              </td>
              <td><span class="badge bg-label-primary me-1">Active</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                      Edit</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                      Delete</a>
                  </div>
                </div>
              </td>
            </tr> -->
            <tr>
              <td>{{$applicant_name}}</td>
              <td>{{$father_name}}</td>
              <td>{{$dob}}</td>
              <td>{{$address}}</td>
              <td>{{$po_ps}}</td>
              <td>{{$family_income}}</td>

              <td>{{$cast}}</td>
              <td>{{$sub_cast}}</td>
              <td>{{$ration_card_no}}</td>
              <td>{{$family_type == "A" ? "APL" : "BPL"}}</td>

              <td>
                <i class="bx bx-dots-vertical-rounded"></i><a href="{{url('print_certificate')}}/{{$id}}">Print</a>
              </td>
              <!-- <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);" href=""><i class="bx bx-edit-alt me-2"></i>
                      Print</a>
                     <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i>
                    Delete</a>
                  </div>
              </td> -->
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!--/ Basic Bootstrap Table -->

    <hr class="my-12" />


  </div>
  <!-- / Content -->

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

<script src="{{ asset('assets/assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{ asset('assets/assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{ asset('assets/assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{ asset('assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{ asset('assets/assets/vendor/js/menu.js')}}"></script>

<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
<script src="{{ asset('assets/assets/js/main.js')}}"></script>

<!-- Page JS -->

<!-- Place this tag before closing body tag for github widget button. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Scripts (Optional: for table functionality) -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script> -->
<script src="https://cdn.datatables.net/2.2.1/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.2.1/js/dataTables.bootstrap5.js"></script>

<script>
  // Initialize DataTable
  $(document).ready(function() {
    $('#example').DataTable({
      ordering: false // Disable automatic sorting
    });
  });
</script>
</body>

</html>

@endsection