@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Modification profil
@endsection

@section('additional-styles')

@stop

@section('additional-scripts')
@stop

@section('main-content')
	<!-- Main content -->
    <section class="content">
        @include('layouts.notification')

        {!! Form::model($users, array('method' => 'PATCH', 'url' => array("users/$users->id"),'class'=>'user-form form-horizontal','id'=>'edit_form','files' => true))!!}

                <div class="form-group">

                {!! Form::label('profile_image','Photo de profil :',array('class' => 'col-sm-2 control-label')) !!}
                <div class="col-sm-10">
                    @if(isset($users->profile_image) && $users->profile_image!='')
                        {{ Form::image('upload/profile/'.$users->profile_image, null, ['class' => 'user-image', 'width' => '150'])}}
                    @endif
                    {!! Form::file('profile_image',array('class'=>'form-control', 'placeholder'=>'image')) !!}
                    
                </div>
            </div>

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                <label class="col-sm-2 control-label" for="is_active">Nom et prénom :</label>
                    <div class="col-sm-10 checkbox">
                        <input id="name" type="text" placeholder="Nom et Prenom" class="form-control" name="name" value="{{ $users->name }}" required autofocus>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>                    
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                <label class="col-sm-2 control-label" for="is_active">E-mail :</label>
                    <div class="col-sm-10 checkbox">
                        <input id="email" type="email" placeholder="E-mail" class="form-control" name="email" value="{{ $users->email }}" required>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>    
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                <label class="col-sm-2 control-label" for="is_active">Mot de passe :</label>
                    <div class="col-sm-10 checkbox">
                        <input id="password" type="password" placeholder="Mot de passe" class="form-control" name="password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>    
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="is_active">Confirmer le mot de passe :</label>
                    <div class="col-sm-10 checkbox">        
                        <input id="password-confirm" type="password" placeholder="Confirmer votre mot de passe" class="form-control" name="password_confirmation">
                    </div>
            </div>

            <div class="row">
                <div class="pull-right"> 
                    <a href="{!! URL::to('users') !!}" class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn btn-primary">
                        Modifier
                    </button>
                </div>    
            </div>   	
        {!! Form::close() !!}
    </section>    
    <!-- End Main content -->  
@endsection