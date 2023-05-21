@extends('layouts.master')
@section('title', 'E Office - Dashboard')
@section('content')
    <div class="col-12 col-lg-9">
        <div class="row">
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start ">
                                <div class="stats-icon purple mb-2">
                                    <i class="fa-solid fa-inbox"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                <h6 class="text-muted font-semibold">Surat Masuk</h6>
                                <h6 class="font-extrabold mb-0">112.000</h6>
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
                                    <i class="fa-solid fa-envelopes-bulk"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                <h6 class="text-muted font-semibold">Disposisi Masuk</h6>
                                <h6 class="font-extrabold mb-0">183.000</h6>
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
                                    <i class="fa-solid fa-paper-plane"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                <h6 class="text-muted font-semibold" style="font-size: 15px">Disposisi Keluar </h6>
                                <h6 class="font-extrabold mb-0">112</h6>
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
                                    <i class="fa-solid fa-clock"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                <h6 class="text-muted font-semibold">Surat Diproses</h6>
                                <h6 class="font-extrabold mb-0">80.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h4 class="card-header">Progres Surat</h4>
                    <div class="card-body">
                        <x-datatable :tableHeading="$tableHeading" />
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
                            <img src="assets/static/images/faces/1.jpg" alt="" srcset="">
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
        <div class="col-12 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Agenda Terbaru</h4>
                </div>
                <div class="card-content pb-4">
                    <div class="recent-message d-flex align-items-center px-4 py-3">
                        <div class="avatar avatar-lg">
                            <div class="calendar-icon">
                                <span class="calendar-date">{{ \Carbon\Carbon::now()->format('d') }}</span>
                                <span class="calendar-month">{{ \Carbon\Carbon::now()->translatedFormat('M') }}</span>
                            </div>
                        </div>
                        <div class="name ms-4">
                            <h5 class="mb-1">Meeting E Office</h5>
                            <h6 class="text-muted mb-0">{{ \Carbon\Carbon::now()->translatedFormat('d-M-Y H:i') }}</h6>
                        </div>
                    </div>
                    <div class="px-4">
                        <button class='btn btn-block btn-xl btn-outline-primary font-bold mt-3'>Lihat Agenda
                            Lainnya</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/lib/module/dashboard/datatable.js"></script>
@endsection
