
    {{ Form::token() }}
         <div class="form-group @if($errors->has('post-name')) has-error @endif responsive">
            <label for="post-name">Post Name</label>
            <input class="form-control" type="text" name="post-name" value="{{{ Input::old('post-name') }}}" placeholder="~Post Name~">
        </div>
        <div class="form-group @if($errors->has('tldr')) has-error @endif responsive">
            <label for="tldr">TL;DR</label>
            <input class="form-control" type="text" name="tldr" value="{{{ Input::old('tldr') }}}" placeholder="Too long, didn't read">
        </div>
        <div class="form-group @if($errors->has('body')) has-error @endif responsive">
            <label for="body">Blog Body</label>
            <textarea class="form-control" name="body" placeholder="Snoop Bloggy Blogg" cols="30" rows="10">{{{ Input::old('body') }}}</textarea>
        </div>
        <div class="form-control responsive">
            <input type="file" name="photo" id="photo">
        </div>
            <input type="submit" class="btn btn-success responsive">

            