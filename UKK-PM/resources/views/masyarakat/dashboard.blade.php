@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{-- <div class="card-header">
                    <span style="color: black">Pengaduan anda  </span>

                    <span style="color: black; " class="d-flx justify-content-end" >Pengaduan anda  </span>

                </div> --}}









                    <div>
                        <div class="card-header bg-dark" style="margin-bottom: -5px;">
                            <h6 class="card-title text-center">
                                Form Pengaduan
                            </h6>
                        </div>
                        @if (session('pesan'))
                            <div id="alertt">
                                <div class="alert alert-success d-flex align-items-center "
                                    style="background-color: rgb(50, 255, 32);" role="alert">
                                    <i class="icon-checkmark4" style="color: white;"></i> &nbsp;
                                    <div class="text-dark" style="color: black;">
                                        <b>
                                            {{ session('pesan') }}

                                        </b>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <form action="{{ route('post.pengaduan') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group-row">
                                <br>
                                <div class="col-12 text-center">
                                    <img src="#" id="blah" style="heighwe have to defeat itt: 200px; width: 350px;" alt="">
                                </div>

                                <label class="col-form-label col-lg-12 text-dark">Upload Gambar</label>
                                <div class="col-lg-12" style="margin-bottom: -25px;">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('foto') is-invalid @enderror"
                                            id="imgInp" name="foto">
                                        <label class="custom-file-label" for="customFile">Masukan Gambar </label>
                                    </div>
                                    @error('foto')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-group-row">
                                <label class="col-form-label  col-lg-12 text-dark">Isi Laporan</label>
                                <div class="col-lg-12">
                                    <textarea rows="3" cols="10" name="isi_laporan" style="height: 90px;"
                                        class="form-control @error('isi_laporan') is-invalid @enderror "
                                        placeholder="Masukan laporan"></textarea>

                                    @error('isi_laporan')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <input type="hidden" name="nik" value="{{ Auth::guard('masyarakat')->user()->nik }}"
                                        id="">
                                </div>
                            </div>
                            <br>
                            <div class="form-group-row">
                                <div class="col-lg-12">
                                    <button class="btn " style="background-color: rgb(71, 95, 175);"><b>Kirim Pengaduan</b>
                                        <i class="icon-quill4"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>



                </div>




            </div>
        </div>
    </div>
    <br>
    <br>

    <div class="container">
        <div class="container content">
            <div class="row">
                <div class="card badge rounded-10 bg-secondary">
                    <div class="card-body d-flex justify-content-evenly d-flex align-items-center">
                        <div class="col-2">
                            <img src="" alt="" style="width: 200px;">
                        </div>
                        <div class="col-6" style="text-align: left;">
                            <h3>Fast Business Management in 30 minutes</h3>
                            <p>Our tools for business analysis helps an organization <br> understand market or business
                                development.
                            </p>
                        </div>
                        <div class="col-2">
                            <a href="#" class="btn btn-dark btn-lg mb-3" style="width: 200px;">Buy Now</a> <br>
                            <a href="#" class="btn btn-outline-dark btn-lg" style="width: 200px;">Demo Version</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
