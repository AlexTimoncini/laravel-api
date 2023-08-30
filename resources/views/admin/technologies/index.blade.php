@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Border Color</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($technologies as $technology)
                    <tr>
                        <th scope="row">{{ $technology->id }}</th>
                        <td class="fs-4">{{ $technology->name }}</td>
                        <td>
                            <p style="border: 2px solid {{$technology->border_color}};" class="text-center fs-5">
                                {{ $technology->border_color }}
                            </p>
                        </td>
                        <td class="d-flex flex-shrink-0 pb-4">
                            <a href="{{ route('admin.technologies.show', $technology) }}" class="btn btn-primary flex-grow-1">Show {{ $technology->name }} Projects</a>
                            <a href="{{ route('admin.technologies.edit', $technology) }}" class="btn btn-warning mx-2">Edit</a>
                            <form action="{{ route('admin.technologies.destroy', $technology) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $technologies->links() }}

            <a href="{{ route('admin.index') }}" class="btn btn-primary">Back to Dashboard</a>
        </div>
    </div>
</div>
@endsection