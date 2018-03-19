@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Parents Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('parents.create') }}"> Create New Parents</a>
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
            <th>Mother Name</th>
            <th>Father Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($parents as $parent)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $parent->mother_name }}</td>
                <td>{{ $parent->father_name }}</td>
                <td>
                    <form action="{{ route('parents.destroy',$parent->id) }}" method="POST">


                        <a class="btn btn-info" href="{{ route('parents.show',$parent->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('parents.edit',$parent->id) }}">Edit</a>


                        @csrf
                        @method('DELETE')


                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


    {!! $parents->links() !!}


@endsection