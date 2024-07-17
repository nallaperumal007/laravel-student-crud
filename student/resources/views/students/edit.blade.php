@extends('layouts.master')

@section('content')
		<h1>This is Student List</h1>
		<div class="row">
			<div class="col-lg-12">
			    <form action="/students/{{$std->std_id}}/update" method="POST">
			        <div class="modal-body">
			          {{ csrf_field() }}
					  <div class="form-group row">
					    <label for="first_name" class="col-sm-4 col-form-label">First Name</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="std_first_name" name="std_first_name" placeholder="Input First Name" value="{{$std->std_first_name}}">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="last_name" class="col-sm-4 col-form-label">Last Name</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="std_last_name" name="std_last_name" placeholder="Input Last Name" value="{{$std->std_last_name}}">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="gender" class="col-sm-4 col-form-label">Gender</label>
					    <div class="col-sm-8">
					      <div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" id="std_gender" name="std_gender" value="L" {{ $std->std_gender == 'L' ? 'checked' : ''}}>
							  <label class="form-check-label" for="gender">Male</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" id="std_gender" name="std_gender" value="P" {{ $std->std_gender == 'P' ? 'checked' : ''}}>
							  <label class="form-check-label" for="gender">Female</label>
						  </div>
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="religion" class="col-sm-4 col-form-label">Religion</label>
					    <div class="col-sm-8">
						    <select class="form-control" id="std_religion" name="std_religion">
						      <option value="Islam" {{ $std->std_religion == 'Islam' ? 'selected' : ''}}>Islam</option>
						      <option value="Kristen" {{ $std->std_religion == 'Kristen' ? 'selected' : ''}}>Kristen</option>
						      <option value="Katolik" {{ $std->std_religion == 'Katolik' ? 'selected' : ''}}>Katolik</option>
						      <option value="Hindu" {{ $std->std_religion == 'Hindu' ? 'selected' : ''}}>Hindu</option>
						      <option value="Buddha" {{ $std->std_religion == 'Buddha' ? 'selected' : ''}}>Buddha</option>
						      <option value="Konghucu" {{ $std->std_religion == 'Konghucu' ? 'selected' : ''}}>Konghucu</option>
						    </select>
						</div>
					  </div>
					  <div class="form-group row">
					    <label for="address" class="col-sm-4 col-form-label">Address</label>
					    <div class="col-sm-8">
					      <textarea type="text" class="form-control" id="std_address" name="std_address" placeholder="Input Address">{{$std->std_address}}</textarea>
					    </div>
					  </div>
				    </div>
				    <div class="modal-footer">
				      <button type="submit" class="btn btn-primary">Update</button>
				    </div>
			  	</form>
		  	</div>
		</div>
@endsection