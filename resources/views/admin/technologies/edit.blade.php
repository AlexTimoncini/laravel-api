@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.technologies.update', $technology->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <input type="text" class="form-control" placeholder="Type Name" name="name" value="{{ old('name', $technology->name) }}">
                    </div>
                    <div class="col-12 input-group mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">#</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Choose a color exadecimal ex: #ffffff" name="border_color" value="{{ old('border_color', $technology->border_color) }}">
                    </div>
                    <div class="col-7 mx-auto">
                        <button type="submit" class="btn btn-primary d-block w-100 mt-2 mb-5">Save</button>
                    </div>
                </div>
            </form>
            <a href="{{ route('admin.index') }}" class="btn btn-primary mt-6 d-block">Back to dashboard</a>
        </div>
    </div>
</div>
@endsection