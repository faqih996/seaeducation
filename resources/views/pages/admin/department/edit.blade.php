
@extends('layouts.admin')

@section('content')

<section class="overview overflow-auto">
        <main class="main-wrapper">
            <div class="ps-lg-0">
                <h2 class="text-4xl fw-bold color-palette-1 mb-30">Edit Department</h2>
                <div class="top-up-categories mb-30">
                    <p class="text-lg fw-medium color-palette-1 mb-14"></p>
                    <div class="main-content">


                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <form action="/updatedepartment" method="post">
                                @method('PUT')
                                @csrf
                                <div class="col-sm-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Department" value="{{ $item->name }}" required>
                                    @error('name')
                                    <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="slug" class="form-label">Slug</label>
                                    <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" placeholder="" value="{{ $item->slug }}" required>
                                    @error('name')
                                    <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="status" class="form-label">Status</label>
                                    <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" id="status" placeholder="Status" value="{{ $item->status }}" required>
                                    <div class="invalid-feedback">
                                        @error('status')
                                                <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>

                                <hr class="my-6">

                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-primary col-md-5">
                                            Simpan
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</section>
@endsection
