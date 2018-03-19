@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> Teachers Record</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <form method="post" action="{{route('teachers.update',$teacher->id) }}" enctype="multipart/form-data">
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
                                    <label >Teacher Name</label>
                                    {{ $teacher->name }}
                                </div>



                                <div class="form-group">
                                    <label>Father's Name </label>
                                   {{ $teacher->father_name}}

                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    {{ $teacher->gender }}


                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                   {{ $teacher->email }}
                                </div>
                                <div class="form-group">
                                    <label>Joining Date</label>
                                   {{ $teacher->joindate }}
                                </div>
                                <div class="form-group">
                                    <label>Assigned Class</label>
                                   {{ $teacher->assigned_class }}
                                </div>
                                <div class="form-group">
                                    <label>Religion</label>
                                   {{ $teacher->religion }}
                                </div>
                                <div class="form-group">
                                    <label>Religion</label>
                                   {{ $teacher->religion }}
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                   {{ $teacher->address }}
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                   {{ $teacher->phone }}
                                </div>


                                <div class="form-group">
                                    <label>Email</label>
                                    {{ $teacher->email }}

                                </div>
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                  {{ $teacher->date_of_birth }}

                                </div>

                                <div class="form-group">
                                    <label>Apply For Class</label>
                                  {{ $teacher->for_class }}
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


