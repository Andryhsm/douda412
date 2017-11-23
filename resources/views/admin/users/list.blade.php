@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Liste des utilisateurs
@endsection

@section('additional-styles')

@stop

@section('additional-scripts')
    {!! Html::script('backend/js/user.js') !!}
@stop

@section('main-content')
	<!-- Main content -->

	<section class="content-header">
        <div class="row">
		    <div class="col-xs-4">
		        <h4>
		            Liste des utilisateurs
		        </h4>
	        </div>
	        <div class="col-xs-8">
		        <div class="header-btn">
		            <div class="clearfix">
		                <div class="btn-group inline pull-right">

		                    <div class="btn btn-small">
		                        <a href="{!! route('users.create') !!}" class="btn btn-block btn-primary">Ajouter un utilisateur</a>
		                    </div>

		                </div>
		            </div>
		        </div>
	        </div>
        </div>
    </section>

     <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <table id="user_list" class="table table-bordered table-hover table-responsive">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>E-mail</th>
                                <th>Created at</th>
                                <th>Modified at</th>                           
                                <th class="no-sort">Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
  <!-- End Main content -->  
@endsection