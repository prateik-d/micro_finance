@include('admin.header')

    <style type="text/css">
        hr {
          margin-top: 1rem;
          margin-bottom: 1rem;
          border: 0;
          border-top: 1px solid rgba(0, 0, 0, 0.1);
        }
    </style>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Loan Terms</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Loan Terms</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-body">

                        <form  action="{{ url('/admin/edit-loan-term-days')  }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Days</label>
                                        <input type="hidden" class="form-control" id="id" name="id" value="{{$loan_terms[0]->id}}">
                                        <input type="number" class="form-control" placeholder="No. of Days" id="days" name="days" required="required" value="{{$loan_terms[0]->days}}">
                                    </div>
                                </div>
                            </div>
                              

                            <hr />

                            <div class="row">
                                <div class="col-md-12">

                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <label>Amount Enabled ?</label>
                                            <div class="col-md-12">
                                                Enabled 
                                                <input 
                                                        type="radio" 
                                                        class="" 
                                                        name="status" 
                                                        value="1"
                                                        <?php if (isset($loan_terms[0]->status) && $loan_terms[0]->status=="1") echo "checked";?>
                                                    >
                                            </div>
                                            <div class="col-md-12">
                                                Not Enabled 
                                                <input 
                                                        type="radio" 
                                                        class="" 
                                                        name="status" 
                                                        value="0"
                                                        <?php if (isset($loan_terms[0]->status) && $loan_terms[0]->status=="0") echo "checked";?>
                                                    >
                                            </div>

                                        </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="">
                                <div class="card-footer">
                                  <button type="submit" class="btn btn-primary">Save</button>
                                  <button class="btn btn-danger">Close</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </div>


@include('admin.footer')