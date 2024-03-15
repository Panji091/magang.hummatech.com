@extends('admin.layouts.app')
@section('content')

<div class="card">
    <div class="card-body">
        <div class="row g-2">
            <div class="col-sm-4">
                <h3 class="mx-5">Divisi</h3>
            </div>
            <div class="col-sm-auto ms-auto d-flex">
                <div class="search-box mx-3">
                    <input type="text" class="form-control" id="searchMemberList" placeholder="Cari Siswa...">
                    <i class="ri-search-line search-icon"></i>
                </div>
                <div class="list-grid-nav hstack gap-1">
                    <button class="btn btn-success addMembers-modal" data-bs-toggle="modal" data-bs-target="#addmemberModal">
                        Tambah Data
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="fw-medium text-muted mb-0">Successful conversions</p>
                        <h2 class="mt-4 ff-secondary fw-bold">
                            <span class="counter-value" data-target="50"></span>
                        </h2>
                        <p class="mb-0 text-muted">
                            <span class="badge bg-light text-success mb-0">
                                <i class="ri-arrow-up-line align-middle">
                                    8.24 %
                                </i>
                            </span>
                            7 last week
                        </p>
                    </div>
                    <div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-success-subtle rounded-circle fs-2">

                            </span>
                        </div>
                        <div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
