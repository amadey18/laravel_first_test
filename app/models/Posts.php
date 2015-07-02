<?php
class Posts extends Eloquent{
	protected $table = 'posts';
        public function user()
	{
		return $this->belongsTo('User', 'id');
	} 
        public function get_posts_with_users_name()
        {
            $item = DB::table('posts')
                    ->leftJoin('users', 'posts.user_id', '=', 'users.id')
                    ->select('posts.id', 'posts.status', 'posts.user_id', 'posts.updated_at', 
                            'posts.title', 'posts.content', 'users.username')
                    ->get();
            return $item;
            
        }
}
