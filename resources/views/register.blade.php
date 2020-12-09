<!doctype html>
<html lang="en">
  <head>
    <title>User Registration | Form Validation Using jQuery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        label.error {
            color: #dc3545;
            font-size: 14px;
        }
    </style>
  </head>
  <body>
      <div class="container pt-3">
          <form action="{{url('register-user')}}" method="POST" autocomplete="off" id="regForm">
            @csrf
            <div class="row">
                <div class="col-xl-8 m-auto">
                    <div class="card shadow">
                       <div class="card-header">
                            <h4 class="text-center font-weight-bold"> Form Validation Using jQuery Validator </h4>
                       </div>

                       <div class="card-body pl-4 pr-4">

                        @if(Session::has("success"))
                            <div class="alert alert-success">
                                {{Session::get("success")}}
                            </div>
                        @elseif(Session::has("failed")) 
                            {{Session::get("failed")}}
                        @endif

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="firstName"> First Name <span class="text-danger">*</span> </label>
                                        <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First Name">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="lastName"> Last Name <span class="text-danger">*</span> </label>
                                        <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="email"> Email <span class="text-danger">*</span> </label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="phone"> Phone <span class="text-danger">*</span> </label>
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="password"> Password <span class="text-danger">*</span> </label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="confirmPassword"> Confirm Password <span class="text-danger">*</span> </label>
                                        <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="gender"> Gender <span class="text-danger">*</span> </label>
                                        <select class="form-control" name="gender" id="gender">
                                            <option selected value="" disabled>Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="dateOfBirth"> Date of Birth <span class="text-danger">*</span> </label>
                                        <input type="date" name="dateOfBirth" id="dateOfBirth" class="form-control" placeholder="Date of Birth">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="address"> Address <span class="text-danger">*</span></label>
                                        <input type="text" name="address" id="address" class="form-control" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="city"> City <span class="text-danger">*</span></label>
                                        <input type="text" name="city" id="city" class="form-control" placeholder="City">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="state"> State <span class="text-danger">*</span> </label>
                                        <input type="text" name="state" id="state" class="form-control" placeholder="State">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="zipcode"> Zip Code <span class="text-danger">*</span></label>
                                        <input type="text" name="zipcode" id="zipcode" class="form-control" placeholder="Zip Code">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6 offset-lg-6 text-right">
                                    <button type="submit" class="btn btn-success"> Create your account </button>
                                </div>
                            </div>

                       </div>
                    </div>
                </div>
            </div>
          </form>
      </div>
      
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#regForm").validate({
                rules: {
                    firstName: {
                        required: true,
                        maxlength: 20,
                    },
                    lastName:{
                        required: true,
                        maxlength: 20,
                    },
                    email: {
                        required: true,
                        email: true,
                        maxlength: 50
                    },
                    phone: {
                        required: true,
                        minlength: 10,
                        maxlength: 10,
                        number: true
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    confirmPassword: {
                        required: true,
                        equalTo: "#password"
                    },
                    gender: {
                        required: true,
                    },
                    dateOfBirth: {
                        required: true,
                        date: true
                    },
                    address: {
                        required: true,
                        maxlength: 50
                    },
                    city: {
                        required: true,
                        maxlength: 40
                    },
                    state: {
                        required: true,
                        maxlength: 40
                    },
                    zipcode: {
                        required: true,
                        minlength: 6,
                        maxlength: 6
                    }
                },
                messages: {
                    firstName: {
                        required: "First name is required",
                        maxlength: "First name cannot be more than 20 characters"
                    },
                    lastName: {
                        required: "Last name is required",
                        maxlength: "Last name cannot be more than 20 characters"
                    },
                    email: {
                        required: "Email is required",
                        email: "Email must be a valid email address",
                        maxlength: "Email cannot be more than 50 characters",
                    },
                    phone: {
                        required: "Phone number is required",
                        minlength: "Phone number must be of 10 digits"
                    },
                    password: {
                        required: "Password is required",
                        minlength: "Password must be at least 5 characters"
                    },
                    confirmPassword: {
                        required:  "Confirm password is required",
                        equalTo: "Password and confirm password should same"
                    },
                    gender: {
                        required:  "Please select the gender",
                    },
                    dateOfBirth: {
                        required: "Date of birth is required",
                        date: "Date of birth should be a valid date"
                    },
                    address: {
                        required: "Address is required",
                        maxlength: "Address cannot not be more than 50 characters"
                    },
                    city: {
                        required: "City is required",
                        maxlength: "City cannot be more than 40 characters"
                    },
                    state: {
                        required: "State is required",
                        maxlength: "City cannot be more than 40 characters"
                    },
                    zipcode: {
                        required: "Zipcode is required",
                        minlength: "Zipcode must be of 6 digits",
                        maxlength: "Zipcode cannot be more than 6 digits"
                    } 
                }
            });
        });
    </script>
</body>
</html>