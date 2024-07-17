@extends('layouts.master')

@section('content')
		@if(session('success'))
		<div class="alert alert-success" role="alert">
		   {{session('success')}}
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
		@elseif(session('update'))
		<div class="alert alert-success" role="alert">
		   {{session('update')}}
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
		@elseif(session('delete'))
		<div class="alert alert-success" role="alert">
		   {{session('delete')}}
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
		@endif
		<div class="row">
			<div class="col-6">				
				<h1>This is Student List</h1>
			</div>
			<div class="col-6">
				<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
				  Insert Student Data
				</button>

				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Create Student Data</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <form action="/students/create" method="POST">
				        <div class="modal-body">
				          {{ csrf_field() }}
						  <div class="form-group row">
						    <label for="first_name" class="col-sm-4 col-form-label">First Name</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" id="std_first_name" name="std_first_name" placeholder="Input First Name">
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="last_name" class="col-sm-4 col-form-label">Last Name</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" id="std_last_name" name="std_last_name" placeholder="Input Last Name">
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="gender" class="col-sm-4 col-form-label">Gender</label>
						    <div class="col-sm-8">
						      <div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" id="std_gender" name="std_gender" value="L">
								  <label class="form-check-label" for="gender">Male</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" id="std_gender" name="std_gender" value="P">
								  <label class="form-check-label" for="gender">Female</label>
							  </div>
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="religion" class="col-sm-4 col-form-label">Religion</label>
						    <div class="col-sm-8">
							    <select class="form-control" id="std_religion" name="std_religion">
							      <option value="Islam">Islam</option>
							      <option value="Kristen">Kristen</option>
							      <option value="Katolik">Katolik</option>
							      <option value="Hindu">Hindu</option>
							      <option value="Buddha">Buddha</option>
							      <option value="Konghucu">Konghucu</option>
							    </select>
							</div>
						  </div>
						  <div class="form-group row">
						    <label for="address" class="col-sm-4 col-form-label">Address</label>
						    <div class="col-sm-8">
						      <textarea type="text" class="form-control" id="std_address" name="std_address" placeholder="Input Address"></textarea>
						    </div>
						  </div>
					    </div>
					    <div class="modal-footer">
					      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      <button type="submit" class="btn btn-primary">Save</button>
					    </div>
				  	  </form>
				    </div>
				  </div>
				</div>
			</div>
			<table class="table table-hover">
				<tr>
					<th>No.</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Gender</th>
					<th>Religion</th>
					<th>Address</th>
					<th>Action</th>
				</tr>
				@foreach($student_dataset as $std)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$std->std_first_name}}</td>
					<td>{{$std->std_last_name}}</td>
					<td>
						@if($std->std_gender == 'L')
						    Male
						@else
						    Female
						@endif
					</td>
					<td>{{$std->std_religion}}</td>
					<td>{{$std->std_address}}</td>
					<td>
						<a href="/students/{{$std->std_id}}/edit" class="btn btn-sm btn-info">Edit</a>
						<a href="/students/{{$std->std_id}}/delete" class="btn btn-sm btn-danger">Delete</a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
@endsection