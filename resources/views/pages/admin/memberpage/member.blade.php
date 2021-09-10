@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Data Member</h1>
                        <p class="mb-4"> </p>
    
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <div class="btn-group-sm">
                                    <a href="#" class="btn btn-outline-success">Semua</a>
                                    <a href="#" class="btn btn-outline-success">Jakarta</a>
                                    <a href="#" class="btn btn-outline-success">Bali</a>
                                    <a href="#" class="btn btn-outline-success">Medan</a>
                                    <a href="#" class="btn btn-outline-success">Surabaya</a>
                                    <button type="button" class="btn btn-primary float-sm-right">
                                        Tambah Data
                                    </button>
                                  </div>
                                  <!-- Button trigger modal -->
                                
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nama Depan</th>
                                                <th>Nama Belakang</th>
                                                <th>Jenis Kelamin</th>
                                                <th>tempat Lahir</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                        @foreach ($data_members as $member)
                                            <tr>
                                              <th>{{$member->nama_depan}}</th>
                                                <th>{{$member->nama_belakang}}</th>
                                                <th>{{$member->jenis_kelamin}}</th>
                                                <th>{{$member->tempat_lahir}}</th>
    
                                            </tr> 
                                        @endforeach   
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </div>


@endsection

