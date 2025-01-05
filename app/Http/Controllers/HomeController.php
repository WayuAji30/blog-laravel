<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $featuredPost =
            Cache::remember('featuredPost', Carbon::now()->addDay(), function () {
                return Post::published()->featured()->with('categories')->latest('published_at')->take(3)->get();
            });

        $latestPost =
            Cache::remember('featuredPost', Carbon::now()->addDay(), function () {
                return Post::published()->latest('published_at')->take(20)->get();
            });

        return view('home', [
            'featuredPost' => $featuredPost,
            'latestPost' => $latestPost
        ]);
    }
}
