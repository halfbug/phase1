@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> Student Record</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <form method="post" action="{{route('students.update',$student->id) }}" enctype="multipart/form-data">
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
                                    <label >Student Name</label>
                                    {{ $student->name }}
                                </div>



                                <div class="form-group">
                                    <label>Father's Name </label>
                                   {{ $student->father_name}}

                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    {{ $student->gender }}


                                </div>
                                <div class="form-group">
                                    <label>Religion</label>
                                   {{ $student->religion }}
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                   {{ $student->address }}
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                   {{ $student->phone }}
                                </div>


                                <div class="form-group">
                                    <label>Email</label>
                                    {{ $student->email }}

                                </div>
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                  {{ $student->date_of_birth }}

                                </div>

                                <div class="form-group">
                                    <label>Apply For Class</label>
                                  {{ $student->for_class }}
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


