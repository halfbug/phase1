@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Student Record</h1>
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
                                    <label >Student Name</label>
                                    <input class="form-control"  placeholder="Name" name="name"  value="{{ $student->name }}">
                                </div>



                                <div class="form-group">
                                    <label>Father's Name </label>
                                    <input class="form-control" placeholder="Father Name" name="father_name"  value="{{ $student->father_name}}">

                                </div>
                                <div class="form-group">
                                    <label>Gender</label>

                                    <input checked="checked" name="gender" type="radio" value="male" >Male &nbsp;
                                    <input  name="gender" type="radio" value="female">Female
                                </div>
                                <div class="form-group">
                                    <label>Religion</label>
                                    <input class="form-control" placeholder="Enter text" name="religion" value="{{ $student->religion }}">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input class="form-control" placeholder="Enter text" name="address"  value="{{ $student->address }}">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input class="form-control" placeholder="Enter text" name="phone"  value="{{ $student->phone }}">
                                </div>


                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" placeholder="Enter text" name="email"  value="{{ $student->email }}">

                                </div>
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input class="form-control" placeholder="Enter text" id="date_of_birth" name="date_of_birth"  value="{{ $student->date_of_birth }}">

                                </div>

                                <div class="form-group">
                                    <label>Apply For Class</label>
                                    <input class="form-control" placeholder="Enter text"  name="level_id"  value="{{ $student->level_id }}">

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

    <script>
        $('#level_id').on('change',function(e){
            var level_name = $('#level_id option:selected').attr('value');
            //$("#datatable").html(level_name);
            //var info=$.get("{{url('ajax-student')}}",{level_name:level_name});
            //$("#datatable").html(info);
            $.ajax({
                type: "GET",
                url : "{{url('ajax-student')}}",
                dataType: 'json',
                data : {level_name:level_name},
                success : function(response){
                    // compile_datatable(response);
                    var joi=JSON.stringify(response);
                    console.log(response);
                    var thead='<thead><tr>'+
                        '<th>Register No.</th>'+
                        '<th>Student Name</th>'+
                        '<th>Attendance</th>'+
                        '</tr></thead>';
                    $("#datatable1").empty();
                    $("#datatable1").append('<h2>Students of '+level_name+'</h2><br>');
                    $("#datatable1").append(thead);

                    $.each(response, function(index, value) {

                        var radiobtn='<div class="form-group">'+
                            '<label class="radio-inline">'+
                            '<input type="radio" name="radio'+value.id+'" value="1" checked> Present'+
                            '</label>'+'<label class="radio-inline">'+
                            '<input type="radio" name="radio'+value.id+'" value="0"> Absent'+
                            '</label>'+'</div>';
                        $("#datatable1").append(value.name+' '+radiobtn);

                    })//foreach;
//success close
                },
                error: function(response){
                    console.log('Error'+response);
                }//error close
            });


        }); //'#level_id on change
    </script>

@endsection