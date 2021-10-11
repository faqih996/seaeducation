@extends('layouts.admin')

@section('content')

<section class="overview overflow-auto">
        <main class="main-wrapper">
            <div class="ps-lg-0">
                @if(session()->has('success'))
                            <div class="alert alert-success col-lg-8 alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if(session()->has('loginError'))
                            <div class="alert alert-danger col-lg-8 alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                <h2 class="text-4xl fw-bold color-palette-1 mb-30">Master Program</h2>
                <div class="top-up-categories mb-30">

                    <p class="text-lg fw-medium color-palette-1 mb-14"></p>
                    <div class="main-content">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="{{ url('createprogram') }}" class="btn btn-primary shadow-sm">
                                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Program
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="text-center">
                                        <tr>

                                            <th>Program</th>
                                            <th>Batch</th>
                                            <th>Start</th>
                                            <th>End</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody class="text-center">
                                        @forelse($items as $item)
                                            <tr>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->batch_id }}</td>
                                                <td>{{ $item->start_at }}</td>
                                                <td>{{ $item->end_at }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td>
                                                    <a href="{{ /*url('/updateprogram', $item->id)*/ }}" class="badge bg-info text-decoration-none">
                                                        <i class="fa fa-pencil-alt text-decoration-none">Update</i>
                                                    </a>
                                                    <form action="{{ /*url('/program', $item->id)*/ }}" method="post"
                                                        class="d-inline">

                                                        <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')">
                                                           <span data-feather="x-circle">Hapus</span>
                                                        </button>
                                                    </form>
                                                </td>
                                        @empty
                                                <tr>
                                                    <td colspan="7" class="text-center">
                                                        Data Kosong
                                                    </td>
                                                </tr>

                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
        </div>
</section>
@endsection