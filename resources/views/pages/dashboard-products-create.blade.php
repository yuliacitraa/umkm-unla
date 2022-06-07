@extends ('layouts.dashboard')

@section('title')
    Dashboard Add Product
@endsection

@section('content')
<!-- page content -->
<div id="page-content-wrapper">
  <nav
    class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
    data-aos="fade-down"
  >
    <div class="container-fluid">
      <button
        class="btn btn-secodary d-md-none mr-auto mr-2"
        id="menu-toggle"
      >
        &laquo; Menu
      </button>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- desktop menu -->
        <ul class="navbar-nav d-none d-lg-flex ml-auto">
          <li class="nav-item dropdown">
            <a
              href="#"
              class="nav-link"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
            >
              <img
                src="/images/icon-user.png"
                alt=""
                class="rounded-circle mr-2 profile-picture"
              />
              Hi, Yulia
            </a>
            <div class="dropdown-menu">
              <a href="dashboard.html" class="dropdown-item"
                >Dashboard</a
              >
              <a href="dashboard-account.html" class="dropdown-item"
                >Settings</a
              >
              <div class="dropdown-divider"></div>
              <a href="/" class="dropdown-item">Logout</a>
            </div>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link d-inline-block mt-2">
              <img src="/images/icon-cart.svg" alt="" />
              <!-- <div class="card-badge">7</div> -->
            </a>
          </li>
        </ul>

        <ul class="navbar-nav d-block d-lg-none">
          <li class="nav-item">
            <a href="#" class="nav-link">Hi, Yulia</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link d-inline-block">Cart</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- section content -->
  <div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
  >
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Create Product</h2>
        <p class="dashboard-subtitle">Create your own product!</p>
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

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Thumbnail</label>
                        <input type="file" class="form-control" />
                        <p class="text-muted">
                          You can choose more than 1 picture
                        </p>
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
      </div>
    </div>
  </div>
</div>
@endsection
    
@push('addon-script')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace("editor");
</script>
@endpush