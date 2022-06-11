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
          <form action="{{ route('dashboard-settings-redirect', 'dashboard-settings-store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">

                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Store Name</label>
                      <input type="text" name="store_name" value="{{ $user->store_name }}" class="form-control" />
                    </div>
                  </div>

                  <div class="col-md-12">
                    <label>Store Category</label>
                      <select name="categories_id" id="" class="form-control">
                        <option value="{{ $user->categories_id }}">Not changed</option>
                        @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
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
                          value="1"
                          {{ $user->store_status == 1 ? 'checked' : ''}}
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
                          value="0"
                          {{ $user->store_status == 0 || $user->store_status == NULL ? 'checked' : ''}}
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
    