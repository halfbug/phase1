@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Teacher Record</h1>
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

                            <div class="col-lg-6">
                                <button type="reset" class="btn btn-lg btn-default">Reset</button>
                            </div>
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-lg btn-primary pull-right ">&nbsp;&nbsp;&nbsp;&nbsp;Update&nbsp;&nbsp;&nbsp;&nbsp;</button>
                            </div>
                        </div>

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
                                    <input class="form-control"  placeholder="Name" name="name"  value="{{ $teacher->name }}">
                                </div>



                                <div class="form-group">
                                    <label>Father's Name </label>
                                    <input class="form-control" placeholder="Father Name" name="father_name"  value="{{ $teacher->father_name}}">

                                </div>
                                <div class="form-group">
                                    <label>Gender</label>

                                    <input checked="checked" name="gender" type="radio" value="male" >Male &nbsp;
                                    <input  name="gender" type="radio" value="female">Female
                                </div>
                                <div class="form-group">
                                    <label>Religion</label>
                                    <input class="form-control" placeholder="Enter text" name="religion" value="{{ $teacher->religion }}">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input class="form-control" placeholder="Enter text" name="address"  value="{{ $teacher->address }}">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input class="form-control" placeholder="Enter text" name="phone"  value="{{ $teacher->phone }}">
                                </div>


                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" placeholder="Enter text" name="email"  value="{{ $teacher->email }}">

                                </div>
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input class="form-control" placeholder="Enter text" name="date_of_birth"  value="{{ $teacher->date_of_birth }}">

                                </div>

                                <div class="form-group">
                                    <label>Apply For Class</label>
                                    <input class="form-control" placeholder="Enter text" name="for_class"  value="{{ $teacher->for_class }}">
                                </div>





                            </div>
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->

                    </div>
                    <!-- /.panel-body -->
                    <div class="panel-footer">
                        <div class="row">

                            <div class="col-lg-6">
                                <button type="reset" class="btn btn-lg btn-default">Reset</button>
                            </div>
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-lg btn-primary pull-right ">&nbsp;&nbsp;&nbsp;&nbsp;Save&nbsp;&nbsp;&nbsp;&nbsp;</button>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </form>

@endsection


