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
                <a href="index.html">home</a>
              </li>
              <li class="breadcrumb-item active">Cart</li>
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
                  <td>Amount</td>
                  <td>Menu</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 20%">
                    <img
                      src="/images/croffle.jpg"
                      alt=""
                      class="cart-image"
                    />
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">Cilok Polos</div>
                    <div class="product-subtitle">citrastore</div>
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">RP. 12.000</div>
                    <div class="product-subtitle">Rupiah</div>
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">3</div>
                    <div class="product-subtitle"></div>
                  </td>
                  <td style="width: 20%">
                    <a href="#" class="btn btn-remove-cart">Remove</a>
                  </td>
                </tr>

                <tr>
                  <td style="width: 20%">
                    <img
                      src="/images/cilok.jpg"
                      alt=""
                      class="cart-image"
                    />
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">Cilok Polos</div>
                    <div class="product-subtitle">citrastore</div>
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">RP. 12.000</div>
                    <div class="product-subtitle">Rupiah</div>
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">3</div>
                    <div class="product-subtitle"></div>
                  </td>
                  <td style="width: 20%">
                    <a href="#" class="btn btn-remove-cart">Remove</a>
                  </td>
                </tr>

                <tr>
                  <td style="width: 20%">
                    <img
                      src="/images/salad-buah.jpg"
                      alt=""
                      class="cart-image"
                    />
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">Cilok Polos</div>
                    <div class="product-subtitle">citrastore</div>
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">RP. 12.000</div>
                    <div class="product-subtitle">Rupiah</div>
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">3</div>
                    <div class="product-subtitle"></div>
                  </td>
                  <td style="width: 20%">
                    <a href="#" class="btn btn-remove-cart">Remove</a>
                  </td>
                </tr>
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
        <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Name</label>
              <input
                type="text"
                class="form-control"
                id="name"
                name="name"
                value="Yulia Citra"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="phoneNumber">Phone Number</label>
              <input
                type="text"
                class="form-control"
                id="phoneNumber"
                name="phoneNumber"
                value="0816861173"
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
                value="baleendah"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="shippingOption">Shipping Option</label>
              <select
                name="shippingOption"
                id="shippingOption"
                class="form-control"
              >
                <option value="COD">COD</option>
                <option value="delivery">Home Delivery</option>
                <option value="unla">At UNLA</option>
              </select>
            </div>
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
          <div class="product-title">Rp. 12.000</div>
          <div class="product-subtitle">Price</div>
        </div>
        <div class="col-4 col-md-2">
          <div class="product-title">2</div>
          <div class="product-subtitle">Order Total</div>
        </div>
        <div class="col-4 col-md-2">
          <div class="product-title">Rp. 12.000</div>
          <div class="product-subtitle">Shipping Cost</div>
        </div>
        <div class="col-4 col-md-2">
          <div class="product-title" style="color: #068d9d">Rp. 24.000</div>
          <div class="product-subtitle">Total Payment</div>
        </div>
        <div class="col-8 col-md-3">
          <a href="{{ route('success') }}" class="btn btn-success mt-4 px-4 btn-block"
            >Checkout Now</a
          >
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
    