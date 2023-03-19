<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::latest()->paginate(30);
        return view('posts.index', compact('posts'));
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:155',
            'category' => 'required',
            'content' => 'required',
            'status' => 'required'
        ]);
        if($request->hasFile('picture')){
            $request->validate([
                'picture' => 'mimes:doc,pdf,docx,zip,jpeg,png,jpg,gif,svg|max:2048'
            ]);
            $img = $request->file('picture');
            $ext = $img->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $img->move('images/', $filename);
            
        }

        $post = Post::create([
            'title' => $request->title,
            'category' => $request->category,
            'picture' => $filename,
            'content' => $request->content,
            'status' => $request->status,
            'slug' => Str::slug($request->title)
        ]);

        if ($post) {
            return redirect()
                ->route('post.index')
                ->with([
                    'success' => 'New post has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.view',compact('post'));
    } 
    
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string|max:155',
            'category' => 'required',
            'content' => 'required',
            'status' => 'required'
        ]);

        $post = Post::findOrFail($id);

        if($request->hasFile('picture')){
            $request->validate([
                'picture' => 'mimes:doc,pdf,docx,zip,jpeg,png,jpg,gif,svg|max:2048'
            ]);
            $img = $request->file('picture');
            $ext = $img->getClientOriginalExtension();
            $filenames = time().'.'.$ext;
            $img->move('images/', $filenames);
            
        }

        $post->update([
            'title' => $request->title,
            'category' => $request->category,
            'picture' => $filenames,
            'content' => $request->content,
            'status' => $request->status,
            'slug' => Str::slug($request->title)
        ]);

        if ($post) {
            return redirect()
                ->route('post.index')
                ->with([
                    'success' => 'Post has been updated successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        if ($post) {
            return redirect()
                ->route('post.index')
                ->with([
                    'success' => 'Post has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('post.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
