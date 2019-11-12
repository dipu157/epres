<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login</title>

    <!-- Styles -->
    <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="{!! asset('assets/bootstrap-4.0.0/css/bootstrap.min.css') !!}" rel="stylesheet">
    <script src="{!! asset('assets/bootstrap-4.0.0/js/bootstrap.min.js') !!}"></script>
</head>


<body style="background-image: url({{ asset('images/prescription_image2.jpg') }});">


<div class="container">

    <div class="row">

        <div class="col-md-3">
            <img src="{{ asset('images/head.png') }}" class="img-fluid" alt="logo">
        </div>

        <div class="col-md-3">
        </div>

        <div class="col-md-6 mx-auto">

            <div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>

                    </div>
                @endif

                <form style="margin-top:20px" class="form-inline" role="form" method="POST" action="{{ route('login') }}">
             

                    {{ csrf_field() }}

                    {!! Form::email('email', 'Enter Your Email' , array('id' => 'email', 'class' => 'form-control', 'required')) !!}


                    {!! Form::password('password', array('class' => 'form-control','placeholder' => 'Password', 'required')) !!}

                    {{ $errors->has('password') ? ' has-error' : '' }}
                    @if ($errors->has('password'))
                        <span>
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                    <button class="btn btn-success" type="submit">Sign in</button>
                </form>

            </div>
        </div>
    </div>
</div>

 <hr/>

 <div class="frontUI">
            <div class="container">
            
            
            <div class="row">
            <div class="col-md-5">
                <h1>About ePrescription</h1>
                <hr/>
                <p>    Electronic prescribing (e-prescribing) is an important part of the BD’ push to enhance the safety and quality of the prescribing process. E-prescribing has been defined as the computer-based electronic generation, transmission, and filling of a prescription, taking the place of paper and faxed prescriptions. Most prescribing occurs in the outpatient care setting, where paper-based prescribing is most heavily used, so this type of community-based setting holds the greatest potential for e-prescribing to be achieved </p>

<p>E-prescribing has allowed prescribers to electronically send patients’ prescription information to pharmacy computers. This process has decreased prescribing and medication errors and has resulted in fewer call-backs from pharmacies to physicians for clarification. Electronically sending and receiving prescriptions has streamlined the clinical practice workflow, and patient satisfaction and compliance have increased. Additionally, connecting physician and pharmacy systems has reduced paperwork and the associated mistakes that may occur from reliance on handwritten notes. This change has produced time and cost savings for all parties involved</p>
            </div>
            
            <div class="col-md-1"></div>
            
            
                <div class="col-sm-6">
                <h6 class="text-center">Are you a doctor? still don't have a ePres account???</h6>
                <h3 class="text-left">Create a new account</h3>
                <hr/>
                <form class="" method="post" action="#">
                        
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Your Name</label>
                            <div class="cols-sm-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="doctor_name" id="name"  placeholder="Enter your Name"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Your UserId</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="email_address" id="email"  placeholder="Enter your UserId"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone_number" class="cols-sm-2 control-label">Phone Number</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="phone_number" id="mobile"  placeholder="Enter your Phone"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Password</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                                </div>
                            </div>
                        </div>
                       

                        <div class="form-group ">
                            <button type="submit" class="btn btn-primary btn-lg">Register</button>
                        </div>
                        
                    </form>
                </div>


                <div class="container">
                    <p>Copyright@<a href="#">BRB Hospital Ltd.</a> || All Right Reserved</p>
                </div>
                
        
        
@include('partials.flash-message')


<!-- Javascript -->
<script src="{!! asset('assets/js/jquery-1.11.1.min.js') !!}"></script>
<script src="{!! asset('assets/js/scripts.js') !!}"></script>
{{--<script src="{!! asset('assets/js/placeholder.js') !!}"></script>--}}

</body>
</html>
