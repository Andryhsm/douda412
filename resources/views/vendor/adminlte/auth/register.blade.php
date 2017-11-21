@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Register
@endsection

@section('content')

<body class="hold-transition register-page">
    <div id="app" v-cloak>
        <div class="register-box">
            <div class="register-logo">
                <a href="{{ url('/home') }}"><b>Admin</b>LTE</a>
            </div>

            @if (count($errors) > 0)
                <div class="alert alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="register-box-body">
                <p class="login-box-msg"><b>Nouvelle utilisateur</b></p>

                <form class="validate_form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                                <input id="name" type="text" placeholder="Nom et Prenom" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                                <input id="email" type="email" placeholder="E-mail" class="form-control" name="email" value="{{ old('email') }}" required>
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                                <input id="password" type="password" placeholder="Mot de passe" class="form-control" name="password" required>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>

                        <div class="form-group">
                                <input id="password-confirm" type="password" placeholder="Confirmer votre mot de passe" class="form-control" name="password_confirmation" required>
                            
                        </div>
                        <div class="row">
                            <div class="col-xs-7">
                                <label>
                                     <div class="form-check-label">
                                          <label data-toggle="modal" data-target="#termsModal">
                                               <input type="checkbox" name="terms" model="form.terms" class="has-error">
                                               <a href="#" class="{ 'text-danger': form.errors.has('terms') }" text="trans('adminlte_lang_message.conditions')">Terms and conditions</a>
                                          </label>
                                     </div>
                                </label>
                            </div>

                            <div class="col-xs-5">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>

            </div><!-- /.form-box -->
        </div><!-- /.register-box -->
    </div>

    @include('adminlte::layouts.partials.scripts_auth')

    @include('adminlte::auth.terms')

</body>

@endsection
