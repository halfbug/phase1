@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Courses Registration</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('courses.create') }}"> Create New Course</a>
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
            <th>Duration</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($courses as $course)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->duration }}</td>
                <td>
                    <form action="{{ route('courses.destroy',$course->id) }}" method="POST">


                        <a class="btn btn-info" href="{{ route('courses.show',$course->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('courses.edit',$course->id) }}">Edit</a>


                        @csrf
                        @method('DELETE')


                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>




@endsection