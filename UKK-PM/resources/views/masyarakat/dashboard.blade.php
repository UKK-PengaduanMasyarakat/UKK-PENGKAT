@extends('layouts.auth')

@section('content')

    <div class="container">
        <div class="container ms-5">
                    <br>
                    <br>
            <div class="row">
                <div class="col-11">
                    <div id="myDIV" style="background-color: white; border-radius: 20px;">
                        <div class="container">
                            <div class="container content">
                                <div class="row">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                    
                    
                    
                                        @forelse ($pengaduan as $pengadu)
                                            <div class="accordion-item " style="border-radius: 15px;">
                                                <h2 class="accordion-header" id="flush-heading{{ $loop->iteration }}">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapse{{ $loop->iteration }}" aria-expanded="false"
                                                        aria-controls="flush-collapseOne">
                                                        <div class="col-5 text-dark">
                                                            {{ $pengadu->judul_laporan }}
                    
                                                        </div>
                                                        <div class="col-5 ">
                                                            <span class="badge bg-info">{{ $pengadu->status == '0' ? 'proses' : '' }}</span>
                    
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse{{ $loop->iteration }}" class="accordion-collapse collapse"
                                                    aria-labelledby="flush-heading{{ $loop->iteration }}"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="card mb-3" style="max-width: 100%; border: none;">
                                                        <div class="row g-0">
                                                            <div class="col-md-4">
                                                                <img src="{{ asset('pengaduan/' . $pengadu->foto) }}"
                                                                    style="width: 200px; height: 120px;" alt="...">
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="card-body">
                                                                    <p class="card-text" style=" width: 600px;
                                                              height: 110px;
                                                              overflow: auto;
                                                              color: black;">
                                                                        {{ $pengadu->isi_laporan }}
                                                                    </p>
                                                                    <p class="card-text"><small
                                                                            class="text-muted">{{ $pengadu->created_at->diffForHumans() }}</small>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                    
                    
                                        @endforelse
                                    </div>
                    
                                </div>
                                {{ $pengaduan->links() }}
                            </div>
                        </div>
                        </div>
                </div>

            </div>
        </div>
    </div>
    <br><br>

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
                            <br>

                            <div class="form-group-row">
                                <label class="col-form-label  col-lg-12 text-dark">Judul Laporan</label>
                                <div class="col-lg-12">
                                    <input type="text" class="form-control @error('judul_laporan') is-invalid @enderror"
                                        name="judul_laporan">

                                    @error('judul_laporan')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group-row">
                                <label class="col-form-label  col-lg-12 text-dark">Isi Laporan</label>
                                <div class="col-lg-12">
                                    <textarea rows="3" cols="10" name="isi_laporan" style="height: 90px;"
                                        class="form-control @error('isi_laporan') is-invalid @enderror "
                                        placeholder="Masukan laporan"></textarea>

                                    @error('isi_laporan')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <input type="hidden" name="nik" value="{{ $user->nik }}" id="">
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

  
@endsection
