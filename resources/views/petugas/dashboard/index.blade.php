@extends('layouts.index')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                {{-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Selamat Datang KasirLink</li>
                    </ol>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4>Selamat Datang, {{ Auth::user()->name }}!</h4>
                            </div>
                        </div>
                    </div>
                </div>                          
            </div>
        </div>
    </section>

    <!-- /.content -->
@endsection
