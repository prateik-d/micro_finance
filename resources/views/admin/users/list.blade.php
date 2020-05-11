@include('admin.header')

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	  	<!-- Content Header (Page header) -->
	  	<div class="content-header">
	    	<div class="container-fluid">
		      	<div class="row mb-2">
			        <div class="col-sm-6">
		          		<h1 class="m-0 text-dark">Users</h1>
		        	</div><!-- /.col -->
		        	<div class="col-sm-6">
		          		<ol class="breadcrumb float-sm-right">
		            		<li class="breadcrumb-item"><a href="#">Home</a></li>
		            		<li class="breadcrumb-item active">Users</li>
		          		</ol>
		        	</div><!-- /.col -->
		      	</div><!-- /.row -->
	    	</div><!-- /.container-fluid -->
	  	</div>
	  	<!-- /.content-header -->

 		<section class="content">
 	  		<div class="container-fluid">
 	    		<div class="row">
 	      			<div class="col-12">

 	        			<div class="card">
 	          				<div class="card-header">
 	            				<h3 class="card-title">DataTable with default features</h3>
	  							<a class="float-right" href="add-user">Add Users</a>
 	          				</div>
 	          				<!-- /.card-header -->
 	          				<div class="card-body">
	 	            			<table id="example1" class="table table-bordered table-striped">
	 	              				<thead>
	 	              					<tr>
						 	                <th>S No.</th>
						 	                <th>Name</th>
						 	                <th>Email</th>
						 	                <th>Phone</th>
						 	                <th>Action</th>
	 	              					</tr>
	 	              				</thead>
		 	              			<tbody>
		 	              
			 	              			@foreach($users as $key => $user)
			          		    	
				          		    		<tr>
					          		    		<td>{{$key + 1}}</td>
					          		    		<td>{{$user['name']}}</td>
					          		    		<td>{{$user['email']}}</td>
					          		    		<td>{{$user['phone']}}</td>
					          		    		<td>
					          		    			{{$user['id']}}


					          		    			<div class="text-center">
														<span>
						          		    				<a href="{{URL::to('/')}}/admin/edit-user/{{$user['id']}}" class="text-info" title="Edit">
						          		    				    <i class="fas fa-edit"></i>
						          		    				</a>
						          		    			</span>

						          		    			<span>
						          		    				<a 
						          		    					class="text-danger" 
						          		    					title="Delete"
						          		    					data-toggle="modal" 
						          		    					data-target="#deleteModal_{{$user['id']}}"
						          		    					>
						          		    				    <i class="fas fa-trash"></i>
						          		    				</a>
						          		    			</span>
						          		    		</div>


						          		    		<!-- Modal -->
						          		    		<div id="deleteModal_{{$user['id']}}" class="modal fade" role="dialog">
						          		    		  	<div class="modal-dialog">

						          		    		    	<!-- Modal content-->
						          		    		    	<div class="modal-content">
						          		    		      		<div class="modal-header">
						          		    		        		<button type="button" class="close" data-dismiss="modal">&times;</button>
						          		    		        		<h4 class="modal-title text-left">Delete User</h4>
						          		    		      		</div>
						          		    		      		<div class="modal-body">
						          		    		        		<p>Do you want to delete this ?</p>
						          		    		        		{{$user['id']}}

						          		    		      		</div>
						          		    		      		<div class="modal-footer">
										
																	<form method="POST" action="{{ route('delete.user', [$user['id']]) }}">
						          		    		      			    {{ csrf_field() }}
						          		    		      			    {{ method_field('DELETE') }}
						          		    		      			    <button class="btn btn-default" type="submit">Delete User</button>
						          		    		      			</form>

						          		    		        		<button type="button" class="btn btn-default" href="{{URL::to('/')}}/admin/delete-user/{{$user['id']}}" >Delete</button>

						          		    		        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						          		    		      		</div>
						          		    		    	</div>
						          		    		  	</div>
						          		    		</div>



					          		    		</td>

					          		    	</tr>



			          		  			@endforeach

		 	              			</tbody>
		 	              			<tfoot>
		 	              				<tr>
						 	                <th>S No.</th>
						 	                <th>Name</th>
						 	                <th>Email</th>
						 	                <th>Phone</th>
						 	                <th>Action</th>
		 	              				</tr>
		 	              			</tfoot>
	 	            			</table>
	 	          			</div>
 	          				<!-- /.card-body -->
 	        			</div>
 	        			<!-- /.card -->
 	      			</div>
 	      			<!-- /.col -->
 	    		</div>
 	    		<!-- /.row -->
 	  		</div>
 	  		<!-- /.container-fluid -->
 		</section>

	</div>

@include('admin.footer')

<script src="{{URL::to('/')}}/public/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{URL::to('/')}}/public/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{URL::to('/')}}/public/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{URL::to('/')}}/public/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
