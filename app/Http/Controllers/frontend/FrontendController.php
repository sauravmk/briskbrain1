<?php

namespace App\Http\Controllers\frontend;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
   public function index()
   {

     return view('frontend.index');
   }


   public function blog($month = null)
    {
        $latestpost =  Post::orderBy('created_at','DESC')->get()->take(3);

        $posts = Post::orderBy('created_at','DESC')->where('status', 0);//0 for Show - 1 for Hide the blog

        if ($month) {
            $posts = $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }

        $posts = $posts->paginate(3);

        $archives = Post::all()
            ->groupBy(function($date) {
                return Carbon::parse($date->created_at)->format('F Y');
            })
            ->map(function($group) {
                return $group->take(3)->sortBy('created_at');//Archive post limit 3/month
            });

        return view('blog', compact('posts', 'latestpost', 'archives'));
    }

   public function blogsingle($id)
    {
        //echo $id; exit;
        //  dd($id);
        //  exit;

        $latestposts =  Post::orderBy('created_at','DESC')->get()->take(3);
        $viewblogs = Post::find($id);

        $archives = Post::all()
        ->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('F Y');
        })
        ->map(function($group) {
            return $group->sortBy('created_at');
        });

        return view('blogsingle',compact('viewblogs','latestposts','archives', 'id'));

    }
  }
