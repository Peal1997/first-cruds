@extends('layouts.app')
@section('page-name','Home')
@section('sub-title-page', 'Wellcome to our home')
@section('main-content')
	<div class="wrap-table  shadow">
    <a class="btn btn-primary btn-sm" href="">add new teachers</a>
        <br>
        <br>
		<div class="card">
			<div class="card-body">
 <form action="" method="POST" class="row gx-5 align-items-center">
		<div class="col-auto">
			<select name="gender" class="form-select" id="">
			<option selected>Gender</option>
			<option value="Male">Male</option>
			<option value="Female">Female</option>
			
			</select>
		</div>
		
		<div class="col-auto">
			<select name="edu" class="form-select" id="">
			<option selected>Education</option>
			<option value="Bachelor">Bachelor</option>
			<option value="Masters">Masters</option>
			<option value="Phd">Phd</option>
			<option value="PGDM">PGDM</option>
			</select>
		</div>
		<div class="col-auto">
			<input name="search" type="submit" class="btn btn-info" value="Search">

		</div>
 </form>
          <h2>All Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Salary</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Department</th>
							<th>Gender</th>
							<th>Education</th>
							<th>photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>               
                        <tr>
							<td>1</td>
							<td>Peal Hasan</td>  
							<td>60000</td>
							<td>hasanpeal65@gmail.com</td>
							<td>01709908701</td>
							<td>CSE</td>
							<td>Male</td>
							<td>BSc</td>
							<td><img style="width:100px" src="./assets/photos/peal.jpg" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="">View</a>
								<a class="btn btn-sm btn-warning" href="">Edit</a>
								<a class="btn btn-sm btn-danger delete_btn" href="">Delete</a>
							</td>
						</tr>                       
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- JS FILES  -->
	<script src ="assets/js/jquery-3.6.0.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	
	<script src="assets/js/scripts.js"></script>
	<script>
		$('.delete_btn').click(function(){
            
          let conf =  confirm('Are you sure ??');
		  if(conf){
			  return true;
		  }else{
			  return false;
		  }
		});
	</script>

@endsection