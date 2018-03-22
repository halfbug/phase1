@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Time Table </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('timetables.create') }}"> Create New Time Table</a>
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
            <th>Course Name</th>

            <th>Start Date </th>
            <th>End  Date </th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($timetable as $time_table)
            <tr>
                <td>{{ ++$i }}</td>



                    <td>{{ $time_table->course->name }}</td>




                <td>{{ $time_table->start_date }}</td>
                <td>{{ $time_table->end_date}}</td>
                <td>
                    <form action="{{ route('timetables.destroy',$time_table->id) }}" method="POST">



                        <a class="btn btn-primary" href="{{ route('timetables.edit',$time_table->id) }}">Edit</a>


                        @csrf
                        @method('DELETE')


                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>




@endsection