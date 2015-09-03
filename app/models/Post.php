<?php

class Post extends BaseModel
{
    protected $table = 'posts';

    public function user()
    {
        return $this->belongsTo('User');
    }

    public static $rules = array(
        'title'      => 'required|max:128',
        'tldr'       => 'required|max:256',
        'body'       => 'required|max:10000'
    );

    public function renderBody() {
        $parse = new Parsedown;
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);
        $body = $parse->text($this->body);

        return $clean_html = $purifier->purify($body);
       
    }

    public function uploadImage($file)
    {
        $name = $file->getClientOriginalName();
        $path = '/uploadedimgs/';
        $file->move(public_path() . $path, $name);
        $this->image = $path . $name;
    }
}

