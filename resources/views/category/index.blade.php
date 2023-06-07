@extends('category.layout')

@section('content')
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Category Management</h2>

            </div>
<br><br>
            <div class="pull-left">

                <a class="btn btn-success" href="{{ route('music.index') }}"> Management Music</a>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('category.create') }}"> Create New Category</a>

            </div>

        </div>

    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>
    @endif

    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Name</th>

            <th>Details</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($categories as $key => $category)
            <tr>

                <td>{{ $key + 1 }}</td>

                <td>{{ $category->name }}</td>

                <td>{{ $category->category_description }}</td>

                <td>

                    <form action="{{ route('category.destroy', $category->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('category.show', $category->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('category.edit', $category->id) }}">Edit</a>

                        <a class="btn btn-primary" href="{{ route('category.destroy', $category->id) }}">Delete</a>

                    </form>

                </td>

            </tr>
        @endforeach

    </table>
@endsection
