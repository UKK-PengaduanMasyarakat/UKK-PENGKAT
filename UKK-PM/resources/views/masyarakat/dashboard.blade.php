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


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div>
                        <div class="card-header bg-dark" style="margin-bottom: -5px;">
                            <h6 class="card-title text-center">
                                Form Pengaduan
                            </h6>
                        </div>
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group-row">
                                <br>
                                <div class="col-12 text-center">
                                    <img src="#" id="blah" style="heighwe have to defeat itt: 200px; width: 350px;" alt="">
                                </div>

                                <label class="col-form-label col-lg-12 text-dark">Upload Gambar</label>
                                <div class="col-lg-12" style="margin-bottom: -25px;">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="imgInp" name="foto">
                                        <label class="custom-file-label" for="customFile">Masukan Gambar </label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group-row">
                                <label class="col-form-label  col-lg-12 text-dark">Isi Laporan</label>
                                <div class="col-lg-12">
                                    <textarea rows="3" cols="10"  name="isi_laporan"style="height: 90px;" class="form-control"
                                        placeholder="Masukan laporan"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="form-group-row">
                                <div class="col-lg-12">
                                    <button class="btn " style="background-color: rgb(71, 95, 175);"><b>Kirim Pengaduan</b> <i class="icon-quill4"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>



                </div>
            </div>
        </div>
    </div>
@endsection
