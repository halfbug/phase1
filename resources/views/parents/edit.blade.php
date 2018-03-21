@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Parents Details</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <form method="post" action="{{route('parents.update',$parent->id) }}" enctype="multipart/form-data" method="post">

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

                                    <h3> Mother's Information</h3>

                                    <label >Mother's Name</label>
                                    <input class="form-control" placeholder="Enter text" name="mother_name" value="{{ $parent->mother_name }}">
                                </div>
                                <div class="form-group">
                                    <label >Home Phone</label>
                                    <input class="form-control" placeholder="Enter text" name="m_home_phone">
                                </div>

                                <div class="form-group">
                                    <label>Work Phone </label>
                                    <input class="form-control" placeholder="Enter text" name="m_work_phone">

                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" placeholder="Enter text" name="m_email">
                                </div>
                                <div class="form-group">
                                    <h3> Father's Information</h3>
                                    <label>Father's Name</label>
                                    <input class="form-control" placeholder="Enter text" name="father_name">
                                </div>
                                <div class="form-group">
                                    <label>Occupation</label>
                                    <input class="form-control" placeholder="Enter text" name="father_job">
                                </div>
                                <div class="form-group">
                                    <label>Home Phone</label>
                                    <input class="form-control" placeholder="Enter text" name="f_home_phone">
                                </div>


                                <div class="form-group">
                                    <label>Work Phone</label>
                                    <input class="form-control" placeholder="Enter text" name="f_work_phone">

                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" placeholder="Enter text" name="f_email">

                                </div>

                                   <div class="form-group">
                                    <label>Best Time to contact</label>
                                    <input class="form-control" placeholder="Enter text" name="best_time_contact">

                                </div>

                                <div class="form-group">
                                    <label>Address</label>
                                    <input class="form-control" placeholder="Enter text" name="address">

                                </div>

                                <div class="form-group">
                                    <h3>Guardian's Information</h3>
                                    <label>Guardian Name</label>
                                    <input class="form-control" placeholder="Enter text" name="guard_name">

                                </div>

                                <div class="form-group">
                                    <label>Guardian Address</label>
                                    <input class="form-control" placeholder="Enter text" name="guard_add">

                                </div>

                                <div class="form-group">
                                    <label>Phone</label>
                                    <input class="form-control" placeholder="Enter text" name="guard_phone">

                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" placeholder="Enter text" name="guard_email">

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

