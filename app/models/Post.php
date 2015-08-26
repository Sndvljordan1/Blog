<?php

class Post extends BaseModel
{
    protected $table = 'posts';

    public function user()
    {
        return $this->belongsTo('User');
    }

    public static $rules = array(
        'post-name'      => 'required|max:128',
        'tldr'       => 'required|max:256',
        'body'       => 'required|max:10000'
    );


}

