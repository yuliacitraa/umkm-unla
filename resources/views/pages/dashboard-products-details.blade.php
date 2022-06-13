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
          {{-- <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div> --}}
          <form action="{{ route('dashboard-products-update', $product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Product Name</label>
                      <input type="text" name="name" value="{{ $product->name }}" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Price</label>
                      <input type="number" name="price" value="{{ $product->price }}" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label>Category</label>
                    <select name="categories_id" id="" class="form-control">
                      <option value="">{{ $product->category->name }}</option>
                      @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Description</label>
                      <textarea name="description" id="editor">{!! $product->description !!}</textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col text-right">
                    <button type="submit" class="btn btn-success px-5 text-white"
                    style="background-color: #8185da">
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
                @foreach ($product->galleries as $gallery)
                  <div class="col-md-4">
                    <div class="gallery-container">
                      <img
                        src="{{ Storage::url($gallery->photos ?? '') }}"
                        alt=""
                        class="w-100"
                      />
                      <a href="{{ route('dashboard-products-gallery-delete', $gallery->id) }}" class="delete-gallery">
                        <img src="/images/icon-delete.svg" alt="" />
                      </a>
                    </div>
                  </div>
                @endforeach
                <div class="col-12">
                  <form action="{{ route('dashboard-products-gallery-upload') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="products_id" value="{{ $product->id }}">
                    <input
                      type="file"
                      name="photos"
                      id="file"
                      style="display: none;"
                      multiple
                      onchange="form.submit()"
                    />
                    <button
                      type="button"
                      class="btn btn-secondary btn-block mt-3"
                      onclick="thisFileUpload()"
                    >
                      Add Photo
                    </button>
                  </form>
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
      document.getElementById("file").click();
    }
  </script>
<script>
  CKEDITOR.replace("editor");
</script>
@endpush