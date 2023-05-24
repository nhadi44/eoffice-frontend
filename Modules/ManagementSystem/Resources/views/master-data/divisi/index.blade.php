@extends('layouts.master')
@section('title', 'E Office - Master Data Divisi')
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
            <div class="card">
                <div class="card-body">
                    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#create-master-division"><i
                            class="bi bi-plus fs-5"></i>
                        <span>Tambah Master Data Divisi</span>

                    </button>
                    <x-datatable tableId="masterDivisi" :tableHeading="$tableHeading" />
                    @include('managementsystem::extraComponents.createMasterDivisiModal')
                    @include('managementsystem::extraComponents.editMasterDivisiModal')
                    @include('managementsystem::extraComponents.deleteMasterDivisiModal')
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="/lib/module/management-system/master-data/divisi/datatable.js"></script>
@endpush
