@extends ('layouts.dashboard')

@section('title')
    Dashboard Add Product
@endsection

@section('content')
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
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            <form action="{{ route('dashboard-products-store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" name="name" class="form-control" />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Price</label>
                        <input type="number" name="price" class="form-control" />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <label>Category</label>
                      <select name="categories_id" id="" class="form-control">
                        @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" id="editor"></textarea>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Thumbnail</label>
                        <input type="file" name="photo" class="form-control" />
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