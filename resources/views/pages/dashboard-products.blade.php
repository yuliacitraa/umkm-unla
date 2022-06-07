@extends ('layouts.dashboard')

@section('title')
    Dashboard Product
@endsection

@section('content')
<!-- section content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">My Products</h2>
      <p class="dashboard-subtitle">Manage it well and get money</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <a
            href="{{ route('dashboard-products-create') }}"
            class="btn btn-success"
            >Add new product</a
          >
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a
            href="dashboard-products-details.html"
            class="card card-dashboard-product d-block"
          >
            <div class="card-body">
              <img
                src="/images/croffle.jpg"
                alt=""
                class="w-100 mb-2"
              />
              <div class="product-title">Croffle</div>
              <div class="product-category">Foods</div>
            </div>
          </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a
            href="dashboard-products-details.html"
            class="card card-dashboard-product d-block"
          >
            <div class="card-body">
              <img
                src="/images/croffle.jpg"
                alt=""
                class="w-100 mb-2"
              />
              <div class="product-title">Croffle</div>
              <div class="product-category">Foods</div>
            </div>
          </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a
            href="dashboard-products-details.html"
            class="card card-dashboard-product d-block"
          >
            <div class="card-body">
              <img
                src="/images/salad-buah.jpg"
                alt=""
                class="w-100 mb-2"
              />
              <div class="product-title">Croffle</div>
              <div class="product-category">Foods</div>
            </div>
          </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a
            href="dashboard-products-details.html"
            class="card card-dashboard-product d-block"
          >
            <div class="card-body">
              <img
                src="/images/croffle.jpg"
                alt=""
                class="w-100 mb-2"
              />
              <div class="product-title">Croffle</div>
              <div class="product-category">Foods</div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
    