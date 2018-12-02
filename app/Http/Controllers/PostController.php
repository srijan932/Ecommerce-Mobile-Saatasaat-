<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;
use Image;
use Auth;
use Storage;
use DB;
class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index','show','searchPosts']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
       $posts=Post::orderBy('id','desc')->where('createdby',$id)->paginate(10);
        return view('posts.index',['posts'=>$posts]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|min:3',
            'description'=>'required',
            'price'=>'required',
            'image'=>'sometimes|image',
            'image_box'=>'required|image',
            'image_mobile'=>'required|image'
            ]);
            
            if ($request->hasfile('image')){
                $image=$request->file('image');
                $filename=time().'.'.$image->getClientOriginalExtension();
                $location=public_path('images/products/'.$filename);
                Image::make($image)->save($location);
            }

              if ($request->hasfile('image_box')){
                $image_box=$request->file('image_box');
                $filename_box=time().'.'.$image_box->getClientOriginalExtension();
                $location_box=public_path('images/products/box/'.$filename_box);
                Image::make($image_box)->save($location_box);
            }

            if ($request->hasfile('image_mobile')){
                $image_mobile=$request->file('image_mobile');
                $filename_mobile=time().'.'.$image_mobile->getClientOriginalExtension();
                $location_mobile=public_path('images/products/mobile/'.$filename_mobile);
                Image::make($image_mobile)->save($location_mobile);
            }



          

        post::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'image'=>$filename,
            'image_box'=>$filename_box,
            'image_mobile'=>$filename_mobile,
            'createdby'=>Auth::user()->id,
        ]);
        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=DB::table('users')
        ->join('posts','posts.createdby','=','users.id')
        ->select('posts.id','posts.title','posts.price','posts.description','posts.image','posts.image_box','posts.image_mobile','users.name as seller','users.contact')
        ->where('posts.id',$id)
        ->first();
        // dd($post);

   return view('posts.show',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
      return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {   
         if ($request->hasfile('image')){
             //add the new image
                $image=$request->file('image');
                $filename=time().'.'.$image->getClientOriginalExtension();
                $location=public_path('images/products/'.$filename);
                Image::make($image)->resize(300,400)->save($location);
                $oldFilename=$post->image;
                //update th database
                $post->image=$filename;
                //Delete the old image
                // Storage::delete($oldFilename);
            }

         if ($request->hasfile('image_box')){
             //add the new image
                $image_box=$request->file('image_box');
                $filename_box=time().'.'.$image_box->getClientOriginalExtension();
                $location_box=public_path('images/products/box/'.$filename_box);
                Image::make($image_box)->save($location_box);
                $oldFilename=$post->image_box;
                //update th database
                $post->image_box=$filename_box;
                //Delete the old image
                // Storage::delete($oldFilename);
            }

         if ($request->hasfile('image_mobile')){
             //add the new image
                $image_mobile=$request->file('image_mobile');
                $filename_mobile=time().'.'.$image_mobile->getClientOriginalExtension();
                $location_mobile=public_path('images/products/mobile/'.$filename_mobile);
                Image::make($image_mobile)->save($location_mobile);
                $oldFilename=$post->image_mobile;
                //update th database
                $post->image_mobile=$filename_mobile;
                //Delete the old image
                // Storage::delete($oldFilename);
            }

        $post->title=$request->title;
        $post->description=$request->description;
        $post->price=$request->price;
        $post->save();
        session()->flash('message','Your Post have been Updated Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        // Storage::delete($post->image);
        $post->delete();
        return redirect(route('posts.index'));
    }

    public function searchPosts($user_input)
    {
        $post=DB::select("SELECT * FROM posts where title like '%".$user_input."%'");
        return response()->json(['post'=>$post]);
    }
}
