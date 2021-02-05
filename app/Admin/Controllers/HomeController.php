<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Provider;
use App\Models\User;
use DB;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        $users = User::count();
        $posts = Post::count();
        $providers = Provider::count();

        $postsChart = Post::selectRaw('count(id)')
            ->selectRaw('created_at')
            ->groupBy('created_at')
            ->orderBy('created_at')
            ->get('');

        $postsLikes = Post::get(['title', 'liked']);

        $providersPosts = Provider::select('slug')
            ->withCount('posts')
            ->groupBy('slug')
            ->get('');

        $providersPopular = Provider::select(DB::raw('providers.slug, sum(posts.liked)'))
            ->join('posts', 'posts.provider_slug', '=', 'providers.slug')
            ->groupBy('providers.slug')
            ->get('');

        return $content
            ->title('Dashboard')
            ->view(
                'admin.index',
                compact(
                    'users',
                    'posts',
                    'providers',
                    'postsChart',
                    'postsLikes',
                    'providersPosts',
                    'providersPopular',
                ),
            );
    }
}
