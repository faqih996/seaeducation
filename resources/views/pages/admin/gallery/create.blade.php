
@extends('layouts.admin')

@section('content')

<section class="overview overflow-auto">
        <main class="main-wrapper">
            <div class="ps-lg-0">
                <h2 class="text-4xl fw-bold color-palette-1 mb-30">Add New gallery</h2>
                <div class="top-up-categories mb-30">
                    <p class="text-lg fw-medium color-palette-1 mb-14"></p>
                    <div class="main-content">


                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-sm-6 my-3">
                                    <label for="program_id" class="form-label">Program</label>
                                    <select class="form-select" name="program_id" id="program_id">
                                        @foreach($programs as $program)
                                            @if(old('program_id') == $program->id)
                                                <option value="{{ $program->id }}" selected>{{ $program->title }}</option>
                                            @else
                                                <option value="{{ $program->id }}" >{{ $program->title }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-sm-6 my-3">
                                    <label for="class" class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image" placeholder="image" required>
                                    @error('class')
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
