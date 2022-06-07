@extends ('layouts.dashboard')

@section('title')
    Dashboard Transaction Detail
@endsection

@section('content')
<!-- section content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">citrastore</h2>
      <p class="dashboard-subtitle">Transactions Details</p>
    </div>

    <div class="dashboard-content" id="transactionDetails">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-md-4">
                  <img
                    src="/images/croffle.jpg"
                    alt=""
                    class="w-100 mb-3"
                  />
                </div>
                <div class="col-12 col-md-8">
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="product-title">Customer Name</div>
                      <div class="product-subtitle">Yulia Citra</div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Product Name</div>
                      <div class="product-subtitle">Croffle</div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">
                        Date of Transaction
                      </div>
                      <div class="product-subtitle">15 May, 2022</div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Payment Status</div>
                      <div class="product-subtitle text-danger">
                        Pending
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Total Amount</div>
                      <div class="product-subtitle">Rp. 50.000</div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Phone Number</div>
                      <div class="product-subtitle">
                        +62 816861173
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 mt-4">
                  <h5>Shipping information</h5>
                </div>
                <div class="col-12">
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="product-title">Address</div>
                      <div class="product-subtitle">Baleendah</div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Payment Method</div>
                      <select
                        name="paymentmethod"
                        id=""
                        class="form-control"
                      >
                        <option value="COD">COD</option>
                        <option value="Cash">Cash</option>
                      </select>
                    </div>
                    <div class="col-12 col-md-3">
                      <div class="product-title">Shipping Status</div>
                      <select
                        name="status"
                        id="status"
                        class="form-control"
                        v-model="status"
                      >
                        <option value="Pending">Pending</option>
                        <option value="Shipping">Shipping</option>
                        <option value="Success">Success</option>
                      </select>
                    </div>
                    <template v-if="status == 'Shipping'">
                      <div class="col-md-3">
                        <div class="product-title">Input Resi</div>
                        <input
                          type="text"
                          class="form-control"
                          name="resi"
                          v-model="resi"
                        />
                      </div>
                      <div class="col-md-2">
                        <button
                          type="submit"
                          class="btn btn-success btn-block mt-4"
                        >
                          Update Resi
                        </button>
                      </div>
                    </template>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-12 text-right">
              <button type="submit" class="btn btn-success mt-4">
                Save Now
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('addon-script')
<script src="/vendor/vue/vue.js"></script>
<script>
  var transactionDetails = new vue({
    el: "#transactionDetails",
    data: {
      status: "Shipping",
    },
  });
</script>
@endpush
    