<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{config('app.name')}}</title>
        <link href="{{asset('/components/css/login-styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        {{ Form::open(array('url'=>'/register', 'class'=>'form-signup')) }}
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                    {{ Form::open(array('url'=>'/register', 'class'=>'form-signup')) }}

                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>

                                        <fieldset>
                                            <!-- <div class="row mb-3"> -->
                                                <div class="form-floating mb-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        {{ Form::text('username', null, array('class'=>'form-control', 'placeholder'=>'Username')) }}
                                                        <label for="inputUsername">Username</label>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                                                        <label for="inputLastName">Last name</label>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="form-floating mb-3">
                                                {{ Form::text('email', null,array('class'=>'form-control', 'placeholder'=>'E-Mail')) }}
                                                <!-- <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" /> -->
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        {{ Form::text('password', null,array('class'=>'form-control', 'placeholder'=>'Password')) }} 
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        {{ Form::text('password_confirmation', null,array('class'=>'form-control', 'placeholder'=>'Comfirm Password')) }}
                                                        <label for="password_confirmation">Comfirm Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">{{ Form::submit('Submit',array('class'=>'btn btn-large btn-success btn-block')) }}</div>
                                            </div>
                                        </fieldset>
                                    {{ Form::close() }}

                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="/login">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('/components/js/login-scripts.js')}}"></script>
    </body>
</html>