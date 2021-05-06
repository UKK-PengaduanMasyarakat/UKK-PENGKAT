@extends('layouts.auth')

@section('content')
<section id="register">
    <div class="container">
        <div class="card m-auto headcard text-center shadow">
            <h1 class="fw-bold text-white fs-5">SIGN UP</h1>
        </div>
        <div class="card formcard shadow m-auto ">
            <div class="mt-3">
                <form method="POST" action="{{ route('register') }}" class="mt-5">
                    @csrf
                    <!-- nik -->
                    <div class="input-group pb-3 m-auto" style="width: 350px; ">
                        <span class="input-group-text  fs-6"><i class="fas fa-id-card"></i></span>
                        <input id="nik" type="text" class="form-control" placeholder="NIK" style="font-size: 14px;"name="nik" value="{{ old('nik') }}" >
                        @error('nik')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!-- nama -->
                    <div class="input-group pb-3 m-auto" style="width: 350px; ">
                        <span class="input-group-text  fs-6"><i class="fas fa-user"></i></span>
                        <input id="nama" type="text" class="form-control" placeholder="Nama" style="font-size: 14px;" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!-- phone -->
                    <div class="input-group pb-3 m-auto" style="width: 350px; ">
                        <span class="input-group-text  fs-6"><i class="fas fa-phone"></i></span>
                        <input id="telp" type="text" class="form-control " placeholder="Telephone" style="font-size: 14px;" name="telp"value="{{ old('telp') }}" >
                    </div>
                    <!-- username -->
                    <div class="input-group pb-3 m-auto" style="width: 350px; ">
                        <span class="input-group-text  fs-6"><i class="far fa-user"></i></span>
                        <input id="username" type="text" class="form-control" placeholder="Username"style="font-size: 14px;" name="username" value="{{ old('username') }}">
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!-- password -->
                    <div class="input-group pb-3 m-auto" style="width: 350px; ">
                        <span class="input-group-text  fs-6"><i class="fas  fa-lock"></i></span>
                        <input id="password" type="password" class="form-control" placeholder="Password"style="font-size: 14px;" name="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!-- konfirmasi password -->
                    <div class="input-group pb-3 m-auto" style="width: 350px; ">
                        <span class="input-group-text  fs-6"><i class="fas fa-unlock-alt"></i></span>
                        <input id="password-confirm" type="password" class="form-control " placeholder="Konfirmasi password"style="font-size: 14px;" name="confirm_password" >
                    </div>
                    
                    <div class="">
                        <button type="submit" class="btn text-white mt-2">DAFTAR</button>
                        <!-- <a href="">Sudah punya akun? Login</a> -->
                    </div>
                    <div class="text-center mt-3"style="font-weight: 300; font-size: 14px;">Sudah punya akun? <a href="{{ route('login') }}"> Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
