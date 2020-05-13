@include('admin.header')

	
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	  <!-- Content Header (Page header) -->
	  <div class="content-header">
	    <div class="container-fluid">
	      <div class="row mb-2">
	        <div class="col-sm-6">
	          <h1 class="m-0 text-dark">Dashboard</h1>
	        </div><!-- /.col -->
	        <div class="col-sm-6">
	          <ol class="breadcrumb float-sm-right">
	            <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
	            <li class="breadcrumb-item active">User Profile</li>
	          </ol>
	        </div><!-- /.col -->
	      </div><!-- /.row -->
	    </div><!-- /.container-fluid -->
	  </div>


	  <!-- /.content-header -->

	  <!-- @foreach($admin as $info)
	     {{$info}}
	  @endforeach -->

	  <!-- Main content -->
	  <section class="content">
	    
	  		<div class="container-fluid">
	  			
	  			<div class="row">
	  			    <div class="col-md-6">
	  			        <div class="form-group">
	  			            <label>Name</label>
	  			            <input type="text" class="form-control" placeholder="Name" id="name" name="name" value="{{$admin[0]->name}}" disabled="disabled">
	  			        </div>
	  			    </div>
	  			</div>

	  			<div class="row">
	  			    <div class="col-md-6">
	  			        <div class="form-group">
	  			            <label>Email</label>
	  			            <input type="email" class="form-control" placeholder="Email" id="email" name="email" value="{{$admin[0]->email}}" disabled="disabled">
	  			        </div>
	  			    </div>
	  			</div>
	  			   
	  		</div>

	  </section>
	  <!-- /.content -->
	</div>

@include('admin.footer')
