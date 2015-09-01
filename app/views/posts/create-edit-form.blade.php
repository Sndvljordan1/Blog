
 
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
            <label for="body">Body</label>
            <div class="wmd-panel">
                <div id="wmd-button-bar"></div>
                <textarea class="wmd-input form-control" name="body" cols="50" rows="10" id="wmd-input">@if(!empty($post->body)){{{$post->body}}}@endif
                </textarea>
            </div>
            <label>Preview:</label>
            <div id="wmd-preview" class="wmd-panel wmd-preview"></div>
            <br/>
        </div>
        

