<div class="btn-group">
	<a href="{!! Url("users/$user->id/edit") !!}"  class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-fw fa-edit"></i></a> &nbsp;
	{!! Form::open(array('url' => 'users/' . $user->id, 'class' => 'pull-right')) !!}
	{!! Form::hidden('_method', 'DELETE') !!}
	{!! Form::button('<i class="fa fa-fw fa-trash"></i>', ['type' => 'submit', 'class' => 'btn delete-btn btn-danger btn-sm','title'=>'Delete'] ) !!}
	{{ Form::close() }}
</div>