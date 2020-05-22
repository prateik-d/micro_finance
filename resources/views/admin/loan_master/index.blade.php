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
	            			<li class="breadcrumb-item"><a href="#">Home</a></li>
	            			<li class="breadcrumb-item active">Loan Master</li>
	          			</ol>
	        		</div><!-- /.col -->
	      		</div><!-- /.row -->
	    	</div><!-- /.container-fluid -->
	  	</div>

	  	<section class="content">
		    <div class="container-fluid">
		      	<div class="row">
 	      			<div class="col-12">

 	        			<div class="card">
 	          				<div class="card-header">
 	            				<h3 class="card-title">Membership Package details</h3>
	  							<!-- <a class="float-right" href="add-membership-package
	  							">Add Membership Packages</a> -->

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
 	          				<!-- /.card-header -->
 	          				<div class="card-body">
	 	            			<table id="example1" class="table table-bordered table-striped">
	 	              				<thead>
	 	              					<tr>
						 	                <th>S No.</th>
						 	                <th>Name</th>
						 	                <th>Amount</th>
						 	                <th>Interet</th>
						 	                <th>Duration</th>
						 	                <th>Status</th>
						 	                <th>Action</th>
	 	              					</tr>
	 	              				</thead>
		 	              			<tbody>
		 	              
			 	              			@foreach($loans as $key => $loan)

			          		  			
  				          		    		<tr>
  					          		    		<td>{{$key + 1}}</td>
  					          		    		<td>{{$loan->name}}</td>
  					          		    		<td>{{$loan->loan_amount}}</td>
  					          		    		<td>{{$loan->interest}} %</td>
  					          		    		<td>{{$loan->loan_term_day}}</td>
  					          		    		<td>
  					          		    				@if($loan->loan_status == '1')
  					          		    					<span>Enabled</span>
  					          		    				@else
  					          		    					<span>Pending</span>
  					          		    				@endif
  					          		    		</td>
  					          		    		<td>
  					          		    			
	    			          		    			<div class="text-center">
	    												<span>
	    				          		    				<!-- <a href="{{URL::to('/')}}/admin/edit-membership-package/{{$loan->id}}" class="text-info" title="Edit"> -->
	    				          		    				    <i class="fas fa-edit"></i>
	    				          		    				<!-- </a> -->
	    				          		    			</span>

	    				          		    			<span>
	    				          		    				<a 
	    				          		    					class="text-danger" 
	    				          		    					title="Delete"
	    				          		    					data-toggle="modal" 
	    				          		    					data-target="#deleteModal_{{$loan->id}}"
	    				          		    					>
	    				          		    				    <i class="fas fa-trash"></i>
	    				          		    				</a>
	    				          		    			</span>
	    				          		    		</div>


	    				          		    		<!-- <div id="deleteModal_{{$loan->id}}" class="modal fade" role="dialog">
	    				          		    		  	<div class="modal-dialog">


	    				          		    		    	<div class="modal-content">
	    				          		    		      		<div class="modal-header">
	    				          		    		        		<button type="button" class="close" data-dismiss="modal">&times;</button>
	    				          		    		        		<h4 class="modal-title text-left">Delete Membership Package</h4>
	    				          		    		      		</div>
	    				          		    		      		<div class="modal-body">
	    				          		    		        		<p>Do you want to delete this ?</p>
	    				          		    		        		{{$loan->id}}

	    				          		    		      		</div>
	    				          		    		      		<div class="modal-footer">
	    								
	    															<form method="POST" action="{{ route('delete.membership-package', [$loan->id]) }}">
	    				          		    		      			    {{ csrf_field() }}
	    				          		    		      			    {{ method_field('DELETE') }}
	    				          		    		      			    <button class="btn btn-default" type="submit">Delete</button>
	    				          		    		      			</form>

	    				          		    		        		

	    				          		    		        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	    				          		    		      		</div>
	    				          		    		    	</div>
	    				          		    		  	</div>
	    				          		    		</div> -->

  					          		    		</td>

  					          		    	</tr>


			          		  			@endforeach

		 	              			</tbody>
		 	              			<tfoot>
		 	              				<tr>
						 	                <th>S No.</th>
						 	                <th>Name</th>
						 	                <th>Amount</th>
						 	                <th>Interet</th>
						 	                <th>Duration</th>
						 	                <th>Status</th>
						 	                <th>Action</th>
	 	              					</tr>
		 	              			</tfoot>
	 	            			</table>
	 	          			</div>
 	          				<!-- /.card-body -->
 	        			</div>
 	        			<!-- /.card -->
 	      			</div>
		      	</div>
		    </div>
		</section>
	</div>



@include('admin.footer')
