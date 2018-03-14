@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Teachers Registration</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('teachers.create') }}"> Create New Teacher</a>
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
            <th>Father Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($teachers as $teachers)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $teachers->name }}</td>
                <td>{{ $teachers->father_name }}</td>
                <td>
                    <form action="{{ route('students.destroy',$teachers->id) }}" method="POST">


                        <a class="btn btn-info" href="{{ route('students.show',$teachers->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('students.edit',$teachers->id) }}">Edit</a>


                        @csrf
                        @method('DELETE')


                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


    {!! $teachers->links() !!}


@endsection