@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Course Record</h1>
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
                                    <label >Course Name</label>
                                    <input class="form-control" placeholder="Enter text" name="name" value="{{ $course->name }}">
                                </div>

                                <div class="form-group">
                                    <label>Course Details</label>
                                    <input class="form-control" placeholder="Enter text" name="details" value="{{ $course->details }}">

                                </div>

                                <div class="form-group">
                                    <label>Class/Level for course</label>
                                <select id="level_id" class="form-control" name="level_id">
                                    @foreach($Levels as $tclass)
                                    <option value="{{ $tclass->id }}" <?php echo ($tclass->id==$course->level_id)?'selected':''; ?>>{{ $tclass->name }}</option>
                                    @endforeach
                                </select>
                                </div>

                                <div class="form-group">
                                    <label>Duration</label>

                                    <input class="form-control" placeholder="e.g. One Month" name="duration" id="duration" value="{{ $course->duration }}">
                                </div>

								<div class="form-group">
                                    <label>Start Date</label>
                                    <input class="form-control" name="start_date" id="start_date" value="{{ $course->start_date }}">

                                </div>

                                 <div class="form-group">
                                    <label>End Date</label>
                                    <input class="form-control" name="end_date" id="end_date" value="{{ $course->end_date }}">

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


