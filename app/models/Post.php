<?php

class Post extends Eloquent
{
    protected $table = 'posts';


    public static $rules = array(
        'post-name'      => 'required|max:128',
        'tldr'       => 'required|max:256',
        'body'       => 'required|max:10000'
    );


}

