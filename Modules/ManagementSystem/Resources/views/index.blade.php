@extends('layouts.master')
@section('title', 'E Office - Manajement Sistem')
@section('content')
    <div class="col-12 col-lg-9">
        <div class="row">
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start ">
                                <div class="stats-icon purple mb-2">
                                    <i class="fa-solid fa-microchip"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                <h6 class="text-muted font-semibold">CPU</h6>
                                <h6 class="font-extrabold mb-0">50%</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start ">
                                <div class="stats-icon blue mb-2">
                                    <i class="fa-solid fa-memory"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                <h6 class="text-muted font-semibold">RAM</h6>
                                <h6 class="font-extrabold mb-0">70%</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start ">
                                <div class="stats-icon green  mb-2">
                                    <i class="fa-solid fa-hard-drive"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                <h6 class="text-muted font-semibold" style="font-size: 15px">Penyimpanan</h6>
                                <h6 class="font-extrabold mb-0">75%</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start ">
                                <div class="stats-icon red mb-2">
                                    <i class="fa-solid fa-database"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                <h6 class="text-muted font-semibold">Database</h6>
                                <h6 class="font-extrabold mb-0">90%</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h4 class="card-header">Log Operasi</h4>
                    <div class="card-body">
                        <x-datatable tableId="logTable" :tableHeading="$tableHeading" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-3">
        <div class="col-12 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Identitas User</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center mb-3">
                        <div class="avatar avatar-xl bg-warning me-3">
                            <img src="/assets/static/images/faces/1.jpg" alt="" srcset="">
                        </div>
                    </div>
                    <div class="text-center">
                        <h4>Hadi Nurhidayat</h4>
                        <div class="d-flex gap-2 align-items-center justify-content-center">
                            <h6 class="text-muted m-0">Frontend Developer</h6> <span> | </span>
                            <h6 class="text-muted m-0">DPSS</h6>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="/lib/module/management-system/dashboard/datatable.js"></script>
@endpush
