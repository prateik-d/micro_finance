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
	            			<li class="breadcrumb-item active">Loan Terms</li>
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
 	            				<h3 class="card-title">Loan terms details</h3>
	  							<a class="float-right" href="add-loan-term-days">Add loan terms</a>

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
						 	                <th>Days</th>
						 	                <th>IsEnabled</th>
						 	                <th>Action</th>
	 	              					</tr>
	 	              				</thead>
		 	              			<tbody>
		 	              
			 	              			@foreach($loan_terms as $key => $loan_term)
			          		    	


  				          		    		<tr>
  					          		    		<td>{{$key + 1}}</td>
  					          		    		<td>{{$loan_term['days']}}</td>
  					          		    		<td>
  					          		    				@if($loan_term['status'] == '1')
  					          		    					<span>Enabled</span>
  					          		    				@else
  					          		    					<span>Disabled</span>
  					          		    				@endif
  					          		    		</td>
  					          		    		<td>
  					          		    			<!-- {{$loan_term['id']}} -->


  					          		    			
	    			          		    			<div class="text-center">
	    												<span>
	    				          		    				<a href="{{URL::to('/')}}/admin/edit-loan-term-days/{{$loan_term['id']}}" class="text-info" title="Edit">
	    				          		    				    <i class="fas fa-edit"></i>
	    				          		    				</a>
	    				          		    			</span>

	    				          		    			<span>
	    				          		    				<a 
	    				          		    					class="text-danger" 
	    				          		    					title="Delete"
	    				          		    					data-toggle="modal" 
	    				          		    					data-target="#deleteModal_{{$loan_term['id']}}"
	    				          		    					>
	    				          		    				    <i class="fas fa-trash"></i>
	    				          		    				</a>
	    				          		    			</span>
	    				          		    		</div>


	    				          		    		<!-- Modal -->
	    				          		    		<div id="deleteModal_{{$loan_term['id']}}" class="modal fade" role="dialog">
	    				          		    		  	<div class="modal-dialog">

	    				          		    		    	<!-- Modal content-->
	    				          		    		    	<div class="modal-content">
	    				          		    		      		<div class="modal-header">
	    				          		    		        		<button type="button" class="close" data-dismiss="modal">&times;</button>
	    				          		    		        		<h4 class="modal-title text-left">Delete loan_term</h4>
	    				          		    		      		</div>
	    				          		    		      		<div class="modal-body">
	    				          		    		        		<p>Do you want to delete this ?</p>
	    				          		    		        		{{$loan_term['id']}}

	    				          		    		      		</div>
	    				          		    		      		<div class="modal-footer">
	    								
	    															<form method="POST" action="{{ route('delete.loan-term-days', [$loan_term['id']]) }}">
	    				          		    		      			    {{ csrf_field() }}
	    				          		    		      			    {{ method_field('DELETE') }}
	    				          		    		      			    <button class="btn btn-default" type="submit">Delete</button>
	    				          		    		      			</form>
	    				          		    		        		
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
		      	</div>
		    </div>
		</section>
	</div>



@include('admin.footer')
