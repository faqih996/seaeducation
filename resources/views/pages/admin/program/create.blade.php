
@extends('layouts.admin')

@section('content')

<section class="overview overflow-auto">
        <main class="main-wrapper">
            <div class="ps-lg-0">
                <h2 class="text-4xl fw-bold color-palette-1 mb-30">Add New Program</h2>
                <div class="top-up-categories mb-30">
                    <p class="text-lg fw-medium color-palette-1 mb-14"></p>
                    <div class="main-content">


                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <form action="/createprogram" method="post">
                                @csrf
                                <div class="col-sm-6">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Nama Program" value="{{ old('title') }}" required>
                                    @error('title')
                                    <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="Batch" class="form-label">Batch</label>
                                    <select class="form-select" name="batch_id" name="batch_id" id="">
                                        @foreach($batches as $batch)
                                            <option value="{{ $batch->id }}">{{ $batch->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('batch')
                                    <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="Body" class="form-label">Tentang Program</label>
                                    <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" placeholder="Tentang Program" value="{{ old('body') }}" required></textarea>
                                    @error('body')
                                    <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="start" class="form-label">Dimulai</label>
                                    <input type="date" class="form-control @error('title') is-invalid @enderror" name="start" id="start" placeholder="start" value="{{ old('start') }}" required>
                                    @error('start')
                                    <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="end" class="form-label">Berakhir</label>
                                    <input type="date" class="form-control @error('end') is-invalid @enderror" name="end" id="end" placeholder="end" value="{{ old('end') }}" required>
                                    <div class="invalid-feedback">
                                        @error('end')
                                                <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label for="status" class="form-label">Status</label>
                                    <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" id="status" placeholder="Status" value="{{ old('status') }}" required>
                                    <div class="invalid-feedback">
                                        @error('status')
                                                <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label for="Price" class="form-label">Price</label>
                                    <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" id="price" placeholder="price" value="{{ old('title') }}" required>
                                    @error('price')
                                    <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
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
