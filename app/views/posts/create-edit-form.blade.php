
 {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
    {{ Form::token() }}

        <div class="form-group @if($errors->has('title')) has-error @endif">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group @if($errors->has('tldr')) has-error @endif">
            {{ Form::label('tldr', 'TL;DR') }}
            {{ Form::text('tldr', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group @if($errors->has('body')) has-error @endif">
            {{ Form::label('body', 'Body') }}
            {{ Form::textarea('body', null, ['class' => 'form-control']) }}
        </div>

        <div class="btn-group btn-group-justified">
            <div class="btn">
                {{ Form::button('<span class="glyphicon glyphicon-pencil"></span> Save Edits', array('class' => 'btn btn-success pull-left', 'type' => 'submit')) }}
            </div>
    {{ Form::close() }}