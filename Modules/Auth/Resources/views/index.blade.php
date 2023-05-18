@extends('auth::layouts.master')
@section('content')
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo mb-5">
                <h2 class="text-primary">E Office</h2>
                <h5 class="text-muted">PT Bringin Inti Teknologi</h5>
            </div>
            <h1 class="auth-title">Log in.</h1>
            <p class="auth-subtitle mb-4">Login menggunakan akun yang sudah didaftarkan</p>
            <form id="eofficeLoginForm">
                @csrf
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" name="username" placeholder="Username">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl" name="password" placeholder="Password">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <div class="form-check form-check-lg d-flex align-items-end">
                    <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label text-gray-600" for="flexCheckDefault">
                        Keep me logged in
                    </label>
                </div>
                <a href="/" class="btn btn-primary btn-block btn-lg shadow-lg mt-4">Log
                    in</a>
            </form>
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div>
    <script src="/lib/module/auth/login.js"></script>
@endsection
