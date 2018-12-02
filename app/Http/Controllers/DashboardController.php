<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\User;
use DB;

class DashboardController extends Controller
{
    public function welcome() {
		$posts=DB::select("SELECT  * FROM posts");
		 $posts=Post::orderBy('id','desc')->paginate(8);
    	return view('welcome',compact('posts'));
	}

	public function adminDashboard()
	{

    	// return view('user.dashboard',compact('posts'));
        $users=DB::select('select * from users where is_Admin=0');
        $posts=DB::select('select * from posts');
    	return view('admin.dashboard', ['users'=>$users, 'posts'=>$posts]);
	}
	
	public function postindex()
    {
       $posts=Post::orderBy('id','desc')->paginate(10);
        return view('admin.posts',['posts'=>$posts]);
        
    }

    public function postshows($id)
    {
        $post=DB::table('users')
        ->join('posts','posts.createdby','=','users.id')
        ->select('posts.id','posts.title','posts.price','posts.description','posts.image','posts.image_box','posts.image_mobile','users.name as seller','users.contact')
        ->where('posts.id',$id)
        ->first();
   return view('admin.postshows',['post'=>$post]);
    }

    public function userindex()
    {
       $users=User::orderBy('id','desc')->where('is_Admin',0)->paginate(10);
        return view('admin.users',['users'=>$users]);
        
    }

	
}
