<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Teachers Info</title>
	
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	
</head>
<body>
  <section class="header shadow">
	  <div class="container">
		  <div class="row">
			  <div class="col-md-3">
                <a href="{{url('student')}}"><img src="https://media.istockphoto.com/vectors/adoption-and-community-care-vector-id1286680331?k=20&m=1286680331&s=612x612&w=0&h=N7cQExSqTTo-Jd30iyOe0IrCCpbeyCRBuxUHL1j13qs=" alt=""></a>
			  </div>
			  
			  <div class="col-md-9">
                  <div class="menu">
					  <ul>
						  <li><a href="{{url('student')}}">Home</a></li>
						  <li><a href="{{route('student.add')}}">Add Student</a></li>
						  <li><a href="{{route('student.show',12)}}">Single Student</a>
						  <li><a href="{{route('student.edit',12)}}">Edit Student</a>
				  </div>
			  </div>
		  </div>
	  </div>
  </section>

  

  <section class="topbar">
	<h1>@yield('page-name', 'this is page name')</h1>
	<p>@yield('sub-title-page', 'this is our sub title')</p>
</section>

 {{-- main container start --}}
  @section('main-content')
      
  @show
{{-- main container end --}}

  <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <p>Copyright © 2022 Apple Inc. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>