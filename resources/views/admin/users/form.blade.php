@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Nouvelle utilisateur
@endsection

@section('additional-styles')

@stop

@section('additional-scripts')
    {!! Html::script('backend/js/show_image_upload.js') !!} 
    
@stop

@section('main-content')
	<!-- Main content -->
    <section class="content">
        @include('layouts.notification')

        {!! Form::open(['url' => 'users','files' => true,'class'=>'user-form form-horizontal','id'=>'user_form']) !!}
            {{ csrf_field() }}
            <div class="form-group">

                {!! Form::label('profile_image','Photo de profil :',array('class' => 'col-sm-2 control-label')) !!}
                <div class="col-sm-10">
                    <div id="image_preview">
                       <img class="thumbnail img-responsive hidden" width="150">
                    </div>
                    {!! Form::file('profile_image',array('class'=>'form-control', 'placeholder'=>'Image de profil', 'name'=>'image-profile')) !!}
                </div>
            </div>

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                <label class="col-sm-2 control-label" for="is_active">Nom et prénom :</label>
                    <div class="col-sm-10 checkbox">
                        <input id="name" type="text" placeholder="Nom et Prenom" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>                    
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                <label class="col-sm-2 control-label" for="is_active">E-mail :</label>
                    <div class="col-sm-10 checkbox">
                        <input id="email" type="email" placeholder="E-mail" class="form-control" name="email" value="{{ old('email') }}" required>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>    
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                <label class="col-sm-2 control-label" for="is_active">Mot de passe :</label>
                    <div class="col-sm-10 checkbox">
                        <input id="password" type="password" placeholder="Mot de passe" class="form-control" name="password" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>    
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="is_active">Confirmer le mot de passe :</label>
                    <div class="col-sm-10 checkbox">        
                        <input id="password-confirm" type="password" placeholder="Confirmer votre mot de passe" class="form-control" name="password_confirmation" required>
                    </div>
            </div>
            <div class="row">
                <div class="pull-right"> 
                    <a href="{!! URL::to('users') !!}" class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn btn-primary">
                        Enregistrer
                    </button>
                </div>    
            </div>   	
        {!! Form::close() !!}
    </section>    
    <!-- End Main content -->  
@endsection