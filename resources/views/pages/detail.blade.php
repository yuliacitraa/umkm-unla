@extends ('layouts.app')

@section('title')
    Homepage
@endsection

@section('content')
<!-- page content -->
<div class="page-content page-details">
  <!-- breadcrumb -->
  <section
    class="store-breadcrumbs"
    data-aos="fade-down"
    data-aos-delay="100"
  >
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ route('home') }}">home</a>
              </li>
              <li class="breadcrumb-item active">Product Details</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <!-- store galery -->
  <section class="store-gallery mb-3" id="gallery">
    <div class="container">
      <div class="row">
        <div class="col-lg-8" data-aos="zoom-in">
          <transition name="slide-fade" mode="out-in">
            <img
              :src="photos[activePhoto].url"
              :key="photos[activePhoto].id"
              class="w-100 main-image"
              alt=""
            />
          </transition>
        </div>
        <div class="col-lg-2">
          <div class="row">
            <div
              class="col-3 col-lg-12 mt-2 mt-lg-0"
              v-for="(photo, index) in photos"
              :key="photo.id"
              data-aos="zoom-in"
              data-aos-delay="100"
            >
              <a href="#" @click="changeActive(index)">
                <img
                  :src="photo.url"
                  class="w-100 thumbnail-image"
                  :class="{active:index == activePhoto}"
                  alt=""
                />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- description -->
  <div class="store-details-container" data-aos="fade-up">
    <!-- heading -->
    <section class="store-heading">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h1>{{ $product->name }}</h1>
            <div class="owner">{{ $product->user->store_name }}</div>
            <div class="price">RP. {{ number_format($product->price) }}</div>
            <div class="owner">stock: 100</div>
          </div>
          <div class="col-lg-2" data-aos="zoom-in">
            @auth
              <form action="{{ route('detail-add', $product->id)  }}" method="post" enctype="multipart/form-data">
                @csrf
                <button
                  type="submit"
                  class="btn px-4 text-white btn-block mb-3"
                  style="background-color: #8185da"
                  >Add to cart
                </button>
              </form>
            @else
              <a
                href="{{ route('login') }}"
                class="btn px-4 text-white btn-block mb-3"
                style="background-color: #e4abbd"
                >Sign in to add
              </a>
            @endauth
            
          </div>
        </div>
      </div>
    </section>

    <!-- desc -->
    <section class="store-description">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8">
            {!! $product->description !!}
            <p>
              <a href="https://wa.me/{{ $product->user->phone }}"
                ><img class="mt-4" src="/images/icon-whatsapp.svg" alt="" />
                Chat</a
              >
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection

@push('addon-script')
<script src="/script/navbar-scroll.js"></script>
<script src="/vendor/vue/vue.js"></script>
<script>
  var gallery = new Vue({
    el: "#gallery",
    mounted() {
      AOS.init();
    },
    data: {
      activePhoto: 0,
      photos: [
        @foreach ($product->galleries as $gallery )
          {
            id: {{ $gallery->id }},
            url: "{{ Storage::url($gallery->photos) }}",
          },
        @endforeach
      ],
    },
    methods: {
      changeActive(id) {
        this.activePhoto = id;
      },
    },
  });
</script>
@endpush
    