@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Teacher Registration</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <form method="post" action="{{ route('teachers.store') }}" enctype="multipart/form-data" method="post">

        @csrf

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">

                            <div class="col-lg-6">
                                <button type="reset" class="btn btn-lg btn-default">Reset</button>
                            </div>
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-lg btn-primary pull-right ">&nbsp;&nbsp;&nbsp;&nbsp;Save&nbsp;&nbsp;&nbsp;&nbsp;</button>
                            </div>
                        </div>

                    </div>
                    <div class="panel-body">
                        <div class="row">
                            @if ($errors->any())
                                <div class="alert alert-dangeNr">
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
                                    <input class="form-control" placeholder="Enter text" name="name">
                                </div>

                                <div class="form-group">
                                    <label>Father's Name </label>
                                    <input class="form-control" placeholder="Enter text" name="father_name">

                                </div>
                                <div class="form-group">
                                    <label>Gender</label>

                                    <input checked="checked" name="gender" type="radio" value="male" >Male &nbsp;
                                    <input  name="gender" type="radio" value="female">Female
                                </div>
                                 <div class="form-group">
                                    <label>Date of Joining</label>
                                    <input class="form-control" placeholder="Enter text" name="join_date" id="join_date">

                                </div>

                                <div class="form-group">
                                    <label>Assigned Class</label>
                                <select id="assigned_class" class="form-control" name="assigned_class" onchange="">
                                    @foreach($Levels as $tclass)
                                    <option value="{{ $tclass->name }}">{{ $tclass->name }}</option>
                                    @endforeach
                                </select>
                                </div>
                               <div class="form-group">
                                    <label>Religion</label>
                                    <input class="form-control" placeholder="Enter text" name="religion">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input class="form-control" placeholder="Enter text" name="address">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input class="form-control" placeholder="Enter text" name="phone">
                                </div>


                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" placeholder="Enter text" name="email">

                                </div>
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input class="form-control" placeholder="Enter text" name="date_of_birth" id="date_of_birth">

                                </div>
                                <div class="form-group">
                                    <label>Marital Status</label>
                                <select id="maritalstatus" class="form-control" name="maritalstatus" >
                                    <option value="Married">Married</option>
                                    <option value="Unmarried">Unmarried</option>
                                </select>
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

@section('script')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
        $('#date_of_birth').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
        });
        $('#join_date').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
        });
    </script>
@endsection