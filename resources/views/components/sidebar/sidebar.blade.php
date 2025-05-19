<aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
          <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="index.html" class="text-nowrap logo-img">
              <img src="{{asset('dist/images/title_app.png')}}" class="dark-logo" width="180" alt="" />
              <img src="{{asset('dist/images/title_app.png')}}" class="light-logo"  width="180" alt="" />
            </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
              <i class="ti ti-x fs-8 text-muted"></i>
            </div>
          </div>
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav scroll-sidebar pb-5" data-simplebar>
            <ul id="sidebarnav">
              <!-- =================== -->
              <!-- Dashboard -->
              <!-- =================== -->
              <x-sidebar.item href="/dashboard" icon="ti ti-layout">
                Dashboard
              </x-sidebar.item>
              <!-- ============================= -->
              <!-- Layanan -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Layanan</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="index2.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-album"></i>
                  </span>
                  <span class="hide-menu">Pengajuan</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="index3.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-wallet"></i>
                  </span>
                  <span class="hide-menu">Simpanan Anggota</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="index4.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-stack-pop"></i>
                  </span>
                  <span class="hide-menu">Pinjaman Anggota</span>
                </a>
              </li>
              <!-- ============================= -->
              <!-- Master Data -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Master Data</span>
              </li>
              <x-sidebar.item href="/data/anggota" icon="ti ti-users">
                Anggota
              </x-sidebar.item>
              <x-sidebar.item href="/data/petugas" icon="ti ti-user">
                Petugas
              </x-sidebar.item>
              <x-sidebar.item href="/data/layanan" icon="ti ti-list-check">
                Layanan
              </x-sidebar.item>
              <!-- ============================= -->
              <!-- Laporan -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Laporan</span>
              </li>
              <!-- =================== -->
              <!-- Form Elements -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-file-text"></i>
                  </span>
                  <span class="hide-menu">Transaksi</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-inputs.html" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Pemasukan</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-input-groups.html" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Pengeluaran</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="form-striped-row.html" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-file-analytics"></i>
                  </span>
                  <span class="hide-menu">SHU</span>
                </a>
              </li>
            </ul>
          </nav>
          <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3">
            <div class="hstack gap-3">
              <div class="john-img">
                <img src="{{ asset('dist/images/profile/user-1') }}" class="rounded-circle" width="40" height="40" alt="">
              </div>
              <div class="john-title">
                <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
                <span class="fs-2 text-dark">Designer</span>
              </div>
              <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                <i class="ti ti-power fs-6"></i>
              </button>
            </div>
          </div>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
