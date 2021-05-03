@extends('layouts.admin')

@section('content')
    <div class="page-header page-header-light">


        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('petugas.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                        Home</a>
                    <span class="breadcrumb-item active">Masyarakat</span>
                    <span class="breadcrumb-item active">Data Masyarakat</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="breadcrumb justify-content-center">
                    <a href="#" class="breadcrumb-elements-item">
                        <i class="icon-comment-discussion mr-2"></i>
                        Support
                    </a>

                    <div class="breadcrumb-elements-item dropdown p-0">
                        <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-gear mr-2"></i>
                            Settings
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                            <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                            <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                {{-- <div class="card">

                <table class="table datatable-basic">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Job Title</th>
                            <th>DOB</th>
                            <th>Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>Cicely</td>
                            <td>Sigler</td>
                            <td><a href="#">Senior Research Officer</a></td>
                            <td>15 Mar 1960</td>
                            <td><span class="badge badge-info">Pending</span></td>
                            <td class="text-center">
                                <div class="list-icons">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                            <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                            <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> --}}
                <div class="card">
                    @if ($message = Session::get('success'))
                    <div class="alert bg-success text-white alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                        <span class="font-weight-semibold">Success!</span> {{$message}} 
                    </div>   
                    @endif




                    <div class="table-responsive">
                        <div class="card-header header-elements-inline">
                            <h4 class="card-title">Data Masyarakat</h4>
                            
                        </div>
    
                        <table class="table">
                            <thead>
                                <tr class="text-center">
                                    <th>NO</th>
                                    <th>Nik</th>
                                    <th>Nama</th>
                                    <th>Telp</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($masyarakat as $mass)
                                    @if (($loop->iteration % 3) === 1)
                                        <tr class="bg-info text-center">
                                            <td><b>{{ $loop->iteration }}</b></td>
                                        @elseif (($loop->iteration % 2) === 0)
                                        <tr class=" text-center" style="background-color: yellow;">
                                            <td><b>{{ $loop->iteration }}</b></td>
                                        @else
                                        <tr class="bg-dark text-center">
                                            <td><b>{{ $loop->iteration }}</b></td>
                                        @endif
                                            <td><b>{{ $mass->nik }}</b></td>
                                            <td><b>{{ $mass->nama }}</b></td>
                                            <td><b>{{ $mass->telp }}</b></td>
                                           <td>
                                            <form action="{{route('delete.masyarakat',$mass->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                
                                                <a href="{{route('edit.masyarakat',[$mass->id])}}" class="btn btn-warning">Edit</a>
            
                                                <button type="submit" class="btn btn-danger " >Delete</button> 
                                            </form>
                                           </td>
                                        </tr>
                                        
                                        
                                    @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $masyarakat->links() }}

            </div>
        </div>
    </div>
@endsection
