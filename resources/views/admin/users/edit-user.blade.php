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
                        <h1>Edit Users</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Users</li>
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
                        
                        <form  action="{{ url('/admin/update-user')  }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="row">

                                <div class="col-md-12">
                                    <h3>Personal Information</h3>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="Name" id="name" name="name" value="{{$user[0]->name}}">
                                        <input type="hidden" class="form-control" id="id" name="id" value="{{$user[0]->id}}">
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
                                        <textarea class="form-control" id="address" name="address" placeholder="Address">{{$user[0]->address}}</textarea>
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
                                        <input type="email" class="form-control" placeholder="Email" id="email" name="email" value="{{$user[0]->email}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" placeholder="Phone" id="phone" name="phone" value="{{$user[0]->phone}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Education</label>
                                        <input type="text" class="form-control" placeholder="Education" id="education" name="education" value="{{$user[0]->education}}">
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
                                    <input type="date" class="form-control datetimepicker-input" name="dob_" id="dob_" value="{{$user[0]->dob}}" />
                                  </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Marital Status</label>
                                        <!-- <input type="text" class="form-control" placeholder="Marital Status" id="marital_status" name="marital_status"> -->
                                        <select class="form-control" placeholder="Marital Status" id="marital_status" name="marital_status">
                                            <option 
                                                    value="0" 
                                                    disabled="disabled"
                                                    <?php 
                                                        if(
                                                            ($user[0]->marital_status != 'Married') && 
                                                            ($user[0]->marital_status != 'Unarried') &&
                                                            ($user[0]->marital_status != 'Separated') &&
                                                            ($user[0]->marital_status != 'Divorced') &&
                                                            ($user[0]->marital_status != 'Others') 
                                                        )
                                                            echo "selected = 'selected'"
                                                    ?>
                                                >
                                                Select Marital Status
                                            </option>
                                            <option 
                                                    value="Married"  
                                                    <?php 
                                                        if($user[0]->marital_status === 'Married')
                                                            echo "selected = 'selected'"
                                                    ?>
                                                >
                                                        Married
                                            </option>
                                            <option 
                                                    value="Unmarried"
                                                    <?php 
                                                        if($user[0]->marital_status === 'Unmarried')
                                                            echo "selected = 'selected'"
                                                    ?>
                                                >
                                                Unmarried
                                            </option>
                                            <option 
                                                    value="Separated"
                                                    <?php 
                                                        if($user[0]->marital_status === 'Separated')
                                                            echo "selected = 'selected'"
                                                    ?>
                                                >Separated</option>
                                            <option 
                                                    value="Divorced"
                                                    <?php 
                                                        if($user[0]->marital_status === 'Divorced')
                                                            echo "selected = 'selected'"
                                                    ?>
                                                    >Divorced</option>
                                            <option 
                                                    value="Others"
                                                    <?php 
                                                        if($user[0]->marital_status === 'Others')
                                                            echo "selected = 'selected'"
                                                    ?>
                                                >Others</option>
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
                                            <option 
                                                    value="0" 
                                                    disabled="disabled"
                                                    <?php 
                                                        if(
                                                            ($user[0]->emp_type != 'Permanent or fixed-term employees') && 
                                                            ($user[0]->emp_type != 'Casual employees') &&
                                                            ($user[0]->emp_type != 'Apprentices or trainees') &&
                                                            ($user[0]->emp_type != 'Employment agency staff') &&
                                                            ($user[0]->emp_type != 'Contractors and sub-contractors') &&
                                                            ($user[0]->emp_type != 'Others') 
                                                        )
                                                            echo "selected = 'selected'";
                                                    ?>
                                                >
                                                Select Employment Type
                                            </option>
                                            <option 
                                                    value="Permanent or fixed-term employees"
                                                    <?php
                                                        if($user[0]->emp_type === 'Permanent or fixed-term employees')
                                                            echo "selected = 'selected'";
                                                    ?>
                                                >
                                                Permanent or fixed-term employees
                                            </option>
                                            <option 
                                                    value="Casual employees"
                                                    <?php
                                                        if($user[0]->emp_type === 'Casual employees')
                                                            echo "selected = 'selected'";
                                                    ?>
                                                >
                                                Casual employees
                                            </option>
                                            <option 
                                                    value="Apprentices or trainees"
                                                    <?php
                                                        if($user[0]->emp_type === 'Apprentices or trainees')
                                                            echo "selected = 'selected'";
                                                    ?>
                                                >
                                                Apprentices or trainees
                                            </option>
                                            <option 
                                                    value="Employment agency staff"
                                                    <?php
                                                        if($user[0]->emp_type === 'Employment agency staff')
                                                            echo "selected = 'selected'";
                                                    ?>
                                                >
                                                Employment agency staff
                                            </option>
                                            <option 
                                                    value="Contractors and sub-contractors"
                                                    <?php
                                                        if($user[0]->emp_type === 'Contractors and sub-contractors')
                                                            echo "selected = 'selected'";
                                                    ?>
                                                >
                                                Contractors and sub-contractors
                                            </option>
                                            <option 
                                                    value="Others"
                                                    <?php
                                                        if($user[0]->emp_type === 'Others')
                                                            echo "selected = 'selected'";
                                                    ?>
                                                >
                                                Others
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Monthly Income</label>
                                        <input type="text" class="form-control" placeholder="Monthly Income" id="monthly_income" name="monthly_income" value="{{$user[0]->monthly_income}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Working Since</label>
                                        <input type="date" class="form-control" placeholder="Working Since" id="working_since" name="working_since" value="{{$user[0]->working_since}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Company Name</label>
                                        <input type="text" class="form-control" placeholder="Company Name" id="company_name" name="company_name" value="{{$user[0]->company_name}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Company Address</label>
                                        <textarea class="form-control" placeholder="Company Address" id="company_address" name="company_address">{{$user[0]->company_address}}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Company Phone</label>
                                        <input type="text" class="form-control" placeholder="Company Phone" id="company_phone" name="company_phone" value="{{$user[0]->company_phone}}">
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
                                        <input type="text" class="form-control" placeholder="Reference1 Name" id="ref1_name" name="ref1_name" value="{{$user[0]->ref1_name}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Reference1 Phone</label>
                                        <input type="text" class="form-control" placeholder="Reference1 Phone" id="ref1_phone" name="ref1_phone" value="{{$user[0]->ref1_phone}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Reference1 Address</label>
                                        <textarea class="form-control" placeholder="Reference1 Address" id="ref1_address" name="ref1_address">{{$user[0]->ref1_address}}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-6"></div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Reference2 Name</label>
                                        <input type="text" class="form-control" placeholder="Reference2 Name" id="ref2_name" name="ref2_name" value="{{$user[0]->ref2_name}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Reference2 Phone</label>
                                        <input type="text" class="form-control" placeholder="Reference2 Phone" id="ref2_phone" name="ref2_phone" value="{{$user[0]->ref2_phone}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Reference2 Address</label>
                                        <textarea class="form-control" placeholder="Reference2 Address" id="ref2_address" name="ref2_address">{{$user[0]->ref2_address}}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-6"></div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Urgent Contact Name</label>
                                        <input type="text" class="form-control" placeholder="Urgent Contact Name" id="urgent_contact_name" name="urgent_contact_name" value="{{$user[0]->urgent_contact_name}}">
                                    </div>
                                </div>
                              
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Urgent Contact Phone</label>
                                        <input type="text" class="form-control" placeholder="Urgent Contact Phone" id="urgent_contact_phone" name="urgent_contact_phone" value="{{$user[0]->urgent_contact_phone}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Urgent Contact Address</label>
                                        <textarea class="form-control" placeholder="Urgent Contact Address" id="urgent_contact_address" name="urgent_contact_address">{{$user[0]->urgent_contact_address}}</textarea>
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
                                        <input type="text" class="form-control" placeholder="Bank Name" id="bank_name" name="bank_name" value="{{$user[0]->bank_name}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Bank Branch</label>
                                        <input type="text" class="form-control" placeholder="Bank Branch" id="bank_branch" name="bank_branch" value="{{$user[0]->bank_branch}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Bank Address</label>
                                        <textarea class="form-control" placeholder="Bank Address" id="bank_address" name="bank_address">{{$user[0]->bank_address}}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Account Number</label>
                                        <input type="text" class="form-control" placeholder="Account Number" id="account_number" name="account_number" value="{{$user[0]->account_number}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Bank Account Name</label>
                                        <input type="text" class="form-control" placeholder="Bank Account Name" id="bank_account_name" name="bank_account_name" value="{{$user[0]->bank_account_name}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Bank Account Type</label>
                                        <select class="form-control" placeholder="Bank Account Type" id="bank_account_type" name="bank_account_type">

                                            <option 
                                                    value="0" 
                                                    disabled="disabled"
                                                    <?php 
                                                        if(
                                                            ($user[0]->emp_type != 'Saving Account') && 
                                                            ($user[0]->emp_type != 'Current Account') &&
                                                            ($user[0]->emp_type != 'Recurring Deposit Account') &&
                                                            ($user[0]->emp_type != 'Fixed Deposit Account') &&
                                                            ($user[0]->emp_type != 'DEMAT Account') &&
                                                            ($user[0]->emp_type != 'NRI Account') &&
                                                            ($user[0]->emp_type != 'Others') 
                                                        )
                                                            echo "selected = 'selected'";
                                                    ?>
                                                >
                                                Select Employment Type
                                            </option>
                                            <option 
                                                    value="Saving Account"
                                                    <?php
                                                        if($user[0]->emp_type === 'Saving Account')
                                                            echo "selected = 'selected'";
                                                    ?>
                                                >
                                                Saving Account
                                            </option>
                                            <option 
                                                    value="Current Account"
                                                    <?php
                                                        if($user[0]->emp_type === 'Current Account')
                                                            echo "selected = 'selected'";
                                                    ?>
                                                >
                                                Current Account
                                            </option>
                                            <option 
                                                    value="Recurring Deposit Account"
                                                    <?php
                                                        if($user[0]->emp_type === 'Recurring Deposit Account')
                                                            echo "selected = 'selected'";
                                                    ?>
                                                >
                                                Recurring Deposit Account
                                            </option>
                                            <option 
                                                    value="Fixed Deposit Account"
                                                    <?php
                                                        if($user[0]->emp_type === 'Fixed Deposit Account')
                                                            echo "selected = 'selected'";
                                                    ?>
                                                >
                                                Fixed Deposit Account
                                            </option>
                                            <option 
                                                    value="DEMAT Account"
                                                    <?php
                                                        if($user[0]->emp_type === 'DEMAT Account')
                                                            echo "selected = 'selected'";
                                                    ?>
                                                >
                                                DEMAT Account
                                            </option>
                                            <option 
                                                    value="NRI Account"
                                                    <?php
                                                        if($user[0]->emp_type === 'NRI Account')
                                                            echo "selected = 'selected'";
                                                    ?>
                                                >
                                                NRI Account
                                            </option>
                                            <option 
                                                    value="Others"
                                                    <?php
                                                        if($user[0]->emp_type === 'Others')
                                                            echo "selected = 'selected'";
                                                    ?>
                                                >
                                                Others
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>IFSC</label>
                                        <input type="text" class="form-control" placeholder="IFSC" id="ifsc" name="ifsc" value="{{$user[0]->ifsc}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-12">

                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <label>User Enabled ?</label>
                                            <div class="col-md-12">
                                                Enabled 
                                                <input 
                                                        type="radio" 
                                                        class="" 
                                                        name="status" 
                                                        value="1"
                                                        <?php if (isset($user[0]->status) && $user[0]->status=="1") echo "checked";?>
                                                    >
                                            </div>
                                            <div class="col-md-12">
                                                Not Enabled 
                                                <input 
                                                        type="radio" 
                                                        class="" 
                                                        name="status" 
                                                        value="0"
                                                        <?php if (isset($user[0]->status) && $user[0]->status=="0") echo "checked";?>
                                                    >
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