<?php

class PostsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $posts = new Posts;
            $post_users = $posts->get_posts_with_users_name();

		return View::make('posts', array('posts' => $post_users));
	}
        
        public function managePosts()
	{
            $posts = Posts::where('user_id', '=', Auth::id())->get();

		return View::make('manage_posts', array(
                    'posts' => $posts
                ));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
            return View::make('/post/create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
            $post = new Posts;

            $post->status = 1; // не одобрен
            $post->user_id = Auth::id(); // юзер
            $post->title = Input::get('title');  
            $post->content = Input::get('content');
            $post->lang = App::getLocale();

            $post->save();

            return Redirect::to('/managePosts');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
            $post = Posts::findOrFail($id);

            if(empty($post)) 
                return Response::view('errors.404', array(), 404);
            return View::make('/post/show',
                array(
                        'post' => $post
                    ) 
            );
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
            $post = Posts::findOrFail($id);

            if(empty($post)) 
                return Response::view('errors.404', array(), 404);
            return View::make('/post/edit',
                array(
                        'post' => $post
                    ) 
            );
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{

            $post = Posts::find(Input::get('id'));    

            $post->title = Input::get('title');                    
            $post->content = Input::get('content');
            $post->save();

            return Redirect::to('/managePosts');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		$post = Posts::find(Input::get('id'));   
                $post->delete();
                return Redirect::to('/managePosts');
	}


}
