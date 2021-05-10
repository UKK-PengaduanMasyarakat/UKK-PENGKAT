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
                <div class="d-flex bd-highlight">
                    <div class="text-dark p-2 w-100 bd-highlight">Pengaduan Anda</div>
                    {{-- <div class="text-dark p-2 flex-shrink-1 bd-highlight">Flex item</div> --}}
                  </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                   <div>
                    <div id="accordion-child1">
                        <div class="card">
                            <div class="card-header bg-dark">
                                <h6 class="card-title">
                                    <a data-toggle="collapse" class="text-white" href="#accordion-item-nested-child1">Child accordion item #1</a>
                                </h6>
                            </div>

                            <div id="accordion-item-nested-child1" class="collapse show" data-parent="#accordion-child1">
                                <div class="card-body">
                                    <p style="color: black">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                    </p>
                                </div>
                            </div>
                        </div>

                       
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
