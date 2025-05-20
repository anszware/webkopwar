<div class="container-fluid mw-100">
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100 bg-light-info overflow-hidden shadow-none">
                <div class="card-body position-relative">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="d-flex align-items-center mb-7">
                                <h5 class="fw-semibold mb-0 fs-5">Page Anggota</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100 bg-light-info overflow-hidden shadow-none">
                <div class="card-body position-relative">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="d-flex align-items-center mb-7">
                                <livewire:tables.dynamic-table model-class="App\\Models\\User" :columns="[
                                    ['label' => 'Nama', 'field' => 'name'],
                                    ['label' => 'Email', 'field' => 'email'],
                                    ['label' => 'Dibuat Pada', 'field' => 'created_at'],
                                ]"
                                    :enable-export="true" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
