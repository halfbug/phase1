@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> Course Record</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <form method="post" action="{{route('courses.update',$course->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">



                    </div>
                    <div class="panel-body">
                        <div class="row">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label >Course Name</label>
                                    {{ $course->name }}
                                </div>



                                <div class="form-group">
                                    <label>Details </label>
                                   {{ $course->details}}

                                </div>
                                <div class="form-group">
                                    <label>Duration</label>
                                    {{ $course->duration }}


                                </div>
                                <div class="form-group">
                                    <label>Start Date</label>
                                   {{ $course->start_date }}
                                </div>
                                <div class="form-group">
                                    <label>End Date</label>
                                   {{ $course->end_date }}
                                </div>
                                <div class="form-group">
                                    <label>Assigned Class</label>
                                   {{ $course->level_id }}
                                </div>



                            </div>
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->

                    </div>
                    <!-- /.panel-body -->
                 
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </form>

@endsection


