@extends ('layouts.dashboard')

@section('title')
    Dashboard Product Detail
@endsection

@section('content')
<!-- section content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Croffle</h2>
      <p class="dashboard-subtitle">Edit Product details</p>
    </div>

    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <form action="">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Product Name</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Price</label>
                      <input type="number" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label>Category</label>
                    <select
                      name="category"
                      id=""
                      class="form-control"
                    >
                      <option value="">Select category</option>
                    </select>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Description</label>
                      <textarea name="editor"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col text-right">
                    <button class="btn btn-success px-5">
                      Save Now
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-4">
                  <div class="gallery-container">
                    <img
                      src="images/croffle.jpg"
                      alt=""
                      class="w-100"
                    />
                    <a href="" class="delete-gallery">
                      <img src="/images/icon-delete.svg" alt="" />
                    </a>
                  </div>
                </div>
                <div class="col-12">
                  <input
                    type="file"
                    name=""
                    id="file"
                    style="display: none"
                    multiple
                  />
                  <button
                    class="btn btn-secondary btn-block mt-3"
                    onclick="thisFileUpload()"
                  >
                    Add Photo
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
    
@push('addon-script')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
  function thisFileUpload() {
    document.getElementByID("file").click();
  }
</script>
<script>
  CKEDITOR.replace("editor");
</script>
@endpush