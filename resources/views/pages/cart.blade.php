@extends ('layouts.app')

@section('title')
    Cart
@endsection

@section('content')
<!-- page content -->
<div class="page-content page-cart">
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
              <li class="breadcrumb-item">
                <a href="{{ route('categories') }}">product</a>
              </li>
              <li class="breadcrumb-item active">cart</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <!-- store galery -->
  <section class="store-cart">
    <div class="container">
      <!-- shipping information -->
      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col table-responsive">
          <div class="table table-borderless table-cart">
            <table>
              <thead>
                <tr>
                  <td>Image</td>
                  <td>Name &amp; Seller</td>
                  <td>Price</td>
                  {{-- <td>Amount</td> --}}
                  <td>Menu</td>
                </tr>
              </thead>
              <tbody>
                @php $totalPay = 0 @endphp
                @foreach ($carts as $cart)
                  <tr>
                    <td style="width: 20%">
                      @if ($cart->product->galleries)
                        <img
                          src="{{ Storage::url($cart->product->galleries->first()->photos) }}"
                          alt=""
                          class="cart-image"
                        />  
                      @endif
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">{{ $cart->product->name }}</div>
                      <div class="product-subtitle">{{ $cart->product->user->store_name }}</div>
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">{{ number_format($cart->product->price) }}</div>
                      <div class="product-subtitle">Rupiah</div>
                    </td>
                    {{-- <td style="width: 35%">
                      <div class="product-title">3</div>
                      <div class="product-subtitle"></div>
                    </td> --}}
                    <td style="width: 20%">
                      <form action="{{ route('cart-delete', $cart->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-remove-cart text-white">Remove</button>
                      </form>
                    </td>
                  </tr>
                  @php
                      $totalPay += $cart->product->price
                  @endphp
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="150">
        <div class="col-12">
          <hr />
        </div>
        <div class="col-12">
          <h2 class="mb-4">Shipping Details</h2>
        </div>
      </div>

      <form action="{{ route('checkout') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Name</label>
              <input
                type="text"
                class="form-control"
                id="name"
                name="name"
                value="{{ Auth::User()->name }}"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input
                type="text"
                class="form-control"
                id="phone"
                name="phone"
                value="{{ Auth::User()->phone }}"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="address">Address</label>
              <input
                type="text"
                class="form-control"
                id="address"
                name="address"
                value="{{ Auth::User()->address }}"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="shippingOption">Shipping Option</label>
              <select
                name="shipping_option"
                id="shipping_option"
                class="form-control"
              >
                <option value="COD">COD</option>
                <option value="delivery">Home Delivery</option>
                <option value="unla">At UNLA</option>
              </select>
            </div>
          </div>
        </div>

        <!-- payment information -->
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr />
          </div>
          <div class="col-12">
            <h2 class="mb-2">Payment Information</h2>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-4 col-md-2">
            <div class="product-title">Rp. {{ number_format($totalPay ?? 0) }}</div>
            <div class="product-subtitle">Price</div>
          </div>
          {{-- <div class="col-4 col-md-2">
            <div class="product-title">0</div>
            <div class="product-subtitle">Order Total</div>
          </div> --}}
          @php
              // $adminCost = $totalPay*(5/100)
              $adminCost = 5000
          @endphp
          <div class="col-4 col-md-2">
            <div class="product-title">Rp. {{ number_format($adminCost) }}</div>
            <div class="product-subtitle">Admin Cost</div>
          </div>
          @php
              $totalPrice = $adminCost + $totalPay
          @endphp
          <div class="col-4 col-md-2">
            <div class="product-title" style="color: #068d9d">Rp {{ number_format($totalPrice) ?? 0}}</div>
            <div class="product-subtitle">Total Payment</div>
          </div>
          <input type="hidden" name="total_price" value='{{ $totalPrice }}'>
          <div class="col-8 col-md-3">
            <button
              type="submit" class="btn mt-4 px-4 btn-block text-white" 
              style="background-color: #8185da"
              >Checkout Now</button
            >
          </div>
        </div>
      </form>

    </div>
  </section>
</div>
@endsection
    