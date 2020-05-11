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
                        <h1>Add Users</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add Users</li>
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

                        <form  action="{{ url('/admin/insert-user')  }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="row">

                                <div class="col-md-12">
                                    <h3>Personal Information</h3>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="Name" id="name" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Selfie</label>
                                        <input type="file" class="form-group" id="selfie" name="selfie" style="display: block;">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea class="form-control" id="address" name="address" placeholder="Address"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Aadhar Card</label>
                                        <input type="file" class="form-group" id="aadhar" name="aadhar" style="display: block;">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>PAN Card</label>
                                        <input type="file" class="form-group" id="pan" name="pan" style="display: block;">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" placeholder="Phone" id="phone" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Education</label>
                                        <input type="text" class="form-control" placeholder="Education" id="education" name="education">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Date of Birth</label>
                                      <!-- <div class="input-group date" id="dob" data-target-input="nearest">
                                          <input type="text" class="form-control datetimepicker-input" data-target="#dob" name="dob_" id="dob_" />
                                          <div class="input-group-append" data-target="#dob" data-toggle="datetimepicker">
                                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                          </div>
                                      </div> -->
                                    <input type="date" class="form-control datetimepicker-input" name="dob_" id="dob_" />
                                  </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Marital Status</label>
                                        <!-- <input type="text" class="form-control" placeholder="Marital Status" id="marital_status" name="marital_status"> -->
                                        <select class="form-control" placeholder="Marital Status" id="marital_status" name="marital_status">
                                            <option value="" selected="selected" disabled="disabled">Select Marital Status</option>
                                            <option value="Married">Married</option>
                                            <option value="Unmarried">Unmarried</option>
                                            <option value="Separated">Separated</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <hr/>

                            <div class="row">

                                <div class="col-md-12">
                                    <h3>Employment Information</h3>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Employment Type</label>
                                        <!-- <input type="text" class="form-control" placeholder="Employment Type" id="emp_type" name="emp_type"> -->
                                        <select class="form-control" placeholder="Employment Type" id="emp_type" name="emp_type">
                                            <option value="" selected="selected" disabled="disabled">Select Employment Type</option>
                                            <option value="Permanent or fixed-term employees">Permanent or fixed-term employees</option>
                                            <option value="Casual employees">Casual employees</option>
                                            <option value="Apprentices or trainees">Apprentices or trainees</option>
                                            <option value="Employment agency staff">Employment agency staff</option>
                                            <option value="Contractors and sub-contractors">Contractors and sub-contractors</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Monthly Income</label>
                                        <input type="text" class="form-control" placeholder="Monthly Income" id="monthly_income" name="monthly_income">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Working Since</label>
                                        <input type="date" class="form-control" placeholder="Working Since" id="working_since" name="working_since">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Company Name</label>
                                        <input type="text" class="form-control" placeholder="Company Name" id="company_name" name="company_name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Company Address</label>
                                        <textarea class="form-control" placeholder="Company Address" id="company_address" name="company_address"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Company Phone</label>
                                        <input type="text" class="form-control" placeholder="Company Phone" id="company_phone" name="company_phone">
                                    </div>
                                </div>

                            </div>

                            <hr />

                            <div class="row">

                                <div class="col-md-12">
                                    <h3>Reference Information</h3>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Reference1 Name</label>
                                        <input type="text" class="form-control" placeholder="Reference1 Name" id="ref1_name" name="ref1_name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Reference1 Phone</label>
                                        <input type="text" class="form-control" placeholder="Reference1 Phone" id="ref1_phone" name="ref1_phone">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Reference1 Address</label>
                                        <textarea class="form-control" placeholder="Reference1 Address" id="ref1_address" name="ref1_address"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6"></div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Reference2 Name</label>
                                        <input type="text" class="form-control" placeholder="Reference2 Name" id="ref2_name" name="ref2_name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Reference2 Phone</label>
                                        <input type="text" class="form-control" placeholder="Reference2 Phone" id="ref2_phone" name="ref2_phone">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Reference2 Address</label>
                                        <textarea class="form-control" placeholder="Reference2 Address" id="ref2_address" name="ref2_address"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6"></div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Urgent Contact Name</label>
                                        <input type="text" class="form-control" placeholder="Urgent Contact Name" id="urgent_contact_name" name="urgent_contact_name">
                                    </div>
                                </div>
                              
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Urgent Contact Phone</label>
                                        <input type="text" class="form-control" placeholder="Urgent Contact Phone" id="urgent_contact_phone" name="urgent_contact_phone">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Urgent Contact Address</label>
                                        <textarea class="form-control" placeholder="Urgent Contact Address" id="urgent_contact_address" name="urgent_contact_address"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6"></div>
                                
                            </div>

                            <hr />

                            <div class="row">

                                <div class="col-md-12">
                                    <h3>Bank Information</h3>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Bank Name</label>
                                        <input type="text" class="form-control" placeholder="Bank Name" id="bank_name" name="bank_name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Bank Branch</label>
                                        <input type="text" class="form-control" placeholder="Bank Branch" id="bank_branch" name="bank_branch">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Bank Address</label>
                                        <textarea class="form-control" placeholder="Bank Address" id="bank_address" name="bank_address"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Account Number</label>
                                        <input type="text" class="form-control" placeholder="Account Number" id="account_number" name="account_number">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Bank Account Name</label>
                                        <input type="text" class="form-control" placeholder="Bank Account Name" id="bank_account_name" name="bank_account_name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Bank Account Type</label>
                                        <!-- <input type="text" class="form-control" placeholder="Bank Account Type" id="bank_account_type" name="bank_account_type"> -->
                                        <select class="form-control" placeholder="Bank Account Type" id="bank_account_type" name="bank_account_type">
                                            <option value="" selected="selected" disabled="disabled">Select Bank Account Type</option>
                                            <option value="Saving Account">Saving Account</option>
                                            <option value="Current Account">Current Account</option>
                                            <option value="Recurring Deposit Account">Recurring Deposit Account</option>
                                            <option value="Fixed Deposit Account">Fixed Deposit Account</option>
                                            <option value="DEMAT Account">DEMAT Account</option>
                                            <option value="NRI Account">NRI Account</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>IFSC</label>
                                        <input type="text" class="form-control" placeholder="IFSC" id="ifsc" name="ifsc">
                                    </div>
                                </div>
                            </div>

                            <hr />

                            <div class="row">
                                <div class="col-md-12">

                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <label>User Enabled ?</label>
                                            <div class="col-md-12">
                                                Enabled <input type="radio" class="" name="status" value="1">
                                            </div>
                                            <div class="col-md-12">
                                                Not Enabled <input type="radio" class="" name="status" value="0">
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