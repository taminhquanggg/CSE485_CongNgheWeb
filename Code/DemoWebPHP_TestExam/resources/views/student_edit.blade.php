@extends('layouts.app')
@section('title', 'Edit Page')

@section('content')
<div class="container ">
	<div class="row ">
		<div class="col-12 text-center pt-5">
			<h1 class="display-one mt-5">EDIT STUDENT</h1>
			<div class="text-left"><a href="/" class="btn btn-outline-primary">Student List</a></div>

			<form id="add-frm" method="POST" action="" class="border p-3 mt-2 text-center d-flex justify-content-center flex-column align-items-center" >
                
				<div class="control-group col-6 " >
					<label for="txtID">ID</label>
					<div>
						<input type="text" id="txtID" class="form-control mb-4 " name="txtID" 
                        placeholder="Enter ID" value="{!! $student->id !!}" required readonly>
					</div>
				</div>
				<div class="control-group col-6 mt-2 ">
					<label for="txtFullname">Fullname</label>
					<div>
						<textarea id="txtFullname" class="form-control mb-4" name="txtFullname"
							placeholder="Enter Fullname" rows=""  required>{!! $student->fullname !!}</textarea>
					</div>
				</div>
				<div class="control-group col-6 mt-2 ">
					<label for="txtBirthday">Birthday</label>
					<div>
						<input type="date" id="txtBirthday" class="form-control mb-4" name="txtBirthday"
                        placeholder="dd-mm-yyyy" value="{!! $student->birthday !!}" required>
					</div>
				</div>
                <div class="control-group col-6 mt-2 ">
					<label for="txtAddress">Address</label>
					<div>
						<input type="text" id="txtAddress" class="form-control mb-4" name="txtAddress"
							placeholder="Enter Address" value="{!! $student->address !!}" required>
					</div>
				</div>

				@csrf

				<div class="control-group col-6 mt-2"><button class="btn btn-primary">Update</button></div>
			</form>
		</div>
	</div>
</div>

@endsection