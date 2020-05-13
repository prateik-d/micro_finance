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

	  <!-- Main content -->
	  <section class="content">
	    
	  		<div class="container-fluid">
	  			
                <form action="{{ url('/admin/reset-password') }}" method="post">
                    {{ csrf_field() }}


                    <div class="row">
                        <div class="col-md-6">
                         
		                    @if($errors->any())
		                        <div class="alert alert-danger">
		                            <h6>{{$errors->first()}}</h6>
		                        </div>
		                    @endif

		                    @if(session()->has('alert-success'))
		                        <div class="alert alert-success">
		                            {{ session()->get('alert-success') }}
		                        </div>
		                    @endif
		                </div>
		            </div>
		            

		  			<div class="row">
		  			    <div class="col-md-6">
		  			        <div class="form-group">
		  			            <label>Current Password</label>
		  			            <input type="password" class="form-control" placeholder="Password" id="cpass" name="cpass">
		  			        </div>
		  			    </div>
		  			</div>
		  			
		  			<div class="row">
		  			    <div class="col-md-6">
		  			        <div class="form-group">
		  			            <label>New Password</label>
		  			            <input type="password" class="form-control" placeholder="Password" id="npass" name="npass">
		  			        </div>
		  			    </div>
		  			</div>
		  			
		  			<div class="row">
		  			    <div class="col-md-6">
		  			        <div class="form-group">
		  			            <label>Confirm Password</label>
		  			            <input type="password" class="form-control" placeholder="Password" id="cnpass" name="cnpass">
		  			        </div>
		  			    </div>
		  			</div>

		  			<div class="row">
		  			    <div class="col-md-6">
		  			        <div class="form-group">
		  			            <button type="submit" class="btn btn-primary">Change Pasword</button>
		  			        </div>
		  			    </div>
		  			</div>

		  		</form>

	  			   
	  		</div>

	  </section>
	  <!-- /.content -->
	</div>

@include('admin.footer')
-