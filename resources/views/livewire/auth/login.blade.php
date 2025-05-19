 <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
          <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-6 col-xxl-3">
              <div class="card mb-0">
                <div class="card-body">
                  <a href="index.html" class="text-nowrap logo-img text-center d-block mb-5 w-100">
                    <img src="{{asset('dist/images/title_app.png')}}" width="180" alt="">
                  </a>
                  <form wire:submit.prevent="login" class="form-body">
                    <div class="mb-3">
                    <x-input.text name="email" label="Email" type='email'  wire:model.defer="email" placeholder="Enter your email" />
                    </div>
                    <div class="mb-4">
                    <x-input.text name="password" label="Password"  wire:model.defer="password" placeholder="Enter your password" type="password" />
                    </div>

                    <div class="d-flex align-items-center justify-content-between mb-4">
                      <a class="text-primary fw-medium" href="authentication-forgot-password.html">Forgot Password ?</a>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign In</button>
                    {{-- <div class="d-flex align-items-center justify-content-center">
                      <p class="fs-4 mb-0 fw-medium">New to Modernize?</p>
                      <a class="text-primary fw-medium ms-2" href="authentication-register.html">Create an account</a>
                    </div> --}}
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
