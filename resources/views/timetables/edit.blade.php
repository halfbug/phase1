@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Time Table Details</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <form method="post" action="{{route('timetables.update',$timetable->id) }}" enctype="multipart/form-data" method="post">

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
                                    <label >Course Name</label>
                                    <select id="course_id" class="form-control" name="course_id" onchange="">
                                        @foreach($Courses as $tclass)
                                            <option value="{{ $tclass->id }}">{{ $tclass->name }}</option>
                                        @endforeach
                                    </select>                                </div>



                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input class="form-control" name="start_date" id="start_date" value="{{ $timetable->start_date }}">

                                </div>

                                <div class="form-group">
                                    <label>End Date</label>
                                    <input class="form-control" name="end_date" id="end_date" value="{{ $timetable->end_date }}">

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
        $('#end_date').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
        });
        $('#start_date').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
        });
    </script>
@endsection