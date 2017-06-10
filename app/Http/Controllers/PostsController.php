<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use DB;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
<<<<<<< HEAD
        //$posts = Post::all();
        //return Post::where('title', 'Post Two')->get();
=======
=======
>>>>>>> f8ce891f... CRUD Edit&Delete and Redirect
        $posts = Post::orderBy('created_at','desc')->paginate(5);
        return view('posts.index')->with('posts', $posts);
>>>>>>> refs/remotes/origin/master
        //$posts = DB::select('SELECT * FROM posts');
        //$posts = Post::orderBy('title','desc')->take(1)->get();
        //$posts = Post::orderBy('title','desc')->get();

        $posts = Post::orderBy('created_at','desc')->paginate(10);
        return view('posts.index')->with('posts', $posts);
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
<<<<<<< HEAD
<<<<<<< HEAD
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        // Create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post->save();

        return redirect('/posts')->with('success', 'Post Created');
=======
=======
>>>>>>> refs/remotes/origin/master
       $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
       ]);

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
<<<<<<< HEAD
        $post->save();
<<<<<<< HEAD
            
        return redirect('/posts')->with('success','Your New Post is Created');
>>>>>>> b1c5cb4d... CRUD create/store with validation
=======

        //this will get the currently logged in user and put it in the user_id and save it
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/posts')->with('success','Your New Post is created');
>>>>>>> refs/remotes/origin/master
=======

        return redirect('/posts')->with('success','Your New Post is created');
>>>>>>> f8ce891f... CRUD Edit&Delete and Redirect
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
<<<<<<< HEAD
<<<<<<< HEAD

        // Check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }

=======
>>>>>>> refs/remotes/origin/master
=======
>>>>>>> f8ce891f... CRUD Edit&Delete and Redirect
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        
        // Create Post
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        if($request->hasFile('cover_image')){
            $post->cover_image = $fileNameToStore;
        }
        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');
=======
=======
>>>>>>> f8ce891f... CRUD Edit&Delete and Redirect
       $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
       ]);

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts')->with('success','Your Post is updated');
<<<<<<< HEAD
>>>>>>> refs/remotes/origin/master
=======
>>>>>>> f8ce891f... CRUD Edit&Delete and Redirect
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
<<<<<<< HEAD
<<<<<<< HEAD

        // Check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }

       
        
        $post->delete();
        return redirect('/posts')->with('success', 'Post Removed');
=======
        $post->delete();
        return redirect('/posts')->with('success','The Post is removed');
>>>>>>> refs/remotes/origin/master
=======
        $post->delete();
        return redirect('/posts')->with('success','The Post is removed');
>>>>>>> f8ce891f... CRUD Edit&Delete and Redirect
    }
}
