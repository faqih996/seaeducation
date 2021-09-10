@extends('layouts.admin')

@section('content')

        <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800">Add New Member</h1>
            <p class="mb-4"> </p>
        </div>


        @if ($error->any())
            <div class="alert alert-danger">
                <ul>
                    @forech($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforech
                </ul>
            </div>
        @endif  


        <!-- Page Heading -->
        <div class="card-shadow">
            <div class="card-body">
                <form action="" method="post">

                    @csrf
                    <div class="form-group">
                        <label for="title">First Name</label>
                        <input type="text" class="form-control" name="first_name" placeholder="first name" value="{{old('title')}}">
                    </div>
                    <div class="form-group">
                        <label for="title">Last Name</label>
                        <input type="text" class="form-control" name="last_name" placeholder="last name" value="{{old('title')}}">
                    </div>
                    <div class="form-group">
                        <label for="title">Place of Birth</label>
                        <input type="text" class="form-control" name="place_of_birth" placeholder="place of birth" value="{{old('title')}}">
                    </div>
                    <div class="form-group">
                        <label for="title">Date Of Birth</label>
                        <input type="date" class="date_of_birth" name="date_of_birth" placeholder="date_of_birth" value="{{old('title')}}">
                    </div>
                    <div class="form-group">
                        <label for="title">Sex</label>
                        <input type="text" class="form-control" name="sex" placeholder="sex" value="{{old('title')}}">
                    </div>
                    <div class="form-group">
                        <label for="title">Address</label>
                        <input type="text" class="form-control" name="tittle" placeholder="tittle" value="{{old('title')}}">
                    </div>
                    <div class="form-group">
                        <label for="title">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="email" value="{{old('title')}}">
                    </div>
                    <div class="form-group">
                        <label for="title">Phone Number</label>
                        <input type="text" class="form-control" name="phone_number" placeholder="phone number" value="{{old('title')}}">
                    </div>

                    <button class="submit" class="btn btn-primary btn-block">
                        Save
                    </button>
                </form>  
            </div>
        </div>      

@endsection

