@include('flash::message')

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

<div class="alert ajax-request-alert  hidden">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <span class="alert-message"></span>
</div>