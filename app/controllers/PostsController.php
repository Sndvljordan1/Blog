<?php


class PostsController extends \BaseController {


	public function __construct()
	{
		parent::__construct();
		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}



	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = Post::with('user');


		$search = Input::get('search');

		if (!empty($search)) {
			$query->where('title', 'like', $search . '%');

			$query->orWhere('title', 'like', '%' . $search . '%');

			$query->orWhere('title', 'like', '%' . $search);


			$query->orWhereHas('user', function($q) use ($search){
				$q->where('first_name', 'like', $search . '%');
			});

			$query->orWhereHas('user', function($q) use ($search){
				$q->Where('last_name', 'like', $search . '%');
			});
		}
		

		
		$posts = $query->orderBy('created_at', 'DESC')->paginate(5);

		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		$validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {
			Session::flash('errorMessage', 'Something went wrong...');
			return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	        // validation succeeded, create and save the post
	    	if (Input::hasFile('photo'))
			{
			    grabPic();
			}

			$post = new Post;
			$post->title = htmlspecialchars(strip_tags(Input::get('title')));
			$post->tldr = htmlspecialchars(strip_tags(Input::get('tldr')));
			$post->body = htmlspecialchars(strip_tags(Input::get('body')));
			$post->user_id = Auth::id();
			$post->save();

			Session::flash('successMessage', 'You have successfully created a post');
			return Redirect::action('PostsController@index');
	    }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		if (!$post) {
			Session::flash('errorMessage', "Post with id of $id is not found");
			Log::warning("Post with id of $id is not found");

			App::abort(404);
		}else{
			$body = $post->body;
			$Parsedown = new Parsedown();
			$post->body = $Parsedown->text($body);
		}
		
		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{	
		$post = Post::find($id);
		$body = $post->body;
		$Parsedown = new Parsedown();
		$post->parse = $Parsedown->text($body);
		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {
			Session::flash('errorMessage', 'Something went wrong...');

			return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	        // validation succeeded, create and save the post
			$post = Post::find($id);
			$post->title = Input::get('title');
			$post->tldr = Input::get('tldr');
			$post->body = Input::get('body');
			$post->save();
			Session::flash('successMessage', 'You have successfully updated a post');

			return Redirect::action('PostsController@index');
	    }
		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

		$post = Post::find($id);

		if(!$post){
			Session::flash('errorMessage', "Post with id of $id is not found");

			App::abort(404);
		}
		return Redirect::action('PostsController@index');
	}


	public function grabPic()
	{
		if (Input::file('photo')->isValid())
		{
		    //
		$file = Input::file('photo');
		}


	}
}
