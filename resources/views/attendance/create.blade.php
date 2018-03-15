@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Attendance Form</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <form method="post" action="{{ route('attendance.store') }}" enctype="multipart/form-data" method="post">

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
                                    <label >Class/Level Name</label>
                                <select id="level_id" class="form-control" name="level_id" onchange="" required>
                                    @foreach($Levels as $stclass)
                                    <option value="{{ $stclass->name }}">{{ $stclass->name }}</option>
                                    @endforeach
                                    @if ($errors->has('stclass_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('stclass_id') }}</strong>
                                    </span>
                                @endif

                                </select>
                                </div>



                            </div>
                            <!-- /.col-lg-6 (nested) -->
							
							
							
			</div><!-- /.row (nested) -->
			<div class="row">
			
							<div class="col-lg-6">
                                <div class="form-group" id="">
								<label>Date</label>
                                    <input class="form-control" placeholder="Enter date for attendance" name="datepicker" id="datepicker" readonly>
								</div>
							
							</div>
						<!-- /.col-lg-6 (nested) -->
			
			</div><!-- 3rd row-->
			<div class="row">
			
							<div class="col-lg-6">
                                <div class="form-group" id="">
                         <table class="table table-hover" id="datatable1">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
								
								</div>
							
							</div>
						<!-- /.col-lg-6 (nested) -->
			
			</div>
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
		
		
  ///////////////////show each student of selected class with seperate row and absent/present buttons
      function compile_datatable(stdnts) {
		  //$("#datatable").html('');
//alert(stdnts);
 //  var dataObj = JSON.parse(stdnts); 
   var joi=JSON.stringify(stdnts);
  // console.log(joi);
   $.each(joi, function(index, value) {
	   $("#datatable").append(value.id);
   });
/*    $.each(joi, function(index, value) {

			//$("#datatable").html(joi[0].name);
			
			$("#datatable").append([
               // value.id,  //student id as name of radiobtn
               // value.name,
                var radiobtn='<div class="form-group">'+
                    '<label class="radio-inline">'+
                        '<input type="radio" name="" value="1"> Present'+
                    '</label>'+
                    '<label class="radio-inline">'+
                        '<input type="radio" name="" value="0"> Absent'+
                    '</label>'+
                '</div>'
            ]).draw();
        });
 */    }

  	
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
        $('#datepicker').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
        });
		$("#datepicker").datepicker({ dateFormat: "dd-mm-yyyy"}).datepicker("setDate", "0");
    </script>
@endsection