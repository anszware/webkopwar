@section('css')
<link rel="stylesheet" href="{{ asset('dist/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">
@endsection
@section('script')
    <script src="{{ asset('dist/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dist/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dist/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
@endsection
<div class="container-fluid mw-100">
    <!--  Owl carousel -->
    <div class="owl-carousel counter-carousel owl-theme">
        <div class="item">
            <div class="card border-0 zoom-in bg-light-primary shadow-none">
                <div class="card-body">
                    <div class="text-center">
                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-user-male.svg"
                            width="50" height="50" class="mb-3" alt="" />
                        <p class="fw-semibold fs-3 text-primary mb-1"> Employees </p>
                        <h5 class="fw-semibold text-primary mb-0">96</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card border-0 zoom-in bg-light-warning shadow-none">
                <div class="card-body">
                    <div class="text-center">
                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-briefcase.svg"
                            width="50" height="50" class="mb-3" alt="" />
                        <p class="fw-semibold fs-3 text-warning mb-1">Clients</p>
                        <h5 class="fw-semibold text-warning mb-0">3,650</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card border-0 zoom-in bg-light-info shadow-none">
                <div class="card-body">
                    <div class="text-center">
                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-mailbox.svg"
                            width="50" height="50" class="mb-3" alt="" />
                        <p class="fw-semibold fs-3 text-info mb-1">Projects</p>
                        <h5 class="fw-semibold text-info mb-0">356</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card border-0 zoom-in bg-light-danger shadow-none">
                <div class="card-body">
                    <div class="text-center">
                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-favorites.svg"
                            width="50" height="50" class="mb-3" alt="" />
                        <p class="fw-semibold fs-3 text-danger mb-1">Events</p>
                        <h5 class="fw-semibold text-danger mb-0">696</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card border-0 zoom-in bg-light-success shadow-none">
                <div class="card-body">
                    <div class="text-center">
                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-speech-bubble.svg"
                            width="50" height="50" class="mb-3" alt="" />
                        <p class="fw-semibold fs-3 text-success mb-1">Payroll</p>
                        <h5 class="fw-semibold text-success mb-0">$96k</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card border-0 zoom-in bg-light-info shadow-none">
                <div class="card-body">
                    <div class="text-center">
                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-connect.svg"
                            width="50" height="50" class="mb-3" alt="" />
                        <p class="fw-semibold fs-3 text-info mb-1">Reports</p>
                        <h5 class="fw-semibold text-info mb-0">59</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
              <div class="card w-100 bg-light-info overflow-hidden shadow-none">
                <div class="card-body position-relative">
                  <div class="row">
                    <div class="col-sm-7">
                      <div class="d-flex align-items-center mb-7">
                        <div class="rounded-circle overflow-hidden me-6">
                          <img src="dist/images/profile/user-1.jpg" alt="" width="40" height="40">
                        </div>
                        <h5 class="fw-semibold mb-0 fs-5">Selamat Datang Mathew Anderson!</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
                <h2>Saldo</h2>
                <div class="row">
                    <div class="col-sm-6 col-xl-3">
                        <div class="card bg-light-primary shadow-none">
                          <div class="card-body p-4">
                            <div class="d-flex align-items-center">
                              <div class="round rounded bg-primary d-flex align-items-center justify-content-center">
                                <i class="cc BTC text-white fs-7" title="BTC"></i>
                              </div>
                              <h5 class="mb-0 ms-1"><b>Simpanan Wajib</b></h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4">
                              <h3 class="mb-0 fw-semibold fs-7">Rp. 100.000.000</h3>
                            </div>
                            <span class="fw-bold">View</span>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card bg-light-danger shadow-none">
                          <div class="card-body p-4">
                            <div class="d-flex align-items-center">
                              <div class="round rounded bg-danger d-flex align-items-center justify-content-center">
                                <i class="cc BTC text-white fs-7" title="BTC"></i>
                              </div>
                              <h5 class="mb-0 ms-1"><b>Simpanan Sukarela</b></h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4">
                              <h3 class="mb-0 fw-semibold fs-7">Rp. 100.000.000</h3>
                            </div>
                            <span class="fw-bold">View</span>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card bg-light-success shadow-none">
                          <div class="card-body p-4">
                            <div class="d-flex align-items-center">
                              <div class="round rounded bg-success d-flex align-items-center justify-content-center">
                                <i class="cc BTC text-white fs-7" title="BTC"></i>
                              </div>
                              <h5 class="mb-0 ms-1"><b>Tabungan Lebaran</b></h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4">
                              <h3 class="mb-0 fw-semibold fs-7">Rp. 100.000.000</h3>
                            </div>
                            <span class="fw-bold">View</span>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h5 class="card-title fw-semibold">Weekly Stats</h5>
                  <p class="card-subtitle mb-0">Average sales</p>
                  <div id="weekly-stats" class="mb-4 mt-7"></div>
                  <div class="position-relative">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                      <div class="d-flex">
                        <div class="p-6 bg-light-primary rounded-2 me-6 d-flex align-items-center justify-content-center">
                          <i class="ti ti-grid-dots text-primary fs-6"></i>
                        </div>
                        <div>
                          <h6 class="mb-1 fs-4 fw-semibold">Top Sales</h6>
                          <p class="fs-3 mb-0">Johnathan Doe</p>
                        </div>
                      </div>
                      <div class="bg-light-primary badge">
                        <p class="fs-3 text-primary fw-semibold mb-0">+68</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                      <div class="d-flex">
                        <div class="p-6 bg-light-success rounded-2 me-6 d-flex align-items-center justify-content-center">
                          <i class="ti ti-grid-dots text-success fs-6"></i>
                        </div>
                        <div>
                          <h6 class="mb-1 fs-4 fw-semibold">Best Seller</h6>
                          <p class="fs-3 mb-0">Footware</p>
                        </div>
                      </div>
                      <div class="bg-light-success badge">
                        <p class="fs-3 text-success fw-semibold mb-0">+68</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="d-flex">
                        <div class="p-6 bg-light-danger rounded-2 me-6 d-flex align-items-center justify-content-center">
                          <i class="ti ti-grid-dots text-danger fs-6"></i>
                        </div>
                        <div>
                          <h6 class="mb-1 fs-4 fw-semibold">Most Commented</h6>
                          <p class="fs-3 mb-0">Fashionware</p>
                        </div>
                      </div>
                      <div class="bg-light-danger badge">
                        <p class="fs-3 text-danger fw-semibold mb-0">+68</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <div>
                    <h5 class="card-title fw-semibold">Yearly Sales</h5>
                    <p class="card-subtitle mb-0">Every month</p>
                    <div id="salary" class="mb-7 pb-8"></div>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="d-flex align-items-center">
                        <div class="bg-light-primary rounded-2 me-8 p-8 d-flex align-items-center justify-content-center">
                          <i class="ti ti-grid-dots text-primary fs-6"></i>
                        </div>
                        <div>
                          <p class="fs-3 mb-0 fw-normal">Total Sales</p>
                          <h6 class="fw-semibold text-dark fs-4 mb-0">$36,358</h6>
                        </div>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="bg-light rounded-2 me-8 p-8 d-flex align-items-center justify-content-center">
                          <i class="ti ti-grid-dots text-muted fs-6"></i>
                        </div>
                        <div>
                          <p class="fs-3 mb-0 fw-normal">Expenses</p>
                          <h6 class="fw-semibold text-dark fs-4 mb-0">$5,296</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h5 class="card-title fw-semibold">Payment Gateways</h5>
                  <p class="card-subtitle mb-7">Platform for Income</p>
                  <div class="position-relative">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                      <div class="d-flex">
                        <div class="p-8 bg-light-primary rounded-2 d-flex align-items-center justify-content-center me-6">
                          <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-paypal2.svg" alt="" class="img-fluid" width="24" height="24">
                        </div>
                        <div>
                          <h6 class="mb-1 fs-4 fw-semibold">PayPal</h6>
                          <p class="fs-3 mb-0">Big Brands</p>
                        </div>
                      </div>
                      <h6 class="mb-0 fw-semibold">+$6,235</h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                      <div class="d-flex">
                        <div class="p-8 bg-light-success rounded-2 d-flex align-items-center justify-content-center me-6">
                          <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-wallet.svg" alt="" class="img-fluid" width="24" height="24">
                        </div>
                        <div>
                          <h6 class="mb-1 fs-4 fw-semibold">Wallet</h6>
                          <p class="fs-3 mb-0">Bill payment</p>
                        </div>
                      </div>
                      <h6 class="mb-0 fw-semibold text-muted">+$345</h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                      <div class="d-flex">
                        <div class="p-8 bg-light-warning rounded-2 d-flex align-items-center justify-content-center me-6">
                          <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-credit-card.svg" alt="" class="img-fluid" width="24" height="24">
                        </div>
                        <div>
                          <h6 class="mb-1 fs-4 fw-semibold">Credit card</h6>
                          <p class="fs-3 mb-0">Money reversed</p>
                        </div>
                      </div>
                      <h6 class="mb-0 fw-semibold">+$2,235</h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-7 pb-1">
                      <div class="d-flex">
                        <div class="p-8 bg-light-danger rounded-2 d-flex align-items-center justify-content-center me-6">
                          <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-pie2.svg" alt="" class="img-fluid" width="24" height="24">
                        </div>
                        <div>
                          <h6 class="mb-1 fs-4 fw-semibold">Refund</h6>
                          <p class="fs-3 mb-0">Bill payment</p>
                        </div>
                      </div>
                      <h6 class="mb-0 fw-semibold text-muted">-$32</h6>
                    </div>
                  </div>
                  <button class="btn btn-outline-primary w-100">View all transactions</button>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <div class="mb-4">
                    <h5 class="card-title fw-semibold">Recent Transactions</h5>
                    <p class="card-subtitle">How to Secure Recent Transactions</p>
                  </div>
                  <ul class="timeline-widget mb-0 position-relative mb-n5">
                    <li class="timeline-item d-flex position-relative overflow-hidden">
                      <div class="timeline-time text-dark flex-shrink-0 text-end">09:30</div>
                      <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                        <span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"></span>
                        <span class="timeline-badge-border d-block flex-shrink-0"></span>
                      </div>                        
                      <div class="timeline-desc fs-3 text-dark mt-n1">Payment received from John Doe of $385.90</div>
                    </li>
                    <li class="timeline-item d-flex position-relative overflow-hidden">
                      <div class="timeline-time text-dark flex-shrink-0 text-end">10:00 am</div>
                      <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                        <span class="timeline-badge border-2 border border-info flex-shrink-0 my-8"></span>
                        <span class="timeline-badge-border d-block flex-shrink-0"></span>
                      </div>
                      <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New sale recorded <a href="javascript:void(0)" class="text-primary d-block fw-normal ">#ML-3467</a>
                      </div>
                    </li>
                    <li class="timeline-item d-flex position-relative overflow-hidden">
                      <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
                      <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                        <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                        <span class="timeline-badge-border d-block flex-shrink-0"></span>
                      </div>
                      <div class="timeline-desc fs-3 text-dark mt-n1">Payment was made of $64.95 to Michael</div>
                    </li>
                    <li class="timeline-item d-flex position-relative overflow-hidden">
                      <div class="timeline-time text-dark flex-shrink-0 text-end">09:30 am</div>
                      <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                        <span class="timeline-badge border-2 border border-warning flex-shrink-0 my-8"></span>
                        <span class="timeline-badge-border d-block flex-shrink-0"></span>
                      </div>
                      <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New sale recorded <a href="javascript:void(0)" class="text-primary d-block fw-normal ">#ML-3467</a>
                      </div>
                    </li>
                    <li class="timeline-item d-flex position-relative overflow-hidden">
                      <div class="timeline-time text-dark flex-shrink-0 text-end">09:30 am</div>
                      <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                        <span class="timeline-badge border-2 border border-danger flex-shrink-0 my-8"></span>
                        <span class="timeline-badge-border d-block flex-shrink-0"></span>
                      </div>
                      <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New arrival recorded <a href="javascript:void(0)" class="text-primary d-block fw-normal ">#ML-3467</a>
                      </div>
                    </li>
                    <li class="timeline-item d-flex position-relative overflow-hidden">
                      <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
                      <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                        <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>                          
                      </div>
                      <div class="timeline-desc fs-3 text-dark mt-n1">Payment Done</div>
                    </li>
                  </ul>                  
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-8 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-sm-flex d-block align-items-center justify-content-between mb-3">
                    <div class="mb-3 mb-sm-0">
                      <h5 class="card-title fw-semibold">Product Performances</h5>
                      <p class="card-subtitle">What Impacts Product Performance?</p>
                    </div>
                    <div>
                      <select class="form-select fw-semibold">
                        <option value="1">March 2023</option>
                        <option value="2">April 2023</option>
                        <option value="3">May 2023</option>
                        <option value="4">June 2023</option>
                      </select>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table align-middle text-nowrap mb-0">
                      <thead>
                        <tr class="text-muted fw-semibold">
                          <th scope="col" class="ps-0">Assigned</th>
                          <th scope="col">Progress</th>
                          <th scope="col">Priority</th>
                          <th scope="col">Budget</th>
                          <th scope="col">Chart</th>
                        </tr>
                      </thead>
                      <tbody class="border-top">
                        <tr>
                          <td class="ps-0">
                            <div class="d-flex align-items-center">
                              <div class="me-2 pe-1">
                                <img src="dist/images/products/product-1.jpg" class="rounded-2" width="48" height="48" alt="" />
                              </div>
                              <div>
                                <h6 class="fw-semibold mb-1">Minecraf App</h6>
                                <p class="fs-2 mb-0 text-muted">Jason Roy</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p class="mb-0 fs-3 text-dark">73.2%</p>
                          </td>
                          <td>
                            <span class="badge fw-semibold py-1 w-85 bg-light-success text-success">Low</span>
                          </td>
                          <td>
                            <p class="fs-3 text-dark mb-0">$3.5k</p>
                          </td>
                          <td>
                            <div id="table-chart"></div>
                          </td>
                        </tr>
                        <tr>
                          <td class="ps-0">
                            <div class="d-flex align-items-center">
                              <div class="me-2 pe-1">
                                <img src="dist/images/products/product-2.jpg" class="rounded-2" width="48" height="48" alt="" />
                              </div>
                              <div>
                                <h6 class="fw-semibold mb-1">Web App Project</h6>
                                <p class="fs-2 mb-0 text-muted">Mathew Flintoff</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p class="mb-0 fs-3 text-dark">56.8%</p>
                          </td>
                          <td>
                            <span class="badge fw-semibold py-1 w-85 bg-light-warning text-warning">Medium</span>
                          </td>
                          <td>
                            <p class="fs-3 text-dark mb-0">$3.5k</p>
                          </td>
                          <td>
                            <div id="table-chart-1"></div>
                          </td>
                        </tr>
                        <tr>
                          <td class="ps-0">
                            <div class="d-flex align-items-center">
                              <div class="me-2 pe-1">
                                <img src="dist/images/products/product-3.jpg" class="rounded-2" width="48" height="48" alt="" />
                              </div>
                              <div>
                                <h6 class="fw-semibold mb-1">Modernize Dashboard</h6>
                                <p class="fs-2 mb-0 text-muted">Anil Kumar</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p class="mb-0 fs-3 text-dark">25%</p>
                          </td>
                          <td>
                            <span class="badge fw-semibold py-1 w-85 bg-light-info text-info">Very high</span>
                          </td>
                          <td>
                            <p class="fs-3 text-dark mb-0">$3.5k</p>
                          </td>
                          <td>
                            <div id="table-chart-2"></div>
                          </td>
                        </tr>
                        <tr>
                          <td class="ps-0 border-bottom-0">
                            <div class="d-flex align-items-center">
                              <div class="me-2 pe-1">
                                <img src="dist/images/products/product-4.jpg" class="rounded-2" width="48" height="48" alt="" />
                              </div>
                              <div>
                                <h6 class="fw-semibold mb-1">Dashboard Co</h6>
                                <p class="fs-2 mb-0 text-muted">George Cruize</p>
                              </div>
                            </div>
                          </td>
                          <td class="border-bottom-0">
                            <p class="mb-0 fs-3 text-dark">96.3%</p>
                          </td>
                          <td class="border-bottom-0">
                            <span class="badge fw-semibold py-1 w-85 bg-light-danger text-danger">High</span>
                          </td>
                          <td class="border-bottom-0">
                            <p class="fs-3 text-dark mb-0">$3.5k</p>
                          </td>
                          <td class="border-bottom-0">
                            <div id="table-chart-3"></div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
</div>
