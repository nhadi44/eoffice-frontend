@extends('layouts.master')
@section('title', 'E Office - Master Data Karyawan')
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
            <div class="card">
                <div class="card-body">
                    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#create-master-employee">
                        <i class="bi bi-plus fs-5"></i>
                        <span>Tambah Master Data Karyawan</span>
                    </button>
                    <x-datatable tableId="masterKaryawan" :tableHeading="$tableHeading" />
                    @include('managementsystem::extraComponents.createMasterKaryawanModal')
                    @include('managementsystem::extraComponents.editMasterKaryawanModal')
                    @include('managementsystem::extraComponents.deleteMasterKaryawanModal')
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="/lib/module/management-system/master-data/karyawan/datatable.js"></script>
    <script src="/assets/extensions/flatpickr/flatpickr.min.js"></script>
    <script src="/assets/static/js/pages/date-picker.js"></script>
@endpush
