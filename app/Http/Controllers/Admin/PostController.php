<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\PostFormRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
    	return view('admin.post.index',compact('posts'));
    }

    public function create()
    {
    	$category = Category::where('status','0')->get();

    	return view('admin.post.create',compact('category'));
    }

    public function store(PostFormRequest $request)
    {
        $data = $request->validated();

        $post = new Post;
        $post->category_id = $data['category_id'];
        $post->name = $data['name'];
        $post->slug = Str::slug($data['slug']);
        $post->description = $data['description'];

        if($request->hasFile('image'))
        {
            $destination = 'uploads/category/post'.$post->image;

              if (file::exists($destination))
                {
                  file::delete($destination);
                }

            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(('uploads/category/post'), $filename);

            $post->image = $filename;
        }


        $post->yt_iframe = $data['yt_iframe'];
        $post->meta_title = $data['meta_title'];
        $post->meta_description = $data['meta_description'];
        $post->meta_keyword = $data['meta_keyword'];
        $post->status = $request->status == true ? '1':'0';
        $post->created_by = Auth::user()->id;
        $post->save();

        return redirect('admin/posts')->with('message','post Added Successfully');
    }
    public function edit($post_id)
    {
        $category = Category::where('status','0')->get();
        $post = Post::find($post_id);
        return view('admin.post.edit',compact('post','category'));
    }

    public function update(PostFormRequest $request,$post_id)
    {
        $data = $request->validated();
        /* dd($data);
        exit; */
        $post =  Post::find($post_id);
        $post->category_id = $data['category_id'];
        $post->name = $data['name'];
        $post->slug = Str::slug($data['slug']);
        $post->description = $data['description'];
        if($request->hasFile('image'))
        {
            $destination = 'uploads/category/post'.$post->image;

              if (file::exists($destination))
                {
                  file::delete($destination);
                }

            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(('uploads/category/post'), $filename);

            $post->image = $filename;
        }

        $post->yt_iframe = $data['yt_iframe'];
        $post->meta_title = $data['meta_title'];
        $post->meta_description = $data['meta_description'];
        $post->meta_keyword = $data['meta_keyword'];
        $post->status = $request->status == true ? '1':'0';
        $post->created_by = Auth::user()->id;
        $post->update();

        return redirect('admin/posts')->with('message','Post updated Successfully');
    }

    public function delete($post_id)
    {
        $post = Post::find($post_id);
        $post->delete();

        return redirect('admin/posts')->with('message','Post Deleted Successfully');
    }

    public function blog($month = null)
    {
        $latestpost =  Post::orderBy('created_at','DESC')->get()->take(5);

        $posts = Post::orderBy('created_at','DESC');

        if ($month) {
            $posts = $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }

        $posts = $posts->paginate(2);

        $archives = Post::all()
            ->groupBy(function($date) {
                return Carbon::parse($date->created_at)->format('F Y');
            })
            ->map(function($group) {
                return $group->sortBy('created_at');
            });

        return view('blog', compact('posts', 'latestpost', 'archives'));
    }

}
