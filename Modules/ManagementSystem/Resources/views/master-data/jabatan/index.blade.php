@extends('layouts.master')
@section('title', 'E Office - Master Data Jabatan')
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
            <div class="card">
                <div class="card-body">
                    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#create-master-positions">
                        <i class="bi bi-plus fs-5"></i>
                        <span>Tambah Master Data Jabatan</span>
                    </button>
                    <x-datatable tableId="masterJabatan" :tableHeading="$tableHeading" />
                    @include('managementsystem::extraComponents.createMasterPositionModal')
                    @include('managementsystem::extraComponents.editMasterPositionModal')
                    @include('managementsystem::extraComponents.deleteMasterPositionModal')
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="/lib/module/management-system/master-data/jabatan/datatable.js"></script>
@endpush
