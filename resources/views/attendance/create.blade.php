@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Attendance Registration</h1>
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
							
							
							
							<div class="col-lg-6">
                                <div class="form-group" id="datatable">Mydata
     <!--                   <table class="table table-hover" id="">
                            <thead>
                                <tr>
                                    <th>Register No.</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Attendance</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>-->
								
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

				/* $.each(response, function(index, value) {
						$("#datatable").append(response['name']);
					}); */
				for(var i=0, keys=Object.keys(response.name), l=keys.length; i<l; i++) {
					alert(response.name[key]);
					} 
					  
					  
					  //alert(joi);
                },
				error: function(response){
				alert('Error'+response);
					}
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
                '<div class="form-group">'+
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

   <!-- <script type="text/javascript">
        $('#datepicker').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
        });
    </script>-->
@endsection