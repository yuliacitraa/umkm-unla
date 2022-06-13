@extends('layouts.auth')

@section('content')

<div class="page-content page-auth" id="register">
      <div class="section-store-auth" data-aos="fade-up">
        <div class="container">
          <div class="row align-items-center justify-content-center row-login">
            <div class="col-lg-4">
              <h2>
                one step more! <br />
                to develop UMKM
              </h2>
              <form method="POST" action="{{ route('register') }}" style="mt-3">
                @csrf
                <div class="form-group">
                  <label>Full Name</label>
                  <input id="name" 
                         v-model="name"
                         type="text" 
                         class="form-control @error('name') is-invalid @enderror" 
                         name="name" 
                         value="{{ old('name') }}" 
                         required 
                         autocomplete="name" 
                         autofocus
                  >
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input id="email" 
                         v-model="email"
                         @change="checkEmail()"
                         type="email" 
                         class="form-control @error('email') is-invalid @enderror" 
                         :class="{ 'is-invalid' : this.email_unavailable }"
                         name="email" 
                         value="{{ old('email') }}" 
                         required 
                         autocomplete="email"
                  >
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Password </label>
                    <input id="password" 
                           type="password" 
                           class="form-control @error('password') is-invalid @enderror" 
                           name="password" 
                           required 
                           autocomplete="new-password"
                    >
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label>Confirm Password </label>
                    <input id="password-confirm" 
                           type="password" 
                           class="form-control @error('password_confirmation') is-invalid @enderror" 
                           name="password_confirmation" 
                           required 
                           autocomplete="new-password"
                    >
                    @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label>WhatsApp Number </label>
                  <input
                    type="number"
                    name="phone"
                    id=""
                    class="form-control"
                  />
                </div>

                <div class="form-group">
                  <label>Store</label>
                  <p class="text-muted">
                      Do you want to open a store?
                  </p>
                  <div
                  class="custom-control custom-radio custom-control-inline"
                  >
                      <input
                          type="radio"
                          class="custom-control-input"
                          name="is_store_open"
                          id="openStoreTrue"
                          v-model="is_store_open"
                          :value="true"
                      />
                      <label for="openStoreTrue" class="custom-control-label">
                          hmm, yes
                      </label>
                  </div>
                  <div
                      class="custom-control custom-radio custom-control-inline"
                  >
                      <input
                          type="radio"
                          class="custom-control-input"
                          name="is_store_open"
                          id="openStoreFalse"
                          v-model="is_store_open"
                          :value="false"
                      />
                      <label for="openStoreFalse" class="custom-control-label">
                          no, thanks
                      </label>
                  </div>
              </div>
              <div class="form-group" v-if="is_store_open">
                  <label>Store Name</label>
                  <input 
                      v-model="store_name"
                      id="store_name" 
                      type="text" 
                      class="form-control @error('store_name') is-invalid @enderror" 
                      name="store_name" 
                      value="{{ old('store_name') }}" 
                      required 
                      autocomplete="store_name" 
                      autofocus
                  >
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="form-group" v-if="is_store_open">
                  <label>Category</label>
                  <select name="categories_id" class="form-control">
                      <option value="" disabled>Select Category</option>
                      @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                  </select>
              </div>

                <button
                  type="submit"
                  class="btn btn-block mt-4 text-white"
                  style="background-color: #8185da"
                  :disabled="this.email_unavailable"
                  >Sign Up Now
                </button>
                <a href="{{ route('login') }}" class="btn btn-block mt-4 text-white"
                style="background-color: #e4abbd"
                  >Back to Sign In</a
                >
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@push('addon-script')
<script src="/vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
      Vue.use(Toasted);

      var register = new Vue({
        el: "#register",
        mounted() {
          AOS.init();
        },
        methods: {
          checkEmail: function() {
            var self = this;
            axios.get('{{ route('api-register-check') }}' , {
              params: {
                email: this.email
              }
            })
              .then(function (response) {

                if(response.data=='Available') {
                  self.$toasted.show(
                    "email available",
                    {
                      position: "top-center",
                      className: "rounded",
                      duration: 1000,
                    }
                  );
                  self.email_unavailable = false;

                } else {
                  self.$toasted.error(
                    "sorry, email has been taken",
                    {
                      position: "top-center",
                      className: "rounded",
                      duration: 1000,
                    }
                  );
                  self.email_unavailable = true;
                }

                // handle success
                console.log(response);
              });
          }
        },
        data() {
          return {
            name: "yulia citra",
            email: "yulia@gmail.com",
            is_store_open: true,
            store_name: "",
            email_unavailable: false
        }},
      });
    </script>
@endpush
