
@extends('layouts.admin')

@section('content')

<section class="overview overflow-auto">
        <main class="main-wrapper">
            <div class="ps-lg-0">
                <h2 class="text-4xl fw-bold color-palette-1 mb-30">Edit gallery</h2>
                <div class="top-up-categories mb-30">
                    <p class="text-lg fw-medium color-palette-1 mb-14"></p>
                    <div class="main-content">


                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <form action="{{ url('gallery/update', $item->id ) }}" method="post">
                                @csrf

                                @csrf
                                <div class="col-sm-6 my-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Nama gallery" value="{{ old('title', $item->title) }}" required>
                                    @error('title')
                                    <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6 my-3">
                                    <label for="class" class="form-label">Class</label>
                                    <input type="text" class="form-control @error('class') is-invalid @enderror" name="class" id="class" placeholder="Nama gallery" value="{{ old('class', $item->class) }}" required>
                                    @error('class')
                                    <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6 my-3">
                                    <label for="batch_id" class="form-label">Batch</label>
                                    <select class="form-select" name="batch_id" name="batch_id" id="">
                                        @foreach($batches as $batch)
                                            @if(old('batch_id') == $batch->id)
                                            <option value="{{ $batch->id }}" selected>{{ $batch->name }}</option>
                                            @else
                                            <option value="{{ $batch->id }}" >{{ $batch->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>


                                <div class="col-sm-6 my-3">
                                    <label for="start" class="form-label">Dimulai</label>
                                    <input type="date" class="form-control @error('title') is-invalid @enderror" name="start_at" id="start_at" placeholder="start" value="{{ old('start_at', $item->start_at) }}" required>
                                    @error('start_at')
                                    <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6 my-3">
                                    <label for="end" class="form-label">Berakhir</label>
                                    <input type="date" class="form-control @error('end') is-invalid @enderror" name="end_at" id="end_at" placeholder="end" value="{{ old('end_at', $item->end_at) }}" required>
                                    <div class="invalid-feedback">
                                        @error('end_at')
                                                <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6 my-3">
                                    <label for="end_reg" class="form-label">Batas Pendaftaran</label>
                                    <input type="date" class="form-control @error('end') is-invalid @enderror" name="end_reg" id="end_reg" placeholder="end" value="{{ old('end_reg', $item->end_reg) }}" required>
                                    <div class="invalid-feedback">
                                        @error('end_reg')
                                                <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6 my-3">
                                    <label for="Price" class="form-label">Price</label>
                                    <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" id="price" placeholder="price" value="{{ old('price', $item->price) }}" required>
                                    @error('price')
                                    <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6 my-3">
                                    <label for="status" class="form-label">Status</label>
                                    <input type="Open" class="form-control @error('status') is-invalid @enderror" name="status" id="status" placeholder="status" value="{{ old('status', $item->status) }}" required>
                                    @error('status')
                                    <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <hr class="my-6">

                                    <div class="col-sm-6">
                                        <button type="update" class="btn btn-primary col-md-5">
                                            Edit
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
