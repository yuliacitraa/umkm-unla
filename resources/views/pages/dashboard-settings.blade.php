@extends ('layouts.dashboard')

@section('title')
    Store Setting
@endsection

@section('content')
<!-- section content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Store Settings</h2>
      <p class="dashboard-subtitle">Make Store that profitable!</p>
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
                      <label>Store Name</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>

                  <div class="col-md-12">
                    <label>Store Category</label>
                    <select
                      name="category"
                      id=""
                      class="form-control"
                    >
                      <option value="">Select Category</option>
                    </select>
                  </div>

                  <div class="col-md-6 mt-3">
                    <div class="form-group">
                      <label>Store</label>
                      <p class="text-muted">
                        Do you want to open the store?
                      </p>
                      <div
                        class="custom-control custom-radio custom-control-inline"
                      >
                        <input
                          type="radio"
                          class="custom-control-input"
                          name="store_status"
                          id="openStoreTrue"
                        />
                        <label
                          for="openStoreTrue"
                          class="custom-control-label"
                        >
                          Still Open
                        </label>
                      </div>
                      <div
                        class="custom-control custom-radio custom-control-inline"
                      >
                        <input
                          type="radio"
                          class="custom-control-input"
                          name="store_status"
                          id="openStoreFalse"
                        />
                        <label
                          for="openStoreFalse"
                          class="custom-control-label"
                        >
                          Temporary Closed
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col text-right">
                    <button class="btn btn-success px-3 m-2">
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
@endsection
    